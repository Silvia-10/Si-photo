<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
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
	
	<?php 

include "koneksi.php";

$sql = "SELECT * FROM tb_post";

$stmt = $koneksi->prepare($sql);
$stmt->execute();

 ?>

<br>
<h2>Tampil Post</h2>
<br>
<table>
	<tr>
		
         <th>ID POST</th>
         <th>ID CATEGORY</th>
         <th>DATE</th>
         <th>SLUG</th>
         <th>TITLE</th>
         <th>TEXT</th>
         <th>ID CAT</th>
        
		<td></td>
	</tr>
	<?php while ($row = $stmt->fetch()) { ?>
	<tr>
		        
		        <td><?php echo $row['post_id']; ?></td>
                <td><?php echo $row['category_id']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['slug']; ?></td>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['text']; ?></td>
                <td><?php echo $row['cat_id']; ?></td>
                <td class="aksa">
			<a href="post_edit.php?id=<?php echo $row['post_id']; ?>">Edit</a>
			<a href="post_hapus.php?id=<?php echo $row['post_id']; ?>">Hapus</a>
			<a href="post_input.php?id=<?php echo $row['post_id']; ?>">Tambah</a>
		<td></td>
	</tr>
	<?php } ?>
</table>
	<br>
	</div>

	<!-- ini untuk footer -->
	<div class="footer">

		<?php  include "footer.php"; ?>
	
	</div>

</div>

</body>
</html>