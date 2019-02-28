CREATE TABLE blocks (
  id        bigint UNSIGNED AUTO_INCREMENT,
  blockName varchar(100) NULL,
  pageName  varchar(100) NULL,
  isHidden  tinyint(1)   NULL,
  blockText text         NULL,
  imageName text         NULL,
  `order`   int          NOT NULL,
  CONSTRAINT id
    UNIQUE (id)
);

INSERT INTO hw09.blocks (id, blockName, pageName, isHidden, blockText, imageName, `order`) VALUES (1, 'text', 'about', 0, 'Text about me', null, 1);
INSERT INTO hw09.blocks (id, blockName, pageName, isHidden, blockText, imageName, `order`) VALUES (2, 'image', 'gallery', 0, null, 'image_1s.jpg', 1);
INSERT INTO hw09.blocks (id, blockName, pageName, isHidden, blockText, imageName, `order`) VALUES (3, 'image', 'gallery', 0, null, 'image_2s.jpg', 2);
INSERT INTO hw09.blocks (id, blockName, pageName, isHidden, blockText, imageName, `order`) VALUES (4, 'image', 'gallery', 0, null, 'image_3s.jpg', 3);
INSERT INTO hw09.blocks (id, blockName, pageName, isHidden, blockText, imageName, `order`) VALUES (5, 'guestBookRecords', 'guestbook', 0, null, null, 1);
INSERT INTO hw09.blocks (id, blockName, pageName, isHidden, blockText, imageName, `order`) VALUES (6, 'guestBookForm', 'guestbook', 0, null, null, 2);