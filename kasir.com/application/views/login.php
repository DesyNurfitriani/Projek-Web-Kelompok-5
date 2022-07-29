<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <?php $this->load->view('partials/head'); ?>
</head>

<body class="light ">
  <div class="wrapper vh-100">
      <div class="row align-items-center h-100">
        <form method="post" action="auth-check" class="col-lg-3 col-md-4 col-10 mx-auto text-center">
          <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
            <img src="<?=base_url();?>assets/assets/images/assu.png" alt="..." class="avatar-img" style= "height: 185px;">
          </a>
          <h1 class="h6 mb-3"></h1>
          <h4 class="mb-2" style="text-align: center;">Selamat Datang Di Toko 3 Putri Tani</h4>

          <div class="mb-3">

                  <label for="username" class="form-label">Username</label>
                  <input
                    type="text"
                    class="form-control"
                    id="username"
                    name="username"
                    placeholder="Masukkan Username"
                    autofocus
                  />
                </div>
                <div class="mb-4">
            
                  <label for="password" class="form-label">Password</label>
                  <input
                    type="password"
                    class="form-control"
                    id="password"
                    name="password"
                    placeholder="Masukkan Password"
                    autofocus
                  />
                  
                </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
          <p class="mt-5 mb-3 text-muted">Buatan anaknya mama</p>
        </form>
      </div>
    </div>

<?php $this->load->view('partials/footer'); ?>
<script src="<?php echo base_url('assets/vendor/adminlte/plugins/jquery-validation/jquery.validate.min.js') ?>"></script>
<script>
  $('form').validate({
    errorElement: 'span',
    errorPlacement: (error, element) => {
      error.addClass('invalid-feedback')
      element.closest('.input-group').append(error)
    },
    submitHandler: () => {
      $.ajax({
        url: '<?php echo site_url('login') ?>',
        type: 'post',
        dataType: 'json',
        data: $('form').serialize(),
        success: res => {
          if (res == 'tidakada') {
            $('.alert').html('Username tidak terdaftar')
            $('.alert').removeClass('d-none')
          } else if (res == 'passwordsalah') {
            $('.alert').html('Password Salah')
            $('.alert').removeClass('d-none')
          } else {
            $('.alert').html('Sukses')
            $('.alert').addClass('alert-success')
            $('.alert').removeClass('d-none alert-danger')
            setTimeout(function() {
              window.location.reload()
            }, 1000);
          }
        },
        error: err => {
          console.log(err);
        }
      })
    }
  })
</script>
</body>
</html>
