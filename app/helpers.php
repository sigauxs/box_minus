<?php
use App\Models\Account;


function formater_value($total = "a"){
    $filter_value = RemoveSpecialChar($total);
    return $filter_value;
}


function RemoveSpecialChar($str)
{
    $str_minus = strtolower($str);
    $str_blank = trim($str_minus);
    $res = preg_replace('/[a-z\$\@\.\;\" "]+/','', $str_blank);
    return $res;
}



?>
