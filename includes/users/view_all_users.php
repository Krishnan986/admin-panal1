<?php 

$users = User::show_all('users');

?>
         <!-- Bar Chart -->
         <div style="margin-left: 70px" class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">View All Users</h6>
                </div>
                <div class="card-body">
                <div class="row">
                <div class="col-xl-4" id="bulkOption">
                </div>                
                </div>
                <table class="table table-hover">
                      <thead >
                          <tr>
                              
                              <th>Id</th>                            
                              <th>Avatar</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Password</th>
                              <th>Phoneno</th>
                              <th>Edit</th>
                              <th>Delete</th>
                          </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($users as $user): ?>
                       
                                <tr>
                                  <td><?php echo $user->id;?></td>
                                  <td><div class="avatar avatar-sm "><img  style = "width: 100px" src="./img/users<?php echo $user->image;?>" alt="" class="avatar-img avatar-sm rounded-circle"></div></td>
                                  <td><?php echo $user->name;?></td>
                                  <td><?php echo $user->email;?></td>
                                  <td><?php echo $user->password;?></td>
                                  <td><?php echo $user->phone;?></td>
                                  <td><a class="btn btn-sm btn-primary shadom-sm" href="users.php?page=edit_user&id=<?php echo $user->id;?>">Edit</a></td>
                                  <td><a class="btn btn-sm m-b-15 ml-2 mr-2 btn-danger" href="users.php?page=delete&id=<?php echo $user->id;?>">Delete</a></td>
                                </tr>
                          
                      <?php endforeach; ?>
                      </tbody>
                  </table>
                  </form>
                  </div>
              </div>
              
            