<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver as GdDriver;
use Illuminate\Support\Facades\Storage;
class ImageController extends Controller
{
    //
  function uploads(Request $request, $locale = '') {
    
    // 1. Validate the array of uploaded images
    $request->validate([
        'hinhanh_files' => 'required|array',
        'hinhanh_files.*' => 'required|image|mimes:jpeg,png,jpg,webp|max:4096',
    ]);
    // 2. Initialize the Intervention Image Manager v4
    $manager = new ImageManager(new GdDriver());
    $savedPaths = [];
    if ($request->hasFile('hinhanh_files')) {
      foreach ($request->file('hinhanh_files') as $file) {
          // Generate a secure, unique file name
          $realname = $file->getClientOriginalName();
          $extension = $file->extension(); 
          $filename = date("YmdHis") . '_' . strtolower(uniqid()) . '.' . $extension;
          // 3. Read and process the image with Intervention Image v4
          $origin = Image::decode($file);
          $thumb = Image::decode($file)->resize(360, 200);
          $thumb_50 = Image::decode($file)->resize(50,50);
          
          $origin_path = 'images/origin/' . $filename;         
          $thumb_path = 'images/thumb_360x200/' . $filename;
          $thumb_50_path = 'images/thumb_50/' . $filename;

          Storage::disk('public')->put($origin_path, $origin->encodeUsingFileExtension($extension, quality: 100));
          Storage::disk('public')->put($thumb_path, $thumb->encodeUsingFileExtension($extension, quality: 100));
          Storage::disk('public')->put($thumb_50_path, $thumb_50->encodeUsingFileExtension($extension, quality: 100));
          
          echo '<div class="col-sm-6 col-md-4 items draggable-element text-center position-relative">
                  <input type="hidden" name="hinhanh_aliasname[]" value="' . $filename . '" readonly/>
                  <input type="hidden" name="hinhanh_filename[]" class="form-control" value="' . $realname . '" />
                  <input type="hidden" name="hinhanh_type[]" class="form-control" value="' . $extension . '" />
                  <a href="'.env('APP_URL').'storage/images/origin/'.$filename. '" class="image-popup">
                      <div class="portfolio-masonry-box">
                          <div class="portfolio-masonry-img">
                              <img src="'.env('APP_URL').'storage/images/thumb_360x200/'. $filename.'" class="thumb-img img-fluid" alt="' . $filename . '">
                          </div>
                          <div class="portfolio-masonry-detail">
                              <p>' . $realname . '</p>
                          </div>
                      </div>
                  </a>
                  <a href="'.env('APP_URL').'image/delete/'.$filename.'" onclick="return false;" class="btn btn-danger btn-sm delete_file" style="position:absolute;top:4px;right:4px;">
                      <i class="fa fa-trash"></i>
                  </a>
                  <input type="hidden" name="hinhanh_title[]"  value="' . $realname . '" />
              </div>';
          
      }
    }

  }

  function uploads_back(Request $request, $locale = '') {
    $files = $request->file('hinhanh_files');
    if (!empty($files)) :
      foreach ($files as $file) :
        $extension = $file->getClientOriginalExtension();
        $realname = $file->getClientOriginalName();
        $filename = date("YmdHis") . '_' . strtolower(uniqid()) . '.' . $extension;
        $origin = Image::read($file);
        // Lưu file gốc
        Storage::disk('local')->put('images/' . $filename, file_get_contents($file));
        // Tạo và lưu các phiên bản ảnh
        $origin = Storage::disk('public')->path('images/origin/' . $filename);
        Image::make($file->getRealPath())->save($origin);

        $thumb = Storage::disk('public')->path('images/thumb_360x200/' . $filename);
        Image::make($file->getRealPath())->resize(360, null, function ($constraint) {
          $constraint->aspectRatio();
        })->save($thumb);

        $thumb_50 = Storage::disk('public')->path('images/thumb_50/' . $filename);
        Image::make($file->getRealPath())->resize(null, 50, function ($constraint) {
          $constraint->aspectRatio();
        })->save($thumb_50);

        echo '<div class="col-sm-6 col-md-4 items draggable-element text-center position-relative">
                        <input type="hidden" name="hinhanh_aliasname[]" value="' . $filename . '" readonly/>
                        <input type="hidden" name="hinhanh_filename[]" class="form-control" value="' . $realname . '" />
                        <input type="hidden" name="hinhanh_type[]" class="form-control" value="' . $extension . '" />
                        <a href="' . asset('storage/images/origin/' . $filename) . '" class="image-popup">
                            <div class="portfolio-masonry-box">
                                <div class="portfolio-masonry-img">
                                    <img src="' . asset('storage/images/thumb_360x200/' . $filename) . '" class="thumb-img img-fluid" alt="' . $filename . '">
                                </div>
                                <div class="portfolio-masonry-detail">
                                    <p>' . $realname . '</p>
                                </div>
                            </div>
                        </a>
                        <a href="' . route('image.delete', ['filename' => $filename]) . '" onclick="return false;" class="btn btn-danger btn-sm delete_file" style="position:absolute;top:4px;right:4px;">
                            <i class="fa fa-trash"></i>
                        </a>
                        <input type="hidden" name="hinhanh_title[]"  value="' . $realname . '" />
                    </div>';
      endforeach;
    endif;
  }

    function delete(Request $request, $locale = '', $filename =''){
      Storage::delete('private/images/'.$filename);
      Storage::delete('public/images/origin/'.$filename);
      Storage::delete('public/images/thumb_360x200/'.$filename);
      Storage::delete('public/images/thumb_50/'.$filename);
      //Storage::delete('public/images/thumb_800x800/'.$filename);
      //Storage::delete('public/images/thumb_785x476/'.$filename);
    }

    static function remove($filename){
      Storage::delete('private/images/'.$filename);
      Storage::delete('public/images/origin/'.$filename);
      Storage::delete('public/images/thumb_360x200/'.$filename);
      Storage::delete('public/images/thumb_50/'.$filename);
      //Storage::delete('public/images/thumb_800x800/'.$filename);
      //Storage::delete('public/images/thumb_785x476/'.$filename);
    }
}
