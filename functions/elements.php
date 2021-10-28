<?php
include_once("text-element.php");

include_once("topline-element.php");
include_once("image-element.php");
include_once("title-element.php");
include_once("two-column-element.php");
include_once("subhead-element.php");
include_once("service-info-element.php");

// include_once("slideshow-element.php");

include_once("kalender-element.php");

include_once("teaser-element.php");

include_once("list-element.php");

function get_content_of_file($src){
  $content = file_get_contents($src);

    // explode all fields by the line separator
    $fields = preg_split('!\n----\s*\n*!', $content);
    // start the data array
    $data = [];

    // loop through all fields and add them to the content
    foreach ($fields as $field) {
        $pos = strpos($field, ':');
        $key = str_replace(['-', ' '], '_', strtolower(trim(substr($field, 0, $pos))));

        // Don't add fields with empty keys
        if (empty($key) === true) {
            continue;
        }

        $value = trim(substr($field, $pos + 1));

        // unescape escaped dividers within a field
        $data[$key] = preg_replace('!(?<=\n|^)\\\\----!', '----', $value);
    }

    return $data;

}
