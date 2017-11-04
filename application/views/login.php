<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Login - My Tasks</title>
        <!-- Bootstrap core CSS-->
        <link href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="<?= base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template-->
        <link href="<?= base_url(); ?>assets/css/sb-admin.css" rel="stylesheet">
    </head>

    <body class="bg-dark">
        <div class="container">
            <div class="card card-login mx-auto mt-5">
                <div class="card-header">My Tasks<img class="login" src="<?= base_url(); ?>assets/img/voxus.png" width="80" /></div>    
                <div class="card-body">
                    <form role="form" method="post" action="<?= base_url(); ?>tasks/logar" class="form-login">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input class="form-control" id="exampleInputPassword1" type="password"name="senha">
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox">Lembrar senha</label>
                            </div>
                        </div>

                        <a  href="<?= base_url(); ?>Glogin"><img class="onSignIn" src="<?= base_url(); ?>assets/img/sign-in-with-google.png" width="250" /><br/></a>

                    </form>

                </div>
            </div>
        </div>

        <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
    </body>

</html>