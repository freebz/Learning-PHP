-- 예제 8-3 메뉴판 테이블 생성

CREATE TABLE dishes (
   dish_id INTEGER PRIMARY KEY,
   dish_name VARCHAR(255),
   price DECIMAL(4,2),
   is_spicy INT
)
