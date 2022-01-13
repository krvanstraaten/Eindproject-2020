-- CREATE DATABASE healthtracker;
USE healthtracker;
 /* CREATE TABLE `student` (
	id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    naam VARCHAR(100) NOT NULL,
	shuttle VARCHAR(100) NOT NULL,
    opmerkingen TEXT NULL,
    gesprek TEXT NULL
); 
 CREATE TABLE `coach` (
	id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    naam VARCHAR(100) NOT NULL,
	conversatie TEXT NULL,
    opmerkingen TEXT NULL,
    gesprek TEXT NULL
);*/
-- insert into student (naam)  value ("Kimberly"), ("Kim"), ("Mark"), ("Youp"), ("Nour"), ("Daan"), ("Anouar"), ("Joris"), ("Niels"), ("Justin");
-- insert into student (shuttle)  value ("shuttle vier"), ("shuttle vier"), ("shuttle vier"), ("shuttle vier"), ("shuttle vier"), ("shuttle vier"), ("shuttle vier"), ("shuttle vier"), ("shuttle vier"), ("shuttle vier");
/*INSERT INTO student (naam, shuttle, opmerkingen, gesprek) VALUE ("Kimberly", "vier", NULL, NULL);
INSERT INTO student (naam, shuttle, opmerkingen, gesprek) VALUE ("Kim", "vier", NULL, NULL);
INSERT INTO student (naam, shuttle, opmerkingen, gesprek) VALUE ("Mark", "vier", NULL, NULL);
INSERT INTO student (naam, shuttle, opmerkingen, gesprek) VALUE ("Youp", "vier", NULL, NULL);
INSERT INTO student (naam, shuttle, opmerkingen, gesprek) VALUE ("Nour", "vier", NULL, NULL);
INSERT INTO student (naam, shuttle, opmerkingen, gesprek) VALUE ("Daan", "vier", NULL, NULL);
INSERT INTO student (naam, shuttle, opmerkingen, gesprek) VALUE ("Anouar", "vier", NULL, NULL);
INSERT INTO student (naam, shuttle, opmerkingen, gesprek) VALUE ("Joris", "vier", NULL, NULL);
INSERT INTO student (naam, shuttle, opmerkingen, gesprek) VALUE ("Niels", "vier", NULL, NULL);
INSERT INTO student (naam, shuttle, opmerkingen, gesprek) VALUE ("Justin", "vier", NULL, NULL);*/
-- SET SQL_SAFE_UPDATES = 1;
-- DELETE FROM student WHERE naam='Kimberly';
SELECT * FROM healthtracker.student;
 /* CREATE TABLE checkupS (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    student_id MEDIUMINT NOT NULL,
    cijfer int,
    FOREIGN KEY (student_id) REFERENCES student(id)
); 
CREATE TABLE checkupC (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    coach_id MEDIUMINT NOT NULL,
    cijfer int,
    FOREIGN KEY (coach_id) REFERENCES coach(id)
); */
SELECT * FROM healthtracker.checkups;
