
const gecikme = (saniye, callback) => {
    setTimeout(callback, saniye*1000);
};

const islem_yap = () => {
    console.log("Belirtilen gecikme süresi sona erdi.");
}

const bekle = 4;
console.log("Program başladı.");
gecikme(bekle, islem_yap);
console.log(bekle + " saniye bekleniyor...");