const http = require('http');

console.log("Port 8081 dinleniyor...");
http.createServer(function(req, res){
    res.writeHead(200, {'Content-Type': 'text/html'});
    res.write('<h1>Merhaba Dünya</h1>');
    res.write('Bu içerik Node.js tarafından gönderildi. Nodemon kullanılıyor.');
    res.end();
}).listen(8081);

