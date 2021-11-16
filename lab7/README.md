Cristian Mejia    RIN: 661993623

For this lab, I did all the the commands in the SQL window
on phpMyAdmin. I first created the database and the two tables
for part 1 of the lab. I had difficulty setting the charset/collate
but that was due to there being an extra underscore between utf8 and
mb4 in utf8_mb4_general_ci which is really utf8mb4_general_ci. In part 2,
I used the ALTER TABLE commands to add the extra columns to the students
and courses tables. When creating the grades table, I had to look up how
foreign keys are properly implemented and videos explaining how they are
used. When inserting the courses, I used a random number generator for the
CRNs and kept running into an issue of having a duplicate primary key. After
researching about the error, 


Part 1:

CREATE DATABASE websyslab7;

CREATE TABLE websyslab7.courses (
    crn INT(11) PRIMARY KEY,
    prefix VARCHAR(4) NOT NULL,
    number SMALLINT(4) NOT NULL,
    title VARCHAR(255) NOT NULL
) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

CREATE TABLE websyslab7.students (
    RIN INT(9) PRIMARY KEY,
    RCSID CHAR(7),
    firstname VARCHAR(100) NOT NULL,
    lastname VARCHAR(100) NOT NULL,
    alias VARCHAR(100) NOT NULL,
    phone INT(10)
) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

Part 2:

ALTER TABLE websyslab7.students 
    ADD COLUMN address VARCHAR(100);

ALTER TABLE websyslab7.courses 
    ADD COLUMN section SMALLINT(2) NOT NULL, 
    ADD COLUMN schoolyear SMALLINT(4) NOT NULL;

CREATE TABLE websyslab7.grades ( 
    id INT PRIMARY KEY AUTO_INCREMENT, 
    crn INT(11), 
    RIN INT(9), 
    FOREIGN KEY(crn) REFERENCES websyslab7.courses(crn), 
    FOREIGN KEY(RIN) REFERENCES websyslab7.students(RIN), 
    grade INT(3) NOT NULL 
) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

INSERT INTO websyslab7.courses(crn, prefix, number, title, section, schoolyear) 
VALUES
    ('48792', 'MATH', '2400', 'Introduction to Differential Equations', '04', '2021'),
    ('81523', 'ITWS', '2110', 'Web Systems Development', '02', '2021' ),
    ('18314', 'ECSE', '2610', 'Computer Components and Operations', '06', '2021'),
    ('60272', 'ECSE', '1100', 'Introduction to ECSE', '02', '2021'),
    ('59495', 'IHSS', '1220', 'Principles of Economics', '09', '2021');

ALTER TABLE websyslab7.students MODIFY phone BIGINT(10);

INSERT INTO websyslab7.students( RIN, RCSID, firstname, lastname, alias, phone, address ) 
VALUES
    ( '814917980', 'gomezj', 'Mary', 'Gomez', 'MG', '8182506771', '1941 Oakway Lane, Los Angeles, CA 90017' ),
    ( '661993623', 'mejiac', 'Cristian', 'Mejia', 'CM', '2017746503', '123 Forest Ave, Paramus, NJ 07652' ),
    ( '839237621', 'pridej', 'Jane', 'Pridemore', 'JP', '3106867865', '1371 Jett Lane, Irvine, CA 92664' ),
    ( '354362433', 'gomezj', 'Mary', 'Gomez', 'MJ', '8182506771', '1941 Oakway Lane, Los Angeles, CA 90017' ),
    ( '941942702', 'dominj', 'John', 'Dominguez', 'JD', '9857273669', '3483 Lowndes Hill Park Road, Los Angeles, CA 90017' ),
    ( '473724539', 'payner', 'Robert', 'Payne', 'RP', '5417639700', '3624 Skinner Hollow Road, Fossil, OR 97830' );

INSERT INTO websyslab7.grades(crn, RIN, grade) 
VALUES 
    ('81523', '814917980', '93'), 
    ('81523', '661993623', '85'), 
    ('18314', '839237621', '90'), 
    ('48792', '661993623', '72'), 
    ('60272', '354362433', '78'), 
    ('48792', '814917980', '82'), 
    ('59495', '661993623', '89'), 
    ('48792', '941942702', '95'), 
    ('48792', '814917980', '99'), 
    ('18314', '814917980', '87'), 
    ('48792', '473724539', '80'), 
    ('59495', '814917980', '92');

SELECT * from students ORDER BY RIN, Lastname, RCSID, Firstname;

SELECT students.RIN, students.firstname, students.lastname, students.address, grades.grade FROM students INNER JOIN grades ON students.RIN = grades.RIN WHERE grade > 90;


