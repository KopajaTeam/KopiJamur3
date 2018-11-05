<?php $this->load->view("admin/side/header") ?>
<?php $this->load->view("admin/side/js") ?>

  <script type="text/javascript">
    if (document.readyState === 'complete') {
        if (window.location != window.parent.location) {
          const elements = document.getElementsByClassName("iframe-extern");
          while (elemnts.lenght > 0) elements[0].remove();
            // $(".iframe-extern").remove();
        }
    };
  </script>

  <nav class="navbar navbar-expand-lg bg-primary navbar-transparent navbar-absolute" color-on-scroll="500">
    <div class="container">
        <div class="navbar-wrapper">
          <a class="navbar-brand">Login Admin</a>
    </div>
    </div>
</nav>
<div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('<?php echo base_url(); ?>master/admin/img/login.jpg'); background-size: cover; background-position: top center;">
        <div class="container">
            <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                <form class="form" method="post" action="<?php echo base_url('admin/Login_adm/proses_login') ?>">
                    <div class="card card-login card-hidden">
                        <div class="card-header card-header-rose text-center">
                            <h4 class="card-title">Log in</h4>
                            <div class="social-line">
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body ">
                            <p class="card-description text-center">Or Be Classical</p>
                            <span class="bmd-form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">email</i>
                                        </span>
                                    </div>
                                    <input type="email" name="email" class="form-control" placeholder="Email...">
                                </div>
                            </span>
                            <span class="bmd-form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                    </div>
                                    <input type="password" name="password" class="form-control" placeholder="Password...">
                                </div>
                            </span>
                        </div>
                        <div class="card-footer justify-content-center">
                            <button type="submit" class="btn btn-rose btn-link btn-lg">Lets Go</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

  <script type="text/javascript">
    $().ready(function(){
        demo.checkFullPageBackgroundImage();

        setTimeout(function(){
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>