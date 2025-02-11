function dohvatiGradove(){
    const country = document.getElementById("drzava");
    const country_id = country.value;
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (){
    if(this.readyState == 4 && this.status== 200){
        var grad = document.getElementById("grad");
        grad.innerHTML = this.responseText;
        }
    }
    xhr.open("GET", `cities.php?country_id=${country_id}`, true);
    xhr.send();
}

function validationForm(){
    let organizer = document.getElementById("organizator").value;
    let country = document.getElementById("drzava").value;
    let city = document.getElementById("grad").value;
    let number_participans = document.getElementById("br_ucesnika").value;
    let date = document.getElementById("datum").value;
    let napomena = document.getElementById("napomena").value;


    if(organizer == "" || country=="" || city =="" || number =="" || number_participans == "" || date == "" || napomena == "" )
    {
        alert("MORATE POPUNITI SVE PARAMETRE!");
        return false;
    }
    if(organizer.length <3){
        alert("Organizator mora imati vise karaktera!");
        return false;
    }
    return true;
}
