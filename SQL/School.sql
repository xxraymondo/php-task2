

    CREATE DATABASE Talabat;

    USE Talabat;

    CREATE TABLE Users (
        Id INT AUTO_INCREMENT,
        Username VARCHAR(255) NOT NULL UNIQUE,
        Password VARCHAR(255) NOT NULL,
        PRIMARY KEY (Id)
    );

    CREATE TABLE Orders (
        Id INT AUTO_INCREMENT,
        Username VARCHAR(255) NOT NULL,
        ResturantName VARCHAR(255) NOT NULL,
        Details VARCHAR(255) NOT NULL,
        UserId INT NOT NULL,
        ResturantId INT NOT NULL,
        DeliveryId INT NOT NULL,
        PRIMARY KEY (Id)
    );

    CREATE TABLE Resturants (
        Id INT AUTO_INCREMENT,
        Name VARCHAR(255) NOT NULL ,
        Address VARCHAR(255),
        PRIMARY KEY (Id)
    );
    CREATE TABLE Delivery (
        Id INT AUTO_INCREMENT,
        Username VARCHAR(100) NOT NULL,
        PRIMARY KEY (Id)
    );

    Alter TABLE Orders
    ADD FOREIGN KEY (UserId) REFERENCES Users(Id);

    Alter TABLE Orders
    ADD FOREIGN KEY (ResturantId) REFERENCES Resturants(Id);

    Alter TABLE Orders
    ADD FOREIGN KEY (DeliveryId) REFERENCES Delivery(Id);

