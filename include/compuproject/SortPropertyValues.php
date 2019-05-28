<?php

class SortPropertyValues
{
    public static function sort($sortArray) {
        foreach ($sortArray as $key=>$element) {
            $updateArray[$key] = $element["VALUE"];
        }
        asort($updateArray);
        foreach ($updateArray as $index=>$value) {
            $resultArray[$index] = $sortArray[$index];
        }
        return $resultArray;
    }
}