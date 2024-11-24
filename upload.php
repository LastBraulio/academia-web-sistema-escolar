<?php
move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/".$_FILES['file']['name']);
$url="localhost/Academico/";
echo $url."uploads/".$_FILES['file']['name'];