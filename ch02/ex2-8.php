// 예제 2-8 printf()를 이용해 0으로 채우기

$zip = '6520';
$month = 2;
$day = 6;
$year = 2007;

printf("우편번호는 %05d이고 날짜는 %02d/%02d/%0d", $zip, $month, $day, $year);
