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
      <li class="active"><a href="<?php echo base_url('user/login')?>">Login</a></li>
        </ul>
  </div> 
  
</nav>


  <body>
  	<div class="transbox">
	<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">

<?php echo form_open('user/register', array('class' => 'needs-validation', 'novalidate' => '')); ?>
<?php echo validation_errors()?>
   <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
   </div>
   <div class="form-group">
        <label>Kodepos</label>
        <input type="text" class="form-control" name="kodepos" placeholder="Kodepos">
   </div>
    <div class="form-group">
   		<label>Email</label>
        <input type="text" class="form-control" name="email" placeholder="Email">
   </div>
    <div class="form-group">
   		<label>Username</label>
        <input type="text" class="form-control" name="username" placeholder="Username">
   </div>
    <div class="form-group">
   		<label>Password</label>
        <input type="text" class="form-control" name="password" placeholder="Password">
   </div>
   <div class="form-group">
   		<label>Konfirmasi Password</label>
        <input type="text" class="form-control" name="password2" placeholder="Konfirmasi Password">
   </div>

   <div class="form-group">
   	<label for="">Pilih Jenis Member</label>
   	<div class="form-check">
   	<input class="form-check-input" type="radio" name="membership" id="membergratis" value="2" checked>
   		<label class="form-check-label" for="membergratis">Free Member</label>
   	</div>

   	<div class="form-check">
   		<input class="form-check-input" type="radio" name="membership" id='memberberbayar' value="3">
   		<label class="form-check-label" for="memberberbayar">Paid Member</label>
   	</div>
   </div>
   <button type="submit" class="btn btn-primary btn-block">Daftar</button>
<?php echo form_close(); ?>
</div>
</div>
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
