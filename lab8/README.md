Cristian Mejia RIN: 661993623

For part 1, I started with making the JSON file which has a top level object called
Websys_course and followed by lectures and labs. In the latter two objects,
they each have child objects for each lecture and lab. Within each child
object, there is a title, description, and link. It was very tedious but
I was able to complete it in one siting.

For part 2, I first began by using Bootstrap to make the vertical navbar and the
output panel next to the navbar. I first began testing by looking for ways for the
id for each nav element to be used as the key for the JSON file. After a long period
of time, I was able to find how I could use the id of the nav element to be used as a
key and output the title, description, and the link for the object into the output
panel. This was done by creating a click event in the JS file which checked for
elements with the classes labs or lectures. Once clicked, the id of that element
was then stored into a variable and I would then access the lab or lecture object
in the JSON file. I used the id to index the JSON object and added code to update
the HTML of the output panel to display the information. Next, I created code to
read all of the labs and lecture objects form the JSON file and create links for
them on the navbar. This was a very tedious process as there were caveats to this
where I would have to constantly clean reload the page until I found out that some
of my functions weren't in score of the document.ready function. After several hours,
I was able to have the links dynamically loaded as well as the information of the
JSON object when clicked to dynamically load into the output field.

For part 3, I first created a database to hold the users as well as the archived
data that the logged in user would choose. To create the login/logout features, I
imported the code used in class and then changed all the mysqli code to use PDO
instead. I got stuck for a little bit because I thought that some things would
just work like the query but I had to give it the parameter PDO::FETCH_ALL_ASSOC
for it to work properly. I then created some PHP code that would take the data
input in the archive form into the database. It was mostly modeled by what I did
in lab 7. I'm currently running into an issue where the form keeps submitting on
refresh so I wanted to find a solution for that but it kept breaking the login in
function. As for the rest, I began playing with the Boostrap properties and began
stylizing the website. I gave my site a clean asthetic and added some animations
to the pages.
