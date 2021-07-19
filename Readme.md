# Needed:
- Font MabryPro
- Header
	- Как быть с кнопкой "Записаться на тест-драйв" на средних экранах? Она не влезает (пока что просто урезаем надпись до "Записаться")
- Footer
	- фоновое изображение единой картинкой
- Main - "Спектр возможностей нашего оборудования"
	- фотки без ЧБ фильтра
- Main - Партнёры
	- изображение карточек 3 и 4
- Расписание
	- фоновые изображения (5шт)
- Обучение
	- новости (7шт)
- Видео и иконки видео это открывает фуллскрин или просто запускает видео?

# Complile sass
node-sass -w --sourcemap=none --no-cache --output-style=compact docs/sass/main.sass docs/css/main.css

# Pages:
1. 001 - main (index)
2. 003 - oborudovanie–inner
3. 005 - kosmetika
4. 007 - kosmetika–tovar
5. 013 - raspisanie
6. 014 - obucheniye
7. 015 - about-us
8. 016 - history