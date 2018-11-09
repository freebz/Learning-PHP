// 예제 8-21 UPDATE나 DELETE가 몇 개의 로우에 반영되었는지 알아내기

// 일부 요리의 가격 변경
$count = $db->exec("UPDATE dishes SET price = price + 5 WHERE price > 3");
print '총' . $count . '개 메뉴의 가격이 변경되었습니다.';
