# hng6-loginPage
## I used CSS GRID
## Continue work on the styling
# Working on our First Task( LOGIN & SIGN-UP PAGE)
The name of our team is **TEAM ALPHA CODE**.
This is a documentation of how the login and sign up page was created which involves the Design, Front End and Back End.

**DESIGN**

A design was first created in Figma.
Figma was used for the UI design of the project UI
Which gave the outline for the front-end developers to work with.

**FRONT-END**

A client-side authentication was set up, in which password must contain the following:
* A lowercase letter
* A capital (uppercase) letter
* Minimum 3 characters

SIGN-UP: 
When a user clicks on the sign up button, the system checks if the username has been created before and if not, it's add the username to the list of registered users.

LOGIN:
Once the user enters the correct details, A toast will appear welcoming the user, else a login toast will appear informing the user that he/she entered the wrong details.

**BACK-END**

JSON file was used to store user details in an array.

PHP was also used, read the JSON file, decoded it and compared the array values with the values the user input on the login form. 
Where there's a match, the loop breaks off and a session is started. Also, a session authentication was used to check whenever a user is in session or not.

List of JSON details to test with;

* Username: Rammy   Password: Rammy
* Username: Snowden  Password: Snowden
* Username: Endurance Password: Endurance
* Username: Yuwa    Password: Yuwa
* Username: Olamiji   Password: Olamiji
* Username: Teejay  Password: Teejay
* Username: Kenoly  Password: Kenoly
* Username: Ben      Password: Ben
* Username: Stephen  Password: Stephen
