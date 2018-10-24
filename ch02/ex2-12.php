// 예제 2-12 substr()로 문자열 줄이기

// $_POST['comments']의 첫 30바이트를 출력한다.
print substr($_POST['comments'], 0, 30);
// 말줄임표를 붙인다.
print '...';
