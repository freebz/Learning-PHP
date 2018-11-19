// 예제 20-7 메시지에 포함된 순자를 형식화하기

$msg = "총 가격: {0,number,currency}.";

$fmtUS = new MessageFormatter('en_US', $msg);
$fmtGB = new MessageFormatter('en_GB', $msg);

print $fmtUS->format(array(4.21)) . "\n";
print $fmtGB->format(array(4.21)) . "\n";
