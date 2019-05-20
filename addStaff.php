<?php include "includes/db.php"; ?>
<?php
    if(isset($_POST['submit'])){
        
        $staff_id = $_POST['staff_id'];
        $sname = $_POST['sname'];
        $sname2 = $_POST['sname2'];
        $NIC = $_POST['NIC'];
        $Desig = $_POST['Desig'];
        $address = $_POST['address'];
        $Tel = $_POST['Tel']; 
        
        
        
        $staff_pic = $_FILES['image']['name'];
        $staff_pic_temp = $_FILES['image']['tmp_name'];
        
        move_uploaded_file($staff_pic_temp,"img/staff/$staff_pic");
        
        
         $staff_id = mysqli_real_escape_string($connection,$Staff_ID);
         $sname = mysqli_real_escape_string($connection,$sname);
         $sname2 = mysqli_real_escape_string($connection,$sname2);
         $NIC = mysqli_real_escape_string($connection,$NIC);
         $address = mysqli_real_escape_string($connection,$address);
         $Tel = mysqli_real_escape_string($connection,$Tel);

       
$query = "INSERT INTO staff(staff_id,sname,sname2,NIC,Desig,address,Tel,image) VALUES ('{$staff_id}','{$sname}','{$sname2}','{$NIC}','{$Desig}','{$address}','{$Tel}','{$staff_pic}')";
        
        $add_query = mysqli_query($connection,$query);
        
        if($add_query){
            echo"Success";
             header('LOCATION: addStaff.php');
            
        }else{
             die("QUERY FAILED ".mysqli_error($connection));
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="./cs/home2.css">
    <title>ARD LIBRARY</title>
</head>

<body data-spy="scroll" data-target="#main-nav" id="home">


    <!---navBar-->

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" id="main-nav">
        <div class="container">

            <a href="adminpro.php" class="navbar-brand"><i class="fas fa-book-reader"></i> ARD LIBRARY</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggle-icon"> <i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item">
                        <a href="#home-section" class="nav-link"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#shop-head-section" class="nav-link"><i class="fas fa-mobile"></i> Category </a>
                    </li>
                    <li class="nav-item">
                        <a href="#join-head-section" class="nav-link"><i class="fas fa-users"></i> Join</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about-head-section" class="nav-link"><i class="fas fa-info-circle"></i> About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>






    <!---Staff Home section-->


    <header id="home-section">
        <div class="div" id="dark-overlay">
            
            <div class="div" id="home-inner container">
                <div class="row mt-5 ">
                    <div class="col-lg-12 d-none d-lg-block mt-5 welcome">  
                        <h1 class="disply-4 text-sm-center welcome" >
                            <strong> WELCOME ADMIN </strong><br> <br> <br>
                     </h1>
                    <!-- <img src="./img/admin.png" id="welcome-image"> <br> <br> <br> <br> -->
                       
                    </div>
                   
                </div>
            </div>
        </div>
    </header>

    <!--Add Events interface-->
    <section id="addevent-section" class="bg-light text-mute py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-5 ml-end">
                    <img src="./img/staffAdd.png" height="300" width="300" alt="event image" class="img-fluid mb-3 rounded-left event-pic">
                </div>
                <div class="col-md-4 text-center ">
                    <h1 class="text-dark"><u>MANAGE STAFF MEMBERS</u></h1>
                    <div class="d-flex">

                        <div class="p-4 align-self-end">
                            <h2>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#contactmodal"><i class="fas fa-user-plus"></i> Add New Staff Memeber</button>
                            </h2>
                        </div>

                        <div class="p-4 align-self-end ">
                            <h2>
                            <strong>          


                             </strong><br><br>

                           <a href="viewStaff.php" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span>View Staff</a></button>
                           
                            </h2>
                        </div>  

                        <div class="p-4 align-self-end ">
                            <h2>
                            <strong>          


                             </strong><br><br>

                           <a href="searchStaff.php" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Search Staff</a></button>
                           
                            </h2>
                        </div>  
                        
                         <div class="p-4 align-self-end ">
                            <h2>
                            <strong>          


                             </strong><br><br>

                           <a href="staff_report.php" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Get Reports</a></button>
                           
                            </h2>
                        </div>  

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Add event pop up modal-->
    <div class="modal fade text-dark" id="contactmodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add new staff memeber</h5>
                    <button type="close" data-dismiss="modal">
                        <span>&times;</span>

                    </button>
                </div>
                <div class="modal-body">

                    <!--add staff form-->
                    <form action="" method="post" onsubmit="return validation()" class="bg-light" enctype="multipart/form-data">
                        
                        
                             <div class="form-group">
                            <label for="user" class="font-weight-bold">Upload Staff Member Image: </label>
                         
                           <input type="file" name="image" id="image" class="form-control">
                         
                         
                        </div>

                        
                        <!--Staff ID-->
                        <div class="form-group">
                            <label for="user" class="font-weight-bold">Staff ID: </label>
                         
                            <input type="text" class="form-control" id="sid" name="staff_id" autocomplete="off" placeholder="ex-CXXX">
                         
                            <span id="staffID" class="text-danger font-weight-bold"> </span>
                        </div>

                        <!--first name-->
                        <div class="form-group">
                            <label for="user" class="font-weight-bold">First Name: </label>
                            <input type="text" name="sname" class="form-control" id="fname" autocomplete="off" placeholder="First Name">
                            <span id="firstname" class="text-danger font-weight-bold"> </span>
                        </div>


                        <!--last name-->
                        <div class="form-group">
                            <label for="user" class="font-weight-bold">Last Name: </label>
                            <input type="text" name="sname2" class="form-control" id="fname2" autocomplete="off" placeholder="Last Name">
                            <span id="lastname" class="text-danger font-weight-bold"> </span>
                        </div>


                        <!--nic-->
                        <div class="form-group">
                            <label for="user" class="font-weight-bold">NIC: </label>
                            <input type="text" name="NIC" class="form-control" id="niCard" autocomplete="off" placeholder="ex-XXXXXXXXXV">
                            <span id="nic" class="text-danger font-weight-bold"> </span>
                        </div>


                        <!--designation-->
                        <div class="form-group">
                            <label for="user">Category</label>
                         
                            <select type="text" class="custom-select d-block w-100" id="desig" name="Desig" >
                            <option value="Choose">Choose...</option>
                            <option value="Archivist">Archivist</option>
                            <option value="Clerk">Clerk</option>
                            <option value="Database Manager">Database Manager</option>
                            <option value="Library Assistant">Library Assistant</option>
                            <option value="Technician">Technician</option>
                        
                            </select>
                         
                            <span id="designation" class="text-danger font-weight-bold"></span>
                        </div>



                        <!--Address-->
                        <div class="form-group">
                            <label class="font-weight-bold">Address: </label>
                            <input type="text" name="address" class="form-control" id="Address" autocomplete="off" placeholder="Address">
                            <span id="saddress" class="text-danger font-weight-bold"> </span>
                        </div>


                        <!--telephone-->
                        <div class="form-group">
                            <label for="user" class="font-weight-bold">Tel: </label>
                            <input type="text" name="Tel" class="form-control" id="telephone" autocomplete="off" placeholder="ex-XXXXXXXXXX">
                            <span id="tel" class="text-danger font-weight-bold"> </span>
                        </div>


                        <!--buttons-->
                        <input type="submit" name="submit" value="submit" class="btn btn-success btn-lg" autocomplete="off">
                        <button class="btn btn-primary btn-lg " type="button" onclick="window.location.href='index4.html'">Cancel</button>

                    </form><br><br>

                </div>

            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


    <!--Validation part for Add Staff-->

    <script type="text/javascript">
        function validation() {

            //var Staff_ID = document.getElementById('Staff_ID').value;
            var fname = document.getElementById('fname').value;
            var fname2 = document.getElementById('fname2').value;
            var NIC = document.getElementById('NIC').value;
            var desig = document.getElementById('desig').value;
            var address = document.getElementById('address').value;
            var Tel = document.getElementById('Tel').value;



            if(sid == ""){
                document.getElementById('staffID').innerHTML =" ** Please fill the Course ID field";
                return false;
            }

                if((sid.length <= 0) || (sid.length > 6)) {
                document.getElementById('staffID').innerHTML =" ** Staff ID lenght only 6 characters";
                return false;   
            }


            if (fname == "") {
                document.getElementById('firstname').innerHTML = " ** Please fill the First Name field";
                return false;
            }
            if ((fname.length <= 2) || (fname.length > 30)) {
                document.getElementById('firstname').innerHTML = " ** First name lenght must be between 2 and 30";
                return false;
            }
            if (!isNaN(fname)) {
                document.getElementById('firstname').innerHTML = " ** only characters are allowed";
                return false;
            }


            if (fname2 == "") {
                document.getElementById('lastname').innerHTML = " ** Please fill the Last Name field";
                return false;
            }
            if ((fname2.length <= 2) || (fname2.length > 30)) {
                document.getElementById('lastname').innerHTML = " ** Last name lenght must be between 2 and 30";
                return false;
            }
            if (!isNaN(fname2)) {
                document.getElementById('lastname').innerHTML = " ** only characters are allowed";
                return false;
            }


            if (niCard == "") {
                document.getElementById('nic').innerHTML = " ** Please fill the NIC field";
                return false;
            }
            if ((niCard.length < 11) || (niCard.length > 9)) {
                document.getElementById('nic').innerHTML = " ** NIC must be 10 elements";
                return false;
            }


            if(desig == ""){
                document.getElementById('designation').innerHTML =" ** Please fill the Designation field";
                return false;
            }


            if (Address == "") {
                document.getElementById('saddress').innerHTML = " ** Please fill the Address field";
                return false;
            }


            if (telephone == "") {
                document.getElementById('tel').innerHTML = " ** Please fill the Tel field";
                return false;
            }
            if(isNaN(telephone)){
                document.getElementById('tel').innerHTML =" ** Fill Numbers only";
                return false;
            }
            if ((telephone.length < 11) || (telephone.length > 9)) {
                document.getElementById('tel').innerHTML = " ** Tel must be 10 numbers";
                return false;
            }


        }

    </script>


    </section>
