CREATE TABLE about (
  id        bigint UNSIGNED AUTO_INCREMENT,
  blockText text       NULL,
  isHidden  tinyint(1) NULL,
  `order`   int        NOT NULL,
  CONSTRAINT id
    UNIQUE (id)
);

INSERT INTO hw09.about (blockText, isHidden, `order`) VALUES ('Программирую на php', 0, 1);
INSERT INTO hw09.about (blockText, isHidden, `order`) VALUES ('Программирую на Swift', 0, 2);