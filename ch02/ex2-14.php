// 예제 2-14 str_replace() 사용법

$html = '<span class="{class}">유부<span>
<span class={class}">생선 튀김</span>';

print str_replace('{class}',$my_class,$html);
