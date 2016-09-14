<?php
class FindAndReplace
{
    function replaceWord($phrase, $matchWord, $changeWord)
    {
        $newPhrase = str_replace($matchWord, $changeWord, $phrase);
        $newPhrase = str_replace(strtoupper($matchWord), strtoupper($changeWord), $newPhrase);
        $newPhrase = str_replace(strtolower($matchWord), strtolower($changeWord), $newPhrase);
        $newPhrase = str_replace(ucfirst($matchWord), ucfirst($changeWord), $newPhrase);
        return $newPhrase;
    }
}
?>
