const fs = require('fs');
const http = require('http');

console.log("Port 8081 dinleniyor...");
http.createServer(function(req, res){
    console.log("index.html dosyası okunuyor...")
    fs.readFile('index.html', function(err, data){
        console.log("index.html dosyası okundu...")
        if(err){console.log("Hata oluştu: " + err);return;}
        res.writeHead(200, {'Content-Type': 'text/html'});
        res.write(data);
        res.end();
        console.log("index.html dosyası gönderildi...")
    });
    console.log("Başka bir işlem...");
}).listen(8081);