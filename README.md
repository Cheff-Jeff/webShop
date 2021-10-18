webShop

Voor het lokaal kunnen draaien van deze website gebruik ik XAMPP.
In XAMPP zorg je ervoor dat deze folder als je root staat ingesteld.
- ga naar apache/conf/httpd.conf
- verander DocumentRoot en Directory naar C:/xampp/htdocs/webShop
- ga naar apache/conf/extra/httpd-ssl.conf
- verander DocumentRoot naar C:/xampp/htdocs/webShop
- (de laatste 2 regels zijn omdat chrome niet meer met http wil werken.)

Zorg dat al de dependencies zijn ingesteld (via cmd).
- npm install --save-dev gulp
- npm install --save-dev gulp-sass
- npm install --save-dev node-sass
- npm install --save-dev sass
- npm install --save-dev webpack-stream
- npm install vue
- composer require stripe/stripe-php