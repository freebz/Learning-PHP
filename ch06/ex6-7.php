// 예제 6-7 예외 발생시키기

class Entree {
    public $name;
    public $ingredients = array();

    public function __construct($name, $ingredients) {
        if (! is_array($ingredients)) {
            throw new Exception('$ingredients가 배열이 아닙니다.');
        }
        $this->name = $name;
        $this->ingredients = $ingredients;
    }

    public function hasIngredient($ingredient) {
        return in_array($ingredient, $this->ingredients);
    }
}
