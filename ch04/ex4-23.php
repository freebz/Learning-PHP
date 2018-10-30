// 예제 4-23 explode()로 문자열에서 배열 생성하기

$fish = '농어, 잉어, 꼬치고기, 가자미';
$fish_list = explode(', ', $fish);
print "두 번째 물고기는 $fish_list[1]입니다.";
