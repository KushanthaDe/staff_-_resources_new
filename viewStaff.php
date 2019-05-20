<?php include "includes/db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ARD Library</title>
       
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="./home.css">
    <title>ARD Library</title>
	
	
</head>
<body>
    <!---navBar--->
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

       

        <!--Staff Head-->
        <section id="book-head-section">
            <div class="col text-start py-5 ">
                <a href="./addStaff.php"class="nav-link"><i class="fas fa-caret-square-left"></i> BACK</a>
            </div>

            <div class="container">

                <div class="row ">
                    <div class="col text-center py-5 "> 
                            <h1 class="display-4"><br><i class="fas fa-users"></i> Staff<br></h1>
                        <p class="lead">Our board of staff members</p>
                    </div>
                </div>
            </div>
        
        </section>
        
<!--Staff home-->

<section id="content">
        <div class="container">
    
          <div class="row">
    
            <div class="col-lg-12"><br>
             
          
            </div><br><br><br>
              
                
              
<?php
        
                        $query = "SELECT * FROM staff";
                        $select_all_staff_query = mysqli_query($connection,$query);
                        
                    
                        while($row = mysqli_fetch_assoc($select_all_staff_query)){
                            $sname = $row['sname'];
                            $sname2 = $row['sname2'];
                            $Desig = $row['Desig'];
                            $address = $row['address'];
                            $image = $row['image'];
    
                            
                           
?>
                 <div class="col-sm-4 col-lg-4 col-md-4">
              <div class="thumbnail">
                <div class="inner">
                  <a href="#"> <img src="./img/staff/<?php echo $image;  ?>" height="300" width="300" alt="new-arrivals1"></a>
                </div>
              
                <div class="caption">
                  <h5><?php echo $sname." ".$sname2;  ?></h5>
                  <p><?php echo $Desig  ?></p>
                </div>
              </div>
            </div>
              
              
              
              
             <?php                         }
 ?> 
              
              
              
              
              
              
              
              
              
    
       
    
    

    
    
    

    

 
    
              
            </div>
            </div>
      </section>
</body>
</html>