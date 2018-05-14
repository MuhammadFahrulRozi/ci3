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
        </ul>
  </div> 
  
</nav>

<div class="transbox">
<div class="container">
  <h3>Masukkan Data Anda</h3>
  <p>Ingat!!! Apapun Itu Harus Jujur</p>
  <br>
  <br>
  <?php echo form_open( 'Category/create', array('class' => 'needs-validation', 'novalidate' => '') ); ?>
  <?php echo validation_errors()?>  
<table style="margin:20px auto;">
      <tr style="height: 50px;">
        <td width="100px">Nama :</td><br>
        <td><input type="text" name="nama" value="<?php echo set_value('nama') ?>">
      </tr>
      <tr style="height: 50px;">
        <td>Deskripsi : </td>
        <td><textarea cols="50" rows="10" name="deskripsi" class="form-control" ><?php set_value('deskripsi') ?></textarea></td>
      </tr>
</table>
&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
<p align="center"><button id="submitBtn" type="submit" class="btn btn-primary">Simpan</button></p>
    <?php form_close() ?>
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
