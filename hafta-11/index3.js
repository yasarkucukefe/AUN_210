// readme.txt dosyasının içeriğini ekrana yazdırın. Promise kullanarak

const fs = require("fs");

const dosya_oku = (dosya_ismi) => new Promise((resolves,rejects) => {
    fs.readFile(dosya_ismi, (err, data) => {
        if(err){
            rejects(err);
        }else{
            resolves(data);
        }
    })
});

const dosya_icerigi = (data) => {console.log(data);};

const hata_olustu = (err) => console.log("Hata oluştu: " + err);

const dosya_ad = "readme_.txt";

dosya_oku(dosya_ad)
    .then(dosya_icerigi)
    .then(() => console.log("Dosya başarıyla okundu"))
    .catch(hata_olustu);