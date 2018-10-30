// 예제 4-24 sort()를 이용한 정렬

$dinner = array('Sweet Corn and Asparagus',
                'Lemon Chicken',
                'Braisedd Bamboo Fungus');
$meal = array('breakfast' => 'Walnut Bun',
              'lunch' => 'Cashew Nuts and White Mushrooms',
              'snack' => 'Dried Mulberries',
              'dinner' => 'Eggplant with Chili Sauce');

print "정렬 전:\n";
foreach ($dinner as $key => $value) {
    print " \$dinner: $key $value\n";
}
foreach ($meal as $key => $value) {
    print "  \$meal: $key $value\n";
}

sort($dinner);
sort($meal);

print "정렬 후:\n";
foreach ($dinner as $key => $value) {
    print " \$dinner: $key $value\n";
}
foreach ($meal as $key => $value) {
    print "  \$meal: $key $value\n";
}
