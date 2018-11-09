// 예제 8-25 안전하지 않은 폼 데이터 삽입

$db->exec("INSERT INTO dishes (dish_name)
          VALUES ('$_POST[new_dish_name]')");
