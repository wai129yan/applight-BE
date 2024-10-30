<!-- < <
require "dbase/db.php";

$errors = [];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  if(isset($_POST['submit'])){
    $email = trim($_POST['email']);
    $pass = $_POST['password'];
    $hashPass = password_hash($pass, PASSWORD_DEFAULT);

    if(empty($email)){
      $errors['email'] = "Email is required";
    }
    if(empty($hashPass)){
      $errors['pass'] = "Password is required";
    }

    $sql = "INSERT INTO users (email, password) VALUES (:email, :hashPass)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email,PDO::PARAM_STR);
    $stmt->bindParam(':hashPass', $hashPass,PDO::PARAM_STR);
    $stmt -> execute();
  }
}

> -->


<!-- <section class="contact section-padding" data-scroll-index='6'>
  <div class="container">
    <div class="row">
      //registerform
      <div class="col-md-6">
        <div class="sectioner-header text-center">
          <h3>Register</h3>
          <span class="line"></span>
          <form id="contact_form" action="../index.php" method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
           
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
     //login form
      <div class="col-md-6">
        <div class="sectioner-header text-center">
          <h3>Login</h3>
          <span class="line"></span>
          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>  -->