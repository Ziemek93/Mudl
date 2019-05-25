
CREATE TABLE Users(
  Id_u INT(6) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  Name VARCHAR (45) NOT NULL,
  Login VARCHAR (45) UNIQUE NOT NULL,
  Password VARCHAR (100) NOT NULL,
  Admin INT (1) DEFAULT 0 NOT NULL,
  Type VARCHAR (1) NOT NULL ); <--V S 

CREATE TABLE Course(
  Id_k INT(6) NOT NULL PRIMARY KEY AUTO_INCREMENT
  );

  CREATE TABLE Test(
  TestN INT(6) NOT NULL,
  Done BOOLEAN NOT NULL DEFAULT FALSE,
  Id_fk INT(6),
  Id_fu INT(6),
  FOREIGN KEY (Id_fk) REFERENCES Course (Id_k),
  FOREIGN KEY (Id_fu) REFERENCES Users (Id_u)
  );


Insert into  Users
    (ID_u,Name,Login,Password, Admin, Type)
values
    (NULL, 'Maciej', 'Maciejski', '$argon2i$v=19$m=1024,t=2,p=2$SGJyUDJFY2JXM3dIbW81NQ$1NOxHwSkHmuM9xNV5kAu1S5O3OvKBfALIRHFTWoFAI0', DEFAULT, 'V');
<--Maciej123 
Insert into  Users
    (ID_u,Name,Login,Password, Admin,Type)
values
    (NULL, 'Krzys', 'Niekowalski', '$argon2i$v=19$m=1024,t=2,p=2$a3NTSFQ4aldadkJlL3ZkLw$JqQe3ud3/LiAMhg1pQTYXsm9X/LNWkay133JEb/0vEY', DEFAULT, 'V');
<--maslo123 
Insert into  Users
    (ID_u,Name,Login,Password, Admin,Type)
values
    (NULL, 'Niekrzys', 'Kowalski', '$argon2i$v=19$m=1024,t=2,p=2$MnBWRWt3cWRZNEhoUXRaaQ$cuzI/mw9+qQ3Nrco5bzzvCLO0k1CrZHmKir0o5joYQ4', DEFAULT, 'S');
<--kowal123


Insert into  Course
    (ID_k)
values
    ('1');


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


