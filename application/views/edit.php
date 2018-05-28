<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
body {
  position: relative ;
  background: url(<?php echo base_url('assets/images/header-image/a.png')?>) no-repeat fixed;
  -webkit-background-size: 100% 100%;
  -moz-background-size: 100% 100%;
  -o-background-size: 100% 100%;
  background-size: 100% 100%;
}

  div.transbox {
  margin: 30px;
  background-color:rgba(252,252,252, 0.8);
  border: 1px solid black;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}

</style>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand"><img src="<?php echo base_url('assets/images/header-image/image05.jpg')?>" width="60" height="35"
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo base_url('Welcome/tugas')?>">Home</a></li>
          <li><a href="<?php echo base_url('Welcome/tugas')?>">About</a></li>
          <li><a href="<?php echo base_url('Welcome/tugas')?>">Blog</a></li>
          <li class="active"><a href="<?php echo base_url('user/login')?>">Logout</a></li>
        
        </ul>
  </div> 
  
</nav>

<div class="transbox">
<div class="container">
  <h3>Masukkan Data Anda</h3>
  <p>Ingat!!! Apapun Itu Harus Jujur</p>
  <br>
  <br>
  <?php foreach($blog as $u){ ?>
<form method="post" action="<?php echo base_url(). 'Blog/update'; ?>" enctype ="multipart/form-data">
  <table class="table table-hover">
      <tr>
          <td width="100">Judul</td>
            <td>&nbsp;&nbsp;</td>    
            <td><input type="hidden" name="id" value="<?php echo $u->id ?>">
            <input type="text" class="form-control" name="judul" value="<?php echo $u->judul ?>" required></td>
            
        </tr>
        <tr>
          <td>Tanggal</td>
            <td>&nbsp;&nbsp;</td>
            <td><input type="text" class="form-control" name="tanggal" value="<?php echo $u->tanggal ?>" required></td>
        </tr>
        <tr>
          <td>Author</td>
            <td>&nbsp;&nbsp;</td>
            <td><input type="text" class="form-control" name="author" value="<?php echo $u->author ?>" required></td>
        </tr>
        <tr>
          <td>Konten</td>
            <td>&nbsp;&nbsp;</td>
            <td><input class="form-control" style="height: 200px;width: 500px;" name="konten" value="<?php echo $u->konten ?>"></input></td>
        </tr> 
          <td>Gambar</td>
            <td>&nbsp;&nbsp;</td>
            <td><input type="file" name="userfile" value="<?php echo $u->gambar ?>" size="20" ></td>
    </table>
<input class="btn btn-info" type="submit" name="kirim" value="Simpan" /> &nbsp;<a href="user.php?content=kustomer" class="btn btn-warning">Cancel</a><br><br>
</form>
</div>
</div>
<?php } ?>
</body>
</html>
