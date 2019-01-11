CREATE TABLE persons (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    fullname TEXT,
    age INTEGER);
    
INSERT INTO persons (fullname, age) VALUES ("Bobby McBobbyFace", "12");
INSERT INTO persons (fullname, age) VALUES ("Lucy BoBucie", "25");
INSERT INTO persons (fullname, age) VALUES ("Banana FoFanna", "14");
INSERT INTO persons (fullname, age) VALUES ("Shish Kabob", "20");
INSERT INTO persons (fullname, age) VALUES ("Fluffy Sparkles", "8");

CREATE table hobbies (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    person_id INTEGER,
    name TEXT);
    
INSERT INTO hobbies (person_id, name) VALUES (1, "drawing");
INSERT INTO hobbies (person_id, name) VALUES (1, "coding");
INSERT INTO hobbies (person_id, name) VALUES (2, "dancing");
INSERT INTO hobbies (person_id, name) VALUES (2, "coding");
INSERT INTO hobbies (person_id, name) VALUES (3, "skating");
INSERT INTO hobbies (person_id, name) VALUES (3, "rowing");
INSERT INTO hobbies (person_id, name) VALUES (3, "drawing");
INSERT INTO hobbies (person_id, name) VALUES (4, "coding");
INSERT INTO hobbies (person_id, name) VALUES (4, "dilly-dallying");
INSERT INTO hobbies (person_id, name) VALUES (4, "meowing");

CREATE table friends (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    person1_id INTEGER,
    person2_id INTEGER);

INSERT INTO friends (person1_id, person2_id)
    VALUES (1, 4);
INSERT INTO friends (person1_id, person2_id)
    VALUES (2, 3);
    
select persons.fullname, hobby.name from persons
join hobbies hobby
on persons.id = hobby.person_id;

select p1.fullname, p2.fullname, friends.person1_id, friends.person2_id from friends
join persons p1
on friends.person1_id = p1.id
join persons p2
on friends.person2_id = p2.id;


CREATE TABLE singers (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    fullname TEXT,
    age INTEGER);
    


INSERT INTO singers (fullname, age) VALUES ("Arianna Grande", "28");
INSERT INTO singers (fullname, age) VALUES ("David Guetta", "30");
INSERT INTO singers (fullname, age) VALUES ("Lyam Payne", "27");
INSERT INTO singers (fullname, age) VALUES ("Christina Aguilera", "37");
INSERT INTO singers (fullname, age) VALUES ("Maluma", "52");
INSERT INTO singers (fullname, age) VALUES ("Kurt Cobain", "22");
INSERT INTO singers (fullname, age) VALUES ("Fran Perea", "53");
INSERT INTO singers (fullname, age) VALUES ("Katie Perry", "38");
INSERT INTO singers (fullname, age) VALUES ("Drake", "28");
INSERT INTO singers (fullname, age) VALUES ("Beyonce", "32");
INSERT INTO singers (fullname, age) VALUES ("Eminem", "43");
INSERT INTO singers (fullname, age) VALUES ("Mudy Waters", "18");
INSERT INTO singers (fullname, age) VALUES ("Elvis Presley", "35");
INSERT INTO singers (fullname, age) VALUES ("Aretha Franklin", "21");
INSERT INTO singers (fullname, age) VALUES ("Utada Hikaru", "31");

CREATE TABLE hobby (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    singer_id INTEGER, 
    sport TEXT, 
    time_per_week INTEGER);
    
INSERT INTO hobby (singer_id, sport, time_per_week) VALUES (1, "swimming", 250);
INSERT INTO hobby (singer_id, sport, time_per_week) VALUES (2, "swimming", 100);
INSERT INTO hobby (singer_id, sport, time_per_week) VALUES (2, "dancing", 70);
INSERT INTO hobby (singer_id, sport, time_per_week) VALUES (3, "hiking", 80);
INSERT INTO hobby (singer_id, sport, time_per_week) VALUES (4, "chess", 120);
INSERT INTO hobby (singer_id, sport, time_per_week) VALUES (5, "tennis", 300);
INSERT INTO hobby (singer_id, sport, time_per_week) VALUES (6, "swimming", 600);
INSERT INTO hobby (singer_id, sport, time_per_week) VALUES (6, "baseball", 90);
INSERT INTO hobby (singer_id, sport, time_per_week) VALUES (7, "chess", 120);
INSERT INTO hobby (singer_id, sport, time_per_week) VALUES (8, "dancing", 125);
INSERT INTO hobby (singer_id, sport, time_per_week) VALUES (9, "baseball", 230);
INSERT INTO hobby (singer_id, sport, time_per_week) VALUES (10, "diving", 250);
INSERT INTO hobby (singer_id, sport, time_per_week) VALUES (11, "racing", 480);
INSERT INTO hobby (singer_id, sport, time_per_week) VALUES (12, "dancing", 390);
INSERT INTO hobby (singer_id, sport, time_per_week) VALUES (13, "tennis", 100);
