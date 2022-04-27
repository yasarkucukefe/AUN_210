const gecikme = (saniye) => new Promise((resolve, reject) => {
    setTimeout(() => {
        resolve();
    }, saniye*1000);
});

const islem_a = () => {
    console.log("İşlem A");
}

const islem_b = () => {
    console.log("İşlem B");
}

gecikme(1)
    .then(islem_a)
    .then(() => console.log("İşlem A tamamlandı"))