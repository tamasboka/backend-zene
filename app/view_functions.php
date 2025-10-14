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
function format_duration($seconds) {
    $minutes = floor($seconds / 60);
    $seconds = $seconds % 60;
    if (strlen($seconds) == 1) {
        $seconds = "0".$seconds;
    }
    if (strlen($minutes) == 1) {
        $minutes = "0".$minutes;
    }
    return "$minutes:$seconds";
}
function render_genre_tag($genre){
    return "<span class='tag is-rounded is-large'>$genre</span>";
}