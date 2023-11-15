<?php

if (isset($_FILES['f'])){

    $tmp_name = $_FILES['f']['tmp_name'];
    $name = $_FILES['f']['name'];
    move_uploaded_file($tmp_name,"test/".$name);
    print 'ok';
}

?>
