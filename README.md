# Light Fish

A tiny php framework base on slim.

Mod by Htroy.

Build up:

PhpStorm:  
composer install  
bash init.sh  
then edit homestead nginx conf  

location / {  
    try_files $uri $uri/ /index.php$is_args$args;  
}
