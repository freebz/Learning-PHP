// 예제 11-16 응답 코드 변경

if (! (isset($_GET['key']) && ($_GET['key'] == 'pineapple'))) {
    http_response_code(403);
    $response_data = array('error' => 'key가 올바르지 않습니다');
}
else {
    $response_data = array('현재 시각' => time());
}
header('Content-Type: applicaton/json');
print json_encode($response_data);
