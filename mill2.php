<!DOCTYPE html>
<html>
	<head>
		<title>Millionaire</title>
		<link rel="stylesheet" type="text/css" media="all" href="style.css"/>
	</head>
	<body>
                <form action="mill3.php" method="post">
		<?php
                $bank = 0;
                $answer = $_POST['q1'];
                    if($answer == 'A'){
                        $bank = $bank + 500;
                        echo '<div><h1>Correct!</h1></div>';
                        echo '<div><h4>Current Bank: '. "$bank".'</h4></div>';
                    }
                    else{
                        echo '<div><h1>Incorrect!</h1></div>';
                        echo '<div><h4>Current Bank: '. "$bank".'</h4></div>';
                    }
                
                
                
                
                ?>
                <p><input id="submit" type="submit" value="Next Question" name="submit" /></p>
                </form>
                </body>
</html>
