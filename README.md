# CSE 135 HW 1
## TEAM MEMBERS: 
Ruinan Ma, Haochen Jiang, Will Luo

---
## Grader Account:
We use SSH to log in to our server, so please download the `grader_key` (private key) and use the following command to log into the server (replace the path):  
```
ssh -i /path/to/private_key/grader_key grader@134.209.213.47
```
We recommend you to save the private key to your `.ssh` directory or other hidden directory.  If it prompts to ask you to continue connecting, just type `yes`.  
**Note:** If you see an error message like **"WARNING: UNPROTECTED PRIVATE KEY FILE!"**, please enter the command: (replace the path)
```
chmod 600 /path/to/private_key/grader_key
```
Then you should be good to log in. If there're still issues to log in, please contact r7ma@ucsd.edu.   
The `sudo` password is `cse135grader`.

---
## Our Website:
Homepage: [https://cse135.monster/](https://cse135.monster/)

Ruinan's page: [https://cse135.monster/members/ruinan/](https://cse135.monster/members/ruinan/)

Haochen's page: [https://cse135.monster/members/haochen/](https://cse135.monster/members/haochen/)

Will's page: [https://cse135.monster/members/will_luo/](https://cse135.monster/members/will_luo/)

robots.txt: [https://cse135.monster/robots.txt](https://cse135.monster/robots.txt)

hw1/hello.php: [https://cse135.monster/hw1/hello.php](https://cse135.monster/hw1/hello.php)

hw1/report.html: [https://cse135.monster/hw1/report.html](https://cse135.monster/hw1/report.html) 

matomo analytics (extra credit): [https://cse135.monster/matomo/](https://cse135.monster/matomo/)

---
## Details of Github auto deploy setup: 
1. Firstly, we clone the github repo to the server.  
2. Then, we created a script `deploy.sh` that simply executes `git pull`.  
3. In order to notify the server when to execute the script, we created another python program `webhook_server.py` that listen the `8080` port and run the script when there is an new push. 
4. We used the github webhook, setting the `Payload URL` to be `https://134.209.213.47:8080`. `Content type` to be `application/json`.  
5. Use the command `nohup python3 webhook_server.py > ~/output.log 2>&1 &`, we can run the python program at backend, and check the log. There, we could successfully deploy the site. 
**Note**: The source code of `deploy.sh` and `webhook_server.py` could be found ender `\opt` directory. 

---
## Username/password info for logging into the site:
Username: `grader`.
Password: `Cse135Grader`

---
## Summary of changes to HTML file in DevTools after compression: 
We see that our HTML files are compressed when they are transported from the server, so the content-encoding header shows its `gzip`. But after the client side receives the file, the content does not change. 

---
## Summary of removing 'server' header:
We followed along the tutorial found [here](https://www.tecmint.com/change-apache-server-name-to-anything-in-server-headers/). 
First, install the Apache` mod_security` module. 
```
$ sudo apt install libapache2-mod-security2
$ sudo a2enmod security2
```
Then, add the two lines in `/etc/apache2/apache2.conf`:
```
ServerTokens Full
SecServerSignature "CSE 135 Server"
```
Finally restart the web server. 
```
sudo systemctl restart apache2
```


---
## Extra credit: Analytics configuration:
[link](https://cse135.monster/matomo/)  
Matomo Account and Password: See `matomo.txt` we submitted.  

First, Install the necessary dependencies. 
```
sudo apt update
sudo apt upgrade
sudo apt install -y mysql-server php libapache2-mod-php php-mysql php-cli php-curl php-gd php-mbstring php-xml php-zip
```
Then, we created a MySQL user for matomo:
```
sudo mysql -u root -p
CREATE DATABASE matomo;
CREATE USER 'matomo'@'localhost' IDENTIFIED BY 'some_password';
GRANT ALL PRIVILEGES ON matomo.* TO 'matomo'@'localhost';
FLUSH PRIVILEGES;
EXIT;
```
Then, install `matomo`:
```
cd /tmp
wget https://builds.matomo.org/matomo-latest.zip
unzip matomo-latest.zip
sudo mv matomo/* /var/www/cse135.monster/public_html/
```
Reload the server: 
```
sudo systemctl reload apache2
```
After that, matomo is installed to our server. We could visit `http://cse135.monster/matomo` to follow the guide and finally set it up. 