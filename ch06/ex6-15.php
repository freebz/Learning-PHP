// 예제 6-15 use 키워드 사용하기

use Tiny\Eating\Fruit as Snack;

use Tiny\Fruit;

// \Tiny\Eating\Fruit::munch(); 호출
Snack::munch("딸기");

// \Tiny\Fruit::munch(); 호출
Fruit::munch("오렌지");
