// 예제 20-1 문자열 길이 측정

$english = "cheese";
$greek = "τυρί";

print "strlen()을 사용했을 때 '$english'의 글자 수: " . strlen($english) . ", " .
    "'$greek'의 글자 수 ". strlen($greek) . ".\n";

print "mb_strlen()을 사용했을 때 '$english'의 글자 수: " . mb_strlen($english) . "," .
    "'$greek'의 글자 수: ". mb_strlen($greek) . ".\n";
