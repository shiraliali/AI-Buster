<?php

function GenerateResultMessage($score)
{

    $message = '';
    switch ($score) {
        case ($score <= 1):
            $message = "It's not detected as code it's looks like a text.";
            break;
        case ($score <= 2):
            $message = "It's too short to analyze.";
            break;
        case ($score <= 40):
            $message = "It does not appear to have been generated by an AI model.";
            break;
        case ($score <= 45):
            $message = "It appears with a negligble possibility that it may generated or helped writing by an AI model.";
            break;
        case ($score <= 55):
            $message = "There is a few reasons which confirms that it likely generated or helped writing by an AI model.";
            break;
        case ($score <= 60):
            $message = "It's possible that this code generated or helped writing by an AI model.";
            break;
        case ($score <= 65):
            $message = "it's may generated by an AI model.";
            break;
        case ($score <= 70):
            $message = "it's possible with good reasons that this code generated by an AI model.";
            break;
        case ($score <= 85):
            $message = "There is a lot of strong reasons that confirms this code is generated by an AI model.";
            break;
        case ($score <= 90):
            $message = "Mother Nature!! This code detected and should consider it as generated by an AI model.";
            break;
        case ($score <= 100):
            $message = "SKEEVY! this got knocked the fuck out 🤮";
            break;
    }

    return $message;
}