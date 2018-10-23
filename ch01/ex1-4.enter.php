// 예제 1-4 폼 출력

<?php
print <<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
이름: <input type="text" name="user" />
<br/>
<button type="submit">인사</button>
</form>
_HTML_;
?>
