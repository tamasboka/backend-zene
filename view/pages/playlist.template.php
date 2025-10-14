<?php
require "app/view_functions.php";
require "app/data.php";
?>

<h1 class="title is-1 is-justify-content-center is-flex mt-3">Playlist</h1>
<div class="constainer is-justify-content-center is-flex">
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Performer</th>
                <th>Album</th>
                <th>Length</th>
                <th>Genre</th>
                <th>Year</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($tracks as $track) {
            echo render_track_row($track);
        }
        ?>
        </tbody>
    </table>
</div>