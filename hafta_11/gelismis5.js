const fs = require("fs");
const { promisify } = require('util');

const dosya_oku = promisify(fs.readFile);

dosya_oku('form_.html')
    .then((data) => dosya_icerigi_goster(data.toString()))
    .catch((err)=> hata_mesaj_goster(err));


const dosya_icerigi_goster = (data) => console.log("Dosya içeriği:\n"+data);

const hata_mesaj_goster = (err) => console.log("Bir hata oluştu. Hata:"+err);