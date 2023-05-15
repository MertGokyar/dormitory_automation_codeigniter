<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Giriş Ekranı</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo base_url('assets/css/giris.css');?>">
</head>
<body class="body">
<!-- partial:index.partial.html -->
	<br>
<div class="flex-container">
<div class="flex-box" id="login-form-wrap">
  <br>
  <h2>Admin Girişi</h2>
  <form id="login-form" action="<?php echo base_url('anasayfa/girisyap'); ?>" method="post">
    <p>
    <input type="text" id="kullanıcı adı" name="admin" placeholder="Kullanıcı Adı" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="password" id="sifre" name="admin_sifre" placeholder="Şifre" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="submit" value="Giriş">
	  <br>
  </form> 
</div><!--login-form-wrap-->
<div class="flex-box" id="login-form-wrap">
  <br>
  <h2>Yönetici Girişi</h2>
  <form id="login-form" action="<?php echo base_url('anasayfa/y_girisi');?>" method="post">
    <p>
    <input type="text" id="kullanıcı adı" name="y_username" placeholder="Kullanıcı Adı" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="password" id="sifre" name="y_sifre" placeholder="Şifre" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="submit" value="Giriş">
	  <br>
  </form>
  
</div><!--login-form-wrap-->
<div class="flex-box" id="login-form-wrap">
  <br>
  <h2>Öğrenci Girişi</h2>
  <form id="login-form" action="<?php echo base_url('anasayfa/o_girisi');?>" method="post">
    <p>
    <input type="text" id="mail" name="ogr_mail" placeholder="E-mail Adresi" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="password" id="sifre" name="ogr_sifre" placeholder="Şifre" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="submit" value="Giriş">
	  <br>
  </form>
  
</div><!--login-form-wrap-->
<!-- partial -->
</div>
</body>
</html>
