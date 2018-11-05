// 예제 6-8 예외 상황 발생

$drink = new Entree('우유 한 잔', '우유');
if ($drink->hasIngredient('우유')) {
    print "맛있어!";
}
