const fs = require('fs');
const http = require('http');

console.log("Port 8081 dinleniyor...");
http.createServer(function(req, res){
    console.log(req.url);
    const url = req.url;
    res.writeHead(200, {'Content-Type': 'text/html'});
    if(url === '/dersler'){
        fs.readFile('dersler.html', function(err, data){
            if(err){console.log("Hata oluştu: " + err);return;}
            res.write(data);
            res.end();
        });
    }else if(url === '/ders1'){
        fs.readFile('ders1.html', function(err, data){
            if(err){console.log("Hata oluştu: " + err);return;}
            res.write(data);
            res.end();
        });
    }else if(url === '/ders2'){
        fs.readFile('ders2.html', function(err, data){
            if(err){console.log("Hata oluştu: " + err);return;}
            res.write(data);
            res.end();
        });
    }else{
        fs.readFile('404.html', function(err, data){
            if(err){console.log("Hata oluştu: " + err);return;}
            res.write(data);
            res.end();
        });
    }
}).listen(8081);