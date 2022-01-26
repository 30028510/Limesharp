<?php 
// Make this work (no vowels, lowercase except the first letter)
    function mb_ucfirst($string) {

         $string = mb_strtoupper(mb_substr($string, 0, 1)) . mb_substr($string, 1);
         return $string;
    }

    $string = 'liMeSHArp DeveLoper TEST';        
    $string = mb_ucfirst(mb_convert_case($string, MB_CASE_LOWER));
    $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
    $string = str_replace($vowels, "", $string);
     echo $string ."</br>"; // Print: Lmshrp dvlpr tst

?>

<?php 
//Make this work (repeat 3 times the contents of an array):
$num = 0; 
while($num < 9){
    $abc= ($num++ % 3) + 1 .", "; 
    echo $abc; 
}

?>
</br>
<?php
// Return the next binary number 
function nextGreater($num)
{
	$l = strlen($num);

	for ($i = $l - 1; $i >= 0; $i--)
	{
		if ($num[$i] == '0')
		{
			$num[$i] = '1';
			break;
		}

		else
			$num[$i] = '0';
	}

	if ($i < 0)
		$num = "1" . $num;
	return $num;
}

$num = "101";
echo "Binary representation of next number = " . nextGreater($num);

?>
