<?php

$_server = "localhost";
$user = "root";
$password = "";
$db = "showroom";

$con = mysqli_connect($_server, $user, $password, $db);

if ($con) {
?>
    <script>
        alert("connection successful");
    </script>
<?php

} else {
?>
    <script>
        alert("no connection");
    </script>
<?php
}


?>