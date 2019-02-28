CREATE TABLE users (
  id       bigint UNSIGNED AUTO_INCREMENT,
  userName varchar(100) NULL,
  password varchar(100) NULL,
  CONSTRAINT id
    UNIQUE (id)
);

INSERT INTO hw09.users (id, userName, password) VALUES (1, 'eug', '$2y$10$yK2NDAorsTk8hKuGXvMTP.m7r366YxUrjTOU/ZGqDBhfjeLnsaB3S');
INSERT INTO hw09.users (id, userName, password) VALUES (2, 'tmp', '$2y$10$gGbb1mMBv59.uRJxQUDD5ObLvusK9BLpu1D9QzxvuuHaKhpGmjZWq');
INSERT INTO hw09.users (id, userName, password) VALUES (3, 'admin', '$2y$10$Na8rF7dKgxFVDP26U28HSuA1R/Wwkwi2pRHHW5VIhKjQAqv69fRFy');