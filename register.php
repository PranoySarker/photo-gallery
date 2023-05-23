<?php require "includes/header.php"; ?>

<?php require "config.php"; ?>


<?php

if(isset($session['username'])){
  header("location:index.php");
}

if(isset($_POST['submit'])){

  if($_POST['email'] == '' || $_POST['username'] == '' || $_POST['password'] ==''  ){
    echo "Some inputs are empty";
  }
  else{


    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $insert = $conn->prepare("INSERT INTO users (email,username,mypassword) VALUES (:email, :username, :mypassword)");

    $insert->execute([
      ':email' => $email,
      ':username' => $username,
      ':mypassword' => password_hash($password, PASSWORD_DEFAULT),
    ]);

    header("location: login.php");
  }
}


?>



<main class="form-signin w-50 m-auto">
    <form method="POST" action="register.php">

        <h1 class="h3 mt-5 fw-normal text-center">Please Register</h1>

        <div class="form-floating">
            <label for="floatingInput">Email address</label>
            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        </div>

        <div class="form-floating">
            <label for="floatingInput">Username</label>
            <input name="username" type="text" class="form-control" id="floatingInput" placeholder="username">
        </div>

        <div class="form-floating">
            <label for="floatingPassword">Password</label>
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
        </div>

        <button name="submit" class="w-100 btn btn-lg btn-primary" type="submit">register</button>
        <h6 class="mt-3">Aleardy have an account? <a href="login.php">Login</a></h6>

    </form>
</main>
<?php require "includes/footer.php"; ?>