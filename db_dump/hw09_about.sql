CREATE TABLE about (
  id        bigint UNSIGNED AUTO_INCREMENT,
  blockText text       NULL,
  isHidden  tinyint(1) NULL,
  `order`   int        NOT NULL,
  CONSTRAINT id
    UNIQUE (id)
);

INSERT INTO hw09.about (id, blockText, isHidden, `order`) VALUES (1, 'Text about me', 0, 1);
INSERT INTO hw09.about (id, blockText, isHidden, `order`) VALUES (2, 'Secondly about me', 0, 2);