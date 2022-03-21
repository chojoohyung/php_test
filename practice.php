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

echo([=[=]])