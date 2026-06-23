import os
from pathlib import Path
import sys
from docx2pdf import convert

# The location where the files are located
input_path = r'C:\\wamp64\\www\\AGU2022\\storage\\app\\public\\export'
# The location where we will write the PDF files
output_path = r'C:\\wamp64\\www\\AGU2022\\storage\\app\\public\\export'
# Creeaza structura de foldere daca nu exista
os.makedirs(output_path, exist_ok=True)

# Verifica existenta folder-ului
directory_path = Path(input_path)
if directory_path.exists() and directory_path.is_dir():
    print(directory_path, "exists")
else:
    print(directory_path, "is invalid")
    sys.exit(1)

for file_path in directory_path.glob("*"):
    print("Procesez fisierul:", file_path)

    # build the new path where we store the files
    output_file_path = os.path.join(output_path, file_path.stem + ".pdf")
    input_file_path = os.path.join(input_path, file_path.name)

    convert(input_file_path, output_file_path)

    print("Am convertit urmatorul fisier:", file_path, "in: ", output_file_path)