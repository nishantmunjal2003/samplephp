#This file is just to demonstrate the queries used in this
#database: samplephp
#table : empdetails

Table Creation

CREATE TABLE `samplephp`.`empdetails` ( `id` INT(10) NOT NULL AUTO_INCREMENT , `name` VARCHAR(40) NOT NULL , `age` INT(3) NOT NULL , `email` VARCHAR(40) NOT NULL , `salary` INT(10) NOT NULL , PRIMARY KEY (`id`));


Record Inserted
INSERT INTO `empdetails` (`id`, `name`, `age`, `email`, `salary`) VALUES (NULL, 'David', '30', 'david@gmail.com', '90000');

INSERT INTO `empdetails` (`id`, `name`, `age`, `email`, `salary`) VALUES (NULL, 'abhishek', '27', 'abhi23@gmail.com', '60000')

INSERT INTO `empdetails` (`id`, `name`, `age`, `email`, `salary`) VALUES (NULL, 'akash', '25', 'akash@gmail.com', '50000')


Update Query
UPDATE empdetails SET email="akash123@gmail.com" WHERE name="akash"

Delete Query
DELETE from empdetails WHERE id='1';
