<?php
    define('COPY_FORMAT', 'Y');
    
    function set_date() {
        switch (COPY_FORMAT) {
            case "FY":
                echo $date_result = date('F Y');
                break;
            case "MY":
                echo $date_result = date('M Y');
                break;
            case "Y":
                echo $date_result = date('Y');
                break;
            default:
                echo "";
        }        
    }
?>