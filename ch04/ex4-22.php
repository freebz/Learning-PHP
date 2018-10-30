// 예제 4-22 implode()로 HTML 테이블 행 출력하기

$dimsum = array('닭고기 번','오리발 구이','순무 케이크');
print '<tr><td>' . implode('</td><td>',$dimsum) . '</td></tr>';
