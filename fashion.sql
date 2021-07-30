PRAGMA foreign_keys=OFF;
BEGIN TRANSACTION;

CREATE TABLE IF NOT EXISTS "users" ("id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, "name" varchar, "gender" integer,"age" integer);
INSERT INTO users VALUES
(1,"Giana",1,17),(2,"Diann",1,22),(3,"Antonella",1,22),(4,"Jodi",0,29),(5,"Fredra",1,54),(6,"Katheryn",1,25),(7,"Billie",0,21),(8,"Fawn",1,59),(9,"Caroline",1,47),(10,"Nichol",1,26);

CREATE TABLE IF NOT EXISTS "items" ("id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, "name" varchar, "gender" integer,"price" integer, "cost" integer);
INSERT INTO items VALUES
(1,'rok',1,40,8),
(2,'celana denim',0,65,29),
(3,'celana denim',1,60,26),
(4,'topi',2,15,3),
(5,'blus',1,80,20),
(6,'kaos kaki', 2,10,2),
(7,'sweater',1,34,2),
(8,'celana pendek',1,32,11),
(9,'celana pendek',0,22,9),
(10,'kaos biru tua',2,20,9),
(11,'kaos putih',2,20,8),
(12,'kaos hitam',2,23,8),
(13,'kaos abu-abu',2,23,10),
(14,'sepatu biru',2,30,14),
(15,'sepatu merah',2,42,16);

CREATE TABLE IF NOT EXISTS "sales_records" ("id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, "user_id" integer, "item_id" integer, "purchased_at" date);
INSERT INTO sales_records VALUES
(1,204,28,'2018-07-01'),(2,99,8,'2018-07-01'),(3,97,17,'2018-07-01'),(4,223,22,'2018-07-01'),(5,130,19,'2018-07-01'),(6,259,12,'2018-07-01'),(7,266,15,'2018-07-01'),(8,91,29,'2018-07-01'),(9,166,9,'2018-07-01'),(10,271,9,'2018-07-01'),(11,159,3,'2018-07-01'),(12,120,17,'2018-07-01'),(13,143,17,'2018-07-01'),(14,162,15,'2018-07-01'),(15,206,24,'2018-07-01');

DELETE FROM sqlite_sequence;
INSERT INTO sqlite_sequence VALUES('users',10);
INSERT INTO sqlite_sequence VALUES('items',30);
INSERT INTO sqlite_sequence VALUES('sales_records',15);
COMMIT;
