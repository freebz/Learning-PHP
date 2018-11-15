// 예제 14-1 설정 파일 읽기

$config = parse_ini_file('config.ini');
$db = new PDO($config['dsn'], $config['dbuser'], $config['dbpassword']);
