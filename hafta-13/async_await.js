const rasgele_sayi_uret = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
        resolve(Math.floor(Math.random() * 100));
        }, 1000); //1000 milisaniye bekle = 
    });
}

const rasgele_sayilar = [];

const rasgele_sayi_uret_ve_listeye_ekle = async () => {
    for(let i=1; i<6; i++){
        const sayi = await rasgele_sayi_uret();
        rasgele_sayilar.push(sayi);
    }
    console.log(rasgele_sayilar);
};

rasgele_sayi_uret_ve_listeye_ekle();

/*
rasgele_sayi_uret().then(sayi => {console.log(sayi)});
rasgele_sayi_uret().then(sayi => {console.log(sayi)});
rasgele_sayi_uret().then(sayi => {console.log(sayi)});
rasgele_sayi_uret().then(sayi => {console.log(sayi)});
rasgele_sayi_uret().then(sayi => {console.log(sayi)});
*/