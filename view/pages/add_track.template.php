<?php
    require_once "././app/view_functions.php"
?>
<h1 class="title is-1 is-justify-content-center is-flex mt-3">Add new track</h1>
<div class="columns mb-6">
    <div class="column is-4">

    </div>
    <div class="column is-4">
        <?php if (isset($_POST["title"]) && isset($_POST["performer"]) && isset($_POST["year"]) && isset($_POST["genre"]) && isset($_POST["album"]) && isset($_POST["length"])): ?>
            <h2 class="subtitle is-2 is-justify-content-center is-flex mt-3 has-text-success">Track added successfully!</h2>
            <table class="table is-striped is-hoverable is-centered">
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
                    $track = [
                        "title" => $_POST["title"],
                        "performer" => $_POST["performer"],
                        "album" => $_POST["album"],
                        "length" => $_POST["length"],
                        "genre" => $_POST["genre"],
                        "year" => $_POST["year"]
                    ];
                    echo render_track_row($track);
                ?>
                </tbody>
            </table>
        <?php else:?>
        <form method="post">
            <div class="field">
                <label class="label" for="title">Title</label>
                <div class="control">
                    <input class="input is-rounded" type="text" id="title" placeholder="e.g.: Bohemian Rhapsody" name="title">
                </div>
            </div>
            <div class="field">
                <label class="label" for="performer">Performer</label>
                <div class="control">
                    <input class="input is-rounded" type="text" id="performer" placeholder="e.g.: Queen" name="performer">
                </div>
            </div>
            <div class="field">
                <label class="label" for="album">Album</label>
                <div class="control">
                    <input class="input is-rounded" type="text" id="album" placeholder="e.g.: A Night at the Opera" name="album">
                </div>
            </div>
            <div class="field">
                <label class="label" for="length">Length (seconds)</label>
                <div class="control">
                    <input class="input is-rounded" type="text" id="length" placeholder="e.g.: 354" name="length">
                </div>
            </div>
            <div class="field">
                <label class="label" for="genre">Genre</label>
                <div class="control">
                    <input class="input is-rounded" type="text" id="genre" placeholder="e.g.: Rock" name="genre">
                </div>
            </div>
            <div class="field">
                <label class="label" for="year">Release year</label>
                <div class="control">
                    <input class="input is-rounded" type="text" id="year" placeholder="e.g.: 1975" name="year">
                </div>
            </div>
            <button class="button is-rounded is-rounded is-primary is-dark mt-3" type="submit">Submit</button>
        </form>
    </div>
    <div class="column is-4">

    </div>
</div>
<?php endif;?>