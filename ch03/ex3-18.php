// 예제 3-18 for()로 <select> 메뉴 출력하기

print '<select name="people">';
for ($i = 1; $i <= 10; $i++) {
    print "<option>$i</option>\n";
}
print '</select>';
