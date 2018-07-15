<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Artpix тестовое задание</h1>
    <br>
</p>
<h3>Реализовать на Yii2 следующий функционал:</h3>

1. Сделать админ часть к условному новостному сайту. В админке должны быть доступны операции CRUD с новостными статьями. 
2. Авторизация. Доступ к админке должен осуществляться по логин/паролю. Всего два типа пользователей: исполнители и администраторы. Исполнители могут видеть, править, удалять исключительно свои статьи. Администратор как свои, так и всех остальных пользователей. 
3. REST API с авторизацией для манипуляции со статьями от имени пользователей

<h2>Установка</h2>
1. Клонировать репозиторий <code>git clone https://github.com/Scanerrr/dinarys-chat-js.git</code>
2. Внутри директории <code>composer install</code>
3. Внутри директории <code>yii init</code>

<h2>Rest методы</h2>
1. Аутентификация GET: <code>https://example.com/api/auth</code>
2. Просмотр всех объявлений GET: <code>https://example.com/api/posts</code>
3. Просмотр конкртетного объявления объявлений GET: <code>https://example.com/api/posts/1</code>
4. Создание объявления POST: <code>https://example.com/api/posts?title=new&description=test</code>
5. Редактирование объявления PUT/PATCH: <code>https://example.com/api/posts?title=new&description=test</code>
6 Редактирование объявления PUT/PATCH: <code>https://example.com/api/posts?title=updated</code>
7. Удаление объявления DELETE: <code>https://example.com/api/posts/3</code>
