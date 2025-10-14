<?php
require_once "app/functions.php";
require_once "app/data.php";

$current_page = $_GET["page"] ?? "home";

require_once "view/partials/header.template.php";

if ($current_page === "playlist"){
    $used_tracks = $tracks;
    if (isset($_GET["genre"]) && isset($_GET["decade"])) {
        if ($_GET["genre"] != "All") {
            $used_tracks = filter_tracks_by_genre($tracks, $_GET["genre"]);
        }
        if ($_GET["decade"] != "All") {
            $used_tracks = get_tracks_by_decade($used_tracks, intval($_GET["decade"]));
        }
    }
}

require "view/pages/".$current_page.".template.php";

require "view/partials/footer.template.php";
?>