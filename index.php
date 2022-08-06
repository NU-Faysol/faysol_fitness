
        <?php 

        session_start();

            if(isset($_SESSION['username']) AND file_exists('index.php')) {

                $showname = $_SESSION['username'];

                echo "<script>alert(' Hello $showname ')</script>";
        
            }
            else{
                echo "<script>alert('Do not access from URL!!')</script>";
                echo "<script>location.href = 'login.php'</script>";
            }

        ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FaysolFitness - The best fitness gym in the town</title>
    <link rel="shortcut icon" href="dumbell.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="utils.css">

    <script src="timer.js"></script>
    
</head>

<body class='overflow-x-hidden'>
    <div class="Container mx-auto">

                                <?php include 'E:\xampp\htdocs\faysol_fitness\components/header.php'; ?>

        <main class="min-h-screen">
            <section class="section1">
                <div class="Flex">
                    <div class="topleft Flex Flex-col justify-center PX-2">
                        <div class=" text-center">
                            <img class="dumbellimg" src="dumbell.png" alt="">
                        </div>
                        <h1 class="MY-1 text-center">The best fitness Gym in the town is here</h1>
                   
                        <p class=" text-center">We believe exercise is a science and bodybuilding is an art ,, science and art both need theoretical knowledge,, so beginners session on going and our expert sharing knowledge about rack and Re racking weight , compound exercises, differences between powerlifter and. Bodybuilder , ideal weight and how to do proper benchpress, importance of a spotter.</p>
                        
                        <h3 style="text-align: center; line-height: 40px;">Admission going On</h3>
                        <h4 style="text-align: center; line-height: 40px;">Info: +8801712329913</h4>

                            <!-- Display the countdown timer in an element -->
                            <p class="deal text-center">The deal ends in <span id="demo"></span></p>
                            <div class="buttons">
                                <button class="Btn">Join now</button>
                                <button class="Btn">Contact Us</button>
                            </div>
                    </div>
                    <div class="topright Flex justify-center">
                        <img class="gymimg" src="gym.png" alt="">
                    </div>
                </div>
            </section>
            <hr>
            <section class="section2">
                <h1 class="text-center MY-2">Pricing</h1>
                <p class="MY-2">If you see many Gym center offered so expensive rate but in FaysolFitness you can get many facilites in cheap price. we have many plans- </p>
                <div class="boxes Flex justify-center">
                    <div class="box">
                        <h2>Free</h2>
                        <ul>
                            <li class="highlighted">৳0/month</li>
                            <li>0 users included</li>
                            <li>2 GB of storage</li>
                            <li>Email support</li>
                            <li>Help center access</li>
                            <li><button class="Btn">Signup Now</button></li>
                        </ul>
                    </div>
                    <div class="box">
                        <h2>Pro</h2>
                        <ul>
                            <li class="highlighted">৳500/month</li>
                            <li>0 users included</li>
                            <li>10 GB of storage</li>
                            <li>Email support</li>
                            <li>Help center access</li>
                            <li><button class="Btn">Signup Now</button></li>
                        </ul>
                    </div>
                    <div class="box">
                        <h2>Enterprise</h2>
                        <ul>
                            <li class="highlighted">৳1000/month</li>
                            <li>0 users included</li>
                            <li>40 GB of storage</li>
                            <li>Email support</li>
                            <li>Help center access</li>
                            <li><button class="Btn">Signup Now</button></li>
                        </ul>
                    </div>

                </div>
            </section>
            <hr>
            <section class="section3">
                <h1 class="text-center MY-2">Compare Plans</h1>
                <div class="Container plantable">
                    <table class="table text-center">
                      <thead>
                        <tr>
                          <th></th><th>Free</th>
                          <th>Pro</th>
                          <th>Enterprise</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row" class="text-start">Public</th>
                          <td>Yes</td>
                          <td>Yes</td>
                          <td>Yes</td>
                        </tr>
                        <tr>
                          <th scope="row" class="text-start">Private</th>
                          <td>-</td>
                          <td>Yes</td>
                          <td>Yes</td>
                        </tr>
                      </tbody>
              
                      <tbody>
                        <tr>
                          <th scope="row" class="text-start">Permissions</th>
                          <td>Yes</td>
                          <td>Yes</td>
                          <td>Yes</td>
                        </tr>
                        <tr>
                          <th scope="row" class="text-start">Sharing</th>
                          <td>-</td>
                          <td>Yes</td>
                          <td>Yes</td>
                        </tr>
                        <tr>
                          <th scope="row" class="text-start">Unlimited members</th>
                          <td>-</td>
                          <td>Yes</td>
                          <td>Yes</td>
                        </tr>
                        <tr>
                          <th scope="row" class="text-start">Extra security</th>
                          <td>-</td>
                          <td>-</td>
                          <td>Yes</td>
                        </tr>
                      </tbody>
                    </table>
            </section>
            <hr>
        </main>
    </div>


    <footer>
        <h1 class="line-height-1"> <span class="text-blue">Faysol</span> Fitness</h1>
        <p style="line-height: 30px;">Copyright &copy; <span class="text-orange">FaysolFitness.com</span></p> 
         <p>All rights reserved</p>
    </footer>
</body>

</html>