//const http = require('http');
const fs = require('fs');
const express = require('express');

const app = express();

app.get('/konular',(req,res)=>{
    fs.readFile('konular.html',(err,data)=>{
        if(err){
            res.writeHead(404,  {'Content-type':'text/html'});
            res.write("Dosya bulunamadı.");
            return res.end();
        }
        //Kod bu satıra ulaştıysa data okunmuştur.
        res.writeHead(200, {'Content-type':'text/html'});
        res.write(data);
        return res.end();
    });
});

app.get('/',(req,res)=>{
    fs.readFile('index.html',(err,data)=>{
        if(err){
            res.writeHead(404,  {'Content-type':'text/html'});
            res.write("Dosya bulunamadı.");
            return res.end();
        }
        //Kod bu satıra ulaştıysa data okunmuştur.
        res.writeHead(200, {'Content-type':'text/html'});
        res.write(data);
        return res.end();
    });
});

app.listen(3001);

/*
fs.readFile('index.html',(err, data)=>{
    if(err){console.log("Dosya okunamadı. Hata:"+err);return;}
    console.log(data);
});

console.log('Dosya okunuyor.');
*/

/*
http.createServer((req, res) => {    
    fs.readFile('konular.html',(err,data)=>{
        if(err){
            res.writeHead(404,  {'Content-type':'text/html'});
            res.write("Dosya bulunamadı.");
            return res.end();
        }
        //Kod bu satıra ulaştıysa data okunmuştur.
        res.writeHead(200, {'Content-type':'text/html'});
        res.write(data);
        return res.end();
    });
    console.log("Node.js web sunucusu 8081 numaralı port'tan çalışıyor.");
}).listen(8081);
*/
