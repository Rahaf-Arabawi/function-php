<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> Task 1
    <br>
    <?php
     
     function swap(&$x,&$y){
        $temp = $x; 
        $x = $y; 
        $y = $temp; 
     }
     $x=12;
     $y=10;
     
     swap($x,$y);
     echo "x = $x, y = $y\n";

    ?>
    <hr>

    <p> Task 2
    <br>
    <?php
     
     function isArmstrong($num){
       $digits = str_split($num);  // تحويل ارقام لمصفوفه
       $sum = $sum = array_sum(array_map(fn($d) => $d ** 3, $digits)); // حساب الأرقام
       echo ($sum == $num) ? "$num is an Armstrong Number\n" : "$num is not an Armstrong Number\n";
   }
     isArmstrong(407);
    ?>
    <hr>

    <p> Task 4
    <br>
    <?php
     
     function removeDuplicates($array) {
        $uniqueArray = array_unique($array);
        return implode(", ", $uniqueArray); 
    }
    $array1 = array(2, 4, 7, 4, 8, 4);
    $array1 = removeDuplicates($array1);

    print_r ($array1);

    ?>
    <hr>

    <p> Task 5
    <br>
    <?php
     
     function reverseString($string) {
        return join('', array_reverse(str_split($string)));
    }
    $string = "remove";
    $reversedString = reverseString($string);
    echo $reversedString;

    ?>
    <hr>

    <p> Task 6
    <br>
    <?php
    function checkLowerCase($string) {
    if (ctype_lower($string)) {
        return "Your String is Ok";
    } else {
        return "Your String is Not Ok";
    }
 }
   $string = "remove"; 
   $result = checkLowerCase($string);

  echo $result;
 ?>
 <hr>

 <p> Task 7
    <br>
    <?php
  function convertString($string) {
    $uppercase = strtoupper($string);
    $lowercase = strtolower($string);
    $capitalizeFirstLetter = ucfirst($string);
    $capitalizeWords = ucwords($string);
    echo "Uppercase: " . $uppercase . "<br>";
    echo "Lowercase: " . $lowercase . "<br>";
    echo "First Letter Capitalized: " . $capitalizeFirstLetter . "<br>";
    echo "Each Word Capitalized: " . $capitalizeWords . "<br>";
}
$string = "hello world! welcome to php.";

convertString($string);
?>

 <hr>

    <p> Task 8
    <br>
    <?php
       
    $time = "085119";
    $hours = substr($time, 0, 2);
    $minutes = substr($time, 2, 2);
    $seconds = substr($time, 4, 2);
 
    echo "$hours:$minutes:$seconds";
    
    ?>
    <hr>

    <p> Task 9
    <br>
    <?php
 
 function checkWordInSentence($sentence, $word) {
     if (strpos(strtolower($sentence), strtolower($word)) !== false) {
         return "Word Found!";
     } else {
         return "Word Not Found!";
     }
 }
 $sentence = "I am a full stack developer at orange coding academy";
 $word = "orange"; 
 
 $result = checkWordInSentence($sentence, $word);
 
 echo $result;
 ?>
    <hr>

    <p> Task 10
    <br>
    <?php

    function getFileNameFromURL($url) {
    return basename($url);
   }

   $url = "www.orange.com/index.php";
   $fileName = getFileNameFromURL($url);
  echo $fileName;
    ?>
    <hr>



    <p> Task 13
    <br>
    <?php

       $original_string = '0000657022.24';
       $cleaned_string = ltrim($original_string, '0');
       
       echo "$cleaned_string";
       
    ?>
    <hr>

    <p> Task 14
    <br>
    <?php

   function removeSpecialCharacters($string) {
    return preg_replace('/[^0-9 ]/', '', $string);
 }
 $string = '\"\1+2/3*2:2-3/4*3';
 $cleanedString = removeSpecialCharacters($string);
 echo $cleanedString;
 
 ?>
    <hr>
</body>
</html>
