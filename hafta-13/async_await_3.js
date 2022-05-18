const rasgele_sicaklik = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
        resolve(Math.floor(Math.random() * 50));
        }, 500); //1000 milisaniye bekle = 
    });
}

const sicakliklar = [];
rasgele_sicaklik().then(sayi => {
    sicakliklar.push(sayi);
    rasgele_sicaklik().then(sayi => {
        sicakliklar.push(sayi);
        rasgele_sicaklik().then(sayi => {
            sicakliklar.push(sayi);
            rasgele_sicaklik().then(sayi => {
                sicakliklar.push(sayi);});
                rasgele_sicaklik().then(sayi => {
                    sicakliklar.push(sayi);
                    console.log(sicakliklar);
                });
        });
    });
});




