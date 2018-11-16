// 예제 18-1 라라벨 라우트 추가

Route::get('/show', function() {
    $now = new DateTime();
    $times = [ "감자 튀김", "찐 감자", "구운 감자" ];
    return view('show-menu', [ 'when' => $now,
                               'what' => $items ]);
});
