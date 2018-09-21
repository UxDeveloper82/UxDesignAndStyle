<?php
   require_once("db/uxconnection.php");

   
?>   


<?php
if(isset($_POST['Submit'])){
   $Title = $conn->real_escape_string($_POST['Title']);
   $Category = $conn->real_escape_string($_POST['Category']);
   $Post = $conn->real_escape_string($_POST['Post']);
   $Admin = "Martin Fernandez";
   $Image = $_FILES['Image']['name'];
   $Target = "Upload/".basename($_FILES["Image"]["name"]);
   if(empty($Title)){
     ////
   }else{
      global $conn;   
      $ViewQuery ="INSERT INTO admin_panel(title,category,author,image,post)Values('$Title','$Category','$Admin','$Image','$Post')";
      $Execute = $conn->query($ViewQuery);
      move_uploaded_file($_FILES["Image"]["tmp_name"],$Target);

      if(!$Execute){
        ///
      }


   }

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Post</title>
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
                <li><a href="index.php?PageName=Dashboard"><span class="glyphicon glyphicon-th"></span>&nbsp;Dashboard</a></li>
                <li class="active"><a href=""><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Add New Post</a></li>
                <li><a href=""><span class="glyphicon glyphicon-tags"></span>&nbsp;Categories</a></li>
                <li><a href=""><span class="glyphicon glyphicon-user"></span>&nbsp;Manage Admins</a></li>
                <li><a href=""><span class="glyphicon glyphicon-comment"></span>&nbsp;Comments</a></li>
                <li><a href=""><span class="glyphicon glyphicon-equalizer"></span>&nbsp;Live Blog</a></li>
                <li><a href=""><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a></li>
             </ul>
        </div>
        <div class="col-sm-10"><!--Main-Area-->
            <h1>Add New Post</h1>
                <div>
                     <form action="index.php?PageName=AddNewPost" method="post" enctype="multipart/form-data">
                        <fieldset>
                            <div class="form-group">
                                <label for="title"><span class="FieldInfo">Title:</span></label>
                            <input class="form-control" type="text" name="Title" id="title" placeholder="Title"><br>
                            </div>
                            <div class="form-group">
                                <label for="title"><span class="FieldInfo">Category:</span></label>
                            <select class="form-control" name="Category" id="categoryselect">
                                 <?php 
                                  global $conn;
                                  $ViewQuery = "SELECT * FROM category ORDER BY datetime desc";
                                  $Execute =$conn->query($ViewQuery);
                                  while($DataRows= mysqli_fetch_array($Execute)){
                                       $Id= $DataRows['id']; 
                                       $Category = $DataRows['name'];
                                  ?>
                                  <option><?php echo $Category;?></option>
                                  <?php      
                                  }
                                 ?>
                                 <option></option>
                            </select>
                            </div>  
                            <div class="form-group">
                                <label for="imageselect"><span class="FieldInfo">Select Image:</span></label>
                            <input class="form-control" type="File" name="Image" id="imageselect">
                            </div>  
                            <div class="form-group">
                                <label for="postarea"><span class="FieldInfo">Post:</span></label>
                            <textarea class="form-control" name="Post" id="postarea"></textarea>
                            </div>   
                            <br>
                            <input class="btn btn-success" type="Submit" name="Submit" value="Add New Post"> 
                         </fieldset>
                     </form>
                </div>          
        </div>
    </div>
</div>



