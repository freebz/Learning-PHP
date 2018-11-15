// 예제 13-7 고립된 상태에서 폼 데이터 검사하기

function validate_form($submitted) {
    $errors = array();
    $input = array();

    $input['age'] = filter_var($submitted['age'] ?? NULL, FILTER_VALIDATE_INT);
    if ($input['age'] === false) {
        $errors[] = '나이를 정확하게 입력해주세요.';
    }

    $input['price'] = filter_var($submitted['price'] ?? NULL,
                                 FILTER_VALIDATE_FLOAD);
    if ($input['price'] === false) {
        $errors[] = '가격을 정확하게 입력해주세요.';
    }

    $input['name'] = trim($submitted['name'] ?? '');
    if (strlen($input['name']) == 0) {
        $errors[] = "이름을 입력해주세요.";
    }

    return array($errors, $input);
}
