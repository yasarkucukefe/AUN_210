const rasgele_sicaklik = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
        resolve(Math.floor(Math.random() * 50));
        }, 500); //1000 milisaniye bekle = 
    });
}


const sicaklik_array = [];
const rasgele_sicaklik_uret_ve_listeye_ekle = async () => {
    for(let i=1; i<6; i++){
        const sayi = await rasgele_sicaklik();
        sicaklik_array.push(sayi);
    }
    console.log(sicaklik_array);
};


rasgele_sicaklik_uret_ve_listeye_ekle();

/*
const sicakliklar = [];
rasgele_sicaklik().then(sayi => {sicakliklar.push(sayi);});
rasgele_sicaklik().then(sayi => {sicakliklar.push(sayi);});
rasgele_sicaklik().then(sayi => {sicakliklar.push(sayi);});
rasgele_sicaklik().then(sayi => {sicakliklar.push(sayi);});
rasgele_sicaklik().then(sayi => {sicakliklar.push(sayi);});

console.log(sicakliklar);
*/