// 예제 7-12 trim()과 strlen() 조합

if (strlen(trim($_POST['name'])) == 0) {
    $errors[] = "이름을 입력해주세요.";
}
