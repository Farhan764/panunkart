
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">

        <!-- Navigation Title -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#head">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="<?php echo base_url(); ?>index.php/main/index" class="navbar-brand">PANUNKART</a>
        </div>

        <div class="collapse navbar-collapse" id="head">
			<ul class="nav navbar-nav">
				<li class="active"><a href="<?php echo base_url(); ?>index.php">HOME</a></li>
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
				<li><a href="<?php echo base_url(); ?>index.php/main/login ">LOGIN</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/main/register ">REGISTER</a></li>
			</ul>
        </div>
      </div>
    </div>