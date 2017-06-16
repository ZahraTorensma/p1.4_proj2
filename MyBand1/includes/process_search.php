<?php
require '../includes/config.php';
include '../views/head.tpl';
//include '../views/header.tpl';
//include '../views/menu.tpl';
//include '../views/search.tpl';

echo '<a href="../?page=search"><strong>TERUG</strong></a>';

$dbc = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die('Error conneting to MYSQL server');

if (isset($_GET['submit_search'])){
    $search = mysqli_real_escape_string($dbc, trim($_GET['search']));
    $search = '%' . $search . '%';
} else{
    $search = '%';
}

$query = "SELECT * FROM proj_myband_blog WHERE text LIKE '$search' OR title LIKE '$search' ORDER BY id DESC";
$result = mysqli_query($dbc, $query) or die ('Error querying 2');


while ( $row = mysqli_fetch_array($result)){
    $timestamp = $row['timestamp'];
    $author = $row['author'];
    $image = $row['image'];
    $title = $row['title'];
    $text = $row['text'];

    echo '<section class="blog">';
    echo '<p>' . $timestamp . '</p>';
    echo '<p>' . $author . '</p>';
    echo '<h3>' . $title . '</h3>';
    echo '<content>' . $text . '</content>';
    echo '</section>';
    echo '<div class="blogRuimte"></div>';

}

mysqli_close($dbc);
