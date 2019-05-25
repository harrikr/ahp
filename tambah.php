<?php
	include('config.php');
	include('fungsi.php');
	// mendapatkan data edit
	if(isset($_GET['id'])) {
		$id	= $_GET['id'];
	}
	$query = "SELECT * FROM alternatif ORDER BY id DESC";
	if (isset($_POST['tambah'])) {
		$id	= $_POST['id'];
		$nama 	= $_POST['nama'];

		tambahData($id, $nama);

		header('Location: '.$id.'.php');
	}
	include('header.php');
?>
 <?php

require_once 'config.php';

$query = "SELECT * FROM alternatif ORDER BY id DESC";

$result = mysqli_query($koneksi, $query);

?>

<section class="content">
	<h2>Tambah</h2>

	<form class="ui form" method="post" action="tambah.php">
		<div class="inline field">
			<label>Nama </label>
			
			<select>

				<?php while($data = mysqli_fetch_assoc($result) > 0){?>

 					<option value="<?php echo $data['nama']; ?>"><?php echo $data['nama']; ?></option>

				<?php } ?>

			</select>

			<input type="hidden" name="id" value="<?php echo $id?>">
		</div>
		<br>
		<input class="ui green button" type="submit" name="tambah" value="SIMPAN">
	</form>
</section>

<?php include('footer.php'); ?>
/*
iki egen salah 
<section class="content">
	<h2>Tambah</h2>

	<form class="ui form" method="post" action="tambah.php">
		<div class="inline field">
			<label>Nama </label>
			
	<select>
		<option>--pilih alternatif--</option>
		<?php $sql = mysql_query('SELECT * FROM alternatif order by id ASC;');?>
			<?php if (mysql_num_rows($sql) > 0) {?>
				<?php while ($row = mysql_fetch_array($sql)) { ?>
		<option name="nama" value="<?php echo $row['nama'] ?>"> </option>
				<?php } ?>
		<?php } ?>
	</select>

			<input type="hidden" name="jenis" value="<?php echo $jenis?>">
		</div>
		<br>
		<input class="ui green button" type="submit" name="tambah" value="SIMPAN">
	</form>
</section>
*/