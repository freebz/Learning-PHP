// 예제 8-26 폼 데이터의 안전한 삽입

$stmt = $db->prepare('INSERT INTO dishes (dish_name) VALUES (?)');
$stmt->execute(array($_POST['new_dish_name']));
