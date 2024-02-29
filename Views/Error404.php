<?php
ob_start();
?>
<h1>ERROR 404</h1>


<?php
$Content = ob_get_clean();
include_once('./Views/Template/Template.php');