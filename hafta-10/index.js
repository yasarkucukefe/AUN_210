const fs = require('fs');
const http = require('http');
const formidable = require('formidable');

const gonderHTMLicerik = (mesaj,res) => {
    res.writeHead(200, {'Content-Type': 'text/html'});
    res.write(mesaj);
    res.end();
}

console.log("Port 8081 dinleniyor...");
http.createServer(function(req, res){    
    if(req.url == "/upload"){
        console.log(req.url);
        const form = new formidable.IncomingForm();
        form.parse(req, function(err, fields, files){
            const sifre = fields.pw;
            if(sifre !== "12345"){
                gonderHTMLicerik("<h1>Yanlis şifre</h1>",res);return;
            }
            if(err) throw err;
            console.log("Upload işlemi başlıyor");
            if(files.dosya.mimetype != "image/jpeg"){
                res.writeHead(200, {'Content-Type': 'text/html'});
                res.write('Sadece resim dosyaları yüklenebilir.');
                res.end();
            }

            const dosya_boyutu = files.dosya.size;
            if(dosya_boyutu>5000000){
                res.writeHead(200, {'Content-Type': 'text/html'});
                res.write('Dosya boyutu 5MB ın altnda olmalı!');
                res.end();
            }
            const oldpath = files.dosya.filepath;
            const newpath = './uploads/' + files.dosya.originalFilename;
            console.log(oldpath);
            if(fs.lstatSync(oldpath).isFile() ){
                console.log("Upload dosyası mevcut");    
            }else{
                console.log("Upload dosyası mevcut değil");
            }
            fs.rename(oldpath, newpath, function(err){
                if(err) throw err;
                res.writeHead(200, {'Content-Type': 'text/html'});
                res.write('File uploaded and moved!');
                res.end();
            });
        });
    }else{
        fs.readFile('index.html', function(err, data){
            if(err){console.log("Hata oluştu: " + err);return;}
            res.writeHead(200, {'Content-Type': 'text/html'});
            res.write(data);
            res.end();
        });
    }

    
}).listen(8081);