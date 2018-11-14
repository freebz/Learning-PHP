// 예제 10-3 setcookie()로 페이지 시작하기

<?php
setcookie('userid', 'ralph');
?>
<html<header><title>쿠키 사용 페이지</head>
<body>
setcookie()가 있는 PHP 플록이 모든 HTML보다 먼저 나오기 때문에
이 페이지는 쿠키가 올바르게 설정됩니다.
</body></html>
