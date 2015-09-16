

  <div id="completeHeader" class="container-fluid">
    
    <!-- ************************************ HEADER **************************************** -->

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">

        <!-- Navigation Title -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#head">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="" class="navbar-brand">PANUNKART</a>
        </div>

        <div class="collapse navbar-collapse" id="head">
			<ul class="nav navbar-nav">
				<li class="active"><a href="<?php echo base_url(); ?>index.php/main/index">HOME</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/main/about">ABOUT</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/main/contact">CONTACT US</a></li>
			</ul>
			<form class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default"> GO </button>
			</form>
			<ul class="nav navbar-nav navbar-right" id="head">
				<li><a href="<?php echo base_url(); ?>index.php/main/login">LOGIN</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/main/register">REGISTER</a></li>
			</ul>
        </div>
      </div>
    </div>

    <!-- ************************************ CAROUSEL **************************************** -->

  <div id="mycarousel" class="carousel slide">
    <ol class = "carousel-indicators">
        <li data-target = "#mycarousel" data-slide-to = "0" class="active"></li>
        <li data-target = "#mycarousel" data-slide-to = "1"></li>
        <li data-target = "#mycarousel" data-slide-to = "2"></li>
    </ol>
    <div  class="carousel-inner">

      <div class="item active">
        <center><img src="<?php echo base_url(); ?>assets/media/1.jpg" alt="image1" class="img-responsive"></center>

      </div>

      <div class="item">
        <center><img src="<?php echo base_url(); ?>assets/media/2.jpg" alt="image1" class="img-responsive"></center>

      </div>

      <div class="item">
        <center><img src="<?php echo base_url(); ?>assets/media/3.jpg" alt="image1" class="img-responsive"></center>

      </div>
    </div>

    <a class="carousel-control left" href="#mycarousel" data-slide="prev">
      <span class="icon-prev"></span>
    </a>
    <a class="carousel-control right" href="#mycarousel" data-slide="next">
      <span class="icon-next"></span>
    </a>
  </div>

</div>
