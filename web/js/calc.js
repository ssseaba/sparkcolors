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
    console.log(weight, height, material, luvers, kolvo, prokleika, result);
    result.innerHTML = count;  
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

    count = (weight / 1000) * (height / 1000);
    count = count * material + 800 * kolvo;
    if (lamina){
        count = count + count * 0.3;
    }
    if (cvet == 2){
        count = count + count * 0.3;
    }

    console.log(weight, height, material, kolvo, cvet, lamina, result);
    result.innerHTML = count;  
}

function calc_int(){
    var weight = document.getElementById("weight").value;
    var height = document.getElementById("height").value;
    var material = document.getElementById("material");
    var kolvo = document.getElementById("kolvo").value;
    var luvers = document.getElementById("luvers").value;
    var prokleika = document.getElementById("prokleika").checked;
    var obrez = document.getElementById("obrez").checked;
    var result = document.getElementById("result");
    var count = 0;

    count = (weight / 1000) * (height / 1000);
    
    count = count * material.value * kolvo;
    console.log(count)
    if (prokleika){
        count += (weight * 2 + height * 2)/ 1000 * 20 * kolvo;
    }

    if (material.options[material.selectedIndex].dataset.id) { 
       count += luvers * kolvo * 50;
    }

    if (obrez){
        count += (weight * 2 + height * 2)/ 1000 * 40 * kolvo;
    }
    
    console.log(weight, height, material.value, kolvo, prokleika, obrez, luvers, result);
    result.innerHTML = count; 
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
   
   
    console.log(weight, height, kolvo, nakleyka, obrezka, kontur, name, phone, file, result);
    result.innerHTML = count; 

}








