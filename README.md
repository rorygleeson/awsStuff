# awsStuff

Provides User Data script to EC2 when deployed as part of ASG. This will setup Amazon Linux 2 as web server and install PHP.
It will copy the web page (index.php) from S3 to /var/www/html
The webpage (index.php) does a simple query to RDS. 
