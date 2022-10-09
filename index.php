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



<!-- Modal(to insert data) Start-->
<div class="modal fade" id="studentAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <input type="text" class="form-control" id="" name="fname" placeholder="Enter First Name"> 
                    </div>
                    <div class="mb-3">
                    <label  class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="" name="lname" placeholder="Enter Last Name"> 
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


<!-- ############################################################################################### -->



<!-- Modal(To edit Data) Start-->
<div class="modal fade" id="studentEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
                    <form action="update.php" method="POST">
                    <div class="mb-3">
                     
                      <input type="hidden" name="update_id" id="update_id">
                    <label  class="form-label">First Name</label>
                    <input type="text" name="fname" id="fname" class="form-control"
                                placeholder="Enter First Name">                    </div>
                    <div class="mb-3">
                    <label  class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name"> 
                    </div>
                    <div class="mb-3">
                    <label  class="form-label">Course</label>
                    <input type="text" class="form-control" id="course" name="course" placeholder="Enter Course"> 
                    </div>
                    <div class="mb-3">
                    <label  class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter Phone Number"> 
                    </div>
                    
                    
                    
                    
                  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="updatedata" class="btn btn-primary"> Update Data</button>
      </div>

      </form>

    


    </div>
  </div>
</div>
<!-- Modal End-->

<!-- ############################################################################################### -->



<!-- Modal(To Delete Data) Start-->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
                    <form action="delete.php" method="POST">
                    <div class="mb-3">
                     
                      <input type="hidden" name="delete_id" id="delete_id">
                  <h4>Do you want to delete this data?</h4>                 
                              
                              
                              </div>     

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" name="deletedata" class="btn btn-danger"> Delete</button>
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
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#studentAddModal">Add</button>
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
        
                   


                    


<table class="table table-dark ">
                      <thead>
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">FName</th>
                          <th scope="col">LName</th>
                          <th scope="col">Course</th>
                          <th scope="col">Contact</th>
                          <th></th>
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
                          <td><?php   echo $row['id']; ?></td>
                          <td><?php   echo $row['fname']; ?></td>
                          <td><?php   echo $row['lname']; ?></td>
                          <td><?php   echo $row['course']; ?></td>
                          <td><?php   echo $row['contact']; ?></td>
                          <td>
                            <button type="button" class="btn btn-success editbtn" onclick="popEditModal()">Edit</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-danger deletebtn" onclick="popEditModal()">Del</button>
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


<script>
 $(document).ready(function () {

$('.deletebtn').on('click', function () {

    $('#deleteModal').modal('show');

    $tr = $(this).closest('tr');

    var data = $tr.children("td").map(function () {
        return $(this).text();
    }).get();

    console.log(data);
    $('#delete_id').val(data[0]);
  
});
})

  

 
</script>



<script>
 $(document).ready(function () {

$('.editbtn').on('click', function () {

    $('#studentEditModal').modal('show');

    $tr = $(this).closest('tr');

    var data = $tr.children("td").map(function () {
        return $(this).text();
    }).get();

    console.log(data);

    $('#update_id').val(data[0]);
    $('#fname').val(data[1]);
    $('#lname').val(data[2]);
    $('#course').val(data[3]);
    $('#contact').val(data[4]);
});
});

  

 
</script>


</body>


</html>