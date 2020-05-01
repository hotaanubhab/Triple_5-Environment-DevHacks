## Triple_5 - Environment

### Project Overview
----------------------------------

* Design a smart waste collection system that allows citizens to segregate the various types of solid waste they want to dispose and the municipal authorities to efficiently collect the same.
* Most recyclable waste ends up in a dump yard due to the lack of efficient waste management.

* Solid Waste Management (SWM) is one among the basic essential services provided by municipal authorities to keep urban centres clean. However flawed system of waste disposal is in practice of dumping waste within or outside the urban areas hapazardly.

* CREATION OF A WEB PORTAL 'TrashEx' KEEPING TRACK OF WASTE
We envisioned this website that would collect the data on each waste pickup and  optimize the process through use of several APIs that make the process userfriendly and easier for both citizens as well as municipal authorities.


### Solution Description
----------------------------------
* A separate provision for collection of domestic and recyclable waste.

* Sell requests genration with location of recyclable material in database that can be viewed by Municipalities  and  Waste Management , or Recycling Firms.

* Storing Location Data and using it to optimize routes by APIs for better deploying of Garbage Pickup Resources.

#### Architecture Diagram

[Frontend UI DATA INPUT (HTML,CSS,JS)] => [DATA MODIFIED USING APIs.] => [DATA UPLOADED TO SERVER DATABASE.(PHP , MY SQL)] => [PICKUP REQUEST ACCEPTED AND INITIALIAZED.] => [DATA ACCESSED BY MUNICIPALITIES AND RECYCLING AGENCIES] => [DATA RENDERED USING APIs to OPTIMIZE ROUTES and COLLECTIONS] <-

#### Technical Description

1. HTML , CSS & JavaScript for the design of Frontend UI.
2. JavaScript for automating functions and use of Different APIs like Google Maps ,etc and parts of the backend.
3. PHP served as the server side language communicating with the database.
4. MySQL as our server database.
5. AJAX for processing requests from the JavaScript APIs to the PHP files.
6. XAMPP with APACHE Server and MySQL in MariaDB for the developement and debug purpose on localhost.
XAMPP is required to be installed for running it on a localhost server as we don't have domain to host this website online.
The Code files are to be copied in a newfolder in c/xampp/HTDOCS/ . And set that as as the default localhost directory . Then Start the Apache Server and My SQL . In the admin section of MySQL ('myPHPadmin') create a database named kabaadi and import the sql file in Code folder in this database . Opening localhost or 127.0.0.1 in Web Browser would run the project . 
Also attaching Google Drive video link for demonstration of the working.


### Team Members
----------------------------------

* Anubhab Hota (Team Captain) - 1905522@kiit.ac.in
* Prabhav Tewari  - 1905331@kiit.ac.in
* Aryan Raj Banerjee - 1905314@kiit.ac.in
