// 예제 7-10 정수 입력 필터링

$ok = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
if (is_null($ok) || ($ok === false)) {
    $errors[] = '나이를 정확하게 입력해주세요.';
}
