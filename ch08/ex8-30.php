// 예제 8-30 query()와 fetch()로 로우 가져오기

$q = $db->query('SELECT dish_name, price FROM dishes');
while ($row = $q->fetch()) {
    print "$row[dish_name], $row[price] \n";
}
