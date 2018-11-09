// 예제 8-45 SELECT 구문에 자리표시자 사용하기

$stmt = $db->prepare('SELECT dish_name, price FROM dishes
                     WHERE dish_name LIKE ?');
$stmt->execute(array($_POST['dish_search']));
while ($row = $stmt->fetch()) {
    // ... 작업
}
