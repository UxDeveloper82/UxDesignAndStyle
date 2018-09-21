<?php
    require_once("db/uxconnection.php");
    $ViewQuery = "SELECT * FROM admin_panel ORDER BY datetime";
    $result=$conn->query($ViewQuery);

?>
<br><br><br>
<div class="container">
      <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <h1 class="card-my-4">Best Web Development & Programming 
              <br><small>Blogs for 2017</small>
            </h1>
              <!-- Blog Post -->
              <div class="card mb-4">
                  <?php while($Rows=mysqli_fetch_assoc($result)) :?>
                  <img class="img-responsive" src="Upload/<?= $Rows['image'];?>" alt="Card image cap">
                  <div class="card-body">
                        <h2 class="card-title"><?= $Rows['title'];?></h2>
                        <p class="card-text"><?= $Rows['post'];?></p>
                        <a href="#" class="btn btn-primary">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on <?= $Rows['datetime'];?> by
                    <a href="#"><?= $Rows['author'];?></a>
                    </div>
                  <?php endwhile;?>   
              </div>
          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
             <!-- Search Widget -->
                  <div class="card my-4">
                      <h5 class="card-header">Search</h5>
                      <div class="card-body">
                           <div class="input-group">
                           <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                  <button class="btn btn-secondary" type="button">Go!</button>
                            </span>
                       </div>
                 </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Web Design</a>
                    </li>
                    <li>
                      <a href="#">HTML</a>
                    </li>
                    <li>
                      <a href="#">Freebies</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">JavaScript</a>
                    </li>
                    <li>
                      <a href="#">CSS</a>
                    </li>
                    <li>
                      <a href="#">Tutorials</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
                    JavaScript is the most popular language above Java, Python, Node.js, Ruby, and more. 
                    JavaScript is the language that browsers use. It's easy to get started with and to understand.
                     You can get going right away - unlike other languages, you don't have install a bunch of programs 
                     before you can even begin.Sep 14, 2017
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->
  </div>
<!-- /.container -->
