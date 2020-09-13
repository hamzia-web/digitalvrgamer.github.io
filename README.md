# Shefa Digital X-Ray Setup:
===========================

Steps to Export and import table
1. Click on Database(ShefaDigital) -> Export -> Select Custom - display all possible options -> Table section -> Uncheck Data for not having table data
2. Similarly Import by clciking import and choose file.


Steps:
1. Windows -> Xampp Control Panel -> Click start button for Apache and Mysql
2. website url: http://localhost/ShefaDigital/
3. Database: http://localhost/phpmyadmin -> Expand(+) shefaDigital at left side -> click shefadigitalxray to view/modify table data  

NOTE: Better to bookmark
NOTE: Try not to refresh the confirmation page, otherwise duplicate entry will persist in DB

How to change localhost to custom domain name:
----------------------------------------------
1. host file etry
127.0.0.1       shefadigitalxray.com
127.0.0.1       www.shefadigitalxray.com

2. httpd--vhost.conf(C:\xampp\apache\conf\extra)
<VirtualHost *:80>
    ServerName www.shefadigitalxray.com
	ServerAlias shefadigitalxray.com
    DocumentRoot C:/xampp/htdocs/ShefaDigital
</VirtualHost>

