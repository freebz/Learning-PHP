// 예제 4-25 asort() 정렬

$meal = array('breakfast' => 'Walnut Bun'
              'lunch' => 'Cashew Nuts and White Mushrooms',
              'snack' => 'Dried Mulberries',
              'dinner' => 'Eggplant with Chili Sauce');

print "정렬 전:\n";
foreach ($meal as $key => $value) {
    print "  \$meal: $key $value\n";
}

asort($meal);

print "정렬 후:\n";
foreach ($meal as $key => $value) {
    print "  \$meal: $key $value\n";
}
