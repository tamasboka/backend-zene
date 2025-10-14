<?php
/**
 * Reads all data from data.json and returns it.
 * @return mixed
 */
function get_all_tracks(){
    return json_decode(file_get_contents(__DIR__ . '/data.json'));
}