<?php
    include '../layouts/header_admin.php';
?>
<div id="main">
    <h1>Main Administration Page</h1>
    
    <ul>
        <li><a href='unauthorized.txt' class="button">View unauthorized Access attempts</a></li>
        <li><a href='access.txt' class="button">View authorized Access</a></li>
        <li><a href='photo_upload.php' class="button">Upload photos</a></li>
        <li><a href='../index.php' class='button'>Return to Gallery</a></li>
    </ul>    
</div>
<?php
    include '../layouts/footer_admin.php';
?>