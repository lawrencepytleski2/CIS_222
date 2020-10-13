/**
* qz4.txt
*
* Quiz 4 is a few SQL commands, feel free to convert this to a .sql file if needed to test.
*
* @category   SQL
* @package    Quiz 4
* @author     Lawrence Pytleski <ljpytleski@hawkmail.hfcc.edu>
* @version    2020.10.08
* @grade
*/

/* 4 pts
1. Your IT department has been tasked with keeping track of all hardware in your organizations.
Create a database table to store this information in. All future queries in this quiz will refer to this table.
Name the table hardware and give it 8 fields, the field information is below.
hardware_id is a whole number that can get very large, it should be the automatically increasing primary key of the table.
user_id is also a whole number that can get very large, it should link to the id of the user who owns the device.
value should track the cost or value of the machine.
serial_num is a string of numbers and letters used to identify the machine by the manufacturer.
notes should store any amount of text based notes about the machine, such is if it went for service or has a virus.
created_date should store when the machine was purchased, so this field should never be null.
updated_date should store when the machine was modified, this field can be null by default.
deleted_date should store when the machine was retired, so null by default.
*/

CREATE TABLE `Hardware`(
  `hardware_id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` BIGINT NOT NULL,
  `value` DECIMAL (10,2) NOT NULL,
  `serial_num` VARCHAR(60) NOT NULL,
  `notes` VARCHAR(255) NOT NULL,
  `created_date` DATETIME NOT NULL,,
  `updated_date` DATETIME NULL,
  `deleted_date` DATETIME DEFAULT NULL,,
  PRIMARY KEY (`hardware_id`)
);

-- 3 pts
-- 2. Write an insert statement that will insert 3 rows of data into this table.
-- You can make the data up but it should make sense. Feel free to ask me if you need an examples.

INSERT INTO `Hardware`
(
  `hardware_id`,
  `notes`,
  `create_date`,
  `update_date`,
  `delete_date`
)
VALUES
(
  NULL,
  'Virus detected. Machine needs to be serviced.',
  NOW(),
  NOW(),
  NULL
);
-- 1 pts
-- 3. Write an update statement that will retire any machine that has a hardware id value of 4.
-- This is done by populating the retire date field and adding a note that says "RETIRED!"

UPDATE Hardware
SET notes = 'RETIRED!'
WHERE 'hardware_id' = 4;

-- 1 pts
-- 4. Write a select statement that will show me the top 5 most expensive pieces of hardware, but do not include any that are retired.

SELECT TOP 5 value
FROM Hardware
WHERE deleted_date = NULL;

-- 1 pt
-- 5. Which engine did I go over that is newer and more efficient than MyISAM?

InnoDB

-- 1 pt
-- Ex: Write a single SQL statement that will remove all the data from your table and reset the auto_increment to 1
--     Do this without the use of the DROP key word.

DELETE * FROM Hardware AUTO_INCREMENT = 1;