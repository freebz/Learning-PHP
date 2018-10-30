// 예제 5-24 인수의 형 선언

function countdown(int $top) {
    while ($top > 0) {
        print "$top..";
        $top--;
    }
    print "펑!\n";
}

$counter = 5;
countdown($counter);
print "counter의 값: $counter";
