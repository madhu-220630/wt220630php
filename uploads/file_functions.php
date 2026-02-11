<?php
/*$file=fopen("example.txt","w");
if($file){
    echo "File opened successfully";
    fclose($file);
}
$file=fopen("example.txt","r");
//write to file
fwrite($file,"Hello, this is a test file.");
fclose($file);
$file=fopen("example.txt","r");
$file =fopen("example.txt","r");
$content=fread($file,filesize("example.txt"));
fclose($file);*/
echo "<h1> TASK-2: </h1>";
echo "<h1>1.File Handling in PHP</h1>";
$file = fopen("example.txt", "w");
fwrite($file, "Hello PHP\nThis is Task 2 demo file.");
fclose($file);
echo "<h4>File written using fopen() and fwrite()</h4>";

// fopen() + fread()
$file = fopen("example.txt", "r");
$content = fread($file, filesize("example.txt"));
fclose($file);
echo "<h4>File content using fread():</h4>";
echo nl2br($content) . "<br><br>";

// file_get_contents()
echo "<h4>Using file_get_contents():<br></h4>";
echo nl2br(file_get_contents("example.txt")) . "<br><br>";

// file_put_contents()
file_put_contents("example2.txt", "Written using file_put_contents()");
echo "<h4>example2.txt created using file_put_contents()<br></h4>";

// file()
$lines = file("example.txt");
echo "Using file() (reads file into array):<br>";
print_r($lines);


echo "<h2>2.FILE INFORMATION FUNCTIONS</h2>";
echo "Is file? " . (is_file("example.txt") ? "Yes" : "No") . "<br>";
echo "File size: " . filesize("example.txt") . " bytes<br>";
echo "File type: " . filetype("example.txt") . "<br>";
echo "Last accessed: " . date("Y-m-d H:i:s",fileatime("example.txt")) . "<br>";
echo "Last modified: " . date("Y-m-d H:i:s",filemtime("example.txt")) . "<br>";
echo "Created time: " . date("Y-m-d H:i:s",filectime("example.txt")) . "<br>";
echo "Permissions: " . fileperms("example.txt") . "<br>";
echo "Owner:" . fileowner("example.txt") . "<br>";
echo "Group: " . filegroup("example.txt") . "<br>";
echo "Inode: " . fileinode("example.txt") . "<br>";

echo "<h2>3.FILE AND FOLDER MANAGEMENT</h2>";
//copy
copy("example.txt", "example_copy.txt");
echo "File copied to example_copy.txt<br>";
//rename
rename("example_copy.txt", "example_renamed.txt");
echo "File renamed to example_renamed.txt<br>";
//is_file() & is_dir()
echo "Is example.txt a file? " . (is_file("example.txt") ? "Yes" : "No") . "<br>";
echo "Is uploads a directory? " . (is_dir("uploads") ? "Yes" : "No") . "<br>";
//mkdir()
if(!is_dir("new_folder")){
    mkdir("new_folder");
    echo "Directory 'new_folder' created<br>";
}
//rmdir()
if(is_dir("new_folder")){
    rmdir("new_folder");
    echo "Directory 'new_folder' removed<br>";
}
//unlink()
unlink("example_renamed.txt");
echo "example_renamed.txt deleted<br>";

echo "<h2>4.DIRECTORY HANDLING</H2>";
//SCANDIR
echo "Files using scandir():<br>";
$files = scandir(".");
print_r($files);
//opendir() + readdir()
echo "Files using opendir() and readdir():<br>";
$dir = opendir(".");
while(($file = readdir($dir)) !== false){
    echo $file . "<br>";
}
closedir($dir);
echo "<br>Current working directory: " . getcwd() . "<br>";
//chdir()
chdir(".");
echo "Changed directory to: " . getcwd() . "<br>";

echo "<h2>5.FILE LOCKING</h2>";
$logFile = fopen("log.txt", "a");
flock($logFile, LOCK_EX);
fwrite($logFile, "Log entry at " . date("Y-m-d H:i:s") . "\n");
flock($logFile, LOCK_UN);
fclose($logFile);
echo "Log entry written to log.txt with file locking.<br>";

ECHO "<H1>TASK-3</H1>";
echo "<h2>File operation modes</h2>";
//r - read only
$file = fopen("example.txt", "w");
fwrite($file, "This file is opened in write mode (w).");
fclose($file);
$file = fopen("example.txt", "r");
echo fread($file, filesize("example.txt")) . "<br>";
fclose($file);
//w only
$file = fopen("example.txt", "w");
fwrite($file, "This file is opened in write mode (w).");
fclose($file);
//a - append
$file = fopen("example.txt", "a");
fwrite($file, "\nThis line is appended using append mode (a).");
fclose($file);
//x - create and write
$file = fopen("newfile.txt", "x");
fwrite($file, "This file is created and written using exclusive create mode (x).
");fclose($file);
//r+ - read and write
$file = fopen("example.txt", "r+");
$content = fread($file, filesize("example.txt"));
fwrite($file, "\nThis line is added using read/write mode (r+).");
fclose($file);
//w+ - write and read
$file = fopen("example.txt", "w+");
fwrite($file, "This file is opened in write/read mode (w+).");
rewind($file);
echo fread($file, filesize("example.txt")) . "<br>";
fclose($file);
//a+ - append and read
$file = fopen("example.txt", "a+");
fwrite($file, "This line is appended and can be read using append/read mode (a+).\n");
rewind($file);
echo fread($file, filesize("example.txt")) . "<br>";
fclose($file);
//x+ - create, write and read
$file = fopen("newfile2.txt", "x+");
fwrite($file, "This file is created, written and can be read using exclusive create
read/write mode (x+).\n");
rewind($file);
echo fread($file, filesize("newfile2.txt")) . "<br>";
fclose($file);

?>