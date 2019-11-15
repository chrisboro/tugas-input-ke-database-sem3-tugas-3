<?php
include "koneksi.php";
if(isset($_POST['Simpan'])){
$Merek = $_POST['Merk'];
$Harga = $_POST['Harga'];
mysqli_query ($a, "INSERT INTO barang SET merk='$Merek',harga='$Harga'");}
?>
	<Form Method="POST" action="">
	<table border="1">
		<tr>
			<td>Nama Barang</td>
			<td><input name="Merk" type="text"></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input name="Harga" type="number"></td>
		</tr>
		<tr>
			<td><input name="Simpan" type="submit"></td>
		</tr>
	</table>
	</form>