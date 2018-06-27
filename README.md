# MVC TEMPLATE
An mvc template to help speed up development of new projects using the mvc design pattern
## Getting Started

Download or clone the repo. 
### Prerequisites
Knowledge of php language 
Basic understanding of how OOP works in php
How to implement the mvc design pattern. ie writing models, loading views, and creating controllers

What things you need to install the software and how to install them

```
[apache](https://httpd.apache.org/download.cgi) - Apache web server
[PHP](https://php.net/downloads.php) - Server side programming language
[mysql](https://dev.mysql.com/downloads/) - Database used
```
Im using PDO so you can use any database server.

## Running the tests
In your browser type 
localhost/your_project_name


## Deployment
Change the config file to handle your current configuration


```
// SITENAME
    define('SITENAME', 'YOUR_SITENAME');

    define('DB_HOST', "localhost");
    define('DB_USER', "YOUR_USER");
    define('DB_PASSWORD', "YOUR_PASSWORD");
    define('DB_NAME', "YOUR_DATABASE");

```

Also modify the .htaccess rewrite base inside the public folder

```
    RewriteBase /your_project_folder/public
```

## Built With

* [php](https://www.w3schools.com/pHP/default.asp) - The language used


## Authors

* **Amshel Hack3r** - *Initial work* - [Amshelhack3r](https://github.com/Amshelhack3r)

See also the list of [contributors](https://github.com/mvc_template/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* Hat tip to anyone whose code was used
* BradTraversy media
* Mutall data team
* Me ofcourse . Good work samuel
