<?php

function insertUs($p_nom,$p_ape ) {
    
$mysqli = mysqli_connect("localhost", "root", "", "todolist");
$res = mysqli_query($mysqli, "insert into users (name,lastname) values ('$p_nom','$p_ape')");


return(mysqli_insert_id($mysqli));
}
function insertTsk($p_user,$p_name,$p_tiempEstimado,$status ) {
    
$mysqli = mysqli_connect("localhost", "root", "", "todolist");
$res = mysqli_query($mysqli, "insert into tasks (user_id,name,estimated_time,status) values ('$p_user','$p_name','$p_tiempEstimado','$status')");
return(mysqli_insert_id($mysqli));
}
echo insertTsk(insertUs('romi', 'lara'), '$p_name', '$p_tiempEstimado', '$status');
//echo insertUs('romi','oriod');
/*function insertTskUs($p_nom ) {
 $mysqli = mysqli_connect("localhost", "root", " ", "todolist");
$res = mysqli_query($mysqli, "insert into task (name) values ('$p_nom')");


}*/


?>
