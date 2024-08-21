DROP TABLE IF EXISTS phoneBanking;
CREATE TABLE phoneBanking (
	id 						integer(10) primary key auto_increment,
	FirstName		        varchar(30),
	LastName		        varchar(30),
	Address          		varchar(30),
	County                  varchar(30),
	Phone    		        varchar(15),
	Status			        varchar(30)
	);
