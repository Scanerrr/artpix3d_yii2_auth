<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Artpix тестовое задание</h1>
    <br>
</p>
<h3>Реализовать на Yii2 следующий функционал:</h3>

<ol>
    <li>Сделать админ часть к условному новостному сайту. В админке должны быть доступны операции CRUD с новостными статьями.</li> 
    <li>Авторизация. Доступ к админке должен осуществляться по логин/паролю. Всего два типа пользователей: исполнители и администраторы. Исполнители могут видеть, править, удалять исключительно свои статьи. Администратор как свои, так и всех остальных пользователей.</li> 
    <li>REST API с авторизацией для манипуляции со статьями от имени пользователей</li>
</ol>

<h2>Установка</h2>
<ol>
    <li>Клонировать репозиторий <code>git clone https://github.com/Scanerrr/dinarys-chat-js.git</code></li>
    <li>Внутри директории <code>composer install</code></li>
    <li>Внутри директории <code>yii init</code></li>
</ol>

<h2>RESTful API методы</h2>
<ol>
    <li>Аутентификация GET: <code>https://example.com/api/auth</code>
    <li>Просмотр всех объявлений GET: <code>https://example.com/api/posts</code></li>
    <li>Просмотр конкртетного объявления объявлений GET: <code>https://example.com/api/posts/1</code></li>
    <li>Создание объявления POST: <code>https://example.com/api/posts?title=new&description=test</code></li>
    <li>Редактирование объявления PUT/PATCH: <code>https://example.com/api/posts?title=new&description=test</code></li>
    <li>Редактирование объявления PUT/PATCH: <code>https://example.com/api/posts?title=updated</code></li>
    <li>Удаление объявления DELETE: <code>https://example.com/api/posts/3</code></li>
</ol>