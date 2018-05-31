# LSA_web_security


1. 把apache pull下來
> docker pull nimmis/apache-php5

2. 把此目錄clone到local
> git clone https://github.com/yiyu0x/LSA_web_security.git

3. 將local的5487-port對應到docker的80-port(apache) 並且把剛才clone下來的目錄掛載進去 (`~/github/LSA_web_security/`要替換成你clone下來的路徑)
> docker run -d -p 5487:80 -v ~/github/LSA_web_security/:/var/www/html nimmis/apache-php5  
