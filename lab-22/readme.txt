create databse and put this query inside this 
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    age INT,
    grade VARCHAR(10)
);



-------Add Student (Create)-------
DELIMITER //
CREATE PROCEDURE AddStudent(IN s_name VARCHAR(50), IN s_age INT, IN s_grade VARCHAR(10))
BEGIN
    INSERT INTO students(name, age, grade) VALUES (s_name, s_age, s_grade);
END //
DELIMITER ;

-------Get All Students (Read)-------
DELIMITER //
CREATE PROCEDURE GetStudents()
BEGIN
    SELECT * FROM students;
END //
DELIMITER ;

-------Get Single Student (for Update form)-------
DELIMITER //
CREATE PROCEDURE GetStudentById(IN s_id INT)
BEGIN
    SELECT * FROM students WHERE id = s_id;
END //
DELIMITER ;

-------Update Student-------
DELIMITER //
CREATE PROCEDURE UpdateStudent(IN s_id INT, IN s_name VARCHAR(50), IN s_age INT, IN s_grade VARCHAR(10))
BEGIN
    UPDATE students SET name = s_name, age = s_age, grade = s_grade WHERE id = s_id;
END //
DELIMITER ;

-------Delete Student-------
DELIMITER //
CREATE PROCEDURE DeleteStudent(IN s_id INT)
BEGIN
    DELETE FROM students WHERE id = s_id;
END //
DELIMITER ;
