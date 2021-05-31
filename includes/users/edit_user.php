<?php 
        ob_start();
        $id = $_GET['id'];
        $user = User::show_by_id('users', $id);
        
        if(isset($_POST['update'])){
        
           $user->name = $_POST['name'];           
           $user->email = $_POST['email'];
           $user->password =$_POST['password'];
           $user->phoneno = $_POST['phone'];
             
           $table = 'users';
        
           $values = "name = '$user->name', email = '$user->email', password = '$user->password', phone = '$user->phoneno'";
           
           
          
        
      
    
?>

               <!-- Bar Chart -->
                 <form action="users.php?page=view" method="post"></form>
               <?php                
               if($user->update($table, $values)){
            echo "<h5 style='margin-left: 615px'>Succesfully Updated</h5><a style='margin-left: 650px' class='btn btn-sm btn-primary shadom-sm' href='users.php?page=view'>Toch to View</a>";
           } 
          }
           ?>
               <div style="margin-left: 70px" class="card shadow mb-4">              
                <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
            </div>
            <div class="card-body">
<form action="users.php?page=edit_user&id=<?php echo $user->id; ?>" method="post" enctype="multipart/form-data">
<div class="form-group">
<label for="title">Name</label>
<input type="text" value="<?php echo $user->name; ?>" class="form-control" name="name">
</div>

<div class="form-group">
<label for="title">Image</label>
<br>
<td><img style = "width: 60px" src="./img/users<?php echo $user->image;?>" alt="" srcset=""></td>
<br>

</div>

<div class="form-group">
<label for="title">Email</label>
<input type="email" value="<?php echo $user->email; ?>" class="form-control" name="email">
</div>

<div class="form-group">
<label for="title">Password</label>
<input type="password" value="<?php echo $user->password; ?>" class="form-control" name="password">
</div>

<div class="form-group">
<label for="title">PhoneNo</label>
<input type="text" value="<?php echo $user->phone; ?>" class="form-control" name="phone">
</div>

<div class="form-group">
<input type="submit" value="Update" class="btn btn-primary" name="update">
</div>
</form>

</div>
          </div>
        </div>
