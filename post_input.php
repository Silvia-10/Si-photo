<?php 

include "koneksi.php";

if (isset($_POST['tsimpan']))
{
	$id = $_POST['iid'];
	$idcategory = $_POST['id'];
	$slug = $_POST['islug'];
	$title = $_POST['ititle'];
	$text = $_POST['itext'];
	$cat = $_POST['idcat'];




	$sql = "INSERT INTO tb_post VALUES ('', :category_id, :slug, :title, :cat_id)";

	$stmt = $koneksi->prepare($sql);
	$stmt->bindParam(":post_id", $id);
	$stmt->bindParam(":category_id", $idcategory);
	$stmt->bindParam(":slug", $slug);
	$stmt->bindParam(":title", $title);
	$stmt->bindParam(":text", $text);
	$stmt->bindParam(":cat_id", $cat);
	$stmt->execute();
}

 ?>

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


	<!-- ini untuk utama -->
	<div class="utama">
	
	<br>
		<h2>
			<font color="#041c3d"> Input Post </font>
		</h2>
		<br>
		<form action="" method="POST" >
		<table>
		<tr>
			<td>ID POST</td>
			<td> <input type="text" name="iid" ></td>
		</tr>
		<tr>
			<td>ID CATEGORY</td>
			<td><input type="varchar" name="id" ></td>
		</tr>
		<tr>
			<td>SLUG</td>
			<td><input type="text" name="islug" ></td>
		</tr>
		<tr>
			<td>TITLE</td>
			<td><input type="text" name="ititle" ></td>
		</tr>
		<tr>
			<td>TEXT</td>
			<td><input type="text" name="itext" ></td>
		</tr>
		<tr>
			<td>ID CAT</td>
			<td><input type="text" name="idcat" ></td>
		</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="tsimpan" value="Simpan"> <input type="reset" name="batal" value="Batal"> </td>
			</tr>
		</table>
		<br>
	</form>
	<br>
	</div>

	<!-- ini untuk footer -->
	<div class="footer">

		<?php  include "footer.php"; ?>
	
	</div>

</div>

</body>
</html>