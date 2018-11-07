// 예제 7-17 이메일 주소 문법 검사

$input['email'] = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
if (! $input['email']) {
    $errors[] = '올바른 이메일 주소를 입력해주세요.';
}
