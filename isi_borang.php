<?php
$namapenuh = $_POST['nama'];
$NamaKaunselor = $_POST['select'];
$tarikhtemujanji = $_POST['hari','bulan','tahun'];
$masatemujani = $_POST['masatemujanji'];



$conn = mysql_connect('localhost','root','');
mysql_select_db("kaunseling",$conn);

$query = "INSERT INTO borang (namapenuh,NamaKaunselor,tarikhtemujanji,masatemujanji) VALUES ('$nama','$NamaKaunselor','$MasaTemujanji','$TarikhTemuJanji')";
$result = mysql_query($query);

if ($result == TRUE) 
{
?>
<script type="javascript">
alert('data anda telah berjaya disimpan')
</script>
<?php
header("location:Tahniah.php");
}
else
	echo "Tidak Berjaya disimpan";
?>