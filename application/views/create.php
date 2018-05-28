<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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

.invalid-feedback{
  display: block;
}

</style>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand"><img src="<?php echo base_url('assets/images/header-image/image05.jpg')?>" width="60" height="35">
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo base_url('Welcome/tugas')?>">Home</a></li>
          <li><a href="<?php echo base_url('Welcome/tugas')?>">About</a></li>
          <li><a href="<?php echo base_url('Welcome/tugas')?>">Blog</a></li>
          <li><a href="<?php echo base_url('Category')?>">Kategori</a></li>
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
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('blog/tambah_aksi', array('class' => 'needs-validation', 'novalidate' => '') );
?>
<!-- <form method="post" action="<?php //echo base_url(). 'Blog/tambah_aksi'; ?>" enctype ="multipart/form-data">
 -->  
 <table class="table table-hover">
      <tr>
          <td width="100">Judul</td>
            <td>&nbsp;&nbsp;</td>
            <td><input type="text" value="<?php echo set_value('judul')?>" class="form-control" name="judul">
           <!--  <div class="invalid-feedback">Isi judul dulu DULUR</div>
           --></td>
        </tr>
         <tr>
          <td width="100">Kategori</td>
            <td>&nbsp;&nbsp;</td>
            <td><?php echo form_dropdown('kategori', $dropdown, set_value('kategori'), 'class="form-control" required');?>
           <!--  <div class="invalid-feedback">Isi judul dulu DULUR</div>
           --></td>
        </tr>
        <tr>
          <td>Tanggal</td>
            <td>&nbsp;&nbsp;</td>
            <td><input type="text" value="<?php echo set_value('tanggal')?>" class="form-control" name="tanggal">
          <!--   <div class="invalid-feedback">Isi tanggal dulu BOSSSKUUUUU</div>
            --> </td> 
        </tr>
        <tr>
          <td>Author</td>
            <td>&nbsp;&nbsp;</td>
            <td><input type="text" value="<?php echo set_value('author')?>" class="form-control" 
            name="author">
           <!--  <div class="invalid-feedback">Isi authoor dulu BROOHHHH</div>
            --> </td>
        </tr>
        <tr>
          <td>Konten</td>
            <td>&nbsp;&nbsp;</td>
            <td><textarea class="form-control" style="height: 200px;width: 500px;" name="konten"><?php echo set_value('konten')?></textarea></td>
        </tr> 
          <td>Gambar</td>
            <td>&nbsp;&nbsp;</td>
            <td><input type="file" value="<?php echo set_value('gambar')?>" name="userfile" size="20" /></td>
    </table>
<!-- <button id="submitBtn" type="submit" class="btn btn-primary">Post Artikel</button> -->
<input class="btn btn-info" id="submitBtn" type="submit" name="kirim" value="Create" /> 
&nbsp;<a href="user.php?content=kustomer" class="btn btn-warning">Cancel</a><br><br>
</div>
</div>

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
<script type="text/javascript">
  $(document).ready(function () {
    $("#submitBtn").click(function () {

        var form = $(".needs-validation")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.addClass('was-validated');
    })
})
</script>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

</body>
</html>
