# Needed:
- Font MabryPro
- Header
	- Как быть с кнопкой "Записаться на тест-драйв" на средних экранах? Она не влезает.
- Footer
	- фоновое изображение единой картинкой
- Main - Партнёры
	- изображение карточек 3 и 4

# Complile sass
node-sass -w --sourcemap=none --no-cache --output-style=compact docs/sass/main.sass docs/css/main.css

Font: MabryPro

Desktop: 1920
Mobile: 360

Wrapper: 1560px (81.25%)
Wrapper 2 (paragraph sections): 1032px (53.75%)

Pages:
1. 001 - main (index)
2. 003 - oborudovanie–inner
3. 005 - kosmetika
4. 007 - kosmetika–tovar
5. 013 - raspisanie
6. 014 - obucheniye
7. 015 - about-us
8. 016 - history

Functionality:
1. 001 - main
	- vertical slider vs1 (banners)
		- mobile: horizontal slider mhs1
	- horizontal slider hs1 (post cards)
	- mobile: horizontal slider mhs2 (brands)
2. 003 - oborudovanie–inner
3. 005 - kosmetika
	- vertical slider vs1 (banners)
		- mobile: horizontal slider mhs1
	- mobile: horizontal slider mhs2 (popular products cards)
	- horizontal slider hs2 (videos)
4. 007 - kosmetika–tovar
	- mobile: horizontal slider mhs2 (other products cards)
5. 013 - raspisanie
6. 014 - obucheniye
	- mobile: horizontal slider mhs3 (next events cards)
	- mobile: horizontal slider mhs4 (news cards)
	- horizontal slider hs2 (photos)
	- horizontal slider hs2 (photos)
7. 015 - about-us
	- horizontal slider hs2 (videos)
8. 016 - history