<?php

$result_list = array();
//add model for about

$sql = "SELECT * FROM proj_myband_about";

$result = $mysqli-> query($sql);

while($item = $result-> fetch_assoc()){
    $result_list[] = $item;
}