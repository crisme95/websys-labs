Cristian Mejia    RIN: 661993623

Part 3:

There were missing quotations and the use of wrong quotations which caused
errors with the SQL statement. I also removed whitespaces as that was giving
me an error as well which hasn't happened to me before. The new SQL statement 
came out to be:

INSERT INTO `items`(`id`, `item_name`, `price`)
VALUES(1, 'MacBook Pro', '2499'),(2, 'OpenBSD Tshirt', '20.0'),
(3, 'Amazon Echo', '99.99'),
(4, 'Nvidia GTX 3080', '1999.99'),
(5, 'AMD Ryzen 9 3900X', '549.99');
INSERT INTO `discounts`(`id`, `item_id`, `discount`)
VALUES(1, 1, 0.25),(2, 2, 0.5),(3, 3, 0.75),(4, 5, 0.1);

vs. 

INSERT INTO `items` (`id`, `name`, `price`) 
VALUES (1, 'MacBook Pro', '2499'), 
(2, 'OpenBSD Tshirt, '20.0'),
(3, 'Amazon echo', '99.99'),
(4, 'Nvidia GTX 3080', '1999.99'),
(5, 'AMD Ryzen 9 3900X’, '549.99');
INSERT INTO `discounts` (`id`, `item_id`, `discount`) 
VALUES (1, 1, 0.25), (2, 2, 0.5),(3, 3, 0.75),(4, 5, 0.1);

I coudln't figure out how to do the last 2 parts of the queries, I got stuck
how foreign keys relate to eachother. I tried my best :( For the first query
I just selected all the items from the items database and ordered them by price.
For the second part I was able to calculate the averages but couldn't print them
out in order because I did them outside of a sql statement. I wish I knew how you
could do math with indexes of the database tables. I didn't have time to make any
actual CSS or anything fancy.
