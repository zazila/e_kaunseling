<title>Project Final</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>&nbsp;</p>
  <table width="200" border="0" align="center">
    <tr>
      <td><img src="images/header.png" width="900" height="300" align="top" /></td>
    </tr>
  </table>
  <table width="200" border="0" align="center">
    <tr>
    <td><a href="index.php"><img src="icon_home.png" width="100" height="100" /></a></td>
      <td><a href="about.php"><img src="icon_about.png" width="100" height="100" /></a></td>
      <td><a href="borang.php"><img src="icon_borang.png" width="100" height="100" /></a></td>
      <td><a href="conselor.php"><img src="icon_counselor.png" width="100" height="100" /></a></td>
    </tr>
  </table>
  <table width="907" height="500" border="1" align="center">
    <tr>
      <td width="380"><table width="200" border="0" align="center">
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><p>&nbsp;</p>
            <table width="374">
              <tr>
                <td width="80">ID</td>
                <td width="2">:</td>
                <td width=""><label for="textfield2"></label>
                  <input name="textfield4" type="text" id="textfield2" size="45"></td>
              </tr>
              <tr>
                <td>Kata Laluan</td>
                <td>:</td>
                <td><label for="textfield3"></label>
                  <input name="textfield4" type="password" id="textfield3" size="45"></td>
              </tr>
            </table>
            <p><a href="Pendaftaran.php">
              <input type="submit" name="Submit" id="Submit2" value="Daftar Masuk">
            </a></p>
            <p>jika anda belum mempunyai akaun, <a href="Pendaftaran.php">sila klik</a> untuk Pendaftaran</p></td>
        </tr>
      </table>
      <p>&nbsp;</p></td>
      <td width="511"><p>Unit Pengurusan Psikologi dan Kerjaya </p>
        <p>Borang E-Kaunseling</p>
        <p>Sekiranya anda ingin membuat temujanji dan meluahkan kesulitan anda melalui e-kaunseling,</p>
        <p>sila nyatakan pemasalahan tersebut di dalam borang <em>online</em> di bawah ini</p>
        <p>* Semua ruangan adalah wajib diisi.</p>
        <table width="515">
          <tr>
            <td width="202">Nama</td>
            <td width="14">:</td>
            <td width="283"><label for="textfield"></label>
              <input name="textfield" type="text" id="textfield" size="45"></td>
          </tr>
          <tr>
            <td>Nama Kaunselor</td>
            <td>:</td>
            <td><select name="select" id="select">
              <option selected> </option>
              <option value="1">Cik Maslina Binti Bahtun</option>
              <option value="2">Puan Yusliza Binti Md Yusoff</option>
              <option value="3">Cik Norsheila Binti Saruddin</option>
            </select></td>
          </tr>
          <tr>
            <td>Masa Temujanji</td>
            <td>:</td>
            <td><label for="textfield3"></label>
              <input name="textfield3" type="text" id="textfield3" size="45"></td>
          </tr>
          <tr>
            <script type="text/javascript" src="calendar.js">
        </script>
            <td>Tarikh Temujanji</td>
            <td>:</td>
            <td><p>
              <label for="textfield2"></label>
              <input name="textfield2" type="text" id="textfield2" size="45">
            </p></td>
          </tr>
        </table>
        <p>
          <input type="reset" name="Reset" id="Submit" value="Hantar">
          <input type="reset" name="Reset" id="Reset" value="Batal">
        </p>
      <p>&nbsp;</p></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>