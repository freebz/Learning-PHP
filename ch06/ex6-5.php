// 예제 6-5 생성자를 이용해 객체 초기화하기

class Entree {
    public $name;
    public $ingredients = array();

    public function __construct($name, $ingredients) {
        $this->name = $name;
        $this->ingredients = $ingredients;
    }

    public function hasIngredient($ingredient) {
        return in_array($ingredient, $this->ingredients);
    }
}
