# T5_Tables.sql   Project Tables
#     10/12/2021  Original Program 

# This is our User Table 

Create Database site_db;

Use site_db;

DROP TABLE if exists t5_users ;

CREATE TABLE IF NOT EXISTS t5_users
    (User_names      VARCHAR(8) NOT NULL UNIQUE PRIMARY KEY,
     RecActive       ENUM("A", "D", "S") DEFAULT "A",
     User_type       ENUM("Emp", "Admin"),
     F_name          VARCHAR(20),
     L_name          VARCHAR(20) NOT NULL,
     Phone_num       VARCHAR(14),
     Email           VARCHAR(100),
     Password        VARCHAR(8) NOT NULL,
     Password_hash   VARCHAR(256) DEFAULT "NONE" NULL
    );

INSERT INTO t5_users
    VALUES("GinaR1", "A", "Admin", "Gina", "Roma", "914-479-9482" , "gina.roma1@marist.edu", "Team5GR", sha1(Password));

INSERT INTO t5_users
    VALUES("ChrisR2", "A", "Admin", "Christopher", "Rojers", "845-999-8888" , "christopher.rojer1@marist.edu", "Team5CR", sha1(Password));

INSERT INTO t5_users
    VALUES("JacobS3", "A", "Admin", "Jacob", "Shapiro", "845-777-2222" , "jacob.shapiro1@marist.edu", "Team5JS", sha1(Password));

INSERT INTO t5_users
    VALUES("AndrewT4", "A", "Admin", "Andrew", "Tokash", "845-575-3000" , "Andrew.Tokash@marist.edu", "ProfAPT0", sha1(Password));

INSERT INTO t5_users
    VALUES("EveK5", "A", "Emp", "Eve", "Kelly", "845-222-1111" , "eve.kelly1@marist.edu", "Eve1234", sha1(Password));

INSERT INTO t5_users
    VALUES("MelodyM6", "A", "Emp", "Melody", "Mcgee", "845-333-4444" , "melody.mcgee1@marist.edu", "Mel4321", sha1(Password));

INSERT INTO t5_users
    VALUES("LouieR7", "A", "Emp", "Louie", "Rice", "845-555-6666" , "louie.rice1@marist.edu", "Lou09876", sha1(Password));

INSERT INTO t5_users
    VALUES("JuliaL8", "A", "Emp", "Julia", "Lambert", "845-901-7856" , "julia.lambert1@marist.edu", "Jul37889", sha1(Password));


select * from t5_users;



# This is our Product Table 

DROP TABLE if exists t5_products ;

CREATE TABLE IF NOT EXISTS t5_products
    (Model_Number   INT NOT NULL PRIMARY KEY auto_increment,
     RecActive      ENUM("A", "D", "S") DEFAULT "A",
     Quantity       INT CHECK (Quantity >= 0),
     Product        TEXT,
     Price          DOUBLE,
     Supplier       TEXT
    );

INSERT INTO t5_products(RecActive, Quantity, Product, Price, Supplier)
    VALUES("A", 2, "T500-SnowSlicer", 75.99, "Snowboard Inc." ),
          ("A", 1, "P942-MountainMonster", 231.99, "Snowboard Inc." ),
          ("A", 15, "X1000-SkiMachine", 99.99, "Ski Planet" ),  
          ("S", 5, "P100X-SnowCarver", 120.95, "Ski Planet" ),
          ("A", 4, "S099-Skevil", 76.66, "Devil Mountain" ),
          ("S", 7, "Yeti", 406.66, "Devil Mountain" ),
          ("A", 52, "PolarIce", 75.99, "Snowboard Inc." );

SELECT * FROM t5_products;



# This is our Supplier Table 

DROP TABLE if exists t5_suppliers ;

CREATE TABLE IF NOT EXISTS t5_suppliers
    (RecNum      	INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
     RecActive      ENUM("A", "D", "H") DEFAULT "A",
     Supplier       VARCHAR(20) NOT NULL,
     Address        VARCHAR(100),
	 ZipCode       	VARCHAR(20),
     PhoneNum      	VARCHAR(14),
     Email          VARCHAR(100)
    );
	
INSERT INTO t5_suppliers
	VALUES	(DEFAULT, "A", "Snowboard Co.", "12 Snowboard Street", "32215", "845-456-7890", "SnowboardCo@gmail.com"),
			(DEFAULT, "D", "Ski Shop", "1 Skiing Street", "43156", "845-213-5442", "SkiShop@gmail.com"),
			(DEFAULT, "H", "Snows R Us", "5 North Pole Lane", "00001", "345-414-6878", "SnowsRUS@yahoo.com"),
			(DEFAULT, "A", "Snow Supply", "1 Himalaya Road", "54256", "345-513-9010", "SSupply@yahoo.com"),
			(DEFAULT, "A", "Skis And Such", "123 Canada Drive", "89041-01", "901-312-3457", "SkisNSuch@bing.com"),
			(DEFAULT, "H", "Snowboard Pros", "5 Snowfall Lane", "51324", "143-768-3109", "BoardPros@gmail.com"),
			(DEFAULT, "A", "Snow Men", "989986 Hill View", "62341", "345-414-6879", "SnowMen@gmail.com"),
			(DEFAULT, "D", "Best Boards", "391 Snowflake Ave", "41237", "413-766-1232", "BestBoards@gmail.com");

SELECT * FROM t5_suppliers;
	
	
	
	