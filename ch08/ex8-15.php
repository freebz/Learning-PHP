// 예제 8-15 exec()로 데이터 변경하기

try {
    $db = new PDO('sqlite:/tmp/restaurant.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO:ERRMODE_EXCEPTION);
    // 칠리소스 가지 볶음밥 매운맛 메뉴로 고친다.
    // 몇 개의 로우가 반영되었는지 알 필요 없으면
    // exec()의 반환값이 필요하지 않다.
    $db->exec("UPDATE dishes SET is_spicy = 1
               WHERE dish_name = '칠리소스 가지 볶음'");
    // 칠리소스 랍스터를 매운맛 메뉴로 고치고 가격을 두 배로 올린다.
    $db->exec("UPDATE dishes SET is_spicy = 1, price=price * 2
               WHERE dish_name = '칠리소스 랍스터'");
} catch (PDOException $e) {
    print "데이터를 수정할 수 없습니다. " . $e->getMessage();
}
