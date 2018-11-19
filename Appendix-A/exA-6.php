// 예제 A-6 ini_get()과 ini_set()으로 include_path 설정 변경하기

// /home/ireneo/php 를 include_path 설정에 추가한다.
$include_path = ini_get('include_path');
ini_set('include_path', $include_path . ':/home/ireneo/php');
