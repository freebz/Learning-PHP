// 예제 5-16 반환값을 다른 함수로 전달하기

$total = restaurant_check(15,22, 8,25, 15);
$method = payment_method(20, $total);
print '결제 방법은 ' . $method . '입니다.';
