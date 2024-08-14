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
                $myPositon = 'Shooting Guard';
                break;
            case 'SF':
                $myPositon = 'Small Forward';
                break;
            case 'PF':
                $myPositon = 'Power Forward';
                break;
            case 'C':
                $myPositon = 'Center';
                break;
        }

        return $myPositon;
    }
}