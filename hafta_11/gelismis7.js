var fs = require('fs').promises;

const dosya_icerigi_goster = (data) => console.log("Dosya içeriği:\n"+data);

const hata_mesaj_goster = (err) => console.log("Bir hata oluştu. Hata:"+err);

async function dosya_oku(dosyaAdi){
    try{
        const icerik = await fs.readFile(dosyaAdi); // Noje.js dosya okunana kadar bu adımda bekler
        dosya_icerigi_goster(icerik);
    }catch(err){
        hata_mesaj_goster(err)
    }    
}

dosya_oku("form.html");


