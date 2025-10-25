<?php
function render_track_row($track) {
    return "<tr>
                 <td>".$track["title"]."</td>
                 <td>".$track["performer"]."</td>
                 <td>".$track["album"]."</td>
                 <td>".format_duration($track["length"])."</td>
                 <td>".render_genre_tag($track["genre"])."</td>
                 <td>".$track["year"]."</td>
              </tr>";
}
function format_duration($seconds): string
{
    $hours = floor($seconds / 3600);
    $minutes = floor(($seconds % 3600) / 60);
    $seconds = $seconds % 60;

    $format_time = "";
    if ($hours != 0) {
        if (strlen($hours) == 1) {
            $hours = "0".$hours;
        }
    }
    if (strlen($minutes) == 1) {
        $minutes = "0".$minutes;
    }
    if (strlen($seconds) == 1) {
        $seconds = "0".$seconds;
    }
    if ($hours != 0) {
        $format_time .= $hours.":".$minutes.":".$seconds;
    } else {
        $format_time .= $minutes.":".$seconds;
    }

    return $format_time;
}
function render_genre_tag($genre){
    return "<span class='tag is-rounded is-large'>$genre</span>";
}