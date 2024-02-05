<?php
foreach (glob($_SERVER['DOCUMENT_ROOT'] . '/core/modules/*.php') as $module) {
    require($module);
}
require_once('generateMessage.func.php');
header("content-type: application/json");


function DetectCode($data)
{
    if (preg_match(CODEDETECTION, $data)) {

        return true;
    }
    return false;
}



function MessureDensity($data)
{

    $promptLength = strlen($data);

    $density = $promptLength * DENSITY;

    return $density;
}




function MessureSpaghetti($data)
{
    $spaceHunt = preg_replace(SPACEHUNT, ' ', $data);
    $spaggetiLength = strlen($spaceHunt);

    $messureSause = $spaggetiLength * 0.005;

    return $messureSause;
}


function MessureFoolness($data)
{

    if (!DetectCode($data)) {
        echo json_encode(array("analyze_result" => GenerateResultMessage(1), "analyze_score" => "NA/100"));
        exit;
    }

    if (strlen($data) < 30) {
        echo json_encode(array("analyze_result" => GenerateResultMessage(2), "analyze_score" => "0/100"));
        exit;
    }

    $density = MessureDensity($data);

    $result = Foolness($data,  $density);
    $result += FoolnessOthers($data,  $density);
    $result += Foolname($data,  $density);
    $result += FoolnameRev($data,  $density);
    $result += FoolnameDec($data,  $density);
    $result += Signature($data,  $density);
    $result += PerLang($data,  $density);
    $result += Decoration($data,  $density);
    $result += DecorationDash($data, $density);
    usleep(MessureSpaghetti($data));
    $result += FoolMess($data, $density);
    $result += Mess($data,  $density);
    $result += MesSTA($data,  $density);
    $result += MesEn($data,  $density);
    $result += MessRO($data,  $density);
    $result += Redundant($data,  $density);
    $result += SpaceCraft($data,  $density);
    $result += Twist($data,  $density);

    $finalMessuerment = $result * ADJUSTMENT;

    if (ceil($finalMessuerment) >= 100) {
        echo json_encode(array("analyze_result" => GenerateResultMessage(100), "analyze_score" => "100/100"));
        exit;
    }

    if (ceil($finalMessuerment) <= 0) {
        echo json_encode(array("analyze_result" => GenerateResultMessage(0), "analyze_score" => "0/100"));
        exit;
    }


    echo json_encode(array("analyze_result" => GenerateResultMessage($finalMessuerment), "analyze_score" => $finalMessuerment . "/100"));
    exit;
}
