// 예제 8-6 exec()로 데이터 추가하기

try {
   $db = new PDO('sqlite:/tmp/restaurant.db');
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO:ERRMODE_EXCEPTION);
   $affectedRows = $db->exec("INSERT INTO dishes (dish_name, price, is_spicy)
                           VALUES ('참께 퍼프', 2.50, 0)");
} catch (PDOException $e) {
   print "데이터를 삽입할 수 없습니다: " . $e->getMessage();
}
