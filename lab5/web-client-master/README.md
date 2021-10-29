Cristian Mejia   RIN: 661993623

The first optimization that I made was that I combined all the individual CSS rules for
"fg" class objects into one CSS rule inside the style tag. They were explicitly setting
the width and height for each object which increasing the processing needed to size those
objects.

The second optimization I made was putting repeated lines of JavaScript code into
a function. This removed many duplicate calls to the document and decreased the file size
due to there being less lines to read. This ultimately speeds up the website.

My third optimization was moving the style and script code into their
respective files. This improves the readability and the maintainablity of the code. I also 
added the defer tag to my script tag so that the JavaScript is loaded last.

My fourth optimization was that I compressed all the image files used on the page. This 
leads to faster loading times.

My fifth optimization was enabling GZip compression, I completed this by editing the php.ini 
and httpd.conf files in the php and apache directories. I turned on zlib.output_compression 
from Off to On in the php.ini file. In the httpd.conf, I uncommented lines 111 and 118 which 
enabled the deflate_module and filter_module. I then had SetOutputFilter to DEFLATE and then
set the directory to htdocs. The files being compressed are text/html, text/plain, and 
text/xml. This allows faster loading times due to smaller file sizes.

My sixth optimization was disabling Etags. I did this by going into the httpd.conf file and
adding the lines "Header unset Etag" and "FileEtag None". Disabling Etags speeds up the
website by removing false positives due to Etags being server specific.

My seventh optimization was minifying the CSS and JS files. This reduces the CSS and JS files
to just the characters needed. This reduces the download time and the number of HTTP requests
due to the smaller file size.

My final optimization was that I fixed the issue of the empty header tag in the index.html
file. It now references the a tag with the id top and clicking on the Free Bee logo brings
the user back to the top of the page.

On top of the optimzation improvements, I added some visual improvements as well. For the
darkmode setting, I fixed the text color as it was hard to read against the dark background.
I also added an animation that fades in the entire page as it loads. I also changed the
font using a Google font hosted on the internet.


Free Bee web client
===================
This is the JavaScript-based web client for Free Bee.

What is Free Bee?
-----------------
Free Bee is an enhanced Free Software clone of The New York Times game
Spelling Bee.

In this game, your goal is to find as many words as you can with the seven
letters you are given. You don't have to use any letter except the middle
letter and letters can be used more than once in a word. Finding a word
that uses all seven letters yields bonus points! Every game has at least
one such word, and many games have multiple.

Earning enough points to reach the rank of Queen Bee wins the game!

You can play the daily challenge like the original game or try your hand at a
nearly infinite number of computer-generated random challenges. Unlike the
original game, you are not restricted to only a single game per day!

The only notable difference between Free Bee and the original game is the use
 of the ENABLE dictionary instead of the NYT dictionary. Patches welcome.

Find us on the web at https://freebee.fun/

License
-------
ISC License. See LICENSE for details.
