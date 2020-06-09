### Instructions:
Clone project
>git clone https://github.com/ArtursAsi/alt_homework

Install Composer
>composer install

Autoload Composer
>composer dump-autoload

Create Database with 2 tables
>Database 'altero' with tables 'applications' and 'deals'
>>'applications' columns
>>>id, email, amount
>
>>'deals' columns
>>>id, application_id, status, partner

Run app 
>php -S localhost:8888


### Description

This app takes input from user to search for a partner (A or B depending on your inputted amount) which will mark for an offer.

1. Click on 'Search for loan'
2. Fill the form
3. Click 'For partners'
4. Write in the form 'A' or 'B'
5. Click on 'Offer'



