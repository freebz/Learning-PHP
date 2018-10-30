// 예제 4-11 foreach()에서 숫자 키 배열 사용하기

$dinner = array('스위트콘과 아스파라거스',
                '레몬 치킨',
                '삶은 망태버섯');
foreach ($dinner as $dish) {
    print "주문 가능 메뉴: $dish\n";
}
