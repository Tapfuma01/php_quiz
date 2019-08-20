<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body bgcolor='white'>
<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:35px">Enviromental QUIZ</h1>
    
  </div>
</div>
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
            'Question' => '2. What is the Capital of the Philippines',
            'Answers' => array(
                'A' => 'Cebu City',
                'B' => 'Davao City',
                'C' => 'Manila City'
            ),
            'CorrectAnswer' => 'C'
		),
		4 => array(
            'Question' => '2. What is the Capital of the Philippines',
            'Answers' => array(
                'A' => 'Cebu City',
                'B' => 'Davao City',
                'C' => 'Manila City'
            ),
            'CorrectAnswer' => 'C'
		),
		5 => array(
            'Question' => '2. What is the Capital of the Philippines',
            'Answers' => array(
                'A' => 'Cebu City',
                'B' => 'Davao City',
                'C' => 'Manila City'
            ),
            'CorrectAnswer' => 'C'
		),
		6=> array(
            'Question' => '2. What is the Capital of the Philippines',
            'Answers' => array(
                'A' => 'Cebu City',
                'B' => 'Davao City',
                'C' => 'Manila City'
            ),
            'CorrectAnswer' => 'C'
		),
		7 => array(
            'Question' => '2. What is the Capital of the Philippines',
            'Answers' => array(
                'A' => 'Cebu City',
                'B' => 'Davao City',
                'C' => 'Manila City'
            ),
            'CorrectAnswer' => 'C'
		),
		 8 => array(
            'Question' => '2. What is the Capital of the Philippines',
            'Answers' => array(
                'A' => 'Cebu City',
                'B' => 'Davao City',
                'C' => 'Manila City'
            ),
            'CorrectAnswer' => 'C'
		),
		9 => array(
            'Question' => '2. What is the Capital of the Philippines',
            'Answers' => array(
                'A' => 'Cebu City',
                'B' => 'Davao City',
                'C' => 'Manila City'
            ),
            'CorrectAnswer' => 'C'
		),
		10 => array(
            'Question' => '2. What is the Capital of the Philippines',
            'Answers' => array(
                'A' => 'Cebu City',
                'B' => 'Davao City',
                'C' => 'Manila City'
            ),
            'CorrectAnswer' => 'C'
		),
		11 => array(
            'Question' => '2. What is the Capital of the Philippines',
            'Answers' => array(
                'A' => 'Cebu City',
                'B' => 'Davao City',
                'C' => 'Manila City'
            ),
            'CorrectAnswer' => 'C'
		),
		12 => array(
            'Question' => '2. What is the Capital of the Philippines',
            'Answers' => array(
                'A' => 'Cebu City',
                'B' => 'Davao City',
                'C' => 'Manila City'
            ),
            'CorrectAnswer' => 'C'
		),
		13 => array(
            'Question' => '2. What is the Capital of the Philippines',
            'Answers' => array(
                'A' => 'Cebu City',
                'B' => 'Davao City',
                'C' => 'Manila City'
            ),
            'CorrectAnswer' => 'C'
		),
		14 => array(
            'Question' => '2. What is the Capital of the Philippines',
            'Answers' => array(
                'A' => 'Cebu City',
                'B' => 'Davao City',
                'C' => 'Manila City'
            ),
            'CorrectAnswer' => 'C'
		),
		15 => array(
            'Question' => '2. What is the Capital of the Philippines',
            'Answers' => array(
                'A' => 'Cebu City',
                'B' => 'Davao City',
                'C' => 'Manila City'
            ),
            'CorrectAnswer' => 'C'
		),
		16 => array(
            'Question' => '2. What is the Capital of the Philippines',
            'Answers' => array(
                'A' => 'Cebu City',
                'B' => 'Davao City',
                'C' => 'Manila City'
            ),
            'CorrectAnswer' => 'C'
		),
		17 => array(
            'Question' => '2. What is the Capital of the Philippines',
            'Answers' => array(
                'A' => 'Cebu City',
                'B' => 'Davao City',
                'C' => 'Manila City'
            ),
            'CorrectAnswer' => 'C'
		),
		18 => array(
            'Question' => '2. What is the Capital of the Philippines',
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
        <input type="submit" value="Submit Quiz" />
        </form>
    <?php 
    }
    ?>






</form>















</body>
</html>