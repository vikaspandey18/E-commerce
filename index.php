<?php
session_start();
include('include/conn.php');
if ($_SESSION['no'] == 0) {
	header('location:login.php');
}
include('include/header.php');
include('include/top.php');
?>

<!-- carousel start -->

 <div class="card">     
              <!-- /.card-header -->
  <div class="card-body">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="img-fluid" src="img/phone.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="img-fluid" src="img/phone2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="img-fluid h-0" src="img/phone3.jpg" alt="Third slide">
          </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-custom-icon" aria-hidden="true">
          <i class="fas fa-chevron-left"></i>
        </span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-custom-icon" aria-hidden="true">
          <i class="fas fa-chevron-right"></i>
        </span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <!-- /.card-body -->
</div>

<!-- carousel end -->

<!-- section 1 start -->
<div class="container my-5">
	<div class="row">
		<div class="col-sm-4 py-4">
			<img src="img/about.png" class="img-fluid">
		</div>
		<div class="col-sm-8 py-5 text-right">
			<h3 class="text-info font-weight-bold">About Us</h3>
			<h1 class="">Our Mobile Shop</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit es.</p>
		</div>
	</div>
</div>
<!-- section 1 end -->

<div class="brand-line"></div>

<!-- our brand start -->

<div class="container">
	<h1 class="ourbrand text-center">Our Brand</h1>
</div>

<div class="container-fluid">
  <section class="content">
    <div class="card card-solid">
      <div class="card-body pb-0">
        <div class="row">
          <?php 

            $query = "SELECT * FROM product";
            $query_run = mysqli_query($conn,$query);

            // $row = mysqli_fetch_assoc($query_run);

            foreach ($query_run as $row) {
           
             ?>
          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                 Mobile Phone
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b><?php echo $row['name']; ?></b></h2>
                      <p class="text-muted text-sm">
                          <b>About: </b> <?php echo $row['cata']; ?> <br>
                          <b>Brand: </b><?php echo $row['brand']; ?> <br>
                      </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-rupee-sign"></i></span>
                          <del><?php echo $row['total']; ?></del>  
                          <i class="fas fa-rupee-sign"></i> <?php echo $row['price']; ?>
                        </li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="<?php echo $row['image'] ?>" alt="user-avatar" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-center">
                    <a href="specifi.php?id=<?php echo $row['id'] ?>" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i> More Detail
                    </a>
                    <a href="cart.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Add To Cart
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>    
      </div>
    </div>
  </section>
</div>
<!-- our brand end -->

<!-- client start -->
<div class="container-fluid" style="background-color: #f5f6fa;">
  <div class="container">
  <h1 class="ourclient text-center">What Says Our Client </h1>
</div>
<div class="container">
   <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                         src="js/dist/img/user4-128x128.jpg"
                         alt="User profile picture">
                  </div>

                  <h3 class="profile-username text-center">Nina Mcintire</h3>

                  <p class="text-muted text-center">Software Engineer</p>

                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Followers</b> <a class="float-right">1,322</a>
                    </li>
                  </ul>

                  <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                </div>
                <!-- /.card-body -->
              </div>
            <!-- /.card -->
            </div>
            <div class="col-md-9">
                <div class="card">
                  <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="js/dist/img/user4-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="#">Nina Mcintire</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Shared publicly - 7:30 PM today</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      </p>

                      <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comments (5)
                          </a>
                        </span>
                      </p>

                      <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    </div>
                    <!-- /.post -->
                  </div>
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                  <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="js/dist/img/user6-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="#">Adam Jones</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Shared publicly - 9:30 PM today</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      </p>

                      <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comments (10)
                          </a>
                        </span>
                      </p>

                      <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    </div>
                    <!-- /.post -->
                  </div>
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
                </div>
            </div>
            <div class="col-md-3">
              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                         src="js/dist/img/user6-128x128.jpg"
                         alt="User profile picture">
                  </div>

                  <h3 class="profile-username text-center">Adam Jones</h3>

                  <p class="text-muted text-center">Marketing</p>

                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Followers</b> <a class="float-right">1,500</a>
                    </li>
                  </ul>

                  <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                </div>
                <!-- /.card-body -->
              </div>
            </div>  
        </div>
        <div class="row">
            <div class="col-md-3">
              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                         src="js/dist/img/user2-160x160.jpg"
                         alt="User profile picture">
                  </div>

                  <h3 class="profile-username text-center">Jonathan Burke Jr.</h3>

                  <p class="text-muted text-center">Software Engineer</p>

                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Followers</b> <a class="float-right">1,000</a>
                    </li>
                  </ul>

                  <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                </div>
                <!-- /.card-body -->
              </div>
            <!-- /.card -->
            </div>
            <div class="col-md-9">
                <div class="card">
                  <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="js/dist/img/user2-160x160.jpg" alt="user image">
                        <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Shared publicly - 7:30 PM today</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      </p>

                      <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comments (8)
                          </a>
                        </span>
                      </p>

                      <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    </div>
                    <!-- /.post -->
                  </div>
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
                </div>
            </div>
        </div>
        <br>
      </div>
    </section>
</div>

</div>


<!-- client end -->



<?php include('include/footer.php') ?>