CREATE DATABASE IF NOT EXISTS db_urlShortener;

USE UrlShortener;

--DROP TABLE IF EXISTS 'short_urls';
CREATE TABLE 'short_urls' (
 'id' int(11) NOT NULL AUTO_INCREMENT,
 'long_url' varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 'short_code' varchar(25) COLLATE utf8_unicode_ci NOT NULL,
 'hits' int(11) NOT NULL,
 'created' datetime NOT NULL,
 PRIMARY KEY ('id')
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


/**********************************************************************************/

--DROP TABLE IF EXISTS 'sistem_user';
CREATE TABLE 'sistem_user' (
 'id' int NOT NULL AUTO_INCREMENT,
 'user' varchar(20) COLLATE utf8_unicode_ci NOT NULL,
 'password' varchar(20) COLLATE utf8_unicode_ci NOT NULL,
 PRIMARY KEY ('id')
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO sistem_user (id, user, password) VALUES (1,"SYSTEM","4321"); 