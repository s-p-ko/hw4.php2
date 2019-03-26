Learning php on PHP2 course by Albert Stepantsev (https://pr-of-it.ru/)

Start on the 4th of March 2019. 

Lesson #4 

Домашнее задание №4
1. Напишите класс базового контроллера. Добавьте в него метод-диспетчер вызова действия.
  Этот метод должен делать следующее:
    Вызвать метод access() контроллера. Если получен результат false - вывести сообщение "Доступ закрыт" и прекратить работу
    Вызвать действие

2. Создайте контроллеры для клиентских страниц новостей ("все новости", "одна новость") и для админ-панели ("все новости", "редактирование", "сохранение")

3. Продумайте систему адресов. Например так: index.php?ctrl=CTRL&act=ACT, где СTRL - имя контроллера, ACT - имя экшна. Напишите фронт-контроллер в соответствии с этой системой адресов. Смотреть здесь https://github.com/s-p-ko/hw4.php2/tree/938714970acc3d12435ad7bedf9afa92a5d3bc28

4. Подумайте - не сделать ли для админ-панели другую точку входа? А может быть другой базовый контроллер? Если решите, что это обоснованно - сделайте.

5.* Создайте систему ЧПУ. Адрес вида /XXX/YYY/ZZZ должен транслироваться в контроллер XXX\YYY (вложенность пространств имен неограничена) и действие ZZZ
