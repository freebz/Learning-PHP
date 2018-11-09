// 예제 8-27 복수의 자리표시자 사용하기

$stmt = $db->prepare('INSERT INTO dishes (dish_name,price,is_spicy) VALUES (?,?,?)');
$stmt->execute(array($_POST['new_dish_name'], $_POST['new_price'],
                     $_POST['is_spicy']));
