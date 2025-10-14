<?php
/**
 * Reads all content from data.json and returns it as an associative array.
 * @return mixed
 */
function get_all_tracks(): mixed
{
    return json_decode(file_get_contents(__DIR__ . '/data.json'), true);
}

/**
 * Filters the tracks based on genre.
 * @param $tracks array Tracks associative array
 * @param $genre string Genre
 * @return array Filtered tracks
 */
function filter_tracks_by_genre(array $tracks, string $genre): array
{
    $filtered_tracks = [];
    foreach ($tracks as $track){
        if ($track["genre"] === $genre){
            $filtered_tracks[] = $track;
        }
    }
    return $filtered_tracks;
}

/**
 * Calculates total length of tracks (as seconds) and returns it.
 * @param $tracks array Tracks associative array
 * @return int Total seconds
 */
function get_total_playlist_duration(array $tracks): int
{
    $total_duration = 0;
    foreach ($tracks as $track){
        $total_duration += $track["length"];
    }
    return $total_duration;
}

/**
 * Filters out the tracks based on decade.
 * @param $tracks array Tracks associative array
 * @param $decade int Decade in YYYY form.
 * @return array Filtered tracks
 */
function get_tracks_by_decade(array $tracks, int $decade): array
{
    $filtered_tracks = [];
    foreach ($tracks as $track){
        $track_year = strval($track["year"])[0].strval($track["year"])[1].strval($track["year"])[2] . "0";

        //FOR DEBUGGING PURPOSES
        //echo "track:".$track_year."<br>";
        //echo "decade:".$decade[0].$decade[1].$decade[2]."<br>";

        if ($track_year == $decade){
            $filtered_tracks[] = $track;
        }
    }
    return $filtered_tracks;
}