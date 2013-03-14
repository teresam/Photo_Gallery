<?php
    include '../layouts/header_admin.php';
    
    //set the variable for the max file size
    $max = 1048576;
?>

<div id="main">
    <h2>Photo Upload</h2>
    <form action="photo_upload.php" method="post" enctype="multipart/form-data" id="uploadImage">
        <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max; ?>" />
        <input type="file" name="file" id="file" /><br />
        <input type="submit" name="submit" id="submit" value="Upload" />
    </form>

    <a href='../index.php' class='button'>Back to Gallery View</a>
    <?php
        
        //set the destination source for successful upload
        $destination = '..'.DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR;
        //initialize an error variable
        $message = "";
        
        if(isset($_POST['submit'])) {
            $message = "";
            if (($_FILES['file']['type'] == 'image/gif') || ($_FILES['file']['type'] == 'image/jpeg')) {
                if ($_FILES['file']['size'] < $max) {
                    if (file_exists($destination . $_FILES['file']['name'])) {
                        $message = "The file already exists in the destination folder.";
                    }//end of file_exists error message
                    else {
                        move_uploaded_file($_FILES['file']['tmp_name'], $destination . $_FILES['file']['name']);
                        //$message = "Stored in: " . $destination . $_FILES['file']['name'];
                    }//end of a successful upload.                    
                }//end of successful file size test
                else {
                    $message = "The file is greater than ".($max/1024)."kb.";
                }//end of max size error message                
            }//end of successful file type test
            else {
                $message = "The file should be a .jpeg or .gif.";
            }//end of file type error message
            
        }//end of successful submit
        echo "<h3>".$message."</h3>";
    ?>
</div>

<?php
    include '../layouts/footer_admin.php';
?>

