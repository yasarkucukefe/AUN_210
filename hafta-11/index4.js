const fs = require("fs");
const { promisify } = require("util");

const dosya_oku = promisify(fs.readFile);

const dosya_icerigi = (data) => {console.log(data);};

const hata_olustu = (err) => console.log("Hata oluştu: " + err);

const dosya_ad = "readme_.txt";

dosya_oku(dosya_ad)
    .then(dosya_icerigi)
    .catch(hata_olustu);