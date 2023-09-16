<?php

function Redundant($data, $density)
{
    $score = 0;

    preg_match_all(REDUNDANCY, $data, $detect);

    if (!empty($detect[0])) {
        $score += LOW;
    }

    if (count($detect[0]) > floor(3 * $density)) {
        $score += MIDDLE;
    }

    if (count($detect[0]) > floor(10 * $density)) {
        $score += SEVERE;
    }

    return $score;
}
