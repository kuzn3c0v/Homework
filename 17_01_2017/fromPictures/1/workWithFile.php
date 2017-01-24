<?php
    const FILENAME = 'dataBase.txt';
    touch(FILENAME);
    if ((!empty ($_POST['fname'])) && (!empty ($_POST['lname']))){
        $string = $_POST['fname'] . "  " . $_POST['lname'] . PHP_EOL;
        if (filesize(FILENAME)  == 0){
            file_put_contents(FILENAME, $string);
        }
        else{
            $base = file(FILENAME);
            $base [] = $string;
            file_put_contents(FILENAME, implode('' , $base));
        }
        header("Location: index.php");
    }
?>