const express = require('express');
const formidable = require('formidable');
const fs = require('fs');

const app = express();

app.get('/form',(req,res)=>{
    fs.readFile('form.html',(err,data)=>{
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

app.post('/fileupload',(req, res) => {
    const form = new formidable.IncomingForm();
    form.parse(req, (err, fields, files) => {
        if(err){
            res.writeHead(404,  {'Content-type':'text/html'});
            res.write("Form yüklenemedi.");
            return res.end();
        }
        //bu satıra geldiyse form parse edilmiştir.
        console.log(fields);
        const from_path = files.dosyayukle.path;
        const copy_path = "./"+files.dosyayukle.name;
        fs.rename(from_path,copy_path, (err)=>{
            if(err) {
                res.writeHead(404,  {'Content-type':'text/html'});
                res.write("Dosya yüklenemedi.");
                return res.end();
            }
            res.write('Form ve dosya başarıyla yüklendi.');
            res.end();
        })
    });
});


app.listen(3001);