-- 예제 8-24 테이블에서 일부 로우 삭제하기

; 가격이 10.00보다 큰 로우를 지운다.
DELETE FROM dishes WHERE price > 10.00

; 메뉴명이 정확히 "호두 번"인 로우를 지운다.
DELETE FROM dishes WHERE dish_name = '호두 번'
