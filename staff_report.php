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
       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="../css/style4.css">
        <link href="../css/fontawesome-all.css" rel="stylesheet">
        
        <style>
body {
  
  font-weight: 100;
  height: 100%;
  width: 100%;
  background: 
    /* top, transparent red, faked with gradient */ 
    linear-gradient( 
      rgba(200, 247, 197, 0.4),
      rgba(129, 207, 224, 0.8)
    ),
    linear-gradient( 
      rgba(130, 130, 130, 0.5),
      rgba(130, 130, 115, 0.6)
    ),
    
    radial-gradient(ellipse closest-side at center, rgba(255, 255, 255, 0.9) 50%, rgba(0, 0, 0, 0.4) 100%),
    /* bottom, image */
    url(http://www.thisisstar.com/images/100UI/002/black_marble.jpg) no-repeat center center;
  background-size: cover;
  background-attachment: fixed;
  background-blend-mode: multiply,normal,normal,normal;
}

    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

    </head>

    <body>
        <div class="wrapper">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h1>
                        <a href="#">ARD Library</a>
                    </h1>
                    <span>M</span>
                </div>
                <div class="profile-bg"></div>

              
            </nav>

            <div id="content">
                
          
                <div class="blank-page-content">
                    <div class="row">
                        <div class="col-md-12">
					<div style="width: 50%">
							<hr>
							<h1>Staff Members Information</h1>
							<hr>
							<br>
							<br>
							<br>
                            <form class="form-horizontal" action="book_report.php" method="post">
                                <div class="form-group">
                                    <label for="text" class="control-label col-xs-4">From Date</label> 
                                    <div class="col-xs-8">
                                        <input id="text" name="from_date" required="" type="date" class="form-control">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="text1" class="control-label col-xs-4">To Date</label> 
                                    <div class="col-xs-8">
                                        <input id="text1" name="to_date" required="" type="date" class="form-control">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <div class="col-xs-offset-4 col-xs-8">
                                        <button name="btnSubmit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
 </div>

                            <?php if(isset($_POST['btnSubmit'])){
                                ?>
                            <a href="#" class="btn btn-warning btn-sm" onclick="PrintElem('printdiv')">print</a>
                             <div id="printdiv">
                                 <table border="1" style="width: 100%">
                                     <thead>
                                         <tr>
                                             <th colspan="7" style="text-align: center">Book Registration<br>
                                               From : <?= $_POST['from_date'] ?>
                                                To : <?= $_POST['to_date'] ?> 
                                             </th>
                                          </tr>
                                     </thead>
                                     <thead>
                                         <tr>
                                             <th>Book ID</th>
                                             <th>Book Name</th>
                                             <th>Category</th>
                                             <th>Author</th>
                                             <th>Pages</th>
                                             <th>Publisher</th>
                                             <th>Created Date</th>
											 <th>Availability</th>
											 <th>Discription</th>
                                         </tr>
                                     </thead>
                                     <tbody>

                                         <?php
                                         if (isset($_POST['btnSubmit'])) {
                                             $sql = "SELECT * FROM books WHERE DATE(bDate) >= '" . $_POST['from_date'] . "' AND DATE(bDate) <= '" . $_POST['to_date'] . "'";
                                             $data = getData($sql);
                                             if($data!=null)
                                             foreach ($data as $value) {
                                                 ?>
                                                 <tr>
                                                     <td><?= $value['bid'] ?></td>
                                                     <td><?= $value['bookName'] ?></td>
                                                     <td><?= $value['bcategory'] ?></td>
                                                     <td><?= $value['author'] ?></td>
                                                     <td><?= $value['pages'] ?></td>
                                                     <td><?= $value['publisher'] ?></td>
                                                     <td><?= $value['bDate'] ?></td>
													 <td><?= $value['cnumber'] ?></td>
													 <td><?= $value['discription'] ?></td>
                                                 </tr>
                                                 <?php
                                             }
                                         }
                                         ?>
                                     </tbody>
                                 </table>
                             </div>
                            <?php
                            }?>
                             
                        </div>
                    </div>
                </div>
                
                
  <script type="text/javascript">
                        function PrintElem(elem)
                        {
                            var mywindow = window.open('', 'PRINT', 'height=400,width=600');

                            mywindow.document.write('<html><head><title>' + document.title + '</title>');
                            mywindow.document.write('</head><body >');
                            mywindow.document.write('<h1>' + document.title + '</h1>');
                            mywindow.document.write(document.getElementById(elem).innerHTML);
                            mywindow.document.write('</body></html>');

                            mywindow.document.close(); // necessary for IE >= 10
                            mywindow.focus(); // necessary for IE >= 10*/

                            mywindow.print();
                            mywindow.close();

                            return true;
                        }
                    </script>

                
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

    </body>

</html>
