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
                    <h1>Enviromental QUIZ </h1>
                    <br>
                    <br>
                    <br>
                    <h5>SaVe ThE WoRLD</h5>
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
            'Question' => '1.  Which among the following is known as “Sairandhri Vanam”?',
           
            'Answers' => array(
                'A' => 'Silent Valley National Park',
                'B' => ' Mudumalai National Park',
                'C' => 'Periyar National Park',
                'D' => 'Guindy National Park'
            ),
            'CorrectAnswer' => 'A'
        ),
         
        2 => array(
            'Question' => '2. Which among the following is the World’s largest Wetland System?',
            'Answers' => array(
                'A' => 'Carmarge(France)',
                'B' => 'Okavango(Botswana)',
                'C' => 'Everglades (USA)',
                'D' => 'Pantanal (South America)'
            ),
            'CorrectAnswer' => 'C'
		),
		3 => array(
            'Question' => '3. The Machia Biological Park is located in which state?',
            'Answers' => array(
                'A' => 'Rajastan',
                'B' => 'Sikkim',
                'C' => 'Nagaland',
                'd' => 'Manipur'
            ),
            'CorrectAnswer' => 'C'
		),
		4 => array(
            'Question' => '4. What is the name of a young lion?',
            'Answers' => array(
                'A' => 'cub',
                'B' => 'kitten',
                'C' => 'calf',
                'D' => ' lioness'
            ),
            'CorrectAnswer' => 'C'
		),
		5 => array(
            'Question' => '5. All species of ‘Lemur’ are endemic to which among the following places of the world?',
            'Answers' => array(
                'A' => 'Seychelles Islands',
                'B' => 'Galapagos Islands',
                'C' => 'New Caledonia',
                'D' => 'Madagascar'
            ),
            'CorrectAnswer' => 'C'
		),
		6=> array(
            'Question' => '6. With reference to the Flexible Mechanisms of Kyoto Protocol, which of the following is / are correct statements? 1.Through Clean Development Mechanism(CDM),any Annex I country can invest in emission reduction projects in any other Annex I country as an alternative to reducing emissions domestically. 2.Through Joint Implementation(JI), countries can meet their domestic emission reduction targets by buying greenhouse gas reduction units from (projects in) non Annex I countries to the Kyoto protocol (mostly developing countries). Select the correct option from the codes given below:' ,
            'Answers' => array(
                'A' => 'ONLY 1',
                'B' => 'ONLY 2',
                'C' => 'BOTH 1 AND 2',
                'D' => 'NEITHER 1 NOR 2'
            ),
            'CorrectAnswer' => 'C'
		),
		7 => array(
            'Question' => '7. Which among the following terms of utmost significance in the dynamics of resource management was coined in the ‘Brundtland Commission Report’?',
            'Answers' => array(
                'A' => 'Polluter-Pays Principle',
                'B' => 'Sustainable development',
                'C' => 'Inclusive Growth',
                'D' => 'Carrying Capacity'
            ),
            'CorrectAnswer' => 'C'
		),
		 8 => array(
            'Question' => '8. What is the biggest man-made dame in Africa?',
            'Answers' => array(
                'A' => 'Kariba Dam',
                'B' => 'Mazowe Dam',
                'C' => 'Buffelsrivier Dam',
                'D' => 'Calueque Dam'
            ),
            'CorrectAnswer' => 'C'
		),
		9 => array(
            'Question' => '9. With which of the following, the Agenda 21’ of Rio Summit, 1992 is related to? ',
            'Answers' => array(
                'A' => 'Sustainable development',
                'B' => 'Combating the consequences of population explosion.',
                'C' => 'Mitigation norms of Green House Gases (GHGs) emission.',
                'D' => 'Technology transfer mechanism to developing countries for ‘clean-energy’ production.'
            ),
            'CorrectAnswer' => 'C'
		),
		10 => array(
            'Question' => '10. Which of the following is / are correct statements regarding the Keoladeo National Park(formerly known as the Bharatpur Bird Sanctuary)? 1.It is one of the Ramsar Wetlands of International Importance. 2.It is inscribed in the UNESCO World Heritage list. Select the correct option from the codes given below:',
            'Answers' => array(
                'A' => 'ONLY 1',
                'B' => 'ONLY 2',
                'C' => 'BOTH 1 AND 2',
                'D' => 'NEITHER 1 NOR 2'
            ),
            'CorrectAnswer' => 'C'
		),
		11 => array(
            'Question' => '11.  What percentage of land area should remain covered by forest to maintain Ecological balance?',
            'Answers' => array(
                'A' => '10%',
                'B' => '5%',
                'C' => '33%',
                'D' => 'NONE OF THESE'
            ),
            'CorrectAnswer' => 'C'
		),
		12 => array(
            'Question' => '12.  Full form of CTBT is; ',
            'Answers' => array(
                'A' => 'Comprehensive Test Ban Treaty.',
                'B' => 'Comprehensive Tes Bank Trust.',
                'C' => 'Comprehensive Test Bank Trust.',
                'D' => 'Comprehensive Test Ban Trusty.'
            ),
            'CorrectAnswer' => 'C'
		),
		13 => array(
            'Question' => '13.  Full form of BOD is;',
            'Answers' => array(
                'A' => 'Bactorial Oxygen Demand.',
                'B' => 'Biological Oxygen Demand.',
                'C' => 'Biological Oxide Demand.',
                'D' => 'None of these.'
            ),
            'CorrectAnswer' => 'C'
		),
		14 => array(
            'Question' => '14. In which among the following places of the world all species of  Lemur are endemic?',
            'Answers' => array(
                'A' => 'New Caledonia',
                'B' => 'Galapagos Islands',
                'C' => 'Madagascar',
                'D' => 'None of the above'
            ),
            'CorrectAnswer' => 'C'
		),
		15 => array(
            'Question' => '15. On which date International Day for Biodiversity is observed?',
            'Answers' => array(
                'A' => 'May, 15',
                'B' => 'May, 20',
                'C' => 'May, 22',
                'D' => 'June, 5'
            ),
            'CorrectAnswer' => 'C'
		),
		16 => array(
            'Question' => '16.  Which among the following country is considered to have the world’s first sustainable bio-fuels economy? ',
            'Answers' => array(
                'A' => 'India',
                'B' => 'Brazil',
                'C' => 'Australia',
                'D' => 'South Africa'

            ),
            'CorrectAnswer' => 'C'
		),
		17 => array(
            'Question' => '17. The use of microorganism metabolism to remove pollutants such as oil spills in the water bodies is known as :',
            'Answers' => array(
                'A' => 'Biomagnification',
                'B' => 'Bioremediation',
                'C' => 'Biomethanation',
                'D' => 'Bioreduction'
            ),
            'CorrectAnswer' => 'C'
		),
		18 => array(
            'Question' => '18. The largest number of Tiger Reserves are located in:',
            'Answers' => array(
                'A' => 'Karnataka',
                'B' => 'Andhra Pradesh',
                'C' => ' Madhya Pradesh',
                'D' => ' West Bengal'
            ),
            'CorrectAnswer' => 'C'
		),
		19 => array(
            'Question' => '19. The Siberian Crane, an endangered migratory bird is a regular visitor of which of the following national park/bird sanctuaries: ',
            'Answers' => array(
                'A' => 'Ranganathittu bird sanctuary',
                'B' => ' Keoladeo national park',
                'C' => 'Vedanthangal bird sanctuary',
                'D' => 'Sultanpur bird sanctuary
                '
            ),
            'CorrectAnswer' => 'C'
		),
		20 => array(
            'Question' => '20.  Under the Motor Vehicles Act, the noise range of horns has been fixed at? ',
            'Answers' => array(
                'A' => '93-112 dB',
                'B' => '56-77 dB',
                'C' => '51-75 dB',
                'D' => '97-118 dB'
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
                                    $results = "<h2>YOU SCORED<h2>: $counter/20"; 
                                    }
                                    else 
                                    { 
                                    $results = "<h2>YOU SCORED<h2>: $counter/20"; 
                                    }
                }                           echo $results;
    } else {  
    ?>
    </div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="quiz">
        <?php foreach ($Questions as $QuestionNo => $Value){ ?>

            <h4 class=questions><?php echo $Value['Question']; ?></h4>
            <?php 
                foreach ($Value['Answers'] as $Letter => $Answer){ 
                $Label = 'question-'.$QuestionNo.'-answers-'.$Letter;
            ?>
            <div class="radio">
                <input type="radio" name="answers[<?php echo $QuestionNo; ?>]" id="<?php echo $Label; ?>" value="<?php echo $Letter; ?>" />
                
            </div>
                <label class="answers" for="<?php echo $Label; ?>"><?php echo $Letter; ?>) <?php echo $Answer; ?> </label>
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