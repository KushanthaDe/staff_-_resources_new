<!--
Design: IT17153850  H.K.B De Silva
Function Administrator
-->

<?php include "includes/DBs.php"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ARD Library</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="keywords" content="" />
        <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
		
		
		
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="./cs/home2.css">
		
		
		
		
		
		
		
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="../css/style4.css">
        <link href="../css/fontawesome-all.css" rel="stylesheet">
		<link rel='stylesheet prefetch' href='http://dfcb.github.io/extra-strength-responsive-grids/css/grid.css'>
		<link rel='stylesheet prefetch' href='http://thisisstar.com/images/100UI/002/css/paymentfont.css'>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

    </head>

   <body>
        

            <div class="container">
                <a href="adminpro.php" class="navbar-brand"><i class="fas fa-book-reader"></i> ARD LIBRARY</a>
            </button></div>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item">
                        <a href="./addStaff.php"class="nav-link"><i class="fas fa-caret-square-left"></i> BACK</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>


            <!--
               <div class="pos-f-t">
                   <div class="collapse" id="navbarToggleExternalContent">
                   <div class="bg-dark p-4">
           <h5 class="text-white h4"><a href="adminpro.php" class="navbar-brand"><i class="fas fa-book-reader"></i>   ARD LIBRARY</a></h5>
           <span class="text-muted"><li class="nav-item">
                            <a href="./addStaff.php"class="nav-link"><i class="fas fa-caret-square-left"></i> BACK</a>
                           </li></span>
           </div>
       </div>
       <nav class="navbar navbar-dark bg-dark">
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
           </button>
       </nav>
       </div>
        -->

                    <div class="panel panel-warning">
					
                        <div class="panel-heading "><h1><center>Staff List</center></h1></div>
                        <div class="panel-body">
						
                            <table id="example" class="display table-responsive" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Staff ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>NIC</th>
								<th>Designation</th>
                                <th>Address</th>
								<th>Tel</th>
                                <th>Image</th>
                                <th></th>
								<th></th>
								
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = " SELECT * FROM staff ";
                            $resultx = getData($sql);
                            if ($resultx != FALSE) {
                                while ($row = mysqli_fetch_assoc($resultx)) {
                                    ?>
                                    <tr>
                                        <td><?= $row['reg_id'] ?></td>
                                        <td><?= $row['staff_id'] ?></td>
                                        <td><?= $row['sname'] ?></td>
                                        <td><?= $row['sname2'] ?></td>
                                        <td><?= $row['NIC'] ?></td>
                                        <td><?= $row['Desig'] ?></td>
                                        <td><?= $row['address'] ?></td>
                                        <td><?= $row['Tel'] ?></td>
                                        <td><?= $row['image'] ?></td>
                                        <td></td>
                                        <td><a class="btn btn-success btn-sm" a href="./book_update.php?id=<?php$row['id'] ?>">update</a>
										 <a onclick="return (function(){
    if(confirm('Want to remove?')){return true;}else{return false;}
})();" class="btn btn-danger btn-sm" href="unenroll.php?name=<?= $value['name'] ?>&created_date=<?= $value['created_date'] ?>&flag=DELETE&id=<?= $value['id'] ?>">Remove</a></td>
										</td>
                                    </tr>

                                    <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                        </div>
                    </div>
                    


                </div>

               
            </div>
        </div>

        <script src='../js/jquery-2.2.3.min.js'></script>

        <script>
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>

        <script>
            $(document).ready(function () {
                $(".dropdown").hover(
                        function () {
                            $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                            $(this).toggleClass('open');
                        },
                        function () {
                            $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                            $(this).toggleClass('open');
                        }
                );
            });
        </script>
 
        <script src="../js/bootstrap.min.js"></script>


        <link href="../css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#example').DataTable();
            });
        </script>
        
        
        
    </body>
    
    

</html>
