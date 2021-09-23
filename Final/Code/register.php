
<!DOCTYPE html>
<html>


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="Width=device-width, intial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-Commerce-Login</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link
            href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,700;1,300;1,600&display=swap"
            rel="stylesheet">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>











    <body>




        
    <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "home";

            $conn = mysqli_connect($servername, $username, $password, $database);


            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $username = $_POST['name'];
                
                $password = $_POST['password'];
                if (!$conn){
                    die("Sorry we failed to connect: ". mysqli_connect_error());
                }
                else{ 

            $sql ="INSERT INTO `users` ( `username`, `password`) VALUES ( '$username', MD5('$password'))";
                $result = mysqli_query($conn, $sql);



                if($result){
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="background: #04f8f8;">
                    <strong>Success!</strong> Your entry has been submitted successfully!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>';
                  }
                  else{
                      // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
                      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="background:rgb(248, 209, 236);">
                    <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>';
                  }
          
                }
          
              }
          

        ?>  




     <div class="account-page">








        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="pic/image1.png" alt="" width="100%">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">
                                Login
                            </span>
                            <span onclick="register()">
                                Register
                            </span>
                            <hr id="Indicator">

                      



                        <form id="RegForm" action="" method="post">
                            <input type="text" name="name"id="name" placeholder="UserName">
                            <!-- <input type="email" name="email" id="email" placeholder="Enter your email"> -->
                            <input type="password" name="password" id="pass" placeholder="password">
                            <button type="submit" class="btn">Register</button>






    </body>
</html>