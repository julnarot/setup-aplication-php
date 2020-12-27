DROP TABLE IF EXISTS `person`;

CREATE TABLE `person`
(
    `id`    int(9) unsigned NOT NULL AUTO_INCREMENT,
    `names` varchar(100)    NOT NULL,
    `code`  varchar(10)     NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB
  AUTO_INCREMENT = 1;

INSERT INTO `person` (`names`, `code`)
VALUES ('Raul Jonatan', 'B123');
INSERT INTO `person` (`names`, `code`)
VALUES ('Taty', 'C456');
INSERT INTO `person` (`names`, `code`)
VALUES ('Merry', 'D656');
INSERT INTO `person` (`names`, `code`)
VALUES ('Jhon frank', 'H661');
INSERT INTO `person` (`names`, `code`)
VALUES ('Mary', 'Z343');
INSERT INTO `person` (`names`, `code`)
VALUES ('Dayana', 'W845');
INSERT INTO `person` (`names`, `code`)
VALUES ('Mercy', 'Q224');