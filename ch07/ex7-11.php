// 예제 7-11 부동소수점 수 검증

$ok = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
if (is_null($ok) || ($ok === false)) {
    $errors[] = '가격을 정확하게 입력해주세요.';
}
