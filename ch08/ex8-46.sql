-- 예제 8-46 SELECT에 와일드카드 사용하기

; 메뉴명이 D로 시작하는 모든 로우 가져오기
SELECT * FROM dishes WHERE dish_name LIKE 'D%'

; 이름이 Fried Cod, Fried Bod, Fried Nod 등인 메뉴 가져오기.
SELECT * FROM dishes WHERE dish_name LIKE 'Fried _od'
