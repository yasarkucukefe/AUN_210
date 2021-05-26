const jwt = require('jsonwebtoken');

const super_gizli_anahtar = 'JKDI_DPOlowy8273*/dcdadcd';
//jwt oluşturma
const token = jwt.sign({
    ders:'Script temelli diller', 
    tarih:'2021-05-27'}, 
    super_gizli_anahtar);

console.log(token);
//jwt doğrulama
const cozum = jwt.verify(token, super_gizli_anahtar);
console.log(cozum);