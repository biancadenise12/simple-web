# Launch in AWS EC2 Instance
- AMI: Amazon Linux AMI
- Type: t2.micro
- Ports:
  - SSH (22)
  - HTTP (80)
  - HTTPS (443)

## Update the system and install Apache, PHP, and Git
```bash
sudo yum update -y
sudo yum install httpd -y
sudo service httpd start
sudo chkconfig httpd on
sudo yum install php72 -y
echo "<?php phpinfo(); ?>" > /var/www/html/phpinfo.php
sudo service httpd restart
sudo yum install git
```

## Testing the installations
```bash
Apache: <public-dns/public-ip>
PHP: <public-dns/public-ip>/phpinfo.php
```
## Clone simple-web repository from GitHub
```bash
cd /var/www/html
sudo git clone https://github.com/biancadenise12/simple-web.git
```

## Launch Simple Web in the Browser
```bash
<public-dns/public-ip>/simple-web
Example:
http://ec2-107-23-129-83.compute-1.amazonaws.com/simple-web/
http://107.23.129.83/simple-web
```
