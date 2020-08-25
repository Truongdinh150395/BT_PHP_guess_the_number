<?php

    function binarySearch($numbers,$value)
    {
        $left = 0;
        $right = count($numbers) -1;

        while($left <= $right){
            $mid = (int)(($left + $right)/2);
            if($numbers[$mid] > $value)
            {
                $right = $mid - 1;
            }
            elseif($numbers[$mid] < $value)
            {
                $left = $mid + 1;
            }
            else
            {
                return true;
            }
        }
        return false;
    }
    var_dump(binarySearch([1,2,3,4,5,6,7,8,9],10));
