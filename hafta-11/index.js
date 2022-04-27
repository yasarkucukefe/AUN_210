const dil_ad = "Node.JS"; // değeri değişmeyen sabit değerler için const kullanılır.

const mesaj = "Merhaba " + dil_ad;
console.log(mesaj);

// 1'den 100'e kadar olan sayıların toplamını hesaplamak için
let sum = 0; // sum değişkeni "değişeceği" için let kullanılır.
for (let i = 1; i <= 100; i++) {
  sum += i;
};

// const sonuc_mesaj = "1'den 100'e kadar olan sayıların toplamı: " + sum;
const sonuc_mesaj = `1'den 100'e kadar olan sayıların toplamı: ${sum}`; // alternatif.
console.log(sonuc_mesaj);

const fonksiyon_isim = () => {
  console.log("Fonksiyon çalıştı");
};

fonksiyon_isim();

const fonksiyon_2 = (x, y) => {
    const sonuc = x + y;
    return sonuc;
};

const toplam = fonksiyon_2(4,5);
console.log(toplam); //9

const fonksiyon_3 = (a = 2) =>{
    return a * a;
};

console.log(fonksiyon_3(5)); //25
console.log(fonksiyon_3()); //4

//const fonksiyon_4 = (a) => {return a + 5;};
const fonksiyon_4 = a => a + 5; // kısa yol.

const a = 9;
if(a > 8){
    console.log("a değeri 8'den büyük");
}else{
    console.log("a değeri 8'den küçük veya eşit")
};

// % : modulus, bir bölme işleminde kalan değeri hesaplar
5 % 2 // 1
5 % 3 // 2

// koşul kontrolü ile değer atamanın değişik yolları
// 1. yol
let b = "";
if(a > 8){
    b = "elma";
}else{
    b = "portakal";
};

// 2. yol
let c = "portalak";
if(a > 8){
    c = "elma";
}

// 3. yol
const d = a > 8 ? "elma" : "portakal"; // Ternary operator

// Kendisine gönderilen rakamın tek veya çift olduğunu kontrol eden fonksiyon
const tek_mi_cift_mi = (rakam) => {
  return rakam % 2 === 0 ? "çift" : "tek";
};

const meyve = "elma";
const fonksiyon_5 = () => {
    const meyve = "armut";
    console.log(meyve); // armut
}
console.log(meyve); // elma

fonksiyon_5();

let i = 0;
i++; // i = i + 1
i--; // i = i - 1
i = 5;
console.log(i++); // 5
console.log(i); // 6

// JSON
const deger = "mustang"
const json = {anahtar:deger};
console.log(json); // {anahtar: "mustang"}

const personel = {
    isim: "Yaşar",
    soyisim: "Öztürk",
    yas: 25,
    meslek: "yazılım",
    adres: "..."
}

console.log(personel.soyisim); // Öztürk

const isim = "Yaşar";
const soyisim = "Küçükefe";
const yas = 51;

const kisi = {
    isim: isim,
    soyisim: soyisim,
    yas: yas
}
console.log(kisi); // {isim: "Yaşar", soyisim: "Küçükefe", yas: 51}

const kisi2 = {isim, soyisim, yas}; // {isim: "Yaşar", soyisim: "Küçükefe", yas: 51}

const ad="Barış";
const soyad = "Bilgen";
console.log({ad,soyad}); // {ad: "Barış", soyad: "Bilgen"}

// for loop
for(let i = 0; i < 10; i++){
    console.log(i); // 0, 1, 2, 3, 4, 5, 6, 7, 8, 9
}

//break
for(let i = 0; i < 10; i++){
    if(i>5){break;}
    console.log(i); // 0, 1, 2, 3, 4, 5
}

//continue
for(let i = 0; i < 10; i++){
    if(i === 5){break;} // i = 5 olursa döngüden çık
    console.log(i); // 0, 1, 2, 3, 4, 6, 7, 8, 9
}

// Array
const array = [1,2,3,4,5];
array[1]; // 2
// JS'te indeksler sıfırdan başlar

const arr1 = [1,2,3,4,5];
const arr2 = arr1;
arr2[1] = 3;  // arr1[3] = 3;
console.log(arr1); // [1,3,3,4,5]

// Callback
console.log("setTimeout çalıştı");
setTimeout(() => {console.log("Merhaba")}, 2000);

const islem_a = () => {
    console.log("İşlem A");
}

const islem_b = () => {
    console.log("İşlem B");
}

const islem_c = () => {
    console.log("İşlem C");
}

const gecikmeli_islem = (gecikme_suresi, islem_ad) =>{
    setTimeout(islem_ad, gecikme_suresi);
}

gecikmeli_islem(2500, islem_a);

const islem_a2 = () => {
    console.log("İşlem A başladı");
    setTimeout(()=>{
        console.log("İşlem A tamamlandı");
        islem_b2();}, 2000); // 2000 milisaniye => 2 saniye
    
}

const islem_b2 = () => {
    console.log("İşlem B başladı");
    setTimeout(()=>{
        console.log("İşlem B tamamlandı");
        islem_c2();}, 1000); // 2000 milisaniye => 2 saniye
}

const islem_c2 = () => {
    console.log("İşlem C başladı");
    setTimeout(()=>{
        console.log("İşlem C tamamlandı");}, 2000); // 2000 milisaniye => 2 saniye
}