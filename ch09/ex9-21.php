// 예제 9-21 파일명에 들어갈 폼 매개변수를 안전하게 조치하기

// user에서 슬래시 제거하기
$user = str_replace('/', '', $_POST['user']);
// user에서 .. 제거하기
$user = str_replace('..', '', $user);

if (is_readable("/usr/local/data/$user")) {
    print '사용자 정보: ' . htmlentities($user) . ':<br/>';
    print file_get_contents("/usr/local/data/$user");
}
