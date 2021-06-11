<?php 

include('connect_db.php');
$email = "";
$error = "";

if(isset($_POST['submit'])){
    if(empty($_POST['email'])){
        $error = "Email address is required";
    } else {
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error = "Please provide a valid e-mail address";
        }
}
    if($error){
        //echo "error";
    } else {

        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $sql = "INSERT INTO subscribers(email) VALUES('$email')";

        if(mysqli_query($conn, $sql)){

        } else {
            echo "Error:" . mysqli_error($conn);
        }

        header('Location: main.php');
        
    }
}

?>

    <?php include('top-left.php'); ?>
      
      <div class="form-container">
        <div class="text-wrapper">
          <h1 class="heading">Subscribe to newsletter</h1>
          <h2 class="subheading">
            Subscribe to our newsletter and get 10% discount on pineapple glasses.
          </h2>
        </div>
     
        <div class="input-wrapper">
        <form action="index.php" method="POST" class="form">
          <input type="text" name="email"
            class="txt-input" id="email" value="<?php echo htmlspecialchars($email); ?>"
            placeholder="Type your email address here…"
          />
          <button class="submit-btn" type="submit" name="submit" value="submit">
            <i class="fas fa-arrow-right"></i>
          </button>
          <div>
          </div>
        </form>
        <div class="error-message"><p class="error"><?php echo $error; ?></p></div>
        <div class="error-message2"></div>
        </div>
              

        <div class="check-wrapper">
          <input class="check-input" type="checkbox" name="cb" checked />
          <label class="check-label" for="cb">
            I agree to
            <a class="terms" href="#terms">terms of service</a></label>
        </div>

        <div class="social-icons">
          <button class="btn-social facebook">
            <i class="fab fa-facebook-f"></i>
          </button>

          <button class="btn-social instagram">
            <i class="fab fa-instagram"></i>
          </button>

          <button class="btn-social twitter">
            <i class="fab fa-twitter"></i>
          </button>

          <button class="btn-social youtube">
            <i class="fab fa-youtube"></i>
          </button>
        </div>
        </div>
      </div>
      <div class="inner-right-container"></div>
    </div>
      
    </div>
  </body>


