// 예제 9-4 파일 내용의 각 줄에 접근하기

foreach (file('people.txt') as $line) {
    $line = trim($line);
    $info = explode('|', $line);
    print '<li><a href="mailto:' . $info[0] . '">' . $info[1] . "</li>\n";
}
