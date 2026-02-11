<?php
$message="";
if(isset($_POST['upload'])){
    //check if file selected
    if(isset($_FILES['file']) && $_FILES['file']['error'] == 0){
        $filename=$_FILES['file']['name'];
        $tempname=$_FILES['file']['tmp_name'];
        $folder="uploads" . $filename;
        if(move_uploaded_file($tempname, $folder)){
            $message="<p style='color:green;'>File uploaded successfully</p>";
        }else{
            $message="<p style='color:red;'>Failed to upload file</p>";
        }
    }else{
        $message="No file selected or error in file upload";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>File Upload & download</title>
    </head>
    <body>
        <h2>upload file</h2>
        <form method='POST'enctype = "multipart/form-data">
            <input type="file" name="file" required>
            <button type="submit"name="upload">Upload</button>
        </form>
        <p style="color:green;"><?php echo $message;?></p>
        <?php
        //show download link after upload
        if(isset($folder) && file_exists($folder)){
            echo "<a href='download.php?file=$filename'>Download File   </a>";
            echo "<br><a href='delete.php?file=$filename'> Delete File</a>";
        }
        ?>
    </body>
</html>

