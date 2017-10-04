<?php
  $questions = [
    "q1" => "What color is the sky?",
    "q2" => "What is the KU mascot?",
    "q3" => "What does 2 + 2 equal?",
    "q4" => "What is the largest planet in our solar system?",
    "q5" => "What is the mitochondria?"
  ];

  $answers = [
    "q1" => "Blue",
    "q2" => "Jayhawk",
    "q3" => "4",
    "q4" => "Jupiter",
    "q5" => "The powerhouse of the cell"
  ];

  function checkAnswer($qNum) {
    global $questions, $answers;

    $key = "q" . $qNum;
    $correct = $answers[$key] == $_POST[$key];

    echo "Question " . $qNum . ": " . $questions[$key] . "<br>";
    echo "You answered: " . $_POST[$key] . "<br>";
    echo "Correct answer: " . $answers[$key] . "<br>";

    if ($correct) {
      echo "<a style=\"color:green;\">Correct!<a><br><br>";
    } else {
      echo "<a style=\"color:red;\">Wrong!<a><br><br>";
    }

    return $correct;
  }

  function generateReport($nums) {
    $numCorrect  = 0;

    for ($x = 0; $x < count($nums); $x++) {
      $correct = checkAnswer($x+1);
      if ($correct) {
        $numCorrect++;
      }
    }

    echo "You got " . $numCorrect . "/" . count($nums) . " correct.<br>";
    echo "Your score is " . ($numCorrect / count($nums) * 100) . "%.<br>";
  }

?>

<html>
<head>
  <title>Andy's Quiz</title>
</head>
<body>
  <h1>Andy's Quiz</h1>

  <?php
    $nums = [1,2,3,4,5];
    generateReport($nums);
  ?>


</body>
</html>

