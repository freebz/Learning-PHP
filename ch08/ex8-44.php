// 예제 8-44 기본 가져오기 방식 설정

$q = $db->query('SELECT dish_name, price FROM dishes');
// setFetchMode()를 이용하면
// fetch()에 아무것도 전달할 필요가 없다.
$q->setFetchMode(PDO::FETCH_NUM);
while($row = $q->fetch()) {
    print implode(', ', $row) . "\n";
}
