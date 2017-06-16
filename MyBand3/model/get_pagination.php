<?php
//require '../includes/config.php';
//include 'get_data.php';

//$dbc = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die('Error conneting to MYSQL server');

$dbc = mysqli_connect('127.0.0.1', 'root', 'root', '23519_leerjaar1') or die('Error conneting to MYSQL server');

$results_per_page  = 3;

$query = "SELECT * FROM proj_myband_blog ORDER BY id DESC LIMIT 0 ,$results_per_page";
$result = mysqli_query($dbc, $query) or die ('Error querying');
$number_results = mysqli_num_rows($result);

while ($row = mysqli_fetch_array($result)){
    echo $row['id'] . ' ' . $row['title'] . '<br>';
}

$number_pages = ceil($number_results / $results_per_page);

!isset($_GET['page']) ? $page = 1 : $page = $_GET['page'];

echo $limit_starting_number = ($page - 1) * $results_per_page;

echo '<br>';

for ($page=1; $page <= $number_pages; $page++){
    echo '<a href="index.php?page=blog?page=' . $page . '">' . $page . '</a>';
}