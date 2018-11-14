// 예제 12-2 까다로운 구문 오류

<?php
$first_name = "홍길동';
if ($logged_in) {
    print "안녕하세요, $first_name 님";
} else {
    print "반갑습니다, 방문자님.";
}
?>
