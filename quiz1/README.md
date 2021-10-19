# quiz1

To begin, I created a new repository on my GitHub that will host the files that I used to create my
monetary conversion site. I then copied the JSON data that Dr. Callahan gave us into a data.json file that
contains all the conversion rates. The script.js file has the functions that will read my
data.json file which uses jQuery and AJAX calls. The style.css has the CSS for my website. All the files
will be stored in the assets directory.

I created my base website which uses Bootstrap 5 which makes it easier to format my data. I used BS 5
navbar which I then use jQuery calls to take the click input and output the specified JSON data
through an AJAX call. The call includes taking the base amount, the base currency, the data of which
the conversion was generated from, and the amount from the conversion. On click, the AJAX call outputs
the data into HTML that is then displayed in my div tag.

I then used some BS 5 styling to bring some style to my website. I used a jumbotron at the top of my page which
gives a message to the user and tells them what to do to make the site work. The navbar below tells the user
which currencies to select and when the user clicks on them it outputs the information to be large and very
visible to the user.
 
