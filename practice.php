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

<?
print "================================<br>";
?>


<?
$result_sin = sin( M_PI / 6);
print "sin(30) = $result_sin <br>";
$result_cos = cos( M_PI / 6);
print "cos(30) = $result_cos <br>";
$result_tan = tan( M_PI / 6);
print "tan(30) = $result_tan <br>";

print __FILE__."<br>";
print __LINE__."<br>";

$result = asin ($result_sin);
print "asin($result_sin) = $result <br>";
$result = acos ($result_cos);
print "acos($result_cos) = $result <br>";
$result = atan ($result_tan );
print "atan ($result_tan ) = $result <br>";
?>

<?
print "================================<br>";
?>

<?
function info ()
{
print “OS: “ . PHP_OS . “ Operating System<br>”;
print “PHP: “ . PHP_VERSION . “<br>”;
}
info();
?>

<?
print "================================<br>";
?>

<?
$var =10; //전역 변수로 선언함
/*
PHP는 모든 전역 변수를 $GLOBALS 배열에 저장
  이 배열에 인덱스로 변수의 이름을 사용하면, 해당 전역 변수의 값에 접근할 수 있다.
  이 배열은 함수 내부에서도 접근할 수 있으며, 이 배열을 통해 바로 전역 변수의 값을 변경할 수 도 있다.*/
function varFunc(){
  echo"함수 내부에서 호출한 전역 변수 var의 값은 {$var}입니다.<br>";
    echo"함수 내부에서 호출한 전역 변수 var의 값은 {$GLOBALS['var']}입니다.<br>";
}
varFunc();
echo "함수 밖에서 호출한 전역변수 var의 값은 {$var}입니다.";
?>

<?
print "================================<br>";
?>

<?
define (“R2”, 1.4142135623731);
define (“R3”, 1.7320508075689);
$sum = R2 + R3;
print “R2: “ . R2 . “<br>”;
print “R3: “ . R3 . “<br>”;
print “R2+R3: “ . $sum . “<br>”;
?>

<?
print "================================<br>";
?>

<?
define("a", 3*3);
define("b", 4*4);

$c = a+b;

print($c);
?>


<?
print "================================<br>";
?>


<?
function oneUp($var) {  //var는 변수값을 받는다  
$var +=1;
}
//실행
$num=5;
oneUp($num); // num을 인수로 한다
echo $num;?>


<?
print "================================<br>";
?>


<?
//ucfirst = str 문자열의 첫번째 문자를 대문자로 변환한 뒤 변환된 문자열을 리턴
//ucwords =str 문자열에서 각각의 단어마다 첫번째 문자를 대문자로 변환한 뒤 변환된 문자열을 리턴
$str = "Apple Orange pEAr";
$str1 = strtoupper ($str);
print $str1 . "<br>";
$str2 = strtolower ($str);
print $str2 . "<br>";
$str3 = ucfirst ($str);
print $str3 . "<br>";
$str4 = ucwords ($str);
print $str4 . "<br>";
?>


<?
print "================================<br>";
?>


<?
//str의 start+1 번째 문자부터 length 만큼의 문자열을 선택하고 그 선택된 부분 문자열을 리턴
//두 개 또는 세 개의 파라미터를 가질 수 있음
//예를 들어 substr ($str, 4)를 호출하면 문자열 $str의 5번째 문자부터 문자열의 끝문자까지의 부분 문자열을 리턴
$str = “1234567890 abcdefghijklmnopqrstuvwxyz”;
$str1 = substr ($str, 2, 5);
print $str1 . “<br>”;
$str2 = substr ($str, 8, 5);
print $str2 . “<br>”;
$str3 = substr ($str, 12, 8);
print $str3 . “<br>”;
$str4 = substr ($str, -9, 8);
print $str4 . “<br>”;
?>


<?
print "================================<br>";
?>


<?
//문자열의 출력을 형식화된 문자열로 출력
$num = 3.141592;
printf("정수형식= %d, 실수형식 = %0.2f",$num, $num);
?>



<?
print "================================<br>";
?>


<?
//문자열을 주어진 문자열로 분리
$date = "September 30 2017";
sscanf($date, "%s %d %d",$month, $day, $year);
printf("%d/%s/%d", $year, $month,$day);
?>


<?
print "================================<br>";
?>


<?
//문자열을 반복하여 출력할 때
$str = "Hello World!! ";
printf(str_repeat($str, 5));
?>


<?
print "================================<br>";
?>



<?
//구분자로 문자열을 분리할 때
$str = 'one/two/three/four';
$value = explode('/', $str);
foreach( $value as $val)
print $val."<br>";
print "<br>";
$value = explode('/', $str, 2);
foreach( explode('/', $str, 2) as $val)
print $val."<br>";
?>

<?
print "================================<br>";
?>

<?
//배열을 문자열로 만들 때
$numbers = array(1,2,3,4);
$string = implode($numbers );
printf("%s",$string);
?>


<?
print "================================<br>";
?>



<?
class Student //클래스 이름선언 클래스 : 동종의 객체(object)들을 묶어 정의 한 것. 객체: 데이터+함수
  {
    public $studentId; //멤버변수 (attribute) 선언
    public $studentName;

    public function printStudent ($id, $name) // 멤버함수(method)선언, 멤버함수는 멤버변수를 엑세스
    {
      print "ID : ". $id . "<br>";
      print "Name : " . $name . "<br>";
    }
  }

$object = new Student; // 객체 선언
$object->studentId = 20171234; //객체 내의 멤버변수를 가리켜 값을 지정한다
$object->studentName = "Alice";

$object->printStudent($object->studentId, $object->studentName); //출력한다
?>


<?
print "================================<br>";
?>




<?
class Student
{

  public $StudentID;
  public $StudentName;

  function printStudent ()
  {
    print "ID: " . $this->StudentID . "<br>";
    print "Name: ". $this->StudentName . "<br>";
  }
}
$object = new Student;
$object->StudentID = 20181234;
$object->StudentName = "Alice";
$object->printStudent();
?>

<?
print "================================<br>";
?>

<?
class Student
{
  //private은 접근 금지

  private $StudentID;
  private $StudentName;

  function printStudent ()
  {
    print "ID: " . $this->StudentID . "<br>";
    print "Name: ". $this->StudentName . "<br>";
  }
}
$object = new Student;
$object->StudentID = 20181234;
$object->StudentName = "Alice";
$object->printStudent();
?>


<?
print "================================<br>";
?>



<?
//method를 이용하여 적용 attribute 변경
class Student
{
private $studentId;
private $studentName;
public function printStudent()
{
print "ID : ". $this->studentId . "<br>";
print "Name : ". $this->studentName . "<br>";
}
public function setStudentId($id)
{
$this->studentId = $id;
}
  
public function setStudentName($name)
  {
    $this->studentName = $name;
  }
}
$object = new Student;
$object->setStudentId(20171234);
$object->setStudentName("Alice");

$object->printStudent();
?>


<?
print "================================<br>";
?>



<?
class fruit
  { 
    private $_fruit_name;
    private $_price;
    private $_color;

    function __construct($name, $price, $color)
    {
      $this->_fruit_name = $name;
      $this->_price = $price;
      $this->_color = $color;
    }
    function print_fruit()
    {
      print "Fruit name: $this->_fruit_name<br>";
      print "Fruit price: $this->_price<br>";
      print "Fruit color: $this->_color<br>";
      print "<br>";
    }
  }

$Apple = new fruit ('Apple',1000,'red');
$Orange = new fruit ('Orange',2000,'Orange');
$Banana = new fruit ('Banana',500,'yellow');
$Pear = new fruit ('Pear',3000,'gray');
$Apple->print_fruit();
$Orange->print_fruit();
$Banana->print_fruit();
$Pear->print_fruit();
?>

<?
print "================================<br>";
?>


<?PHP
  class People
  {
    protected $name;
    protected $age;
    
    function printPeople ()
    {
      print "Name : ". $this ->name . "<br> ";
      print "Age : ". $this ->age . "<br> ";
    }
  }

  class Student extends People
  {
    private $studentId;

    function __construct($name, $age, $id)
    {
      $this->name = $name;
      $this->age  = $age;
      $this->studentId   = $id;
    }
    function printStudent()
    {
      print "- Student - <br>";
      $this -> printPeople ();
      print "Id : ". $this -> studentId . "<br> ";
    }
  }

  class Professor extends People
  {
    private $office_No;

    function __construct($name, $age, $no)
    {
      $this->name = $name;
      $this->age  = $age;
      $this->office_No   = $no;
    }
    function printProfessor()
    {
      print "- Professor - <br>";
      $this -> printPeople ();
      print "Office_No : ". $this -> office_No . "<br> ";
    }
  }

  class Staff extends People
  {
    private $title;

    function __construct($name, $age, $title)
    {
      $this->name = $name;
      $this->age  = $age;
      $this->title   = $title;
    }
    function printStaff()
    {
      print "- Staff - <br>";
      $this -> printPeople ();
      print "Title : ". $this -> title . "<br> ";
    }
  }

  $object1 = new Student("Lee", "21", "20170123");
  $object2 = new Professor("Kim", "42", "107");
  $object3 = new Staff("Park", "37", "Chief");

  $object1->printStudent();
  print "<br>";
  $object2->printProfessor();
  print "<br>";
  $object3->printStaff(); 
  print "<br>";
?>


<?
print "================================<br>";
?>


<?PHP
  class People
  {
    protected $name;
    protected $age;
    
    function printPeople()
    {
      print "Name : ". $this ->name . "<br> ";
      print "Age : ". $this ->age . "<br> ";
    }
  }

  class Student extends People
  {
    private $studentId;

    function __construct($name, $age, $id)
    {
      $this->name = $name;
      $this->age  = $age;
      $this->studentId   = $id;
    }
    function printPeople()
    {
      print "- Student - <br>";
      parent::printPeople (); // 범위결정 연산자, 부모 클래스의 메소드, 생성자에 접근
      print "Id : ". $this -> studentId . "<br> ";
    }
  }

  class Professor extends People
  {
    private $office_No;

    function __construct($name, $age, $no)
    {
      $this->name = $name;
      $this->age  = $age;
      $this->office_No   = $no;
    }
    function printPeople()
    {
      print "- Professor - <br>";
      parent::printPeople ();
      print "Office_No : ". $this -> office_No . "<br> ";
    }
  }

  class Staff extends People
  {
    private $title;

    function __construct($name, $age, $title)
    {
      $this->name = $name;
      $this->age  = $age;
      $this->title   = $title;
    }
    function printPeople()
    {
      print "- Staff - <br>";
      parent::printPeople ();
      print "Title : ". $this -> title . "<br> ";
    }
  }

  $object1 = new Student("Lee", "21", "20170123");
  $object2 = new Professor("Kim", "42", "107");
  $object3 = new Staff("Park", "37", "Chief");

  $object1->printPeople();
  print "<br>";
  $object2->printPeople();
  print "<br>";
  $object3->printPeople(); 
  print "<br>";
?>

<?
print "================================<br>";
?>


<?PHP
  class People
  {
    protected $name;
    protected $age;
    
    function printPeople()
    {
      print "Name : ". $this ->name . "<br> ";
      print "Age : ". $this ->age . "<br> ";
    }
  }

  class Student extends People
  {
    private $studentId;

    function __construct($name, $age, $id)
    {
      $this->name = $name;
      $this->age  = $age;
      $this->studentId   = $id;
    }
    function printPeople()
    {
      print "- Student - <br>";
      parent::printPeople (); // 범위결정 연산자, 부모 클래스의 메소드, 생성자에 접근
      print "Id : ". $this -> studentId . "<br> ";
    }
  }

  class Professor extends People
  {
    private $office_No;

    function __construct($name, $age, $no)
    {
      $this->name = $name;
      $this->age  = $age;
      $this->office_No   = $no;
    }
    function printPeople()
    {
      print "- Professor - <br>";
      parent::printPeople ();
      print "Office_No : ". $this -> office_No . "<br> ";
    }
  }

  class Staff extends People
  {
    private $title;

    function __construct($name, $age, $title)
    {
      $this->name = $name;
      $this->age  = $age;
      $this->title   = $title;
    }
    function printPeople()
    {
      print "- Staff - <br>";
      parent::printPeople ();
      print "Title : ". $this -> title . "<br> ";
    }
  }

  $object1 = new Student("Lee", "21", "20170123");
  $object2 = new Professor("Kim", "42", "107");
  $object3 = new Staff("Park", "37", "Chief");

  $object1->printPeople();
  print "<br>";
  $object2->printPeople();
  print "<br>";
  $object3->printPeople(); 
  print "<br>";
?>

<?
print "================================<br>";
?>

<?
$filep = fopen ("./aaa.txt", "r");
if (!$filep) die ("파일을 열 수 없습니다.");
while ($line = fgets ($filep, 1024))
    print $line . "<br>";
fclose ($filep);
?>

<?
print "================================<br>";
?>


<?
$filep = fopen ("./aaa.tex" , "w");
if (!$filep) die ("파일을 열 수 없습니다.");
fputs ($filep, "ROMEO:
I take thee at thy word:
Call me but love, and I'll be new baptized;
Henceforth I never will be Romeo.");
fclose ($filep);
$filep = fopen ("./aaa.txt", "r");
while ($line = fgets ($filep, 1024))
print $line . "<br>";
fclose ($filep);
?>

<?
print "================================<br>";
?>


<?
$filep = fopen("./logfile.txt","w");
if (!$filep) die ("파일을 열수 없습니다.");
$time = date("Y-m-d H:i:s",time());
fputs ($filep, $time);
fclose ($filep);
print "connect service";
?>

<?
print "================================<br>";
?>


<?PHP
$data = file("name.txt");
foreach($data as $name)
{
print "Name : ".$name."<br>";
}
?>

<?
print "================================<br>";
?>


<?PHP
$dataset = file("major.txt");
foreach($dataset as $data)
{
$str = explode(" ", $data);
print "Nmae : ".$str[0].", Major : ".$str[1]."<br>";
}
?>