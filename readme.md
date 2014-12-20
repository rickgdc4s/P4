## Project P4: Picture Database ##

### Live URL
[http://p4.rickcscie15.me](http://p4.rickcscie15.me)

### Description ###

Project 4 is a Picture Database. The Picture Database consists of a two tables, a Picture Table containing unique names of the pictures entered via this web application, and an Owners Table, which contains the names of the owners of each picture. Owners are also entered via this web application.

Each uniquely named picture is stored in the web server Public\access directory, and identified by its name in the picture table of the database. Only one copy of any unique picture may exist in the database (a picture belonging to one owner may not also belong to another owner).

There are seven operations that can be performed with this database. A user may enter his/hers Owner Name (which must be the initial step to use the database). Once the user has created an Owner Name in the Owner table of the database, the user can Add a Picture, View an existing Picture in the database, Update a Picture's properties, Download a picture from the Database, Delete a Picture from the database, and Delete his/hers Owner Name from the Database.

When an Owner's name is deleted from the Owner's table, any pictures belonging to that owner are also deleted from the Picture table in the Picture Database. 

### Demo ###

I will demo my version of the Developer's Best Friend at the Tuesday Evening Online Section on Tuesday, Dec. 16, 2014.

### Details for Teaching Team ###

Due to space issues on my Digital Ocean droplet, large image files should not be used in this project (maximum size approximately 250K). 

Project 4 contains the following files:

- routes.php
- _master.blade.php
- add_owner.blade.php
- add_pic.blade.php
- delete_owner.blade.php
- delete_pic.blade.php
- gen_add_owner.blade.php
- gen_add_pic.blade.php
- gen_delete_owner.blade.php
- gen_delete_pic.blade.php
- gen_read_pic.blade.php
- gen_update_pic.blade.php
- read_pic.blade.php
- update_pic.blade.php
- owner.php
- pic.php
- environment.php
- 2014_12_09_225350_create_owners_table.php
- 2014_12_09_225614_create_pics_table.php
- readme.md

### Outside Code ###

- paste/pre package



