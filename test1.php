<?php 
//test1.php
					$username = "Jan Kowalski";
					echo $username;
					echo "</br>";
					$current_user = $username;
					echo $current_user;
					echo "</br>";
					echo $liczba = 16;
					echo "</br>";
					echo "$liczba $username $username <br>";
					echo 'Pamiętna Barcelona \'92 i wyjazd.<br>';
					echo "Data\rNazwisko\tOpłata<br>";
					$author = "Steve Ballmer";
					echo "Ocenianie postępów w programowaniu liczbą wierszy kodu jest jak ocenianie postępów w budowie samolotu jego masą. - $author.<br>";
$text = <<<_END
Debugowanie jest dwa razy trudnmiejsze nież pisanie kodu od zera.
Z tego względu jeśli piszesz kod tak inteligentnie, jak tylko potrafisz,
to z definicji nie bedziesz wystarczająco inteligentny, żeby go zdebugować.
- Bill Gates.
_END;
				echo $text;
					
				$team = array('<br>adam','<br>ania','<br>michal','<br>krzysztof','<br>maciej');
				echo $team[3];
					
					echo "<br>";
					function longdate($timestamp){
						$temp = date("l F d, Y", $timestamp);
						return "Dzisiejsza data to: $temp";
					}
					
					echo longdate(time());
					echo "<br>";
					echo time();
					echo "<br>";
					echo longdate(1503494353);
					$came_from = $GLOBALS['HTTP_REFERER'];
					echo $came_from;
					
echo "<br>";
echo "a: [" . (20>9)  . "]<br>";
echo "b: [" . (5==6)  . "]<br>";
echo "c: [" . (1==0)  . "]<br>";
echo "d: [" . (1==1)  . "]<br>";
echo "e: [" . (true)  . "]<br>";
echo "f: [" . (false)  . "]<br>";


					
				?>