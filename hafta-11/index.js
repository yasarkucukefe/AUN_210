const http = require("http")
const fs = require("fs")
const formidable = require("formidable")
const mime = require('mime-types');

console.log("8081 port üzerinden sunucuya erişilebilir.")

http.createServer(function(req,res){
    res.writeHead(200, {"Content-Type":"text/html"});
    //res.write("Node.js sunucusu çalışıyor");

    if(req.url === "/upload"){
        const form = new formidable.IncomingForm();
        form.parse(req, function(err, fields, files){
            if(err){
                res.write("Yükleme işlemi başarısız oldu.");
                res.end();
            }else{
                //dosya boyut kontrolu
                if(files.file.size > 10000000){
                    res.write("Dosya 10MB büyük olamaz.");
                    res.end();
                    return;
                }

                //dosya kayıt işlemi
                const file = files.file[0];
                const uploaded_file = file.filepath;
                const dosya_path = "./uploads/"+file.originalFilename;
  
                // mimetype. 
                if(file.mimetype !== "image/jpeg"){
                    res.write("Sadece resim dosyaları yüklenebilir.");
                    res.end();
                    return;
                }

                //Aynı isimli başka bir dosya ismi var mı?
                fs.access(dosya_path, fs.constants.F_OK, (err) => {
                    if(err){ // Aynı isimde bir dosya mevcut değil
                        //Upload
                        fs.rename(uploaded_file, dosya_path, function(err){
                            if(err){
                                res.write("Bir hata oluştu.");
                            }else{
                                res.write("Dosya yüklendi.");
                            }
                            res.end();
                        })
                    }else{ 
                        res.write("Sadece resim dosyaları yüklenebilir.");
                        res.end();
                    }
                })
                
            }
        });
    }else{
        fs.readFile('index.html',function(err, data){
            if(err){res.write("Dosya okunurken bir hata oluştu."); return;}
            res.write(data);
            res.end();
        })
    }

    
}).listen(8081)