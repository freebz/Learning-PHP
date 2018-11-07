// 예제 7-4 다중 값을 지닌 폼 요소

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
