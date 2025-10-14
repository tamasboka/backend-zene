<?php
require "app/view_functions.php";
?>

<h1 class="title is-1 is-justify-content-center is-flex mt-3">Playlist</h1>

<div class="container is-justify-content-center is-flex">
    <div class="columns is-2">
        <form method="get" style="width: 75%" class="mt-4">
            <input hidden="hidden" name="page" value="playlist">
            <h3 class="is-justify-content-center is-flex title">Filter songs</h3>
            <div class="box">
                <div class="field">
                    <label for="genre">Genre</label>
                    <div class="control">
                        <div class="select is-rounded">
                            <select name="genre" id="genre">
                                <option>All</option>
                                <?php
                                $genres = [];
                                foreach ($tracks as $track){
                                    if (!in_array($track['genre'], $genres)) {
                                        $genres[] = $track['genre'];
                                    }
                                }
                                foreach ($genres as $genre){
                                    echo "<option>$genre</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label for="decade">Decade</label>
                    <div class="control">
                        <div class="select is-rounded">
                            <select name="decade" id="decade">
                                <option>All</option>
                                <?php
                                    $decade = 1970;
                                    while ($decade < 2030) {
                                        echo "<option>$decade</option>";
                                        $decade += 10;
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <button class="button is-rounded is-rounded is-primary is-dark mt-3" type="submit">Apply filters</button>
            </div>
        </form>
    </div>
    <div class="columns is-2" style="background-color: #ffffff">
        <p>&nbsp;</p>
    </div>
    <div class="column is-8">
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
            foreach ($used_tracks as $track) {
                echo render_track_row($track);
            }
            ?>
            </tbody>
        </table>
    </div>
</div>