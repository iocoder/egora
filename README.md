Instructions to setup Egora on your server
==========================================
 
I) Clone the git repo
---------------------
 
1. Install git:
 
   ```
   sudo apt install git
   ```
 
2. Clone Egora repo:

   - If you use https:
  
     ```
     git clone https://github.com/iocoder/egora.git
     ```

   - If you use ssh:
  
     ```
     git clone git@github.com:iocoder/egora.git
     ```

3. Enter egora directory:

 
   ```
   cd egora
   ```

4. Switch to develop branch if needed:

 
   ```
   git checkout develop
   ```

5. Configure your username and email if needed:

 
   ```
   git config user.name <github-username>
   git config user.email <github-email>
   ```

II) Install php and composer
----------------------------

1. Install php:

   ```
   sudo apt install php php-xml php-mysql
   ```

2. Install composer:

   ```
   sudo apt install composer
   ```

3. Install egora dependencies using composer:

   ```
   composer update
   ```

III) Configure environment file
-------------------------------

1. Setup app name:

   ```
   sed -i 's/APP_NAME=.*/APP_NAME=Egora/g' .env
   ```

2. Setup database information:

   ```
   sed -i 's/DB_DATABASE=.*/DB_DATABASE=egora/g' .env
   sed -i 's/DB_USERNAME=.*/DB_USERNAME=egora/g' .env
   sed -i 's/DB_PASSWORD=.*/DB_PASSWORD=egora/g' .env
   ```

3. Force http scheme:

   ```
   sed -i 's/FORCE_SCHEME=.*/FORCE_SCHEME=http/g' .env
   ```

4. Generate app key:

   ```
   php artisan key:generate
   ```

5. Review your changes:

   ```
   cat .env
   ```

IV) Setup database
------------------

1. Install MariaDB:

   ```
   sudo apt install mariadb-server mariadb-client
   ```

2. Create egora database and egora user:

   ```
   sudo mysql
   CREATE database egora;
   CREATE USER 'egora'@'localhost' IDENTIFIED BY 'egora';
   GRANT ALL PRIVILEGES ON egora . * TO 'egora'@'localhost';
   FLUSH PRIVILEGES;
   quit;
   ```

3. Migrate tables to the new DB:

   ```
   php artisan migrate
   ```

   ^ If it gives an error, run the same command again.

V) Run the server
-----------------

1. Start the HTTP server:

   ```
   php artisan serve
   ```

2. View it on your browser at http://127.0.0.1:8000:

   ![Egora screenshot](scrot.png)

