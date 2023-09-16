<?php


function Mess($data, $density)
{
    $score = 0;
    preg_match_all(MESS, $data, $detect);


    if (count($detect[0]) <= floor(1 * $density)) {
        $score += SEVERE * 2;
    }


    if (count($detect[0]) > floor(2 * $density)) {
        $score += HIGH;
    }


    if (count($detect[0]) >= floor(5 * $density)) {
        $score += HIGH;
    }


    if (count($detect[0]) >= floor(8 * $density)) {
        $score += SEVERE;
    }

    return $score;
}






function MesSTA($data)
{
    $score = 0;


    if (preg_match(MESSTA, $data)) {
        $score += HIGH;
    }



    return $score;
}






function MesEn($data)
{
    $score = 0;


    if (preg_match(MESSEN, $data)) {
        $score += HIGH;
    }



    return $score;
}






function MessRO($data)
{
    $score = 0;


    if (preg_match(MESSRO, $data)) {
        $score += MIDDLE;
    }



    return $score;
}
