<?php 

$id = $_GET['id'];

$user = user::show_by_id('users', $id);

if($user->delete('users')){

    header("location: users.php");
}
?>