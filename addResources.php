<?php include "includes/db.php"; ?>
<?php
    if(isset($_POST['submit'])){
        

        $Rname = $_POST['Rname'];
        $quantity = $_POST['quantity'];
        
        
        
         $Rname = mysqli_real_escape_string($connection,$Rname);
         $quantity = mysqli_real_escape_string($connection,$quantity);

       
$query = "INSERT INTO resources(Rname,quantity) VALUES ('{$Rname}','{$quantity}')";
        
        $add_query = mysqli_query($connection,$query);
        
        if($add_query){
            echo"Success";
             header('LOCATION: addResources.php');
            
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

    <!--Add Resources interface-->
    <section id="addevent-section" class="bg-light text-mute py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-5 ml-end">
                    <img src="./img/resourcesAdd.png" height="300" width="300" alt="event image" class="img-fluid mb-3 rounded-left event-pic">
                </div>
                <div class="col-md-4 text-center ">
                    <h1 class="text-dark"><u>MANAGE RESOURCES</u></h1>
                    <div class="d-flex">

                        <div class="p-4 align-self-end">
                            <h2>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#contactmodal"><i class="fas fa-wrench"></i> Add New Resource</button>
                            </h2>
                        </div>


                        <div class="p-4 align-self-end ">
                            <h2>
                            <strong>          


                             </strong><br><br>

                           <a href="searchResources.php" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Search Resources</a></button>
                           
                            </h2>
                        </div>  

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Add resource pop up modal-->
    <div class="modal fade text-dark" id="contactmodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add new resource</h5>
                    <button type="close" data-dismiss="modal">
                        <span>&times;</span>

                    </button>
                </div>
                <div class="modal-body">

                    <!--add staff form-->
                    <form action="" method="post" onsubmit="return validation()" class="bg-light" enctype="multipart/form-data">
                        
                        
                        <!--Resource Name-->
                        <div class="form-group">
                            <label for="user" class="font-weight-bold">Resource Name: </label>
                            <input type="text" name="Rname" class="form-control" id="resName" autocomplete="off" placeholder="Resource Name">
                            <span id="rn" class="text-danger font-weight-bold"> </span>
                        </div>


                        <!--Quantity-->
                        <div class="form-group">
                            <label for="user" class="font-weight-bold">Quantity: </label>
                            <input type="text" name="quantity" class="form-control" id="qty" autocomplete="off" placeholder="ex-xxx">
                            <span id="QTY" class="text-danger font-weight-bold"> </span>
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
            var Rname = document.getElementById('Rname').value;
            var quantity = document.getElementById('quantity').value;



            if (resName == "") {
                document.getElementById('rn').innerHTML = " ** Please fill the Resource Name field";
                return false;
            }
            if ((resName.length <= 2) || (fname.length > 30)) {
                document.getElementById('rn').innerHTML = " ** Resource name lenght must be between 2 and 30";
                return false;
            }
            if (!isNaN(resName)) {
                document.getElementById('rn').innerHTML = " ** only characters are allowed";
                return false;
            }


            if (qty == "") {
                document.getElementById('QTY').innerHTML = " ** Please fill the Quantity field";
                return false;
            }

        }

    </script>


    </section>
