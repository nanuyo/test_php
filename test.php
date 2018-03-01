
<?php
//global 변수 접근방법
$val1="Cat";
function func1(){
	global $val1;
	echo 'thi is '.$val1;
	echo '<br>';
}

func1();
?>



<?php
//static 변수는 변한 값이 유지됨
function func2(){
	static $val1 = 0;
	$val1++;
	echo 'thi is '.$val1.'<br>';
	echo '<br>';
}

func2();
func2();
func2();
func2();
?>


<?php
$str ="Hello student";
echo substr($str, 0, 5);
echo '<br>';
echo strpos($str, 's');
?>


<?php
$str ="Hello my student dfakjdflkjdf my jfldskjfldksf my";
echo '<br>';
echo strpos($str, 'my', 8);
?>

<?php
$str =" this is string ";
$email = 'hjpark@gmail.com';
echo '<br>';
echo $str;
echo '<br>';
echo strlen($str);
echo '<br>';
echo trim($str);  // cut space on the first and ending
echo '<br>';
echo strlen( trim($str) );
echo '<br>';
echo $str.'Google';
echo '<br>';
echo trim($str).'Google';
echo '<br>';
echo ucfirst($str);
echo '<br>';
echo ucfirst(trim($str) );
echo '<br>';
echo ucwords($str);
echo '<br>';
echo strtoupper($str);
echo '<br>';
echo strstr($email, '@');
echo '<br>';


echo '<br>';

?>


<?php
$str ="I love your <b>Website</b> very much";
$str2 = 'how-to-find-work';
echo $str;
echo '<br>';
echo htmlspecialchars($str);
echo '<br>';
echo htmlspecialchars_decode($str);
echo '<br>';
echo strip_tags($str);
echo '<br>';
echo str_replace('-',' ', $str2);
echo '<br>';
echo str_repeat($str2, 10);
echo '<br>';
echo str_repeat(str_replace('-',' ', $str2), 10);
echo '<br>';
?>

<?php
$day = array();
$day[0] = 'Monday';
echo $day[0];
$day[1] = 'Tuesday';
echo $day[1];
echo '<br>';

$month = array("jan", "feb", "mar");
echo $month[0];
echo $month[1];
echo $month[2];
echo '<br>';
$month[3] ="apr";
echo $month[3];
echo '<br>';

$countries = array();
$countries[] = "USA";
$countries[] = "korea";
$countries[] = "china"; 
$countries[] = "brazil";
$countries[] = "Israel";
echo $countries[1];
echo '<br>';

foreach($countries as $cnt){
	echo $cnt.'<br>';
}

// Associative array //
$tasks = array('fst'=>'First', 'sec'=>'Second');
echo $tasks['fst'];
echo $tasks['sec'];
echo '<br>';
$tasks['x'] ='Ten';
echo $tasks['x'];
echo '<br>';

foreach($tasks as $key => $task){
	echo $key.'<br>';
	echo $task.'<br>';
	echo $key.'=>'.$task.'<br>';
}
//Multidementional arrays
$employees = array('emp1'=>array('name'=>'hj', 'position'=>'sr'),
'emp2'=>array('name'=>'hj2', 'position'=>'jr') );
echo $employees['emp1']['name'];
echo '<br>';

foreach($employees as $employee){
	foreach($employee as $key => $data){
	echo $key.'<br>';
	echo $data.'<br>';
	echo $key.'=>'.$data.'<br>';
	}
}

print_r($month);
echo '<br>';
print_r($employees);
echo '<br>';

echo count($day);
echo '<br>';

$s_day = 'Monday';
if(in_array($s_day, $day)){
	echo "$s_day inside the day array";
}else{
	echo 'sorry! not found';
}
echo '<br>';

$year = '2015';
if(is_array($year)){
	echo "True";
}else{
	echo 'False';
}
echo '<br><br><br>';


echo current($day); //first element of any array
echo '<br><br>';

$items=array('watch','Mobile','sensor','speaker','laptop');
echo array_push($items, 'glass','bottle');
echo '<br>';
print_r($items);
echo '<br><br>';


echo array_unshift($items, 'Keyboard','Box');
echo '<br>';
print_r($items);
echo '<br><br>';

echo array_shift($items); // remove the first single item
echo '<br>';
print_r($items);
echo '<br><br>';

echo array_pop($items); // remove the last single item
echo '<br>';
print_r($items);
echo '<br><br>';

echo sort($items); 
echo '<br>';
print_r($items);
echo '<br><br>';


echo asort($items); //associative sort
echo '<br>';
print_r($items);
echo '<br><br>';


echo asort($tasks); //sort by data
echo '<br>';
print_r($tasks);
echo '<br><br>';

foreach($tasks as $key => $data){
	echo $key.'=>'.$data.'<br>';
}

echo ksort($tasks); // sort by key
echo '<br>';
print_r($tasks);
echo '<br><br>';

foreach($tasks as $key => $data){
	echo $key.'=>'.$data.'<br>';
}
echo '<pre>';
$position=array_column($employees,   'position', 'name');
print_r($position);
echo '</pre><br><br>';

$nums = array(1,2,3,4,5);
echo array_sum($nums);
echo '<br>';
echo array_product($nums);
echo '<br>';
?>

<?php
echo $_SERVER['PHP_SELF'];
echo '<br>';
echo $_SERVER['HTTP_USER_AGENT'];
echo '<br>';
echo $_SERVER['REMOTE_ADDR'];
echo '<br>';
echo $_SERVER['HTTP_HOST'];
echo '<br>';
echo $_SERVER['REQUEST_URI'];
echo '<br>';
?>

<?php
$val1 = "news";
function func6(){
	echo 'I have a '.$GLOBALS['val1'];
}
func6();

echo '<br>';

?>

<a href="receive.php?var1=i got it&var2=ok&var3=4&var4=5">Ckick to go</a>

<?php
include 'receive2.php';  // 화일이 없어도 다음을 수행
echo "This is the test";

require 'receive.php'; // 화일이 없으면 다음을 수행하지 않고 멈춤
echo "This is the test";

?>

<?php
include 'receive.php';  // 화일이 없어도 다음을 수행
echo "We&apos;re talking about the $var1";

?>


<html>
	<head>
		<title>PHP Form</title>
	</head>
	<body>
		<form action="get.php">
			<table>
				<tr>
					<td>E-mail</td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit"></td>
				</tr>
			</table>
		</form>
	</body>

</html>


<html>
	<head>
		<title>PHP Form</title>
	</head>
	<body>
		<form action="post.php", method="post">
			<table>
				<tr>
					<td>E-mail</td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit"></td>
				</tr>
			</table>
		</form>
	</body>

</html>


<html>
	<head>
		<title>PHP Form</title>
	</head>
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF'];?>", method="post">
			<table>
				<tr>
					<td>E-mail</td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td><input type="hidden" value="yes" name="validate"></td>
					<td><input type="submit" name="submit"></td>
				</tr>
			</table>
		</form>
	</body>

</html>

<?php
if(isset($_POST['validate'])){

echo "The user name is: $_POST[email] <br>";
echo "The pw is: $_POST[password] <br>";
}else{
	echo 'Sorry, there is no request we received!<br>';
}
?>



<html>
	<head>
		<title>Upload</title>
	</head>
	<body>
		<form action="upload.php", method="post" enctype="multipart/form-data">
			<input type="file" name="file">
			<button type="submit" name="submit">Upload </button>
		</form>
	</body>

</html>
