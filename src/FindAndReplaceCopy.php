<?php
class FindAndReplace
{
    function replaceWord($phrase, $matchWord, $changeWord)
    {
        $outputArray = array();
        $inputArray = explode(" ", $phrase);

        foreach ($inputArray as $word){
            $newWord = str_replace($matchWord, $changeWord, $word);
            array_push($outputArray, $newWord);
            // if ($word == $matchWord) {
            //     array_push($outputArray, $changeWord);
            // } else {
            //     array_push($outputArray, $word);
            // }
        }
        $newPhrase = implode(" ", $outputArray);
        return $newPhrase;
    }
}
?>
