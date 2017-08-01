var select_provinsi = document.getElementsByName("provinsi");
var select_kecamatan = document.getElementsByName("kecamatan");
var select_kota = document.getElementsByName("kota");

var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var myObj = JSON.parse(this.responseText);        
        for (x in myObj) {
            var option = document.createElement("option");   
            option.innerHTML = myObj[x].lokasi_nama;    
            option.value = myObj[x].lokasi_propinsi;
            select_provinsi[0].appendChild(option);
        }       
    }
};
xmlhttp.open("GET", "../../model/JSON_lokasi.php", true);
xmlhttp.send();

select_provinsi[0].setAttribute('onchange','onChangeProvinsi()');

function onChangeProvinsi(){var xmlhttp = new XMLHttpRequest();

while (select_kota[0].firstChild) {	
    select_kota[0].removeChild(select_kota[0].firstChild);
}
while (select_kecamatan[0].firstChild) {
    select_kecamatan[0].removeChild(select_kecamatan[0].firstChild);
}
var option1 = document.createElement("option");   
option1.innerHTML = 'Pilih'; 
select_kota[0].appendChild(option1);

var option2 = document.createElement("option");   
option2.innerHTML = 'Pilih'; 
select_kecamatan[0].appendChild(option2);

xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var myObj = JSON.parse(this.responseText);
        for (x in myObj) {
            option = document.createElement("option");   
            option.innerHTML = myObj[x].lokasi_nama;    
            option.value = myObj[x].lokasi_kabupatenkota;
            select_kota[0].appendChild(option);
        }       
    }
};
xmlhttp.open("GET", "../../model/JSON_lokasi.php?prov="+select_provinsi[0].value, true);
xmlhttp.send();

select_kota[0].setAttribute('onchange','onChangeKota()');
}

function onChangeKota(){var xmlhttp = new XMLHttpRequest();

while (select_kecamatan[0].firstChild) {
    select_kecamatan[0].removeChild(select_kecamatan[0].firstChild);
}
var option = document.createElement("option");   
option.innerHTML = 'Pilih'; 
select_kecamatan[0].appendChild(option);

xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var myObj = JSON.parse(this.responseText);
        for (x in myObj) {
            var option = document.createElement("option");   
            option.innerHTML = myObj[x].lokasi_nama;    
            option.value = myObj[x].lokasi_kecamatan;
            select_kecamatan[0].appendChild(option);
        }       
    }
};
xmlhttp.open("GET", "../../model/JSON_lokasi.php?prov="+select_provinsi[0].value+"&kab="+select_kota[0].value, true);
xmlhttp.send();
}