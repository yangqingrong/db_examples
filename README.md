# db_examples
 examples for repository `https://github.com/yangqingrong/db`

# Installation
1. import file `w_user.sql` in to your mysql/mariadb database.
2. edit the mysql connnection information in file `config/database.php`
3. add `db` library in your project
```
composer require yangqingrong/db:dev-main
```
or 
```
composer install
```
# run
```
php console.php /index/User/index
```
this command will run the controller && action :`app\index\controller\Index::index`

# model 
`app\index\model\User`

# LICENSE
The MIT License