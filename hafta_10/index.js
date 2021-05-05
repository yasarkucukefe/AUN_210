// console.log("Merhaba Dünya!");

//Javascript
//Fonksiyon oluşturma
const fonksiyon_isim = (a, b) => {
    const sonuc = Math.sqrt(a*a + b*b)
    return sonuc
}

const deger = fonksiyon_isim(3, 4)
console.log("Pisagor uzun kenar: "+deger);

//Varsayılan değerler
const kare_alan = (kenar = 3) => {  //Varsayılan kenar=3: bu fonksiyon bir argüman ile çalıştırılmaz ise kenar = 3 olarak hesap yapar.
    const alan = kenar * kenar;
    return alan;
}

const alan = kare_alan();//fonksiyon argüman değeri belirtilmediği için, fonksiyon hesaplamasını varsayılan değer kullanarak yapar.
console.log("Alan:",alan);

//fonksiyon
const fonksiyon_ad = (arg_1, arg_2) => {
    //fonksiyon...
};
//Alternatif olarak (tek argüman var ise parantez kullanılmayabilir.)
const fonksiyon_tek_arguman = arg => {
    //...
}
// fonksiyon tek bir satırdan oluşuyor ise
const fonksiyon_tek_satir = (arg_1, arg_2) => arg_1 + arg_2;

//hem tek argüman hem de tek satır:
const fonksiyon = arg => 2*arg;

//String - karakter dizinleri. Tek tırnak veya Çift tırnak içinde olabilirler.
const isim = "Yaşar";
const arac = 'Nissan';

// Aritmetik işlemler
let sonuc = 1 + 2;
sonuc = 2 * 4;
sonuc = 9 / 3; 
sonuc = 9 - 4;

// Değişkenleri birleştirme
const arac_km = 50000;
const isim_arac_km = "";
console.log(isim, arac, arac_km);
// Yeni bir karakter dizini oluşturalım.
// İsim: Araç (Araç km)
// Yaşar: Nissan (50.000)

const arac_bilgisi = isim + arac + arac_km;
console.log(arac_bilgisi);

//Çözüm-1
const arac_bilgi_2 = isim + ": " + arac + " (" + arac_km.toLocaleString() + ")";
console.log(arac_bilgi_2);

//Çözüm-2, ters tırnak içinde yazmak (back-tick)
const arac_bilgi_3 = `${isim}: ${arac} (${arac_km.toLocaleString()})`;
console.log(arac_bilgi_3);

//const a=1;
//const b=2;
//const c=3;
const a=1, b=2, c=3;

//Diğer aritmetik işlemler
sonuc = 2**3; // 2 üzeri 3
sonuc = 8 % 3; // kalan operatörü, 8'in 3'e bölümünden kalan = 2
sonuc = 9 % 2; // sonuc 1 => 9 tek sayı (eğer sonuc 0 olsaydı, ilk sayı çift sayıdır denebilirdi.)
sonuc++; // sonuc = sonuc + 1;
sonuc--; // sonuc = sonuc -1 ;

// işlemler
sonuc = sonuc + 2; 
sonuc += 2; // sonuc = sonuc + 2
sonuc -= 1; // sonuc = sonuc -1

// Değişken scope (kapsam)
const meyve = "Elma";
const araba = "Egea";
// Fonksiyon oluştur
const meyve_isim = (meyve) => {
    meyve = "Üzüm";
    console.log(meyve);
    console.log(araba);
}
// Fonksiyonu çağır
meyve_isim(meyve); // Elma
meyve_isim("Armut"); // Armut
console.log(meyve);

// Javascript Nesneleri JSON (Javascript Object Notation)
const nesne = {isim:"Yaşar", arac:"Küçükefe", arac_km:50000};
console.log(nesne);
// Araç km
console.log(nesne.arac_km);//50000
// İsim
console.log(nesne.isim); //Yaşar

//Alternatif nesne oluşturma
const nesne_2 = {isim, arac, arac_km};// = {isim:"Yaşar", arac:"Küçükefe", arac_km:50000}
console.log(nesne_2);

// Javascript nesnelerine fonksiyon eklenebilir.
const nesne_3 = {isim, arac, arac_km, bilgi : () => isim + ": " + arac + " (" + arac_km.toLocaleString() + ")"}
console.log(nesne_3);
console.log(nesne_3.bilgi());

let kitap = "Nutuk";
const nesne_4 = {kitap: "İktisat Politikası", ozet : () => kitap + " özeti: ..."};

console.log(kitap, nesne_4.kitap)
console.log(nesne_4.ozet());

//Tercih edilen yöntem, fonksiyon içeren nesne oluştururken.
const nesne_5 = {kitap: "İktisat Politikası", ozet : function() {return this.kitap + " özeti: ..."}};
console.log(nesne_5.ozet());
/*
const { response } = require('express')
const http = require('http')

http.createServer((req, res) => {
    console.log("Sunucuya bir istem yapıldı.");
    res.writeHead(200, {'Content-Type': 'text/html'});
    const mesaj = "Merhaba Dünya! Şu anda saat:" + Date();
    res.end(mesaj);
}).listen(8081)

console.log("Node.js web sunucu 8081 numaralı port'u dinliyor.")
*/