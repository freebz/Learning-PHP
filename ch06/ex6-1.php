// 예제 6-1 클래스 정의

class Entree {
    public $name;
    public $ingredients = array();

    public function hasIngredient($$ingredient) {
        return in_array($ingredient, $this->ingredients);
    }
}
