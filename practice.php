<?
echo "1-100까지의 수 중 소수만 출력 <br>";
for ($i =1; $i <= 100; $i++) {
  for ($j = 2; $j < $i; $j++){
    if ($i % $j ==0)
      break;
  }
  if ($i == $j)
    print "$i";
}
echo "------------------------------<br>"
  ?>

<?
$week = array 
//같은 데이터 형식의 저장공간이 연속적으로 배치되어있어 인덱스를 이용하여 상대위치를 읽거나 쓸 수 있는 자료구조
("Sun","Mon","Tue","Wed","Thu","Fri","Sat");
$weekend = array ($week[6],$week[0]);
print $weekend[0].",".$weekend[1];
?>

<?
//배열
$multitype = array (20, 3.14, 'A', "Bob");
print "$multitype[0] <br>";
print "$multitype[1] <br>";
print "$multitype[2] <br>";
print "$multitype[3] <br>";
?>

 
<?
$numbers = array(10,20,30,40);
//print_r 사용, 인덱스와 인덱스가 가르키는 값들이 나온다.

print "$numbers <br>";
print_r($numbers);
?>

<?
//문자를 key로 사용하여 배열의 인덱스로 사용하는 배열의 형태를 연상 배열이라 한다.(key값과 value값 지정)
$freshman = array(
              "David" => "Computer",
              "Alice" => "Math",
              "Elsa" => "Physics",
              "BOb" => "Music",
              "Chris" => "Electronics"
);
print_r($freshman);
//print_r($freshman["David"]); 를 넣을경우 David의 직업을 출력
?>

<?
$A = array (
        array (3,2,1),
        array (2,1,2),
        array (1,2,3),
      );
$B = array (
        array (1,2,3),
        array (2,1,2),
        array (3,2,1),
      );
for($i=0; $i<3; $i++)
  for($j=0; $j<3; $j++)
    $C[$i][$j] = $A[$i][$j] + $B[$i][$j];
for($i=0; $i<3; $i++)
  {
    for($j=0; $j<3; $j++)
      print $C[$i] [$j]."";
    print"<br>";
  }
?>



<?
$fruit = array (
          "Apple" => "Red",
          "Pear" => array("Brown"."Yellow"),
          "Peach" => "Pink",
          "Tomato" => array("Red","Green"),
          "Banana" => "Yello",
);
print " **** BEFORE ****<br>";
print_r($fruit);
print"<br><br>";
print "**** AFTER ****<br>";
unset( $fruit[Pear], $fruit[Banana]);
print_r($fruit);
?>



<?
//foreach문을 사용
$basket = array(
        "Apple" => "Red",
        "Peach" => "Pink",
        "Banana" => "Yellow"
    );
foreach ($basket as $fruit)
  {
    print ($fruit. "<br>");
  }
?>



<?
//array_diff문 사용
$arr1 = array("A","B","C","D","E","F","G");
$arr2 = array("A","B","D");
$arr3 = array("E","F","G","H");

$results1 = array_diff ($arr1, $arr2);
$results2 = array_diff ($arr1, $arr2, $arr3);

print "results1 = ";
foreach ($results1 as $value)
  {
    print "$value";
  }
print "<br>";

print "results2 = ";
foreach ($results2 as $value)
  {
    print "$value";
  }
?>



<?
//순서대로 출력
//sort : array 배열에 있는 원소들이 낮은 것에서 높은 순서로 배치 , 배열에 있는 내용을 알파벳 순으로 정렬하여 원래의 배열에 저장
$arrays = array ("David", "Alics", "Elsa","Bob","Chris");
sort ($arrays);
foreach ($arrays as $ar)
  {
    print "$ar<br>";
  }
?>


<?
//sample 1,11,12,13 2,21,22,23 3번 대로 출력
$arrays = array("sample1.php","sample11.php","sample21.php",
      "sample2.php","sample12.php","sample22.php",
"sample3.php","sample13.php","sample23.php");
sort($arrays);

print "SORT <br>";
foreach ($arrays as $ar)
  {
    print "$ar <br>";
  }
?>



<?
//sample 1,2,3 10,11,12 21,22,23번대로 출력
$arrays = array("sample1.php","sample11.php","sample21.php",
      "sample2.php","sample12.php","sample22.php",
"sample3.php","sample13.php","sample23.php");
natsort($arrays);

print "NATSORT <br>";
foreach ($arrays as $ar)
  {
    print "$ar <br>";
  }
?>



<?PHP
$fruit1 = array(
"Apple" => "Red",
"Peach" => "Pink",
"Banana" => "Yellow"
);
$fruit2 = array(
"Apple" => "Red",
"Peach" => "Pink",
"Banana" => "Yellow"
);

print "<table border=1>";
print "<tr><td><b>**** ORIGINAL ****</b><br>";
print_r($fruit1);
print "<br></td>";
print "<tr><td><b>**** SORT() ****</b><br>";
sort($fruit1);
print_r($fruit1);
print "<br></td></tr>";
print "<tr><td><b>**** RSORT() ****</b><br>";
rsort($fruit1);
print_r($fruit1);
print "<br></td></tr>";

print "<tr><td><b>**** ASORT() ****</b><br>";
asort($fruit2);
print_r($fruit2);
print "<br></td></tr>";
print "<tr><td><b>**** ARSORT() ****</b><br>";
arsort($fruit2);
print_r($fruit2);
print "<br></td></tr>";
print "<tr><td><b>**** KSORT() ****</b><br>";
ksort($fruit2);
print_r($fruit2);
print "<br></td></tr>";
print "</table>";
?>



<?PHP
//모든 함수는 이름 뒤에 괄호가 붙으며, 괄호 안에는 정의할 피라미터를 기입
function add ($x, $y)
{
$sum = $x + $y;
return $sum;
}
$result = add (3, 5);
print $result;
?>



<?PHP
function my_log ($arg, $base = 2)
{
    $result = log ($arg) / log ($base);
    return $result;
  }

print "log2(10) = " . my_log(10,2) . "<br>";
print "log10(100) = " . my_log(100,10) . "<br>";
print "log2(8) = " . my_log(8,2) . "<br>";
print "<br>";
print "log2(8) = " . my_log(8) . "<br>";   //default parameter
?>

<?
function factorial($n)
  {
    //팩토리얼 함수 구현
    if($n == 1)  return(1);
    return( $n * factorial($n-1));
  }

for($i = 1; $i <=10; $i++)
  print "factorial($i) = ".factorial($i)."<br>";
?>

<?
print "================================<br>";
?>

<?
function fibo($num)
{ //피보나치 함수구현 (앞에 두수를 더한다)
  if ($num ==0 || $num == 1)  return ($num);
  return (fibo ($num - 1) + fibo ($num -2));
}

for ($i = 0 ; $i <= 4 ; $i++)
  print "fibo($i) = ".fibo($i)."<br>";
?>

<?
print "================================<br>";
?>

<?
function hanoi($number, $from, $via, $to)
{ //하노이 함수 구현
  if($number == 1)
    print(" move disc $number from $from to $to <br>");
  else
  {
    hanoi($number -1, $from, $to, $via);
    print(" move disc $number from $from to $to <br>");
    hanoi($number -1, $via, $from, $to);
  }
}
hanoi(5,'A','B','C');
?>
  }
}

<?

<?
print "================================<br>";
?>

<?
//지역변수
//함수 안에서 정의 된 변수는 변수 값의 변화가 함수 밖에서는 적용 되지 않음
function make_tan()
{
 $i = $i + 10;
}
$i = 0;
make_tan();
print $i;
?>

<?
print "================================<br>";
?>

<?
//전역변수
//함수 내에서 함수 영역 밖에 있는 변수를 참조하고 싶을 경우 참조하려는 변수를 global로 선언하고 그 변수를 전역(global)변수라고 부름
function counts()
  {
    global $i;
    $i = $i + 1;
  }
$i = 0;
while ($i < 10){
  counts();
  print $i."<br>";
}
?>

<?
print "================================<br>";
?>

<?
//정적변수
//함수를 호출할 때마다 이전의 함수 호출 시 가지고 있었던 변수의 내용을 유지하고 싶을 때 정적(static)변수를 사용함
function inc()
  { 
    static $i = 1;
    print $i."<br>";
    $i = $i + 1;
  }

for ($j = 1; $j <= 10; $j++)
  inc();
?>

<?
print "================================<br>";
?>

<?
function swap1 ($a,$b)
  {
    $temp = $a;
    $a = $b;
    $b = $temp;
  }

$i = 3;
$j = 4;

print "$i, $4 <br>";
swap2 ($i, $j);
print "$i. $j";
?>

<?
print "================================<br>";
?>

<?
//전역변수
//함수 내에서 함수 영역 밖에 있는 변수를 참조하고 싶을 경우 참조하려는 변수를 global로 선언하고 그 변수를 전역(global)변수라고 부름
function counts()
  {
    global $i;
    $i = $i + 1;
  }
$i = 0;
while ($i < 10){
  counts();
  print $i."<br>";
}
?>

<?
print "================================<br>";
?>

<?
//정적변수
//함수를 호출할 때마다 이전의 함수 호출 시 가지고 있었던 변수의 내용을 유지하고 싶을 때 정적(static)변수를 사용함
function inc()
  { 
    static $i = 1;
    print $i."<br>";
    $i = $i + 1;
  }

for ($j = 1; $j <= 10; $j++)
  inc();
?>

<?
print "================================<br>";
?>

<?
function swap1 ($a,$b)
  {
    $temp = $a;
    $a = $b;
    $b = $temp;
  }

$i = 3;
$j = 4;

print "$i, $j <br>";
swap1 ($i, $j);
print "$i, $j";
?>

<?
print "================================<br>";
?>

<?
function swap2(&$a, &$b)
  {
    $temp = $a;
    $a = $b;
    $b = $temp;
  }
$i = 3;
$j = 4;
print "$i, $j <br>";
swap2($i, $j);
print "$i, $j";
?>

<?
print "================================<br>";
?>

<?PHP
//삼각함수
$result_sin = sin( M_PI / 6 );
print "sin(30) = $result_sin <br>";
$result_cos = cos( M_PI / 6 );
print "cos(30) = $result_cos <br>";
$result_tan = tan( M_PI / 6 );
print "tan(30) = $result_tan <br>";
$result = asin( $result_sin );
print "asin($result_sin) = $result <br>";
$result = acos( $result_cos );
print "acos($result_cos ) = $result <br>";
$result = atan( $result_tan );
print "atan($result_tan) = $result <br>";
?>

<?
print "================================<br>";
?>


<?
//로그
$result = log(10);
print "log(10) = $result <br>";
$result = log10(10);
print "log10(10) = $result <br>";
$result = sqrt(49);
print "sqrt(49) = $result <br>";
$result = pow(10, 2);
print "pow(10, 2) = $result";


<?
print "================================<br>";
?>


<?
//한국,뉴욕,파리 시간
$seoul = getdate();

print "현재시간 :" .
  $seoul["year"]. "년" .$seoul["mon"]. "월" .$seoul["mday"]. "일". $seoul["hours"]. "시" .$seoul["minutes"]. "분" .$seoul["seconds"]. "초<br>";
?>


<?
print "================================<br>";
?>


<?
$year = gmdate("Y");
$mon = gmdate("m");
$day = gmdate("d");
$hour = gmdate("h");
$min = gmdate("m");
$sec = gmdate("s");

$seoul = getdate(mktime($hour+9,$min,$sec,$mon,$day,$year));
print "Seoul : " .
  $seoul["year"]."-". $seoul["mon"]."-". $seoul["mday"]."@". $seoul["hours"]."-". $seoul["minutes"]."-". $seoul["seconds"]."(24h:min:sec)<br>";

$ny = getdate(mktime($hour-5,$min,$sec,$mon,$day,$year));
print "Seoul : " .
  $ny["year"]."-". $ny["mon"]."-". $ny["mday"]."@". $ny["hours"]."-". $ny["minutes"]."-". $ny["seconds"]."(24h:min:sec)<br>";

$paris = getdate(mktime($hour+1,$min,$sec,$mon,$day,$year));
print "Seoul : " .
  $paris["year"]."-". $paris["mon"]."-". $paris["mday"]."@". $paris["hours"]."-". $paris["minutes"]."-". $paris["seconds"]."(24h:min:sec)<br>";
?>


<?
print "================================<br>";
?>


<?
//두 정수를 더하기
$num1 = 999999999999999999;
$num2 = $num1 + 2;
print $num2 . "<br>";
?>

<?
print "================================<br>";
?>

<?
$num1 =
"77777777777777777777777777777777777.5555555555555555555555555";
$num2 =
"22222222222222222222222222222222222.3333333333333333333333333";
$num3 = "12345678901234567890123456789";
$num4 = "90000000000000000000000000000";
$value = bcadd ($num1, $num2, 20);
print "bcadd: " . $value . "<br>";
$value = bcsub ($num1, $num2, 20);
print "bcsub: " . $value . "<br>";
$value = bcdiv ($num2, "2", 10);
print "bcdiv: " . $value . "<br>";
$value = bcmod ($num3, 2);
print "bcmod: " . $value . "<br>";
$value = bcsqrt ($num4, 20);
print "bcsqrt: " . $value . "<br>";
?>

<?
print "================================<br>";
?>


<?
  for ( $x = 10; $x < 151; $x = $x + 10) {
       print ("bcpow(2," . $x . ") = (" . bcpow(2, $x) . ")<br>");
  }
?>

<?
print "================================<br>";
?>


<?
//mt_rand
//난수를 생성
//파라미터에 아무런 값도 주지 않으면 0부터 RAND_MAX까지의 숫자 중에서 하나의 값을 임의로 선택하여 리턴
//파라미터에 min과 max를 주면 min부터 max 까지의 숫자 사이에서 하나의 값을 임의로 선택하여 리턴
mt_srand ((double)microtime() * 1000000);
$random = mt_rand (0, 100000);
print "random:"  . $random . "<br>";
?>
