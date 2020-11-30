<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first PHP</title>
</head>
<body>


<ul>
    <?php   
        $mySongs = array(
            "Fingers Crossed. Agnes.", 
            "Säg Mig Var Du Står (feat. Zara Larsson) Carola.", 
            "Jag mår bra nu (feat. Newkid) Molly Sandén.",
            "Nyckeln Till Frihet. Fiskarhedenvillan.",
            "Angels Above. Sofi Bonde.",
            "Komplicerad. Miss Li.",
            "Fading Like A Flower. Frida Öhrn & Bo Sundström.",
            "Passa dig. Miriam Bryant.",
            "Midnight Sky. Miley Cyrus",
            "Svag. Victor Leksell"
        );
        function minsta($firstNumber, $secondNumber) {
            if($firstNumber > $secondNumber){
                return $secondNumber;        
            }
            return $firstNumber;
        }
        function myLoop ($start, $stop, $myArray) {
            for($i = $start -1; $i < minsta($stop, 10) ; $i++) {
                echo "<li>$myArray[$i]</li>";
            }
        }
        myLoop(1, 10, $mySongs);    
    ?>
</ul>

</body>
</html>