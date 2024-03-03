<!DOCTYPE html>

<html>
    <body>
        <?php
            if (isset($_POST["exercise-name"]) && isset($_POST["exercise-type"]) && isset($_POST["exercise-orientation"]) && isset($_POST["exercise-equipment"])) {
                echo "Connection successful.<br />";
            }
            else {
                echo "Connection failed.<br />";
            }
            // $serverName = "DESKTOP-3HTGUDE\WORKOUTWITHME";
            // $connectionInfo = array("Database"=>"Training_Log");
            // $connect = sqlsrv_connect($serverName, $connectionInfo);

            // if ($connect) {
            //     echo "Connection successful.<br />";
            // }
            // else {
            //     echo "Connection failed.<br />";
            //     die(print_r(sqlsrv_errors(), true));
            // }
        ?>
    </body>
</html>
