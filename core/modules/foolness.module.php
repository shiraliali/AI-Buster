<?php


function Foolness($data,  $density)
{

    $score = 0;

    preg_match_all(FOOLNESS, $data, $detect);
    if (!empty($detect[0])) {

        $score += SEVERE;
    }

    if (count($detect[0]) >= floor(3 * $density)) {
        $score += SEVERE;
    }

    if (count($detect[0]) >= floor(4 * $density)) {
        $score += MIDDLE;
    }

    if (count($detect[0]) >= floor(5 * $density)) {
        $score += LOW;
    }

    if (count($detect[0]) >= floor(6 * $density)) {
        $score += HIGH;
    }

    if (count($detect[0]) >= floor(8 * $density)) {
        $score += SEVERE;
    }

    return $score;
}



function FoolMess($data, $density)
{
    $score = 0;

    preg_match_all(FOOLNESS_OTHERS, $data, $detect);
    if (!empty($detect[0])) {

        $score += MIDDLE * 2;
    }


    if (count($detect[0]) >= floor(4 * $density)) {
        $score += MIDDLE * 2;
    }



    if (count($detect[0]) >= floor(6 * $density)) {
        $score += MIDDLE * 2;
    }

    if (count($detect[0]) >= floor(8 * $density)) {
        $score += SEVERE * 2;
    }

    return $score;
}


function FoolnessOthers($data,  $density)
{

    $score = 0;

    preg_match_all(FOOLNESS_OTHERS, $data, $detect);
    if (!empty($detect[0])) {

        $score += NEGLIGIBLE;
    }

    if (count($detect[0]) >= floor(3 * $density)) {
        $score += LOW;
    }

    if (count($detect[0]) >= floor(4 * $density)) {
        $score += LOW;
    }

    if (count($detect[0]) >= floor(5 * $density)) {
        $score += MIDDLE;
    }

    if (count($detect[0]) >= floor(6 * $density)) {
        $score += LOW;
    }

    if (count($detect[0]) >= floor(8 * $density)) {
        $score += SEVERE;
    }

    return $score;
}




function FoolnameRev($data,  $density)
{

    $score = 0;

    preg_match_all(FOOLNAMEREV, $data, $detect);
    if (!empty($detect[0])) {

        $score += -LOW;
    }

    if (count($detect[0]) >= floor(3 * $density)) {
        $score += -NEGLIGIBLE;
    }

    if (count($detect[0]) >= floor(4 * $density)) {
        $score += -LOW;
    }

    if (count($detect[0]) >= floor(5 * $density)) {
        $score += -NEGLIGIBLE;
    }

    if (count($detect[0]) >= floor(6 * $density)) {
        $score += -NEGLIGIBLE;
    }

    if (count($detect[0]) >= floor(8 * $density)) {
        $score += -MIDDLE;
    }

    return $score;
}




function FoolnameDec($data,  $density)
{

    $score = 0;

    preg_match_all(FOOLNAMEDEC, $data, $detect);
    if (!empty($detect[0])) {

        $score += NEGLIGIBLE;
    }

    if (count($detect[0]) >= floor(4 * $density)) {
        $score += NEGLIGIBLE;
    }

    if (count($detect[0]) >= floor(8 * $density)) {
        $score += LOW;
    }


    return $score;
}





function Foolname($data,  $density)
{

    $score = 0;

    preg_match_all(FOOLNAME, $data, $detect);
    $detectUniques = array_unique(array_merge(...$detect));

    $spaceHunt = preg_replace(SPACEHUNT, ' ', $data);
    $countCleaned = strlen($spaceHunt);

    if (count($detectUniques) < ceil($countCleaned / floor(3 * $density))) {

        $score += MIDDLE;
    }

    return $score;
}



function Signature($data,  $density)
{
    $score = 0;

    preg_match_all(SIGNTURE, $data, $detect);

    if (!empty($detect[0])) {
        $score += -SEVERE;
    }

    if (count($detect[0]) > floor(1 * $density)) {
        $score += -NEGLIGIBLE;
    }

    if (count($detect[0]) >= floor(3 * $density)) {
        $score = -HIGH;
    }

    return $score;
}



function HumanLikeNames($data, $density)
{

    $score = 0;

    preg_match_all(DEPASCAL, $data, $detect);

    if (!empty($detect[0])) {
        $score += -SEVERE * count($detect[0]) * 3;
    }

    if (count($detect[0]) > floor(4 * $density)) {
        $score += -MIDDLE * count($detect[0]);
    }

    if (count($detect[0]) >= floor(8 * $density)) {
        $score = -SEVERE * count($detect[0]);
    }

    return $score;
}




function PerLang($data,  $density)
{
    $score = 0;

    preg_match_all(PERLANG, $data, $detect);

    if (!empty($detect[0])) {
        $score += LOW;
    }

    if (count($detect[0]) > floor(3 * $density)) {
        $score += MIDDLE;
    }

    if (count($detect[0]) >= floor(5 * $density)) {
        $score += SEVERE;
    }

    return $score;
}
