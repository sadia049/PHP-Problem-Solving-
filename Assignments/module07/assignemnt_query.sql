---------- CREATEING DEPARTMENT TABLE

CREATE TABLE DEPARTEMT(
DEPT_ID INT AUTO_INCREMENT PRIMARY KEY,
NAME VARCHAR(20) NOT NULL UNIQUE,
MANAGER VARCHAR(20) 
);

-------- CREATEING EMPLOYEE TABLE

CREATE TABLE EMPLOYEES(
EMP_ID INT PRIMARY KEY NOT NULL,
DEPT_ID INT NOT NULL,
NAME VARCHAR(20) DEFAULT NULL,
AGE INT(11) NOT NULL,
SALARY DECIMAL (8, 2) NOT  NULL,
FOREIGN KEY (DEPT_ID) REFERENCES departemt (DEPT_ID) ON DELETE CASCADE ON UPDATE CASCADE
);


--------INSERTING VALUE IN  THE employees TABLES

INSERT INTO `employees` (`EMP_ID`, `DEPT_ID`, `NAME`, `AGE`, `SALARY`) VALUES
(1001, 2, 'ABC', 23, '60000.00'),
(1003, 1, 'CPE', 29, '50000.00'),
(1004, 1, 'CPE', 32, '52000.00'),
(1005, 1, 'CND', 27, '45000.00'),
(1067, 2, 'DEF', 35, '65000.00'),
(1068, 2, 'FED', 32, '70000.00');



--------INSERTING VALUE IN THE departemt TABLES

INSERT INTO `departemt` (`DEPT_ID`, `NAME`, `MANAGER`) VALUES
(1, 'MARKETING', 'ABC'),
(2, 'SALES', 'XYZ'),
(3, 'FINANCE', 'BCD'),
(4, 'SQA', 'CDE'),
(5, 'QUALITY CONTROLL', 'JMS');


----------------------------------|Queries from employees table---------------------------------------------



--QUERY 01::::::SELECT ALL COLUMN AND ROWS FROM EMPLOYEE TABLE
    SELECT * FROM employees

--QUERY 02::::::SELECT NAME AND SALARY OF ALL EMPLOYEES WHERE EMPLOYEE SALARY IS GREATER THAN 50000
    SELECT NAME,SALARY FROM `employees` WHERE SALARY>50000

--QUERY 03:::::: WRITE A QUERY TO CALCULATE AVERAGE SALARY OF ALL EMPLOYEES

    SELECT AVG(SALARY) AS AVG_SALARY FROM `employees`


--QUERY 04:::::: WRITE A QUERY TO CALCULATE NO OF EMPLOYEES WHO WORK IN MARKETING DEPARTEMT
    
	SELECT COUNT(employees.EMP_ID) AS NO_OF_EMPLOYEE,departemt.NAME FROM employees INNER JOIN departemt 
       ON employees.DEPT_ID=departemt.DEPT_ID 
    WHERE departemt.NAME='MARKETING'
	
	

--QUERY 05::::::Write a query to update the salary column of the employee with an id of 1001 to 60000.

    UPDATE employees SET SALARY=60000 WHERE EMP_ID=1001



--QUERY 06::::::Write a query to delete all employees whose salary is less than 30000.

   DELETE FROM employees WHERE SALARY<30000


---------------------------------------QUERIES FROM DEPARTEMNT TABLE--------------------------------------------

--QUERY 01:::::: Write a query to select all columns and rows from the departments table.

   SELECT * FROM DEPARTEMNT


--QUERY 02:::::::Write a query to select only the name and manager columns of the "Finance" department.

   SELECT NAME,MANAGER FROM departemt WHERE NAME='FINANCE'

--QUERY 03::::::: Write a query to calculate the total number of employees in each department.

 SELECT COUNT(employees.EMP_ID) AS TOTAL_EMP,employees.DEPT_ID,departemt.NAME FROM employees INNER JOIN departemt
   ON employees.DEPT_ID=departemt.DEPT_ID
  GROUP BY employees.DEPT_ID

--QUERY 04:::::::Write a query to insert a new department called "Research" with a manager named "John Doe"
    
	INSERT INTO DEPARTEMNT VALUES(6,'RESEARCH','JOHN DOE')
