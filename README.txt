PASTE THE EXTRACTED UDAN FOLDER TO YOUR XAMPP htdocs folder
which will be in C:/xampp/htdocs/ (for most of the users) else search your installed directory and paste there
there will be a file inside udan folder called udaan.sql
try to make the extension of the file as udaan.sql.zip
open your xampp or wampp start the apache and mysql servers
open localhost/phpmadmin (for most of the common users) others please use your apache server port appended in the localhost:port/phpmyadmin
go to import section in the phpmyadmin
now in the choose File button select the renamed udaan.sql.zip file and dont do any changes in the default parameters
click the Go button in the bottom
now access localhost/udan/admin-login to login to the admin account (check the database for credentials)
login with the username and passoword



Module Description for files

add-assert.php
script will add the asset details in the database

add-task.php
script will add the task details with respect to the asset in the database

add-worker.php
script will add the new worker details with respect to the skillset in the database

assign-task.php
script will assign the task to the respective people who are expert in that task  which is stoed in the database