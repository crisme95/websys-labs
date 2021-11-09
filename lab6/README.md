Cristian Mejia    Lab 6   RIN: 661993623

During class, I worked with my group to implement the
subtraction, multiplication, and division operations of
the calculator from the code that Dr. Callahan had given
us. The process did not take very long and we were able
to understand how the code worked. I later worked on
implementing the other calculator operations using the
operation class that Dr. Callahan had already given us.

The issue I ran into was that if the operation only
required one input, the other input would be left unused
which would cause an error due to the if statement that
Dr. Callahan put in the Operation class. To get around
this issue, I added exception cases for each of the
class operations which checks for the parameters needed
for the varying operations. This was due to some operations
only needing one number while my trig functions needed
to be either in radian or degree mode for the calculations.
For my interface class, I had a function declared that
would allow me to tell the user how to use my calculator
regardless if the calculation when through or not. I
tried looking up ways to have the interface function
run while the user hovers over the button but they
would either break the site or just not work which
was very unfortunate. 

After implementing all the class functions and all the 
error checks, I worked on making the calculator look like 
an actual calculator. I did this by putting all the input 
fields into a table and having them in a fixed position 
so that they are evenly spaced. I also change the colors
of the backgrounds as well as added my own font for
better readablity. All the outputs of the functions are
at the bottom of the calculator as well as the outputs
from the exception cases. If I were to make anymore
addtions to the calculator, I would add buttons for
the numbers incase that the user didn't want to type
in the numbers. I also would like to have used only
one input box for the math operations but I was
running into difficulty with parsing the operations that
were being passed in.