<?php

   require_once("db/uxconnection.php");   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage Admins</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<style>
    .FieldInfo{
       color:rgb(251,174,44);
       font-family: Bitter,Georgia,"Times New Roman";
       font-size:1.2em;

    }


</style>
</head>
<body>
<div style="height:10px; background:#27aae1;"></div>
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                       <span class="sr-only">Toggle Navigation</span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>    
                </button>
                <a class="navbar-brand" href="Blog.php">
                  <img src="images_UxDesign/icons/logo2.jpg" width=96;height=20; alt="">
                </a>  
             </div>
             <div class="collapse navbar-collapse" id="collapse">
                <ul class="nav navbar-nav">
                    <li><a href="">Home</a></li>
                    <li class="active"><a href="">Blog</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">Feature</a></li>
                </ul>
                    <form action="FrontPage.php" class="navbar-form navbar-right">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search" name="Search">
                        </div>
                        <button class="btn btn-default" name="SearchButton">Go</button>
                    </form>
              </div>
        </div>
    </nav>
    <div class="line" style="height:10px; background:#27aae1;"></div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
             <ul id="Side_menu" class="nav nav-pills nav-stacked">
                <li class="active"><a href="index.php?PageName=Dashboard"><span class="glyphicon glyphicon-th"></span>&nbsp;Dashboard</a></li>
                <li><a href="index.php?PageName=AddNewPost"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Add New Post</a></li>
                <li><a href=""><span class="glyphicon glyphicon-tags"></span>&nbsp;Categories</a></li>
                <li><a href=""><span class="glyphicon glyphicon-user"></span>&nbsp;Manage Admins</a></li>
                <li><a href=""><span class="glyphicon glyphicon-comment"></span>&nbsp;Comments</a></li>
                <li><a href=""><span class="glyphicon glyphicon-equalizer"></span>&nbsp;Live Blog</a></li>
                <li><a href=""><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a></li>
             </ul>
        </div>
        <div class="col-sm-10"><!--Main-Area-->
            <div>
                <!--alert area-->
            
            </div>
            <h1>Admin Dashboard</h1>
                <div class="table-responsive">
                    <table class="table table-stripped table-hover">
                        <tr>
                           <th>No</th>                          
                           <th>Date & Time</th>
                           <th>Post Title</th>
                           <th>Category</th>
                           <th>Author</th>
                           <th>Banner</th>
                           <th>Comments</th>
                           <th>Action</th>
                           <th>Details</th>
                        </tr>
                    <?php
                    global $conn;
                    $ViewQuery = "SELECT * FROM admin_panel ORDER BY datetime desc";
                    $Execute = $conn->query($ViewQuery);
                    while($DataRows = mysqli_fetch_array($Execute)){
                        $Id = $DataRows['id'];
                        $DateTime = $DataRows['datetime']; 
                        $Title = $DataRows['title'];
                        $Category = $DataRows['category'];
                        $Admin = $DataRows['author'];
                        $Image = $DataRows['image'];
                        $Comments = $DataRows['post'];

                    ?>
                      <tr>
                        <td><?php echo $Id;?></td>
                        <td><?php echo $DateTime;?></td>
                        <td><?php echo $Title;?></td>  
                        <td><?php echo $Category;?></td>
                        <td><?php echo $Admin;?></td>
                        <td><img src="Upload/<?php echo $Image;?>" width="170px";height="50px"></td>
                        <td>Processing</td>
                        <td><a href=""><span class="btn btn-warning">EDIT</span></a>
                            <a href=""><span class="btn btn-Danger">DELETE</span></a>
                        </td>
                        <td><a href=""><span class="btn btn-primary">Live Preview</span></a>
                        </td> 
                      </tr>


                    <?php } ?>
                    </table>
                </div>          
        </div>
    </div>
</div>



