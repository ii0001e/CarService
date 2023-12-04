Create table customer(
    curtomerId INT PRIMARY KEY AUTO_INCREMENT,
    Name varchar(100),
    Phone_number int,
    Email varchar(100) UNIQUE NOT NULL,
    CHECK (POSITION('@' IN Email) > 0),
    customer_PersonalCode int,
    AdditionalInformation varchar(300),
    car varchar(100)



)



