// 예제 12-6 디버깅 출력을 오류 로그로 전송하기

$prices = array(5.95, 3.00, 12.50);
$total_price = 0;
$tax_rate = 1.08; // 8% 부가세율

foreach ($prices as $price) {
    error_log("[전: $total_price]");
    $total_price = $price * $tax_rate;
    error_log("[후: $total_price]");
}

printf('총 가격 (부가세 포함): $%.2f', $total_price);
