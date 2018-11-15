// 예제 15-6 일정 범위의 날짜 출력

$daysToPrint = 4;
$d = new DateTime('next Tuesday');
print "<select name='day'>\n";
for ($i = 0; $i < $dayToPrint; $i++) {
    print " <option>" . $d->format('l F js') . "</option>\n";
    // 현재 날짜에 2일을 더한다.
    $d->modify("+2 day");
}
print "</select>";
