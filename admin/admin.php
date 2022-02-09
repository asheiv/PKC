<link href="..\css\main.css" rel="stylesheet">
<link href="..\css\input.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title>Pramadaya Karya Cipta</title>
<link rel="shortcut icon" href="../image/icon.cur">
</head>
<body>
<div class="container">
<div class="header-t">Pramadaya Karya Cipta</div>
<ul>

<li class="dropdown" style="float:left">
    <a href="#" class="dropbtn"><b>Tiket Kerja</b></a>
    <div class="dropdown-content">
      <a href="Konstruksi"><b>Buat</b></a>
      <a href="Perizinan"><b>Riwayat<b/></a>
    </div>
  </li>
<li><a href="Home" style="float:left"><b>Daftar Absensi</b></a></li>
  <li style="float:right"><a href="logout.php" ><b>Logout</b></a></li>
</ul>
<div class="isi">
<?php include '..\content\master.php';?>
</div>
</div>
</body>