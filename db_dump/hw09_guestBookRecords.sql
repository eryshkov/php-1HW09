CREATE TABLE guestBookRecords (
  id        bigint UNSIGNED AUTO_INCREMENT,
  text      text         NULL,
  author    varchar(100) NULL,
  isHidden  tinyint(1)   NULL,
  isDeleted tinyint(1)   NULL,
  CONSTRAINT id
    UNIQUE (id)
);

INSERT INTO hw09.guestBookRecords (id, text, author, isHidden, isDeleted) VALUES (1, 'First record', 'Evgenii', 0, 0);
INSERT INTO hw09.guestBookRecords (id, text, author, isHidden, isDeleted) VALUES (2, 'Second record', 'Maria', 0, 0);
INSERT INTO hw09.guestBookRecords (id, text, author, isHidden, isDeleted) VALUES (3, 'Third record', 'Anna', 0, 0);