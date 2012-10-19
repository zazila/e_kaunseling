<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>&lt;?php</p>
<p>session_start();<br />
  include('config.inc');<br />
  $username = mysql_real_escape_string($_POST['username']);<br />
  $password =  mysql_real_escape_string($_POST['password']);<br />
  $table = 'klien';<br />
  $cmd = &quot;SELECT * FROM $table where (username='$username' and password='$password' and access = 1)&quot;;<br />
  $query = mysql_query($cmd);<br />
  $row=mysql_fetch_array($query);<br />
  if ($row){<br />
  $_SESSION['username'] = $_POST['username'];<br />
  $_SESSION['admin'] = 1;<br />
  header('Location: admin_view.php');<br />
  if (isset($_SESSION['failed'])){<br />
  unset($_SESSION['failed']);<br />
  }<br />
  <br />
  }<br />
  else{<br />
  $_SESSION['failed'] = &quot;FAILED&quot;;<br />
  header('Location: daftar_admin.php');<br />
  }</p>
<p>?&gt;</p>
</body>
</html>