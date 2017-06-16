<?php

$result_list = array();
//add model for blog

$column = 'timestamp';
$order = 'DESC';

$sql = "SELECT * FROM proj_myband_blog  ORDER BY $column $order";

$result = $mysqli-> query($sql);

while($item = $result-> fetch_assoc()){
    $result_list[] = $item;
}