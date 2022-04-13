//console.log("Merhaba Dünya");

const http = require('http');

console.log("Port 8081 dinleniyor...");
http.createServer(function(req, res){
    console.log(req.url);
    const url = req.url;
    res.writeHead(200, {'Content-Type': 'text/html'});
    if(url === '/ders1'){
        res.write("Ders 1 içerikleri listeleniyor ...");
    }else if(url === '/ders2'){
        res.write("Ders 2 içerikleri listeleniyor ...")
    }else{
        res.write("Ders belirtilmedi...")
    }
    res.end();
}).listen(8081);

