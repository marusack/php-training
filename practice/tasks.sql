--
-- ER/Studio 8.0 SQL Code Generation
-- Company :      Home
-- Project :      DATA MODEL
-- Author :       Mxio
--
-- Date Created : Thursday, September 04, 2014 18:20:26
-- Target DBMS : MySQL 5.x
--

--
-- CREATE DATABASE
--


CREATE DATABASE users_tasks;


-- 
-- TABLE: tasks 
--

CREATE TABLE tasks(
    taskid            INT             AUTO_INCREMENT,
    user_id           INT             NOT NULL,
    name              VARCHAR(250)    NOT NULL,
    estimated_time    INT             NOT NULL,
    status            BIT(1)          NOT NULL,
    PRIMARY KEY (taskid)
)ENGINE=INNODB
;



-- 
-- TABLE: users 
--

CREATE TABLE users(
    user_id     INT             AUTO_INCREMENT,
    name        VARCHAR(250)    NOT NULL,
    lastname    VARCHAR(250)    NOT NULL,
    PRIMARY KEY (user_id)
)ENGINE=INNODB
;



-- 
-- INDEX: Ref11 
--

CREATE INDEX Ref11 ON tasks(user_id)
;
-- 
-- TABLE: tasks 
--

ALTER TABLE tasks ADD CONSTRAINT Refusers1 
    FOREIGN KEY (user_id)
    REFERENCES users(user_id)
;


