// 예제 8-8 침묵 모드

try {
   $db = new PDO('sqlite:/tmp/restaurant.db');
} catch (PDOException $e) {
   print "접속할 수 없습니다: " . $e->getMessage();
}
$result = $db->exec("INSERT INTO dishes (dish_size, dish_name, price, is_spicy)
                    VALUES ('대', '참께 퍼프', 2.50, 0)");
if (false === $result) {
   $error = $db->errorInfo();
   print "데이터를 삽입할 수 없습니다!\n";
   print "SQL Error={$error[0]}, DB Error={$error[1]}, Message={$error[2]}\n";
}
