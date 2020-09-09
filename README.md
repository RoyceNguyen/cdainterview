A website made for interview test purpose, using Vue JS frontend and Lavarel as backend, also using MySQL for authentication
To run as local:
1. Clone project
2. Execute 'composer install'
3. Create .env file
4. Generate app key and update 
    DB_DATABASE=
    DB_USERNAME=
    DB_PASSWORD=
to match your local MySQLDB
4. Execute 'php artisan migrate'
5. Execute 'php artisan db:seed'
6. Execute 'npm install'
7. Execute 'npm run dev'
8. Execute 'php artisan serve'
9. Goto http://127.0.0.1:8000/ and register 