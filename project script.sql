INSERT INTO `Incident_Type`
	(idIncident_Type, Type) VALUES
	('101', 'Broken Processor'),
	('102', 'Tech support'),
    ('103', 'Customer service');
SELECT * FROM Incident_Type;
 
INSERT INTO `Handeler`
	(idHandeler, emailAdress) VALUES
	('701','smithjohn@gmail.com'),
    ('702','janedoe@gmail.com'),
    ('703','andrewdwyer@gmail.com');
SELECT * FROM Handeler;

INSERT INTO `Incident` 
	(idIncident_Info, DateCreated, IncidentState, Incident_Type_idIncident_Type, Handeler_idHandeler) VALUES
	('3134','2010-5-30','Solved','101','701'),
    ('3299','2015-10-15','Solved','102','702'),
    ('3500','2017-2-2','Unsolved','103','703');
SELECT * FROM Incident;

INSERT INTO `Person`
	(idPerson, LastName, FirstName, JobTitle, EmailAddress) VALUES
	('974','Maxwel','Jamie','Manager','word@mail.net'),
    ('975','Johnson','Evan','Accountant','evan@gmail.com'),
    ('976','Mercer','Matthew','Facilities Management','MMercer@gmail.com');
SELECT * FROM Person;

INSERT INTO `Incident_Person`
	(idIncident, Person_idPerson, Incident_Info_idIncident_Info) VALUES
	('101','974','3134'),
    ('102','975','3299'),
    ('103','976','3500');
SELECT * FROM Incident_Person;

INSERT INTO `IP_Address`
	(idIP_Address, Incident_idIncident_Info, Address ) VALUES
	('52465','3134','15 Washington Lane'),
	('21302','3299','29 Wisconsin Way'),
    ('97841','3500','45 Colorado Road');
SELECT * FROM IP_Address;
