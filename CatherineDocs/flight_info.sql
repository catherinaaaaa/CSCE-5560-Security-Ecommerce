CREATE TABLE flights (
id int NOT NULL AUTO_INCREMENT,

flight_number int,
airline char(50),

departure_airport char(3),
departure_gate varchar(7),
departure_time DATETIME,

arrival_airport char(3),
arrival_gate varchar(7),
arrival_time DATETIME,

PRIMARY KEY (ID)
);


INSERT INTO flights (flight_number, airline, departure_airport, departure_gate, departure_time, arrival_airport, arrival_gate, arrival_time)
VALUES 
(1, 'American Airlines', 'DFW', 'F23', '2022-04-22T08:00:00.000', 'TPA', 'G33', '2022-04-22T11:00:00.000'),
(2, 'United Airlines', 'DFW', 'F23', '2022-04-22T09:00:00.000', 'JFK', 'G33', '2022-04-22T12:00:00.000'),
(3, 'Spirit Airlines', 'DFW', 'F23', '2022-04-22T13:00:00.000', 'LAS', 'G33', '2022-04-22T15:00:00.000'),
(4, 'American Airlines', 'DFW', 'F23', '2022-04-22T14:00:00.000', 'LAX', 'G33', '2022-04-22T16:00:00.000'),
(5, 'American Airlines', 'DFW', 'F23', '2022-04-23T08:00:00.000', 'TPA', 'G33', '2022-04-23T11:00:00.000'),
(6, 'United Airlines', 'DFW', 'F23', '2022-04-23T09:00:00.000', 'JFK', 'G33', '2022-04-23T12:00:00.000'),
(7, 'Spirit Airlines', 'DFW', 'F23', '2022-04-23T13:00:00.000', 'LAS', 'G33', '2022-04-23T15:00:00.000'),
(8, 'American Airlines', 'DFW', 'F23', '2022-04-23T14:00:00.000', 'LAX', 'G33', '2022-04-23T16:00:00.000'),
(9, 'American Airlines', 'DFW', 'F23', '2022-04-24T08:00:00.000', 'TPA', 'G33', '2022-04-24T11:00:00.000'),
(10, 'United Airlines', 'DFW', 'F23', '2022-04-24T09:00:00.000', 'JFK', 'G33', '2022-04-24T12:00:00.000'),
(11, 'Spirit Airlines', 'DFW', 'F23', '2022-04-24T13:00:00.000', 'LAS', 'G33', '2022-04-24T15:00:00.000'),
(12, 'American Airlines', 'DFW', 'F23', '2022-04-24T14:00:00.000', 'LAX', 'G33', '2022-04-24T16:00:00.000'),
(13, 'American Airlines', 'DFW', 'F23', '2022-04-25T08:00:00.000', 'TPA', 'G33', '2022-04-25T11:00:00.000'),
(14, 'United Airlines', 'DFW', 'F23', '2022-04-25T09:00:00.000', 'JFK', 'G33', '2022-04-25T12:00:00.000'),
(15, 'Spirit Airlines', 'DFW', 'F23', '2022-04-25T13:00:00.000', 'LAS', 'G33', '2022-04-25T15:00:00.000'),
(16, 'American Airlines', 'DFW', 'F23', '2022-04-25T14:00:00.000', 'LAX', 'G33', '2022-04-25T16:00:00.000'),
(17, 'American Airlines', 'DFW', 'F23', '2022-04-26T08:00:00.000', 'TPA', 'G33', '2022-04-26T11:00:00.000'),
(18, 'United Airlines', 'DFW', 'F23', '2022-04-26T09:00:00.000', 'JFK', 'G33', '2022-04-26T12:00:00.000'),
(19, 'Spirit Airlines', 'DFW', 'F23', '2022-04-26T13:00:00.000', 'LAS', 'G33', '2022-04-26T15:00:00.000'),
(20, 'American Airlines', 'DFW', 'F23', '2022-04-26T14:00:00.000', 'LAX', 'G33', '2022-04-26T16:00:00.000');
