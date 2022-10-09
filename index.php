<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PhP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  </head>
  <body>



<!-- Modal Start-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
                    <form action="insert.php" method="POST">
                    <div class="mb-3">
                    <label  class="form-label">First Name</label>
                    <input type="text" class="form-control" id="" name="firstName" placeholder="Enter First Name"> 
                    </div>
                    <div class="mb-3">
                    <label  class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="" name="lastName" placeholder="Enter Last Name"> 
                    </div>
                    <div class="mb-3">
                    <label  class="form-label">Course</label>
                    <input type="text" class="form-control" id="" name="course" placeholder="Enter Course"> 
                    </div>
                    <div class="mb-3">
                    <label  class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="" name="contact" placeholder="Enter Phone Number"> 
                    </div>
                    
                    
                    
                    
                  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="insertdata" class="btn btn-primary">Save Data</button>
      </div>

      </form>

    


    </div>
  </div>
</div>
<!-- Modal End-->







    <div class="container">
        <br><br>
        <div class="jumbotron">
            <div class="card">
                <h2 class="">PhP CRUD Bootstap Modal (Pop Up Modal)</h2>
            </div>

            <div class="card">
            
                <div class="card-body">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add</button>
                </div>
            </div>
            
            
<!--table start -->
        </div class="card">
      
        <div class="card-body">

        <?php
           include("connect.php");

                $query = "SELECT * FROM student";
                $query_run = mysqli_query($connection, $query);
           ?>
        
                   


                    


<table class="table table-dark green-table">
                      <thead>
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">FName</th>
                          <th scope="col">LName</th>
                          <th scope="col">Course</th>
                          <th scope="col">Contact</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
            <?php
      if($query_run)
      {
          foreach($query_run as $row)
          {
  ?>
                    
                        <tr>
                          <th scope="row"><?php   echo $row['id']; ?></th>
                          <td><?php   echo $row['fname']; ?></td>
                          <td><?php   echo $row['lname']; ?></td>
                          <td><?php   echo $row['course']; ?></td>
                          <td><?php   echo $row['contact']; ?></td>
                          <td>
                            <button type="button" class="btn btn-success">Edit</button>
                          </td>
                        </tr>
       <?php 
          }
        }
        else{
          echo "No Record Found";
          echo "<script> alert'Data Not Saved'; <script/>";

        }
       ?>              
                      </tbody>

                      </table>
</div>
      </div>

<!--tabel end -->


        </div>
    </div>
  



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>


</html>