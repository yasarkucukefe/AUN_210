const fs = require("fs");
const { promisify } = require('util');

const dosya_oku = promisify(fs.readFile);

const dosya_icerigi_goster = (data) => console.log("Dosya içeriği:\n"+data);

const hata_mesaj_goster = (err) => console.log("Bir hata oluştu. Hata:"+err);

dosya_oku('form.html')
    .then(dosya_icerigi_goster)
    .catch(hata_mesaj_goster);


