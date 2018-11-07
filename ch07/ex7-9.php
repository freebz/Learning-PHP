// 예제 7-9 필수 요소 확인

if (strlen($_POST['email']) == 0) {
    $errors[] = "이메일 주소를 입력해주세요";
}
