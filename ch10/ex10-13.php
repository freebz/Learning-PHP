// 예제 10-13 세션 유지 시간 변경

ini_set('session.gc_maxlifetime',600); // 600초 == 10분
session_start();
