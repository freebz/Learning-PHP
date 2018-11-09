-- 예제 8-47 UPDATE에 와일드카드 사용하기

UPDATE dishes SET price = price * 2 WHERE dish_name LIKE '%매운%'
