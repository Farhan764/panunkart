<body>

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
          <a href="<?php echo base_url(); ?>index.php/main/index" class="navbar-brand">PANUNKART</a>
        </div>

        <div class="collapse navbar-collapse" id="head">
			<ul class="nav navbar-nav">
				<li class="active"><a href="<?php echo base_url(); ?>index.php/main/index">HOME</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/main/about">ABOUT</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/main/about">CONTACT US</a></li>
			</ul>
			<form class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default"> GO </button>
			</form>
			<ul class="nav navbar-nav navbar-right" id="head">
				<li><a href="<?php echo base_url(); ?>index.php/main/login">LOGIN</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/main/register.php">REGISTER</a></li>
			</ul>
        </div>
      </div>
    </div>
<div id="content">  
  <form action="Panun Kart.html" method="post">
    <h2>Our Location</h2>
    <div class="contact-info">
      <div class="content"><div class="left"><b>Address:</b><br>
        Panunkart<br>
        1st Floor, Snowland School Complex<br>
Buchpora, Srinagar, Kashmir<br>
India<br>
190020</div>
      <div class="right">
                <b>Telephone:</b><br>
        +91-194-2400351<br>
        <br>
                      </div>
    </div>
    </div>
    <h2>Contact Form</h2>
    <div class="content">
    <b>First Name:</b><br>
    <input type="text" name="name" value="">
    <br>
        <br>
    <b>E-Mail Address:</b><br>
    <input type="text" name="email" value="">
    <br>
        <br>
    <b>Enquiry:</b><br>
    <textarea name="enquiry" cols="40" rows="10" style="width: 50%;"></textarea>
    <br>
        <br>
   
    <div class="buttons">
      <div class="right"><input type="submit" value="Continue" class="button"></div>
    </div>
  </form>
  <br>
  <br>
</section> 

 </body>