# Juttupaikka
Rastikarhujen nettisivuille PHP/MySQL pohjainen keskustelupalsta.

## Asennus
* Kopio repository koneelle.
* Siirrä juttupaikan tiedostot tiedostopalvelimelle root/juttupaikka.

* Lisää tietokantaan tietokantataulut
```
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

-- --------------------------------------------------------

--
-- Rakenne taululle `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;
```
* Lisää tietokantaan admin tunnukset. Tunnukset tauluun users, muodossa käyttäjätunnus ja salasana (md5). 
* Määritä libs/common.php tiedostoon tietokannan tiedot
``` 
$servername = "SERVERNAME";
$username = "USERNAME";
$password = "PASSWORD";
$dbname = "DBNAME";
```
