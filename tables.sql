DROP TABLE IF EXISTS usertable;

create table usertable (
userid int(6) unsigned auto_increment primary key,
userName varchar(20) not null,
hashedPass  varchar(255) not null);

DROP TABLE IF EXISTS pages;

CREATE TABLE pages (
    id INT NOT NULL AUTO_INCREMENT,
    urlTitle VARCHAR(32) NOT NULL,
    pageTitle VARCHAR(32) NOT NULL,
    menuTitle VARCHAR(32) NOT NULL,
    parent INT,
    bodyTitle VARCHAR(128) NOT NULL,
    body TEXT,
    PRIMARY KEY (ID)
);

INSERT INTO pages (urlTitle, pageTitle, menuTitle, parent, bodyTitle, body)
VALUES ("Home", "Home - City builders", "Home", -1, "Home", "Welcome to City Builders");
INSERT INTO pages (urlTitle, pageTitle, menuTitle, parent, bodyTitle, body)
VALUES ("City Builders", "City Builders - Authorities", "Authorities", 0, "Authorities", "Authorities info");
INSERT INTO pages (urlTitle, pageTitle, menuTitle, parent, bodyTitle, body)
VALUES ("City Builders", "City Builders - Authorities", "Boards and Commissions", 1, "Boards and Commissions", "Boards and Commission info");
INSERT INTO pages (urlTitle, pageTitle, menuTitle, parent, bodyTitle, body)
VALUES ("City Builders", "City Builders - Authorities", "Departments", 1, "Departments", "Departments");

INSERT INTO pages (urlTitle, pageTitle, menuTitle, parent, bodyTitle, body)
VALUES ("City Builders", "City Builders - Residents", "Residents", 0, "Residents", "Residents info");
INSERT INTO pages (urlTitle, pageTitle, menuTitle, parent, bodyTitle, body)
VALUES ("City Builders", "City Builders - Residents", "Community", 1, "Community", "Business info");
INSERT INTO pages (urlTitle, pageTitle, menuTitle, parent, bodyTitle, body)
VALUES ("City Builders", "City Builders - Residents", "News/Events", 1, "News/Events", "News info");

INSERT INTO pages (urlTitle, pageTitle, menuTitle, parent, bodyTitle, body)
VALUES ("City Builders", "City Builders - About Us", "About Us", 0, "About Us", "About Us info");
INSERT INTO pages (urlTitle, pageTitle, menuTitle, parent, bodyTitle, body)
VALUES ("City Builders", "City Builders - About Us", "Contact Us", 1, "Contact us", "Contact us info");
INSERT INTO pages (urlTitle, pageTitle, menuTitle, parent, bodyTitle, body)
VALUES ("City Builders", "City Builders - About Us", "Maps", 1, "Maps", "Maps info");