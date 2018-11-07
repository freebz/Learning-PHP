// 예제 7-20 <select> 메뉴 제출값 검사

$input['order'] = $_POST['order'];
if (! array_key_exists($input['order'], $GLOBALS['sweets'])) {
    $errors[] = '주문 가능한 메뉴가 아닙니다.';
}
