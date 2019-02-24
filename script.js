    viewHoroscope ();



function saveHoroscope ()   {
    // hämta upp datum ifrån input
    // Skapa formdata av datum
    // fetch med method POST, och body formdata

    var day = document.getElementById("day").value;
    console.log(day);

    var month = document.getElementById("month").value;
    console.log(month);

    var data = new FormData();
    data.append("day", day);
    data.append("month", month);
    fetch("./addHoroscope.php", {
        method: "POST",
        body: data,
    }).then(function(response)  {
        return response.json();
    }).then(function(result)  {
        // Printa ut svaret på skärmen
        // Kalla på view, hämta session ifrån php och printa ut det i en div
        viewHoroscope();
        console.log(result);
    });
}

function viewHoroscope ()   {
    fetch("./viewHoroscope.php", {
        method: "GET"
    }).then(function(response)  {
        return response.json();
    }).then(function(result)  {
        // Printa ut svaret på skärmen
        // Kalla på view, hämta session ifrån php och printa ut det i en div

        var printHoroscopeSign= document.getElementById("horoscope_sign");
        printHoroscopeSign.textContent = result;
        console.log(result);
        return result;
    });

}

function deleteHoroscope() {
    fetch("./deleteHoroscope.php", {
        method: "DELETE",
    }).then(function(response) {
        return response.json();
    }).then(function(data) {
        viewHoroscope();
        console.log(data);
    });
}

function updateHoroscope() {

    var day = document.getElementById("day").value;
    console.log(day);

    var month = document.getElementById("month").value;
    console.log(month);

    var data = new FormData();
    data.append("day", day);
    data.append("month", month);


    fetch("./updateHoroscope.php",{
        method: "POST",
        body: data,
    }).then(function(response) {
        console.log(response);
        return response.json();
    }).then(function(result) {
        viewHoroscope ();
        console.log(result);
    });
}


function hide() {
    document.getElementById("save").style.display = "none";
}

function refreshPage(){
    window.location.reload();
} 


    
