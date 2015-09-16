<div class="container-fluid ng-scope" id="ContactUS">
  <div class="container">
    <h2 class="hidden_scroll visible_scroll animated fadeInDown">GET IN TOUCH</h2>
    <div class="row hidden_scroll visible_scroll animated fadeInDown">
     <div class="col-md-4 col-sm-4">
      <div class="contactItem">
       <i class="fa"><img src="<?php echo base_url(); ?>assets/media/location.jpg"/></i>
       <p>Srinagar , Kashmir , India</p>
      </div>
     </div>
    <div class="col-md-4 col-sm-4">
     <div class="contactItem">
      <i class="fa"><img src="<?php echo base_url(); ?>assets/media/email.jpg"/></i>
      <p>support@panunkart.com</p>
     </div>
    </div>
    <div class="col-md-4 col-sm-4">
     <div class="contactItem">
      <i class="fa"><img src="<?php echo base_url(); ?>assets/media/phone.jpg"/></i>
      <p>+91 0123456789</p>
     </div>
    </div>
    </div>
    <form  method="post" class="ng-pristine ng-valid">
      <div class="row hidden_scroll visible_scroll animated fadeInDown">
        <div class="col-md-4 col-sm-4 col-xs-4">
          <input type="text" name="uname" class="form-control ng-pristine ng-valid" placeholder="Full Name" data-ng-model="message.fullName">
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4">
          <input type="text" name="uname" class="form-control ng-pristine ng-valid" placeholder="Email Address" data-ng-model="message.email">
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4">
          <input type="text" name="uname" class="form-control ng-pristine ng-valid" placeholder="Phone Number" data-ng-model="message.phone">
        </div>
      </div>
      <div class="row hidden_scroll visible_scroll animated fadeInDown">
        <div class="col-md-12">
          <textarea name="usmsg" rows="6" class="form-control ng-pristine ng-valid" placeholder="Your Message" data-ng-model="message.text"></textarea>
        </div>
      </div>
      <div class="row hidden_scroll visible_scroll animated fadeInDown">
        <div class="col-md-12">
          <button type="button" data-ng-click="sendMessage()" class="btn btn-danger sendContact">Send Message</button>
        
        </div>
      </div>
    </form>
  </div>
</div>
</div>
