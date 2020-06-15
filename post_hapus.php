<!DOCTYPE html>
<html>
<head>
	<title>CETAK FOTO ONLINE</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

<div>
	
	<!-- ini untuk header -->
	<div class="header">

		<?php  include "header.php"; ?>
	
	</div>

	<!-- ini untuk menu -->
	<div class="menu">

		<?php  include "menu.php"; ?>
	
	</div>
<!--  -->

	<!-- ini untuk utama -->
	<div class="utama">
	
	<?php 

	include "koneksi.php";

	$id = $_GET['id'];

	$sql =" SELECT * FROM tb_post WHERE post_id = :post_id";

	$stmt = $koneksi->prepare($sql);
	$stmt->bindParam(":post_id", $id);
	$stmt->execute();

	$result = $stmt->fetch();

	if (isset($_POST['tsimpan']))
	{
		$sql2 = "UPDATE tb_post SET category_id = :category_id, slug = :slug, title =:title, cat_id =:cat_id WHERE post_id=:post_id";
		$stmt2 = $koneksi->prepare($sql2);
		$stmt2->bindParam(":category_id", $_POST['category_id']);
		$stmt2->bindParam(":date", $_POST['date']);
		$stmt2->bindParam(":slug", $_POST['slug']);
		$stmt2->bindParam(":title", $_POST['title']);
		$stmt2->bindParam(":text", $_POST['text']);
		$stmt2->bindParam(":post_id", $id);
		$stmt2->execute();

		header("location:post.php");
	}

	

$id = $_GET['id'];

$sql = "DELETE FROM tb_post WHERE post_id = :post_id";

$stmt = $koneksi->prepare($sql);
$stmt->bindParam(":post_id", $id);
$stmt->execute();


    header("location: post.php");
    

   ?>  