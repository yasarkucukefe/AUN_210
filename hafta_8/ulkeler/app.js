const sunucudan_veri_getir = (post_params, callback) => {
    fetch("veri.php",{
        method: 'POST', 
        headers: {'Content-type': 'application/json'},
        body: JSON.stringify(post_params)})
    .then(res => res.json())
    .then(veri => {callback(veri);});
};

const konusulan_diller = (ulke_kodu) => {
    const post_params = {q: 'diller', ulke: ulke_kodu};
    sunucudan_veri_getir(post_params, veri_konusulan_diller);
};

const veri_konusulan_diller = (veri) => {
    const data = veri.data;
    const diller=["<b>Konuşulan diller: </b>"];
    for(const obj of data.diller){diller.push(obj.dil);}
    document.querySelector("#diller").innerHTML = diller.join(",");
};

const sehir_listesi = (ulke_kodu) => {
    const post_params = {q: 'sehirler', ulke: ulke_kodu};
    sunucudan_veri_getir(post_params, veri_sehir_listesi);
};

const veri_sehir_listesi = (veri) => {
    const data = veri.data;
    document.querySelector("#ulke_ad").textContent = data.ulke;
    const liste = document.querySelector("ul");
    let li_elm = "";
    for(const obj of data.sehirler){li_elm += `<li>${obj.sehir}</li>`;}
    liste.innerHTML = li_elm;
};

const veri_ulke_listesi = (veri) => {
    const tablo = document.querySelector("tbody");
    let tr = "";
    for(const obj of veri.data){
        //console.log(obj.kod,obj.isim);
        tr += `<tr><td><div class='ulke_kod'>${obj.kod}</div></td><td>${obj.isim}</td></tr>`;
    }
    tablo.innerHTML = tr;
    //
    const ulkeler = document.querySelectorAll(".ulke_kod");
    for(const div of ulkeler){
        div.addEventListener("click",()=>{
            sehir_listesi(div.textContent);
            konusulan_diller(div.textContent);}
        );
    }
};     

const post_params = {q: 'ulkeler'};
sunucudan_veri_getir(post_params, veri_ulke_listesi);  
