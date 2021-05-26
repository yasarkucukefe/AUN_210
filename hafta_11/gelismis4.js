const fs = require("fs");


const dosya_oku = (dosya) => new Promise((resolves, rejects) => {
    fs.readFile(dosya, (err, data) => {
        if(err) {
            rejects(err);
            return;
        }
        resolves(data);
    });
});

const dosya_icerigi_goster = (data) => console.log("Dosya içeriği:\n"+data);

const hata_mesaj_goster = (err) => console.log("Bir hata oluştu. Hata:"+err);

const dosya_ad = "form_.html";

dosya_oku(dosya_ad)
    .then(dosya_icerigi_goster)
    .then(()=>console.log("Dosya başarıyla okundu."))
    .catch(hata_mesaj_goster);