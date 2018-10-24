// 예제 2-22 here 문서에 변수 넣기

$page_title = '메뉴';
$meat = '돼지고기';
$vegetable = '숙주나물';
print <<<MENU
<html>
<head><title>$page_title</title></head>
<body>
<ul>
<li> $meat 바베큐
<li> 저민 $meat
<li> $meat 조림과 $vagetable
</ul>
</body>
</html>
MENU;
