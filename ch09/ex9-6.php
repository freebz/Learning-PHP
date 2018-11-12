// 예제 9-6 한번에 한 줄씩 읽기

$fh = fopen('people.txt', 'rb');
while ((! feof($fh)) && ($line = fgets($fh))) {
    $line = trim($line);
    $info = explode('|', $line);
    print '<li><a href="mailto:' . $info[0] . '">' . $info[1] . "</li>\n";
}
fclose($fh);
