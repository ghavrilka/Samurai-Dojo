<center><h2><b>Text File Uploader</b></h2></center><p>

Upload text files for access via the Reading Room.

<?php
echo "<form method=\"POST\" action=\"" .$_SERVER['SCRIPT_NAME'] . "?" . $_SERVER['QUERY_STRING'] . "\" enctype=\"multipart/form-data\">";
?>
    <p><input type="file" name="filename"></p>
    <p><input type="submit" value="Submit" name="Submit_button"></p>
</form>
<pre>
<?php
if(isset($_POST["Submit_button"])) {
$target_dir = "readingroom/";
$target_file = $target_dir . basename($_FILES["filename"]["name"]);
$uploadOk = 1;
/*$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["filename"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["filename"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}*/
// Incorrectly apply file extension white-listing
if (!preg_match("/\.txt/", basename($_FILES["filename"]["name"]))) {
    echo "Invalid file extension. Only *.txt files can be uploaded.";
    exit;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["filename"]["tmp_name"], $target_file)) {
        echo "The file ". basename($_FILES["filename"]["name"]). " has been uploaded. A moderator will review the file shortly.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}
?>
