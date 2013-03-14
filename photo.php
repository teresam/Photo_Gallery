<?php
    include 'layouts/header.php';
?>
<div id="main">
    <?php
        //get the image variable and title from GET
        $display_image = $_GET['id'];
        $display_title = $_GET['title'];
        
        echo "<h1>".$display_title."</h1>";
        echo "<img src=".$display_image." alt='".$display_title."' /><br />";
        echo "<a href='index.php' class='button'>Back to Gallery View</a>";
    ?>        
</div>
<?php
    include 'layouts/footer.php';
?>