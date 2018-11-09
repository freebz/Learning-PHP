// 예제 8-51 UPDATE 구문에 자리표시자를 잘못 사용한 코드

$stmt = $db->prepare('UPDATE dishes SET price = 1 WHERE dish_name LIKE ?');
$stmt->execute(array($_POST['dish_name']));
