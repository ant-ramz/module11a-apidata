Open CMD in Windows 

Enter: 
    php artisan serve

Then, open: 
    http://127.0.0.1:8000/weather
in your browser.

If 'php artisan serve' fails to find a port, use the following method:

    Enter: 
        php -S localhost:8000 -t public

    Then, open: 
        http://localhost:8000/weather
    in your browser.

