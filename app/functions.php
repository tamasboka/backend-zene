<?php
/**
 * Reads all data from data.json and returns it.
 * @return mixed
 */
function get_all_tracks(){
    return json_decode(file_get_contents(__DIR__ . '/data.json'), true);
}
function filter_tracks_by_genre($tracks, $genre){
    $filtered_tracks = [];
    foreach ($tracks as $track){
        if ($track["genre"] === $genre){
            $filtered_tracks[] = $track;
        }
    }
    return $filtered_tracks;
}
function get_total_playlist_duration($tracks){
    $total_duration = 0;
    foreach ($tracks as $track){
        $total_duration += $track["length"];
    }
    return $total_duration;
}
function get_tracks_by_decade($tracks, $decade){
    $filtered_tracks = [];
    foreach ($tracks as $track){
        $track_year = strval($track["year"])[0].strval($track["year"])[1].strval($track["year"])[2];

        //FOR DEBUGGING PURPOSES
        //echo "track:".$track_year."<br>";
        //echo "decade:".$decade[0].$decade[1].$decade[2]."<br>";

        if ($track_year === $decade[0].$decade[1].$decade[2]){
            $filtered_tracks[] = $track;
        }
    }
    return $filtered_tracks;
}