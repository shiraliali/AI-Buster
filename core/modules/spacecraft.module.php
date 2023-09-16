<?php


function SpaceCraft($data, $density)
{


    $score = 0;

    preg_match_all(SPACECRAFT, $data, $detect);


    if (count($detect[0]) > floor(3 * $density)) {
        $score += MIDDLE;
    }

    if (count($detect[0]) > floor(5 * $density)) {
        $score += HIGH;
    }

    if (count($detect[0]) > floor(8 * $density)) {
        $score += SEVERE;
    }

    return $score;
}
