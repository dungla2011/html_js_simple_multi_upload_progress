<?php

//Move file to any location you want:
//$filePath = $_FILES['file']['tmp_name'];
//move_uploaded_file($filePath, ...)

die("Server return: " . $_FILES['file']['name']);

?>
