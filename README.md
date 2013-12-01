MySQLTest
=========
MySQL serverınızın doğru database ve kullanıcı adı ile çalışıp çalışmadığınızı kontrol etmenizi sağlar. Dosya tarafından dışarıya herhangi bir ver akışı sağlanmaz. MysqlTest.php dosyasını herhangi bir web programı, server ve VM de çalışmaktadır.

Kullanımı:

1) Mysqltest.php dosyasını Web Sunucunuza Ftp programı ile atın.

2) Dosya izini olarak 755 (CHMOD 755) izini verin.

3) Adres çubuğunda domainadresi/MysqlTest.php gidin. 

4) Açılan sayfada
    + HostName, Mysql serverınızın bağlı olduğu domain yada ip adresini,
    + UserName, Mysql kullanıcı adınız,
    + Password, Mysql şifrenizi,
    + Database, Mysql de database ismini girin.
    
5) "Mysql Bağlantısı Test Et" butonuna basın. 

Karşılaşacağınız Hatalar
  + Başarılı bir şekilde Mysql Bağlantısı kuruldu.
  + Mysql Veritanabı Bağlantı Hatası...
  + Mysql Bağlantısı Başarısız.

Karşınıza çıkan Hatalar çok basit sade bir dil ile yazıldığını için detaylı anlatım yapmıyorum.

Çalışması için gerekli olan

Windows işletim sistemleri:
  + WEB sunucu programı

Linux işletim sistemleri:
  + Apache Server
