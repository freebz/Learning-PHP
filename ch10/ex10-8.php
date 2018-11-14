// 예제 10-8 보안 매개변수로 쿠키 설정하기

// 도메인과 경로에 null을 넣으면
// PHP가 쿠키를 설정할 때 도메인과 경로에 제한을 두지 않는다.
setcookie('short-userid', 'ralph', 0, null, null, true, true);
