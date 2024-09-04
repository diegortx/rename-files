# 📁 File Renaming Script

This script renames files in a specified directory by replacing a specific substring in the filenames.

## 🚀 How It Works

1. **Specify the Directory**: The script starts by specifying the directory containing the files to be renamed.
2. **Convert Directory Path**: It converts the directory path to use backslashes for Windows compatibility.
3. **Define Search and Replace Strings**: The script defines the substring to be searched in the filenames and the string to replace it with.
4. **Check Directory Existence**: It checks if the specified directory exists.
5. **Get File List**: The script retrieves the list of files in the directory.
6. **Rename Files**: For each file, it checks if the file is a regular file and contains the search substring. If so, it renames the file by replacing the substring with the replacement string.

## 🔧 Functions

- `is_dir($directory)`: Checks if the specified directory exists.
- `scandir($directory)`: Retrieves the list of files in the directory.
- `is_file($oldPath)`: Checks if the specified path is a regular file.
- `strpos($file, $searchString)`: Checks if the filename contains the search substring.
- `str_replace($searchString, $replaceString, $file)`: Replaces the search substring with the replacement string in the filename.
- `rename($oldPath, $newPath)`: Renames the file from the old path to the new path.

## 📋 Usage Example

1. **Define the Directory and Strings**: Modify the variables `$directory`, `$searchString`, and `$replaceString` in the script to match your needs.

   ```php
   <?php
   // Specify the directory containing the files
   $directory = "C:/Users/Your_User/Downloads/Your_Music_Folder";
   // Convert the directory path to use backslashes on Windows
   $directory = str_replace('/', DIRECTORY_SEPARATOR, $directory);
   $searchString = '[Your Name] Old Album Name';
   $replaceString = '[Your Name] ';
   ```

2. **Run the Script**: Execute the script in your PHP environment.

   ```sh
   php index.php
   ```

3. **Output**: The script will display the renamed files or any errors encountered during the renaming process.
   ```
   Renamed: [Your Name] Old Album Name - Song1.mp3 -> [Your Name] - Song1.mp3
   Renamed: [Your Name] Old Album Name - Song2.mp3 -> [Your Name] - Song2.mp3
   ```

## 📦 Requirements

- **PHP Version**: This script requires PHP 7.4 or higher.

## 📥 How to Download and Use

1. **Clone the Repository**: Clone this repository to your local environment.

   ```sh
   git clone https://github.com/diegortx/rename-files.git
   ```

2. **Navigate to the Project Directory**: Go to the cloned project directory.

   ```sh
   cd rename-files
   ```

3. **Modify the Script**: Edit the [`index.php`](index.php) file to set the directory and search and replace strings as needed.

4. **Run the Script**: Execute the script in your PHP environment.

   ```sh
   php index.php
   ```

## 📝 Notes

- Make sure the specified directory path is correct and accessible.
- The script only renames regular files and ignores directories.
- Backup your files before running the script to avoid accidental data loss.

## 👤 Author

- **Name**: Diego H Nogueira
- **Email**: [dhnogueira1@hotmail.com](mailto:dhnogueira1@hotmail.com)
- **GitHub**: [diegortx](https://github.com/diegortx)

## 📄 License

This project is licensed under the MIT License.
