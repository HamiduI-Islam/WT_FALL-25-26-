<!DOCTYPE html>
<html>
<head><title>PHP Code</title></head>
<body>
<h1> Welcome to Registration</h1>
 
<?php
$name= "";
$nameerror= "";
$email="";
$emailerror="";
$dd = "";
$mm = "";
$yyyy = "";
$DOBerror = "";
$gender="";
$gendererror="";
$degree="";
$degreeerror="";
if (empty ($_POST["name"]))
{
$nameerror="Name is requred"; // value empty
}
else{
$name= test_input($_POST["name"]); //clean out input
if (!preg_match("/^[a-zA-Z ]*$/",$name))  // only letter and middle space
{
    $nameerror ="Only letters and white space allowed";
}
if (empty ($_POST["email"]))
{
$emailerror="Email is requred"; // value empty
}
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailerror = "Invalid email format";
}
}
if (empty($_POST["dd"]) || empty($_POST["mm"]) || empty($_POST["yyyy"])) {
    $DOBerror = "Date of Birth cannot be empty";
} else {

    $dd = test_input($_POST["dd"]);
    $mm = test_input($_POST["mm"]);
    $yyyy = test_input($_POST["yyyy"]);

    // Check numeric values
    if (!is_numeric($dd) || !is_numeric($mm) || !is_numeric($yyyy)) {
        $DOBerror = "Date of Birth must contain valid numbers";
    }
    // Check range
    else if ($dd < 1 || $dd > 31) {
        $DOBerror = "Day must be between 1 and 31";
    }
    else if ($mm < 1 || $mm > 12) {
        $DOBerror = "Month must be between 1 and 12";
    }
    else if ($yyyy < 1953 || $yyyy > 2004) {
        $DOBerror = "Year must be between 1953 and 1998";
    }
}
if (empty ($_POST["gender"]))
{
$gendererror="Select any gender"; // value empty
}else{
  $gender = test_input($_POST["gender"]);
}


if (empty ($_POST["degree"]))
{
$degreeerror="Must select"; // value empty
}
else{
$degree= test_input($_POST["degree"]);
}
function test_input($data)
{
$data = trim($data); // trim amr previous data remove kore dai
return $data;

}
?>
<form method="post" action="">
Name: <input type="text" name="name" value="<?php echo $name;?>">
<?php echo $nameerror; ?>
<?php
echo "<br>";
echo "<br>";
?>
Email: <input type="text" name="email" value="<?php echo $email;?>">
<?php echo $emailerror; ?>
<?php
echo "<br>";
echo "<br>";
?>
Date Of Birth:
<input type="number" name="dd" > /
<input type="number" name="mm" > /
<input type="number" name="yyyy"">
<?php echo $DOBerror; ?>
<?php
echo "<br>";
echo "<br>";
?>
Gender: 
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other .
<?php echo $gendererror; ?>
<?php
echo "<br>";
echo "<br>";
?>
Degree:
<input type="checkbox" name="degree" value="SSC">SSC
<input type="checkbox" name="degree" value="HSC">HSC
<input type="checkbox" name="degree" value="BSc">BSc
<input type="checkbox" name="degree" value="MSc">MSc
<?php
echo "<br>";
echo "<br>";
?>
<input type="submit" name="submit" value="Submit">
 
<?php
if($_SERVER["REQUEST_METHOD"]== "POST" && empty($nameerror)&& empty($nameerror)&& empty($gendererror))
{
echo "<h3> Your Input: </h3>";
echo "Name: ".$name. "<br>";
echo "Email: ".$email. "<br>";
echo "DOB: ".$dd."/".$mm."/".$yyyy. "<br>";
echo "Gender: ".$gender. "<br>";
echo "Degree: ".$degree. "<br>";

}
?>
 
 
</body>
</form>
</html>