<?php
$namapenuh = $_POST['namapenuh'];
$userid = $_POST['id'];
$noic = $_POST['nokadpengenalan'];
$notel = $_POST['notelefon'];
$katalaluan = $_POST['katalaluan'];


$conn = mysql_connect('localhost','root','');
mysql_select_db("kaunseling",$conn);

$query = "INSERT INTO user (namapenuh,userid,noic,notel,katalaluan) VALUES ('$namapenuh','$id','$nokadpengenalan','$notelefon','$katalaluan')";
$result = mysql_query($query);

if ($result == TRUE) 
{
?>
<script type="javascript">
alert('data anda telah berjaya disimpan')
</script>
<?php
header("location:DaftarMasuk.php");
}
else
	echo "Tidak Berjaya disimpan";
?>