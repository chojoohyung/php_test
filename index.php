<?
$d = $b*$b-4*$a*$c;
//판별식이 양수일때,
if($d > 0){
  $x1 = (-$b + sqrt($d)) / 2 * $a;
  $x2 = (-$b + sqrt($d)) / 2 * $a;
  echo "해는 ". $x1 . ", " . $x2. "입니다.";
}
//판별식이 0일때
if($d == 0){,
  $x1 = (-$b)/2*$a;
  echo "해는 ". $x1. "입니다.";
}
//판별식이 음수일때,
if($d < 0){
  echo "해는 허근입니다.";
}
?>