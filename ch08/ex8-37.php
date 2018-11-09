// 예제 8-37 fetch()를 연쇄적으로 사용하기

$cheapest_dish_info = $db->query('SELECT dish_name, price
                                   FROM dishes ORDER BY price LIMIT 1')->fetch();
print "$cheapest_dish_info[0], $cheapest_dish_info[1]";
