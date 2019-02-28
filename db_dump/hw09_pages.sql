CREATE TABLE pages (
  id          bigint UNSIGNED AUTO_INCREMENT,
  pageName    varchar(100) NULL,
  isHidden    tinyint(1)   NULL,
  `order`     int          NULL,
  displayName varchar(100) NOT NULL,
  CONSTRAINT id
    UNIQUE (id)
);

INSERT INTO hw09.pages (id, pageName, isHidden, `order`, displayName) VALUES (1, 'index', 0, 1, 'Обо мне');
INSERT INTO hw09.pages (id, pageName, isHidden, `order`, displayName) VALUES (2, 'gallery', 0, 2, 'Фотогалерея');
INSERT INTO hw09.pages (id, pageName, isHidden, `order`, displayName) VALUES (3, 'guestbook', 0, 3, 'Гостевая книга');
INSERT INTO hw09.pages (id, pageName, isHidden, `order`, displayName) VALUES (4, 'admin', 0, 4, 'Админ-панель');