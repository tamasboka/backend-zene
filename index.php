<?php
require_once "app/functions.php";
require_once "app/data.php";

$current_page = $_GET["page"] ?? "home";

require_once "view/partials/header.template.php";

require "view/pages/".$current_page.".template.php";

require_once "view/partials/footer.template.php";
?>