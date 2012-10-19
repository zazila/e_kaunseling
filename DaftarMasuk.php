
<title>Untitled Document</title>
</head>
<?php
session_start();
unset($_SESSION['access']);
unset($_SESSION['username']);
?>

<body>
<br>
<br>

<form name="zazila.php" method="post" action="pendaftaran.php">
  <p></p>
  <table width="423">
    <tr>
      <td width="115">ID</td>
      <td width="10">:</td>
      <td width="282"><label for="textfield"></label>
      <input name="textfield" type="text" id="textfield" size="45"></td>
    </tr>
    <tr>
      <td>Kata Laluan</td>
      <td>:</td>
      <td><label for="textfield2"></label>
      <input name="textfield2" type="password" id="textfield2" size="45"></td>
    </tr>
  </table>
  <p>
  <input type="submit" name="Submit" id="Submit" value="Daftar Masuk">
  <p> Jika anda belum mempunyai akaun sila <a href="pendaftaran.php">klik disini</a> untuk pendaftaran;</p>
</form>
 </p>
  
<p></p>
</body>
</html>
