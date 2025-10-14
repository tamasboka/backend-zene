<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zene</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }
        main {
            flex: 1 0 auto;
        }
    </style>
</head>
<header>
    <nav class="navbar">
        <div class="container">
            <div class="navbar-menu is-flex is-justify-content-center">
                <a class="navbar-item <?php if ($current_page === "home") echo "has-background-link-dark"?>" href="?page=home">Home</a>
                <a class="navbar-item <?php if ($current_page === "playlist") echo "has-background-link-dark"?>" href="?page=playlist">Playlist</a>
                <a class="navbar-item <?php if ($current_page === "add_track") echo "has-background-link-dark"?>" href="?page=add_track">Add track</a>
            </div>
        </div>
    </nav>
</header>
<body>
<main>