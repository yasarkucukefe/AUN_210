
const gecikme = (seconds) => new Promise((resolves, rejects) => {
    setTimeout(()=>resolves(seconds), seconds*1000);
});

const islem_yap = (bekleme_suresi) => {
    return bekleme_suresi;
}

gecikme(3)
    .then(islem_yap)
    .then((sure)=>console.log(sure + " saniye tamamlandı."))
    .then(()=>console.log("Yeni baştan başla"))
    .then(() => 30)
    .then(console.log);
