// 예제 5-9 인수값 변경하기

function countdown($top) {
    while ($top > 0) {
        print "$top..";
        $top--;
    }
    print "펑!\n";
}

$counter = 5;
countdown($counter);
print "counter의 값: $counter";
