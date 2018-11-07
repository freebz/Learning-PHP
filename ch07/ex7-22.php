// 예제 7-22 문자열의 HTML 요소 인코딩

$comments = htmlentities($_POST['comments']);
// 이제 안전하게 $comments를 출력할 수 있음
print $comments;
