// 예제 5-11 함수로 값 반환하기

function restaurant_check($meal, $tax, $tip) {
    $tax_amount = $meal + ($tax / 100);
    $tip_amount = $meal * ($tip / 100);
    $total_amount = $meal + $tax_amount + $tip_amount;

    return $total_amount;
}
