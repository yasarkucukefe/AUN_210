const fs = require('fs');
const http = require('http');

console.log("Port 8081 dinleniyor...");
http.createServer(function(req, res){
    console.log(req.url);
    const url = req.url;
    res.writeHead(200, {'Content-Type': 'text/html'});
    let htmlDosya = "dersler.html";
    switch(url){
        case '/ders1':
            htmlDosya = "ders1.html";
            break;
        case '/ders2':
            htmlDosya = "ders2.html";
            break;
    }
    console.log(htmlDosya+ "okunacak.");
    fs.readFile(htmlDosya, function(err, data){
        if(err){console.log("Hata oluştu: " + err);return;}
        res.write(data);
        res.end();
    });
}).listen(8081);