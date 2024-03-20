<?php
function getid(){
    $query=mysql_query("SELECT COUNT(id) AS `cnt` FROM places_info");
    $row=mysql_fetch_array($query);
    return $row;
}
echo getid();
?>