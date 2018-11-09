// 예제 8-7 exec()의 오류 검사

try {
   $db = new PDO('sqlite:/tmp/restaurant.db');
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO:ERRMODE_EXCEPTION);
   $affectedRows = $db->exec("INSERT INTO dishes (dish_size, dish_name,
                                                  price, is_spicy)
                                  VALUES ('대', '참께 퍼프', 2.50, 0)");
} catch (PDOException $e) {
   print "데이터를 삽입할 수 없습니다: " . $e->getMessage();
}
