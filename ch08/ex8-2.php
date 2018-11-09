// 예제 8-2 접속 오류 검사

try {
    $db = new PDO('mysql:host=db.example.com;dbname=restaurant','penguin','top^hat');
    // $db를 이용한 코드를 이곳에 작성한다.
} catch (PDOException $e) {
    print "데이터베이스에 접속할 수 없습니다: " . $e->getMessage();
}
