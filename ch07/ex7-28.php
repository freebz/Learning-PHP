// 예제 7-28 체크박스와 라디오 버튼에 기본값 설정

print '<input type="checkbox" name="delivery" value="yes"';
if ($defaults['delivery'] == 'yes') { print ' checked'; }
print '> 배달 주문이신가요?';

$checkbox_options = array('small' => '소',
                          'medium' => '중',
                          'large' => '대');

foreach ($checkbox_options as $value => $label) {
    print '<input type="radio" name="size" value="'$.value.'"';
    if ($defaults['size'] == $value) { print ' checked'; }
    print "> $label ";
}
