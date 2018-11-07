// 예제 7-5 다중 값으로 제출된 변수에 접근하기

<form method="POST" action="eat.php">
<select name="lunch[]" multiple>
<option value="바베큐 돼지고기">바베큐 돼지고기 번</option>
<option value="닭고기">닭고기 번</option>
<option value="연꽃씨">연꽃씨 번</option>
<option value="단팝">단팝 번</option>
<option value="제비집">제비집 번</option>
</select>
<input type="submit" name="제출">
</form>
원하시는 번을 선택하세요:
<br/>
<?php
if (isset($_POST['lunch'])) {
    foreach ($_POST['lunch'] as $choice) {
        print "$choice 번을 골랐습니다.<br/>";
    }
}
?>
