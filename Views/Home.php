<?php
ob_start();
?>
<h1>Home page</h1>
<p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id reiciendis, at a officiis maxime provident saepe ex,
    distinctio eos, modi temporibus ipsam dolores tenetur veniam. Dolore consequatur voluptatibus ea necessitatibus!
</p>

<?php
$Content = ob_get_clean();
include_once('./Views/Template/Template.php');