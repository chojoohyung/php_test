<?
//mt_rand
//난수를 생성
//파라미터에 아무런 값도 주지 않으면 0부터 RAND_MAX까지의 숫자 중에서 하나의 값을 임의로 선택하여 리턴
//파라미터에 min과 max를 주면 min부터 max 까지의 숫자 사이에서 하나의 값을 임의로 선택하여 리턴
mt_srand ((double)microtime() * 1000000);
$random = mt_rand (0, 100000);
print "random:"  . $random . "<br>";
?>