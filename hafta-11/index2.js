const http = require("http")
const fs = require("fs")
const formidable = require("formidable")

console.log("8081 port üzerinden sunucuya erişilebilir.")

http.createServer(function(req,res){
    res.writeHead(200, {"Content-Type":"text/html"});
    //res.write("Node.js sunucusu çalışıyor");

    if(req.url === "/yoklama"){
        //form bilgileri okunacak.
        const form = new formidable.IncomingForm();
        form.parse(req, function(err, fields, files){
            if(err){
                res.write("Kayıt işlemi başarısız oldu.");
                res.end();
            }else{
                const okul_no = fields.q1;
                const isim = fields.q2;
                const data = okul_no + ","+isim+"\n";
                fs.appendFile('liste.csv', data, err => {
                    if(err){res.write("Kayıt işlemi başarısız oldu.");}
                    else{
                        res.write("Kayıt işlemi başarılı. "+data);
                        res.end();
                    }
                })
            }
        });


        

        
    }else{
        console.log("form göster");
        fs.readFile('index2.html',function(err, data){
            if(err){res.write("Dosya okunurken bir hata oluştu."); return;}
            res.write(data);
            res.end();
        })
    }


    
}).listen(8081)