<?php
require_once "db.php";
if( !empty($_POST['user_name']) && !empty($_POST['number']) && !empty($_POST['email']) && !empty($_POST['text']) )
{
	$stmt = $pdo->prepare("insert into tab1(user_name, number,email, text) values(?,?,?,?)");
	$stmt->execute([
		$_POST['user_name'],
		$_POST['number'],
		$_POST['email'],
		$_POST['text']
		]);
	}
	header("Location:index.php");