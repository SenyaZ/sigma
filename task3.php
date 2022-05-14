<?php

    $arr = [25, 20, 30, 29.99, 19.93];
    $count = 0;
    $arr_float = [];
    $arr_int = [];
    $i = 0;
    $f = 0;
    foreach ($arr as $value){
        if(!is_int($value)){
            $count++;
            $arr_float[$f] = $value;
            $f++;
        }
        else{
            $arr_int[$i] = $value;
            $i++;
        }
    }
    $sum = 0;
    foreach ($arr_int as $value_int){
        $sum += $value_int;
    }
    asort($arr_float);

    if($count >= 3){
        $sum += $arr_float[0];
    }else{
        foreach ($arr_float as $val_fl){
            $sum += $val_fl;
        }
    }

    echo $sum;

