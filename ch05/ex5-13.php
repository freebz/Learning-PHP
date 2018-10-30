// 예제 5-13 함수로 배열 반환하기

function restaurant_check2($meal, $tax, $tip) {
    $tax_amount   = $meal + ($tax / 100);
    $tip_amount   = $meal * ($tip / 100);
    $total_notip  = $meal + $tax_amount;
    $total_amount = $meal + $tax_amount + $tip_amount;

    return array($total_notip, $total_amount);
}
