<?php
    if ( !isset($_SERVER['PHP_AUTH_USER']) ) {
        header('WWW-Authenticate: Basic realm="Restricted Area"');
        header('HTTP/1.0 401 Unauthorized');
        //log file
        $file = fopen('admin/unauthorized.txt', 'ab');
        $message = 'Unauthorized access from IP: ' . $_SERVER['REMOTE_ADDR'] . ' on: ' . $_SERVER['REQUEST_TIME'] . '\n';
        fwrite($file, $message);
        fclose($file);
        echo ("<script>location.href='index.php'</script>");
    }
    
    else {
        if ( $_SERVER['PHP_AUTH_USER'] == 'CMWEB241' && $_SERVER['PHP_AUTH_PW'] == 'P@ssw0rd!' ) {
            //log file
            $file = fopen('admin/authorized.txt', 'ab');
            $message = 'Authorized access from IP: ' . $_SERVER['REMOTE_ADDR'] . ' on: ' . $_SERVER['REQUEST_TIME'] . ' by: ' . $_SERVER['PHP_AUTH_USER'] . '\n';
            fwrite($file, $message);
            fclose($file);
            echo ("<script>location.href='admin/admin.php'</script>");
        } else {
            //log file
            $file = fopen('admin/Unauthorized.txt', 'ab');
            $message = 'Unauthorized access from IP: ' . $_SERVER['REMOTE_ADDR'] . ' on: ' . $_SERVER['REQUEST_TIME'] . ' by: ' . $_SERVER['PHP_AUTH_USER'] . '\n';
            fwrite($file, $message);
            fclose($file);
            echo ("<script>location.href='/cmweb241/lab06/index.php'</script>");
        }
    }
    
    include 'layouts/header.php';

?>
<div id="main">
        <?php
            for ($i=0; $i<count($images); $i++) {
               echo "<a href='photo.php?id=".$images[$i][0]."&title=".$images[$i][1]."'>";
               echo "<img src=".$images[$i][0]." width='200px' alt='".$images[$i][1]."' />";
               echo "</a>";
            }
        ?>    
</div>
<?php
    include 'layouts/footer.php';
?>