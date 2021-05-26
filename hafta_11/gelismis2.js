
const gecikme = (saniye, callback) => {
    setTimeout(()=>callback(saniye), saniye*1000);
};

const islem_yap = (bekleme_suresi) => {
    console.log(bekleme_suresi + " saniye sona erdi.");
}

const bekle = 4;
console.log("Program başladı.");
gecikme(bekle, islem_yap);
console.log(bekle + " saniye bekleniyor...");