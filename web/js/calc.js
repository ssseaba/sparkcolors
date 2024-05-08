function calc_sh(){
    var weight = document.getElementById("weight").value;
    var height = document.getElementById("height").value;
    var material = document.getElementById("material").value;
    var luvers = document.getElementById("luvers").value;
    var kolvo = document.getElementById("kolvo").value;
    var prokleika = document.getElementById("prokleika").checked;
    var result = document.getElementById("result");
    var count = 0;

    count = (weight / 1000) * (height / 1000);
    count = count * material * kolvo + luvers * kolvo * 50;
    if (prokleika){
        count += (weight * 2 + height * 2)/ 1000 * 20 * kolvo;
    }

    if (count < 600) {
        count = "Мин. сумма: 600 рублей";
    }
    if (prokleika.checked) {
        prokleika = "yes";
    } else {
        prokleika = "no";
    }


    document.getElementById("price-input").setAttribute("value", count);
    result.innerHTML = count.toFixed(0);

    document.getElementById("weight").addEventListener("input", calc_sh);
    document.getElementById("height").addEventListener("input", calc_sh);
    document.getElementById("material").addEventListener("input", calc_sh);
    document.getElementById("luvers").addEventListener("input", calc_sh);
    document.getElementById("kolvo").addEventListener("input", calc_sh);
    document.getElementById("prokleika").addEventListener("change", calc_sh);
}


function calc_tabl(){
    var weight = document.getElementById("weight").value;
    var height = document.getElementById("height").value;
    var material = document.getElementById("material").value;
    var kolvo = document.getElementById("kolvo").value;
    var cvet = document.getElementById("cvet").value;
    var lamina = document.getElementById("lamina").checked;
    var result = document.getElementById("result");
    var count = 0;

    count = parseInt(material) + 800;
    count = count * (weight / 1000) * (height / 1000) * kolvo;

    if (lamina){
        count = count + count * 0.3;
    }
    if (cvet == 2){
        count = count + count * 0.3;
    }

    if (count < 600) {
        count = "Мин. сумма: 600 рублей";
    }

    document.getElementById("price-input").setAttribute("value", count);
    result.innerHTML = count;

    document.getElementById("weight").addEventListener("input", calc_tabl);
    document.getElementById("height").addEventListener("input", calc_tabl);
    document.getElementById("material").addEventListener("input", calc_tabl);
    document.getElementById("kolvo").addEventListener("input", calc_tabl);
    document.getElementById("cvet").addEventListener("input", calc_tabl);
    document.getElementById("lamina").addEventListener("change", calc_tabl);
}

function calc_int(){
    var weight = document.getElementById("weight");
    var height = document.getElementById("height");
    var material = document.getElementById("material");
    var kolvo = document.getElementById("kolvo");
    var luvers = document.getElementById("luvers");
    var prokleika = document.getElementById("prokleika");
    var obrez = document.getElementById("obrez");
    var result = document.getElementById("result");
    var count = 0;

    function calculateTotal() {
        count = (weight.value / 1000) * (height.value / 1000);
        count = count * material.value * kolvo.value;

        if (prokleika.checked) {
            count += (weight.value * 2 + height.value * 2) / 1000 * 20 * kolvo.value;
        }

        if (prokleika.checked) {
            prokleika = "yes";
        } else {
            prokleika = "no";
        }

        if (material.options[material.selectedIndex].dataset.id) {
            count += luvers.value * kolvo.value * 50;
        }

        if (obrez.checked){
            count += (weight.value * 2 + height.value * 2) / 1000 * 40 * kolvo.value;
        }

        if (count < 600) {
            count = "Мин. сумма: 600 рублей";
        }

        document.getElementById("price-input").setAttribute("value", count);


        console.log(prokleika)
        result.innerHTML = count;
    }

    weight.addEventListener('input', calculateTotal);
    height.addEventListener('input', calculateTotal);
    material.addEventListener('change', calculateTotal);
    kolvo.addEventListener('input', calculateTotal);
    luvers.addEventListener('input', calculateTotal);
    prokleika.addEventListener('change', calculateTotal);
    obrez.addEventListener('change', calculateTotal);

    calculateTotal();
}

let sel1 = document.querySelector('#material'),
    sel2 = document.querySelector('#additional-form'),
    sel3 = document.querySelector('.obrez-form'),
    sel4 = document.querySelector('#i4');
    sel3.style.display = 'none';

sel1.addEventListener('change', function(){
    var showdopcontent = this.options[this.selectedIndex].dataset.id;
    console.log(this.options[this.selectedIndex].dataset.id)
  if (showdopcontent) {
    sel2.style.display = 'inline-block';
    sel3.style.display = 'none';
  } else {
    sel2.style.display = 'none';
    sel3.style.display = 'flex';
  }
});

function calc_nakl(){
    var weight = document.getElementById("weight").value;
    var height = document.getElementById("height").value;
    var kolvo = document.getElementById("kolvo").value;
    var nakleyka = document.getElementById("nakleyka").value;
    var obrezka = document.getElementById("obrezka").checked;
    var kontur = document.getElementById("kontur").checked;
    var name = document.getElementById("name").value;
    var phone = document.getElementById("phone").value;
    var file = document.getElementById("file").value;
    var result = document.getElementById("result");
    var count = 0;


    count = count + (weight / 1000) * (height / 1000);
    count = count * nakleyka * kolvo;
    if (obrezka){
        count += (weight * 2 + height * 2)/ 1000 * 40 * kolvo;
    }

    if (count < 600) {
        count = "Мин. сумма: 600 рублей";
    }

    document.getElementById("price-input").setAttribute("value", count);
    result.innerHTML = count;

    document.getElementById("weight").addEventListener("input", calc_nakl);
    document.getElementById("height").addEventListener("input", calc_nakl);
    document.getElementById("nakleyka").addEventListener("input", calc_nakl);
    document.getElementById("kolvo").addEventListener("input", calc_nakl);
    document.getElementById("obrezka").addEventListener("change", calc_nakl);

}








