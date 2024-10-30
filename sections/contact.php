<?php
require "dbase/db.php";


$errors = [];
$success = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    if(isset($_POST['submit'])){
    
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $sub   = isset($_POST['subject']) ? $_POST['subject'] : '';;
        $sms = isset($_POST['message']) ? $_POST['message'] : '';;

        empty($name) ? $errors[] = "Name Required" : "" ;
        empty($email) ? $errors[] = "Email Required" : "";


        // !filter_var($email,FILTER_VALIDATE_EMAIL) ? $errors[] = "Invalid Email" : "";

        if(count($errors) == 0) {
        $sql = "INSERT INTO contact (name, email, subject, message) VALUES (:name, :email, :sub, :sms)";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':name', $name,PDO::PARAM_STR);
        $stmt->bindParam(':email', $email,PDO::PARAM_STR);
        $stmt->bindParam(':sub', $sub,PDO::PARAM_STR);
        $stmt->bindParam(':sms', $sms,PDO::PARAM_STR);     
        $stmt -> execute();     
        if($stmt->execute()) {
            $success[] = "Message Sent";
        }else{
            $errors[] = "Message Not Sent";
        }                                                                                                                                                           
        }
    }
}

?>


<section class="contact section-padding" data-scroll-index='6'>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center">
          <h3>Contact us</h3>
          <span class="line"></span>
          <p>Sed quis nisi nisi. Proin consectetur porttitor dui sit amet viverra. Fusce sit amet lorem faucibus, vestibulum ante in, pharetra ante.</p>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8">
            <!-- form -->
              <form id="contact_form" action="../index.php" method="post">
                <div class="row">
                  <div class="col">
                    <input type="text" id="your_name" class="form-input w-100" name="name" placeholder="Full Name" >
                  </div>
                  <div class="col">
                    <input type="email" id="email" class="form-input w-100" name="email" placeholder="Email" >
                  </div>
                </div>
                <input type="text" id="subject" class="form-input w-100" name="subject" placeholder="Subject">
                <textarea class="form-input w-100" id="message" placeholder="Message" name="message"></textarea>
                <button class="btn-grad w-100 text-uppercase" type="submit" name="submit">submit</button>
              </form>
            </div>
            <!-- end form -->
            <div class="col-sm-12 col-md-12 col-lg-4">
              <div class="contact-info white">
                <div class="contact-item media"> <i class="fa fa-map-marker-alt media-left media-right-margin"></i>
                  <div class="media-body">
                    <p class="text-uppercase">Address</p>
                    <p class="text-uppercase">New Delhi, India</p>
                  </div>
                </div>
                <div class="contact-item media"> <i class="fa fa-mobile media-left media-right-margin"></i>
                  <div class="media-body">
                    <p class="text-uppercase">Phone</p>
                    <p class="text-uppercase"><a class="text-white" href="tel:+15173977100">009900990099</a> </p>
                  </div>
                </div>
                <div class="contact-item media"> <i class="fa fa-envelope media-left media-right-margin"></i>
                  <div class="media-body">
                    <p class="text-uppercase">E-mail</p>
                    <p class="text-uppercase"><a class="text-white" href="mailto:abcdefg@gmail.com">yogeshsingh.now@gmail.com</a> </p>
                  </div>
                </div>
                <div class="contact-item media"> <i class="fa fa-clock media-left media-right-margin"></i>
                  <div class="media-body">
                    <p class="text-uppercase">Working Hours</p>
                    <p class="text-uppercase">Mon-Fri 9.00 AM to 5.00PM.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>