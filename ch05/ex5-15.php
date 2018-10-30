// 예제 5-15 여러 개의 return 구문이 존재하는 함수

function payment_method($cash_on_hand, $amount) {
    if ($amount > $cash_on_hand) {
        return '신용카드';
    } else {
        return '현금';
    }
}
