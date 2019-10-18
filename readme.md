The database used for this project is available at:
https://www.kaggle.com/snap/amazon-fine-food-reviews
download and extract the sqlite file to the computer running this project

modify DB_DATABASE=/home/pi/prj/database.sqlite in .env to point to
the absolute path of the extracted file database.sqlite

and run the server using:
php artisan serve --host=$(hostname -I | cut -d ' ' -f 1) --port=5000;

A table listing listing the contents of the first 100 reviews should load at the default home page
 
