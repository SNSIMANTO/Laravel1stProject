<?php
//important function
if(!function_exists('p')){
    function p($data){
    echo"<pre>";
    print_r($data);
    echo"<pre>";
    }
}
if (!function_exists('get_formatted_date')){       //this function is a helper function to make the date formatted as user openion
    function get_formatted_date($data,$format)
    {
        $formatted_Date=date($format,strtotime($data));
        return $formatted_Date;
    }
}
