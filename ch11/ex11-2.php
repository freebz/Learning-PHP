// 예제 11-2 API URL에 쿼리 문자열 매개변수 삽입하기

$params = array('api_key' => NDB_API_KEY,
                'q' => 'black pepper',
                'format' => 'json');

$url = "http://api.nal.usda.gov/ndb/search?" . http_build_query($params);
