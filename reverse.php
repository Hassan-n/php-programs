<?php
    //Reverses a string
    $str1 = "hello";
    
    function reverse($str1){
        $length = strlen($str1);
        if($length==1){
            return $str1;
        }else{
            $length--;
            return reverse(substr($str1, 1, $length)) . substr($str1, 0, 1);
        }
    }
    echo reverse($str1);
?>