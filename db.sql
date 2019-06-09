
CREATE TABLE Users(
  Id_u INT(6) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  Name VARCHAR (45) NOT NULL,
  Login VARCHAR (45) UNIQUE NOT NULL,
  Password VARCHAR (100) NOT NULL,
  Admin INT (1) DEFAULT 0 NOT NULL,
  Type VARCHAR (1) NOT NULL ); --V S 

CREATE TABLE Course(
  Id_k INT(6) NOT NULL PRIMARY KEY AUTO_INCREMENT
  );

  CREATE TABLE Test(
  Id_ft INT(6) NOT NULL,
  Done BOOLEAN NOT NULL DEFAULT FALSE,
  Id_fk INT(6),
  Id_fu INT(6),
   FOREIGN KEY (Id_ft) REFERENCES TestQuery (Id_t),
  FOREIGN KEY (Id_fk) REFERENCES Course (Id_k),
  FOREIGN KEY (Id_fu) REFERENCES Users (Id_u)
  );



  CREATE TABLE TestQuery
    (
        Id_t INT(6) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        QText VARCHAR (100) NOT NULL,
        Correct BOOLEAN NOT NULL,
        Content VARCHAR (100) NOT NULL,
        Id_fk INT(6),
        FOREIGN KEY (Id_fk) REFERENCES Course (Id_k)
    );


Insert into  Users
    (ID_u,Name,Login,Password, Admin, Type)
values
    (NULL, 'Maciej', 'Maciejski', '$argon2i$v=19$m=1024,t=2,p=2$SGJyUDJFY2JXM3dIbW81NQ$1NOxHwSkHmuM9xNV5kAu1S5O3OvKBfALIRHFTWoFAI0', DEFAULT, 'V');
 --Maciej123 
Insert into  Users
    (ID_u,Name,Login,Password, Admin,Type)
values
    (NULL, 'Krzys', 'Niekowalski', '$argon2i$v=19$m=1024,t=2,p=2$a3NTSFQ4aldadkJlL3ZkLw$JqQe3ud3/LiAMhg1pQTYXsm9X/LNWkay133JEb/0vEY', DEFAULT, 'V');
 --maslo123 
Insert into  Users
    (ID_u,Name,Login,Password, Admin,Type)
values
    (NULL, 'Niekrzys', 'Kowalski', '$argon2i$v=19$m=1024,t=2,p=2$MnBWRWt3cWRZNEhoUXRaaQ$cuzI/mw9+qQ3Nrco5bzzvCLO0k1CrZHmKir0o5joYQ4', DEFAULT, 'S');
 --kowal123


Insert into  Course
    (ID_k)
values
    ('1');

Insert into  Course
    (ID_k)
values
    ('1');


Insert into  TestQuery
    (Id_t, QText, Correct, Content, Id_fk)
values
    (NULL, 'Piesze pytanie?', '1', 'https://www.youtube.com/embed/t3D9sgyGRrY', '1');
 Insert into  TestQuery
    (Id_t, QText, Correct, Content, Id_fk)
values
    (NULL, 'Piesze pytanie?', '1' ,'https://www.youtube.com//embedCjSNLmb0Ndw', '1');

    Insert into  TestQuery
    (Id_t, QText, Correct, Content, Id_fk)
values
    (NULL, 'Drugie pytanie?', '1', 'https://www.youtube.com//embedCjSNLmb0Ndw', '1');

    Insert into  TestQuery
    (Id_t, QText, Correct, Content, Id_fk)
values
    (NULL, 'Pisze pytanie?', '0', 'https://www.youtube.com//embedCjSNLmb0Ndw', '1');



Insert into  Test
    (TestN, Done, Id_fk, Id_fu)
values
    ('1', 'FALSE', '1', '1');

Insert into  Test
    (TestN, Done, Id_fk, Id_fu)
values
    ('1', 'FALSE', '1', '1');

Insert into  Test
    (TestN, Done, Id_fk, Id_fu)
values
    ('1', 'FALSE', '1', '2');


