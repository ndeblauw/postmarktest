
## Installing
Clone the repo, 

Run ```composer install```

Make sure to **create a .env file** which 
- connects to a database and
- specifies the mail driver you want to use. 

Execute the following to make sure you have a key and migrated tables (needed for the user to send the mail)
```
php artisan key:generate
php artisan migrate
``` 

## How to check?
In routes\web.php I've coded the two routes that send out a mail
- **\mail** for the email (no problems)
- **\markdown** for the markdown email (problematic).

Sources for both can be find back in ```app\Mail``` (for the class) and ```resources\views\mail``` (for the template). They were added in two separate commits.

