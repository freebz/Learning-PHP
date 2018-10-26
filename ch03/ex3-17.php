// 예제 3-17 while()로 <select> 메뉴 출력하기

$i = 1;
print '<select name="people">';
while ($i <= 10) {
    print "<option>$i</option>\n";
    $i++;
}
print '</select>';
