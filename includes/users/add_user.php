<?php 
        
        if(isset($_POST['add'])){

            
            $user = new User;
            $user->name = $_POST['name'];
            $user->email = $_POST['email'];
            $user->password =$_POST['password'];
            $user->phone = $_POST['phone'];
            $user->image = $_FILES['image']['name'];
            $user->temp_file = $_FILES['image']['tmp_name'];
            if(!empty($user->temp_file)){

            move_uploaded_file($user->temp_file,'./img/users'. $user->image = $_FILES['image']['name']);
    
    
           }       

            $table = 'users';

            $fields = "name, image, email, password, phone";

            $values = "'$user->name', '$user->image', '$user->email',  '$user->password', '$user->phone'";

            if($user->create($table,$fields,$values)){

                header("location: users.php?page=add_user");
            }           
                         
            
    }

?>

               <!-- Bar Chart -->
               <div style="margin-left: 70px" class="card shadow mb-4">
                <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Add New User</h6>
            </div>
            <div class="card-body">

<form action="users.php?page=add_user" method="post" enctype="multipart/form-data">
<div class="form-group">
<label for="title">Name</label>
<input type="text" value="" class="form-control" name="name" required class="validate">
</div>

<div class="form-group">
<label for="title">Image</label>
<br>
<input type="file" value="" name="image" required class="validate">
</div>

<div class="form-group">
<label for="title">Email</label>
<input type="email" value="" class="form-control" name="email" required class="validate">
</div>

<div class="form-group">
<label for="title">Password</label>
<input type="password" value="" class="form-control" name="password" required class="validate">
</div>

<div class="form-group">
<label for="title">Phone Number</label>
<input type="text" value="" class="form-control" name="phone" required class="validate">
</div>

<div class="form-group">
<input type="submit" value="Upload" class="btn btn-primary" name="add">
</div>
</form>

</div>
          </div>
        </div>

