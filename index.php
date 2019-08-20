<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css" rel="stylesheet">
    <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/js/mdb.min.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>QUIZ</title>
</head>
<body>
   <!--Main Navigation-->
<header>

<nav class="navbar navbar-expand-lg navbar-dark black">
    <div class="container">
        <a class="navbar-brand" href="#"><strong>TEE Quizzes</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="view intro-2">
    <div class="full-bg-img">
        <div class="mask rgba-black-strong flex-center">
            <div class="container">
                <div class="white-text text-center wow fadeInUp">
                    <h2>Enviromental QUIZ </h2>
                    <h5>Show Us Your Knowkedge About The Environment</h5>
                    <br>
                    <p>SaVe ThE WoRLD</p>
                </div>
            </div>
        </div>
    </div>
</div>

</header>
<!--Main Navigation-->

<!--Main Layout-->
<main class="text-center my-5">

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <p align="justify-center">“The environment is where we all meet; where we all have a mutual interest; it is the one thing all of us share.” </p>
            <p align="justify-center"><strong> Lady Bird Johnson</strong> </p>
        </div>
    </div>
</div>

</main>
<!--Main Layout-->
    <br/>
    <br/>
    <br/>
  
    <?php 

    $Questions = array(
        1 => array(
            'Question' => '1. CSS stands for',
            'Answers' => array(
                'A' => 'Computer Styled Sections',
                'B' => 'Cascading Style Sheets',
                'C' => 'Crazy Solid Shapes'
            ),
            'CorrectAnswer' => 'B'
        ),
         
        2 => array(
            'Question' => '2. What is the Capital of the Philippines',
            'Answers' => array(
                'A' => 'Cebu City',
                'B' => 'Davao City',
                'C' => 'Manila City'
            ),
            'CorrectAnswer' => 'C'
		),
		3 => array(
            'Question' => '3. What is the Capital of the Philippines',
            'Answers' => array(
                'A' => 'Cebu City',
                'B' => 'Davao City',
                'C' => 'Manila City'
            ),
            'CorrectAnswer' => 'C'
		),
		4 => array(
            'Question' => '4. What is the Capital of the Philippines',
            'Answers' => array(
                'A' => 'Cebu City',
                'B' => 'Davao City',
                'C' => 'Manila City'
            ),
            'CorrectAnswer' => 'C'
		),
		5 => array(
            'Question' => '5. What is the Capital of the Philippines',
            'Answers' => array(
                'A' => 'Cebu City',
                'B' => 'Davao City',
                'C' => 'Manila City'
            ),
            'CorrectAnswer' => 'C'
		),
		6=> array(
            'Question' => '6. What is the Capital of the Philippines',
            'Answers' => array(
                'A' => 'Cebu City',
                'B' => 'Davao City',
                'C' => 'Manila City'
            ),
            'CorrectAnswer' => 'C'
		),
		7 => array(
            'Question' => '7. What is the Capital of the Philippines',
            'Answers' => array(
                'A' => 'Cebu City',
                'B' => 'Davao City',
                'C' => 'Manila City'
            ),
            'CorrectAnswer' => 'C'
		),
		 8 => array(
            'Question' => '8. What is the Capital of the Philippines',
            'Answers' => array(
                'A' => 'Cebu City',
                'B' => 'Davao City',
                'C' => 'Manila City'
            ),
            'CorrectAnswer' => 'C'
		),
		9 => array(
            'Question' => '9. What is the Capital of the Philippines',
            'Answers' => array(
                'A' => 'Cebu City',
                'B' => 'Davao City',
                'C' => 'Manila City'
            ),
            'CorrectAnswer' => 'C'
		),
		10 => array(
            'Question' => '10. What is the Capital of the Philippines',
            'Answers' => array(
                'A' => 'Cebu City',
                'B' => 'Davao City',
                'C' => 'Manila City'
            ),
            'CorrectAnswer' => 'C'
		),
		11 => array(
            'Question' => '11. What is the Capital of the Philippines',
            'Answers' => array(
                'A' => 'Cebu City',
                'B' => 'Davao City',
                'C' => 'Manila City'
            ),
            'CorrectAnswer' => 'C'
		),
		12 => array(
            'Question' => '12. What is the Capital of the Philippines',
            'Answers' => array(
                'A' => 'Cebu City',
                'B' => 'Davao City',
                'C' => 'Manila City'
            ),
            'CorrectAnswer' => 'C'
		),
		13 => array(
            'Question' => '13. What is the Capital of the Philippines',
            'Answers' => array(
                'A' => 'Cebu City',
                'B' => 'Davao City',
                'C' => 'Manila City'
            ),
            'CorrectAnswer' => 'C'
		),
		14 => array(
            'Question' => '14. What is the Capital of the Philippines',
            'Answers' => array(
                'A' => 'Cebu City',
                'B' => 'Davao City',
                'C' => 'Manila City'
            ),
            'CorrectAnswer' => 'C'
		),
		15 => array(
            'Question' => '15. What is the Capital of the Philippines',
            'Answers' => array(
                'A' => 'Cebu City',
                'B' => 'Davao City',
                'C' => 'Manila City'
            ),
            'CorrectAnswer' => 'C'
		),
		16 => array(
            'Question' => '16. What is the Capital of the Philippines',
            'Answers' => array(
                'A' => 'Cebu City',
                'B' => 'Davao City',
                'C' => 'Manila City'
            ),
            'CorrectAnswer' => 'C'
		),
		17 => array(
            'Question' => '17. What is the Capital of the Philippines',
            'Answers' => array(
                'A' => 'Cebu City',
                'B' => 'Davao City',
                'C' => 'Manila City'
            ),
            'CorrectAnswer' => 'C'
		),
		18 => array(
            'Question' => '18. What is the Capital of the Philippines',
            'Answers' => array(
                'A' => 'Cebu City',
                'B' => 'Davao City',
                'C' => 'Manila City'
            ),
            'CorrectAnswer' => 'C'
		),
		19 => array(
            'Question' => '19. What is the Capital of the Philippines',
            'Answers' => array(
                'A' => 'Cebu City',
                'B' => 'Davao City',
                'C' => 'Manila City'
            ),
            'CorrectAnswer' => 'C'
		),
		20 => array(
            'Question' => '20. What is the Capital of the Philippines',
            'Answers' => array(
                'A' => 'Cebu City',
                'B' => 'Davao City',
                'C' => 'Manila City'
            ),
            'CorrectAnswer' => 'C'
        )
    );

    if (isset($_POST['answers'])){
        $Answers = $_POST['answers']; // Get submitted answers.

        // Now this is fun, automated question checking! ;)

        foreach ($Questions as $QuestionNo => $Value){
            // Echo the question
            echo $Value['Question'].'<br />';

            if ($Answers[$QuestionNo] != $Value['CorrectAnswer']){
                 echo 'You answered: <span style="color: red;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span><br>'; // Replace style with a class
                 echo 'Correct answer: <span style="color: green;">'.$Value['Answers'][$Value['CorrectAnswer']].'</span>';
            } else {
                echo 'Correct answer: <span style="color: green;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span><br>'; // Replace style with a class
                echo 'You are correct: <span style="color: green;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span>'; $counter++;

            }

            echo '<br /><hr>'; 
                                    if ($counter=="") 
                                    { 
                                    $counter='0';
                                    $results = "Your score: $counter/2"; 
                                    }
                                    else 
                                    { 
                                    $results = "Your score: $counter/2"; 
                                    }
                }                           echo $results;
    } else {  
    ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="quiz">
        <?php foreach ($Questions as $QuestionNo => $Value){ ?>

            <h3><?php echo $Value['Question']; ?></h3>
            <?php 
                foreach ($Value['Answers'] as $Letter => $Answer){ 
                $Label = 'question-'.$QuestionNo.'-answers-'.$Letter;
            ?>
            <div>
                <input type="radio" name="answers[<?php echo $QuestionNo; ?>]" id="<?php echo $Label; ?>" value="<?php echo $Letter; ?>" />
                <label for="<?php echo $Label; ?>"><?php echo $Letter; ?>) <?php echo $Answer; ?> </label>
            </div>
            <?php } ?>

        <?php } ?>
        <div class="text-center">
        <button class="btn btn-rounded btn-danger btn-lg">SUBMIT YOUR ANSWERS<i class="fas fa-heart pl-1"></i></button>
        </div>
        
        </form>
    <?php 
    }
    ?>
</form>
</body>
    <!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item carousel-multi-item-2" data-ride="carousel">

<!--Controls-->
<div class="controls-top">
  <a class="black-text" href="#multi-item-example" data-slide="prev"><i class="fas fa-angle-left fa-3x pr-3"></i></a>
  <a class="black-text" href="#multi-item-example" data-slide="next"><i class="fas fa-angle-right fa-3x pl-3"></i></a>
</div>
<!--/.Controls-->

<!--Slides-->
<div class="carousel-inner" role="listbox">

  <!--First slide-->
  <div class="carousel-item active">

    <div class="col-md-3 mb-3">
      <div class="card">
        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(38).jpg"
          alt="Card image cap">
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <div class="card">
        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(19).jpg"
          alt="Card image cap">
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <div class="card">
        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(42).jpg"
          alt="Card image cap">
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <div class="card">
        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(8).jpg"
          alt="Card image cap">
      </div>
    </div>

  </div>
  <!--/.First slide-->

  <!--Second slide-->
  <div class="carousel-item">

    <div class="col-md-3 mb-3">
      <div class="card">
        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(53).jpg"
          alt="Card image cap">
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <div class="card">
        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(25).jpg"
          alt="Card image cap">
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <div class="card">
        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(47).jpg"
          alt="Card image cap">
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <div class="card">
        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(26).jpg"
          alt="Card image cap">
      </div>
    </div>

  </div>
  <!--/.Second slide-->

  <!--Third slide-->
  <div class="carousel-item">

    <div class="col-md-3 mb-3">
      <div class="card">
        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(64).jpg"
          alt="Card image cap">
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <div class="card">
        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(51).jpg"
          alt="Card image cap">
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <div class="card">
        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(59).jpg"
          alt="Card image cap">
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <div class="card">
        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(63).jpg"
          alt="Card image cap">
      </div>
    </div>

  </div>
  <!--/.Third slide-->

</div>
<!--/.Slides-->

</div>
<!--/.Carousel Wrapper-->
<!-- Footer -->
<footer class="page-footer font-small elegant-color-dark">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="https://web.facebook.com/eeevibez?ref=bookmarks">tapfDESIGNS.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</html>