CREATE TABLE trekking_records (
    id INT AUTO_INCREMENT PRIMARY KEY,
    dateofbirth DATE NOT NULL,
    licensenumber VARCHAR(50) NOT NULL,
    name VARCHAR(100) NOT NULL,
    address VARCHAR(100) NOT NULL,
    fathersname VARCHAR(100) NOT NULL,
    citizenshipnumber VARCHAR(50) NOT NULL,
    dateofissue DATE NOT NULL,
    dateofexpiry DATE NOT NULL,
    issuedby VARCHAR(100) NOT NULL
);
/* Prajwal ko Lagi*/
INSERT INTO trekking_records (dateofbirth, licensenumber, name, address, fathersname, citizenshipnumber, dateofissue, dateofexpiry, issuedby) 
VALUES ('2000-01-01', '12345', 'Prajwal Pokhrel', 'Jhapa, Nepal', 'Devi Pokhrel', '12345', '2024-01-01', '2030-01-01', 'Trekking CEO');

/*sannosam Rai ko  lagi*/
INSERT INTO trekking_records (dateofbirth, licensenumber, name, address, fathersname, citizenshipnumber, dateofissue, dateofexpiry, issuedby) 
VALUES ('2001-01-01', '123456', 'Sannosam Rai', 'Pancthar, Nepal', 'MRajendra Rai', '123456', '2024-01-01', '2030-01-01', 'Trekking CEO');

/*Sanjiv Basnet ko lagi*/

INSERT INTO trekking_records (dateofbirth, licensenumber, name, address, fathersname, citizenshipnumber, dateofissue, dateofexpiry, issuedby) 
VALUES ('2002-01-01', '1234567', 'Sanjiv Basnet', 'Ilam, Nepal', 'Rajendra Basnet', '1234567', '2024-01-01', '2030-01-01', 'Trekking CEO');

/*keshehang Limbu */
INSERT INTO trekking_records (dateofbirth, licensenumber, name, address, fathersname, citizenshipnumber, dateofissue, dateofexpiry, issuedby) 
VALUES ('2003-01-01', '1234567', 'khesehang Limbu', 'Jhapa, Nepal', 'Bhupendra Bhadur Limbu', '12345678', '2024-01-01', '2030-01-01', 'Trekking CEO');
