<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>&lt;?php</p>
<p>// Inialize session<br />
  session_start();</p>
<p>// Check, if user is already login, then jump to secured page<br />
  if (isset($_SESSION['username']) &amp;&amp; isset($_SESSION['admin'])) {<br />
  header('Location: admin_view.php');<br />
  }<br />
  if (isset($_SESSION['failed'])){<br />
  print &quot;Failed...&quot;;<br />
  }<br />
</p>
<p>?&gt;<br />
</p>
<p><br />
  <br />
  &lt;title&gt;Admin login page&lt;/title&gt;<br />
&lt;/head&gt;</p>
<p>&lt;body&gt;<br />
  &lt;table width=&quot;300&quot; border=&quot;0&quot; align=&quot;center&quot; cellpadding=&quot;0&quot; cellspacing=&quot;1&quot;&gt;<br />
  &lt;tr&gt;<br />
  &lt;form name=&quot;admin_login&quot; method=&quot;post&quot; action=&quot;pengesahan_admin.php&quot;&gt;<br />
  &lt;td&gt;<br />
  &lt;table width=&quot;100%&quot; border=&quot;0&quot; cellpadding=&quot;3&quot; cellspacing=&quot;1&quot;&gt;<br />
  &lt;tr&gt;<br />
  &lt;td colspan=&quot;3&quot;&gt;&lt;strong&gt;Akses Admin&lt;/strong&gt;&lt;/td&gt;<br />
  &lt;/tr&gt;<br />
  &lt;tr&gt;<br />
  &lt;td width=&quot;100&quot;&gt;Username&lt;/td&gt;<br />
  &lt;td width=&quot;300&quot;&gt;&lt;input name=&quot;username&quot; type=&quot;text&quot; id=&quot;username&quot;&gt;&lt;/td&gt;<br />
  &lt;/tr&gt;<br />
  &lt;tr&gt;<br />
  &lt;td&gt;Password&lt;/td&gt;<br />
  &lt;td&gt;&lt;input name=&quot;password&quot; type=&quot;text&quot; id=&quot;password&quot;&gt;&lt;/td&gt;<br />
  &lt;/tr&gt;<br />
  &lt;tr&gt;<br />
  &lt;td&gt;&lt;/td&gt;<br />
  &lt;td&gt;&lt;input type=&quot;submit&quot; name=&quot;Submit&quot; value=&quot;Masuk&quot;&gt;&lt;/td&gt;<br />
  &lt;/tr&gt;<br />
  &lt;/table&gt;<br />
  &lt;/td&gt;<br />
  &lt;/form&gt;<br />
  &lt;/tr&gt;<br />
  &lt;/table&gt;<br />
  &lt;/body&gt;<br />
  &lt;/html&gt;</p>
</body>
</html>