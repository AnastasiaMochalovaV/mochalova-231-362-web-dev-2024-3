<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="styles/form.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <title>Форма обратной связи</title>
  </head>

  <body>
    <header>
      <nav>
        <div class="menu">
          <a href="index.php">На главную</a>
        </div>
      </nav>
    </header>

    <main>
      <h1>Форма обратной связи</h1>
      <div class="container">
        <form
          action="https://httpbin.org/post"
          method="POST"
          enctype="multipart/form-data"
        >
          <input type="hidden" name="user_id" value="6" />

          <div class="form-group">
            <label class="form-label" for="name">ФИО</label>
            <input
              id="name"
              type="text"
              name="name"
              placeholder="Введите имя"
              required
            />
          </div>

          <div class="form-group">
            <label class="form-label" for="email">Электронная почта</label>
            <input
              id="email"
              type="email"
              name="email"
              placeholder="Введите email"
              required
            />
          </div>

          <div class="form-group">
            <p class="form-label">Как Вы узнали о нас?</p>
            <input
              type="radio"
              name="source"
              id="advertising"
              value="advertising"
              checked
            />
            <label for="advertising">Реклама в интернете</label>
            <input type="radio" name="source" id="friends" value="friends" />
            <label for="friends">Рассказали знакомые</label>
          </div>

          <div class="form-group">
            <label class="form-label" for="category">Категория обращения</label>
            <select name="category" id="category">
              <option value="proposal">Предложение</option>
              <option value="grievance">Жалоба</option>
            </select>
          </div>

          <div class="form-group">
            <label class="form-label" for="message">Текст сообщения</label>
            <textarea
              name="message"
              id="message"
              cols="50"
              rows="5"
              placeholder="Введите сообщение"
            ></textarea>
          </div>

          <div class="form-group">
            <label class="form-label" for="attachment">Вложение</label>
            <input type="file" name="attachment" id="attachment" />
          </div>

          <div class="form-group">
            <input
              type="checkbox"
              name="agreement"
              id="agreement"
              value="yes"
            />
            <label for="agreement"
              >Даю согласие на обработку персональных данных</label
            >
          </div>

          <input class="button-main" type="submit" value="Отправить" />
        </form>
      </div>
    </main>

    <footer id="footer" class="footer">
      <div class="border-footer">
        <p>
          <a href="tel:+79154379555">+7 (915) 437-95-55</a>
        </p>
        <p>
          <a href="mailto:nastya.m04alova@yandex.ru"
            >nastya.m04alova@yandex.ru</a
          >
        </p>
        <p>&copy; <small>Мочалова А. В.</small></p>
      </div>
    </footer>
  </body>
</html>
