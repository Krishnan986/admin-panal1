<?php 
      include 'includes/header.php';

      include 'includes/sidebar.php';

?>



<main class="admin-main">
    
    <!--site header begins-->
<?php include 'includes/nav.php';?>

    <section class="admin-content ">
        <div class="container py-5">
        <div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-primary shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Users</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">
          <?php
            $table = 'users';
            $num = User::getRowsNumber($table);
            echo $num;
            
            ?>
          </div>
        </div>
        <div class="col-auto">
          <i class="fas fa-calendar fa-2x text-gray-300"></i>
        </div>
      </div>
    </div>
  </div>
</div>

</div>

<!-- Content Row -->

            <div class="row ">

                <div class="col-lg-4  m-b-30 ">
                    <div class="card m-b-30 full-height">
                        <img src="img/patterns/header.png" class="rounded-top" width="100%" alt="header">
                        <div class="card-body  bg-gray-900 rounded-bottom ">
                            <div class="pull-up-sm">
                                <div class="avatar avatar-lg">
                                    <div class="avatar-title rounded-circle mdi mdi-heart bg-primary"></div>
                                </div>
                            </div>
                            <h1 class="text-white pt-4 fw-300">
                                 <span class="js-greeting"></span>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12  ">
                    <div class="card m-b-30">                 
                    </div>
                </div>

            </div>
         

                </div>


            </div>
        

                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>