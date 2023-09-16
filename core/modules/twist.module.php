<?php


function Twist($data, $density)
{


    $score = 0;

    preg_match_all(TWIST, $data, $detect);


    if (count($detect[0]) > floor(2 * $density)) {
        $score += NEGLIGIBLE;
    }

    if (count($detect[0]) > floor(5 * $density)) {
        $score += LOW;
    }

    if (count($detect[0]) > floor(8 * $density)) {
        $score += MIDDLE;
    }

    return $score;
}





function Decoration($data,  $density)
{

    $score = 0;

    preg_match_all(DECORATION, $data, $detect);
    if (!empty($detect[0])) {

        $score += -LOW;
    }

    if (count($detect[0]) >= floor(4 * $density)) {
        $score += -MIDDLE;
    }

    if (count($detect[0]) >= floor(8 * $density)) {
        $score += -HIGH;
    }


    return $score;
}



function DecorationDash($data, $density)
{

    $score = 0;

    preg_match_all(DECORATION, $data, $detect);
    if (!empty($detect[0])) {

        $score += -SEVERE;
    }

    if (count($detect[0]) >= floor(3 * $density)) {
        $score += -SEVERE * 2;
    }


    return $score;
}
