CREATE TABLE guestBookRecords (
  id       bigint UNSIGNED AUTO_INCREMENT,
  text     text         NULL,
  author   varchar(100) NULL,
  isHidden tinyint(1)   NULL,
  CONSTRAINT id
    UNIQUE (id)
);

INSERT INTO hw09.guestBookRecords (text, author, isHidden) VALUES ('В лесу родилась ёлочка', 'Евгений', 0);