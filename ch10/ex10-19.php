// 예제 10-19 로그아웃

session_start();
unset($_SESSION['username']);

print '이용해주셔서 감사합니다.';
