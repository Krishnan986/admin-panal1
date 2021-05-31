<?php ob_start();
      include 'includes/header.php'; ?>
      <br>
<?php include 'includes/sidebar.php'; ?>
      <br>
<?php include 'includes/nav.php'; ?>
      <br> 
      
      ?>

          <!-- Begin Page Content -->
            <div class="container-fluid">
                <?php

                if(isset($_GET['page'])){

                  $page = $_GET['page'];
                  
                } else {
                  $page ='';
                }

                 switch($page) {
                 
                  case 'add_user';
                  include 'includes/users/add_user.php';
                  break;

                  case 'delete';
                  include 'includes/users/delete_users.php';
                  break;

                  case 'edit_user';
                  include 'includes/users/edit_user.php';
                  break;

                  case 'view';
                  include 'includes/users/view_all_users.php';
                  break;

                  default:
                  include 'includes/users/view_all_users.php';
                  break;

                 } 
                ?>
            </div>
      <!-- End of Main Content -->

      <?php include 'includes/footer.php'; ?>