<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>&lt;?php</p>
<p>session_start();</p>
<p>if ($_SESSION['access'] != 0) {</p>
<p> ($_SESSION['KOMEN'] = &quot;TIADA AKSES PELAJAR&quot;;</p>
<p>HEADER ('LOCATION: DaftarMasuk.php');</p>
<p>&nbsp;</p>
<p>else { </p>
<p>($_SESSION['access'] = 0) {</p>
<p> ($_SESSION['KOMEN'] = &quot; AKSES PELAJAR&quot;;</p>
<p>HEADER ('LOCATION: borang.php');</p>
<p>}</p>
<p>?&gt;</p>
</body>
</html>