<?php

if (!function_exists('toLongPos')) {
    function toLongPos($position)
    {
        $myPositon = NULL;

        switch($position) {
            case 'PG':
                $myPositon = 'Point Guard';
                break;
            case 'SG':
                $myPositon = 'Point Guard';
                break;
            case 'SF':
                $myPositon = 'Point Guard';
                break;
            case 'PF':
                $myPositon = 'Point Guard';
                break;
            case 'C':
                $myPositon = 'Point Guard';
                break;
        }

        return $myPositon;
    }
}