<?php
    require_once "app/view_functions.php";
?>

<h1 class="title is-1 is-justify-content-center is-flex mt-3">Welcome!</h1>
<h4 class="subtitle is-4 is-justify-content-center is-flex mt-3">Go and explore our site!</h4>
<div class="container mt-6">
    <div class="columns">
        <div class="column is-4">
            <div class="card">
                <div class="card-header">
                    <div class="card-header-title is-justify-content-center is-flex">
                        Check out our playlist!
                    </div>
                </div>
                <div class="card-content is-justify-content-center is-flex">
                    <div class="content">
                        <a class="button is-link is-dark" href="?page=playlist">Go to playlist page</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="column is-4">
            <div class="card">
                <div class="card-header">
                    <div class="card-header-title is-justify-content-center is-flex">
                        Check out our statistics!
                    </div>
                </div>
                <div class="card-content is-justify-content-center is-flex">
                    <div class="content">
                        <a class="button is-link is-dark" href="?stats=<?php if ($_GET["stats"] === "show") {echo "hide";} else {echo "show";}?>"><?php if ($_GET["stats"] === "show") {echo "Hide";} else {echo "Show";}?> stats</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="column is-4">
            <div class="card">
                <div class="card-header">
                    <div class="card-header-title is-justify-content-center is-flex">
                        Add a new track!
                    </div>
                </div>
                <div class="card-content is-justify-content-center is-flex">
                    <div class="content">
                        <div class="content">
                            <a class="button is-link is-dark" href="?page=add_track">Go to add track page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if ($_GET["stats"] === "show"):?>
<div class="container mt-6">
    <h4 class="subtitle is-4 is-justify-content-center is-flex mt-3">Statistics</h4>
    <div class="columns">
        <div class="column is-2">
            <div class="card">
                <div class="card-header">
                    <div class="card-header-title is-justify-content-center is-flex">
                        Total tracks
                    </div>
                </div>
                <div class="card-content is-justify-content-center is-flex">
                    <div class="content">
                        <?php echo count($tracks);?>
                    </div>
                </div>
            </div>
        </div>
        <div class="column is-2">
            <div class="card">
                <div class="card-header">
                    <div class="card-header-title is-justify-content-center is-flex">
                        Total playtime
                    </div>
                </div>
                <div class="card-content is-justify-content-center is-flex">
                    <div class="content">
                        <?php echo format_duration(get_total_playlist_duration($tracks));?>
                    </div>
                </div>
            </div>
        </div>
        <div class="column is-2">
            <div class="card">
                <div class="card-header">
                    <div class="card-header-title is-justify-content-center is-flex">
                        Number of genres
                    </div>
                </div>
                <div class="card-content is-justify-content-center is-flex">
                    <div class="content">
                        <?php
                        $genres = [];
                        foreach ($tracks as $track){
                            if (!in_array($track['genre'], $genres)) {
                                $genres[] = $track['genre'];
                            }
                        }
                        echo count($genres)
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="column is-2">
            <div class="card">
                <div class="card-header">
                    <div class="card-header-title is-justify-content-center is-flex">
                        Oldest track
                    </div>
                </div>
                <div class="card-content is-justify-content-center is-flex">
                    <div class="content">
                        <?php
                            $oldest = get_oldest_track_index($tracks);
                            echo $tracks[$oldest]["title"]." - ".$tracks[$oldest]["performer"]." (".$tracks[$oldest]["year"].") ";
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="column is-2">
            <div class="card">
                <div class="card-header">
                    <div class="card-header-title is-justify-content-center is-flex">
                        Newest track
                    </div>
                </div>
                <div class="card-content is-justify-content-center is-flex">
                    <div class="content">
                        <?php
                        $oldest = get_oldest_track_index($tracks, false);
                        echo $tracks[$oldest]["title"]." - ".$tracks[$oldest]["performer"]." (".$tracks[$oldest]["year"].") ";
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="column is-2">
            <div class="card">
                <div class="card-header">
                    <div class="card-header-title is-justify-content-center is-flex">
                        Average length
                    </div>
                </div>
                <div class="card-content is-justify-content-center is-flex">
                    <div class="content">
                        <?php
                            $total_length = get_total_playlist_duration($tracks) / count($tracks);
                            echo format_duration($total_length)
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif;?>
<?php