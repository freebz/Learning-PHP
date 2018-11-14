// 예제 11-15 JSON 응답 반환

$response_data = array('현재 시각' => time());
header('Content-Type: application/json');
print json_encode($response_data);
