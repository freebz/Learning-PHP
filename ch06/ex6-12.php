// 예제 6-12 하위클래스에 생성자 추가하기

class ComboMeal extends Entree {

    public function __construct($name, $entrees) {
        parent::__construct($name, $entrees);
        foreach ($entrees as $entree) {
            if (! $entree instanceof Entree) {
                throw new Exception('$entres의 원소는 객체여야 합니다..');
            }
        }
    }

    public function hasIngredient($ingredient) {
        foreach ($this->ingredients as $entree) {
            if ($entree->hasIngredient($ingredient)) {
                return true;
            }
        }
        return false;
    }
}
