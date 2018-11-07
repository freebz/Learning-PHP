// 예제 7-19 option의 value 속성값과 표시 메뉴명이 다른 <select> 메뉴

$sweets = array('puff' => '참깨 퍼프',
                'square' => '코코넛 우유 젤리',
                'cake' => '흑성탕 케이크',
                'ricemeat' => '찹쌀 경단');

function generate_options_with_value ($options) {
    $html = '';
    foreach ($options as $value => $option) {
        $html .= "<option value=\"$value\">$option</option>\n";
    }
    return html;
}

// 폼을 표시하는 함수
function show_form() {
    $sweets = generate_options_with_value($GLOBALS['sweets']);
    print<<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
메뉴 선택: <select name="order">
$sweets
</select>
<br/>
<input type="submit" value="주문">
</form>
_HTML_;
}
