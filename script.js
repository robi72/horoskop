function saveHoroscope ()   {
    // hämta upp datum ifrån input
    // Skapa formdata av datum
    // fetch med method POST, och body formdata

    var day = document.getElementById("day").value
    console.log(day)

    var month = document.getElementById("month").value
    console.log(month)

    var data = new FormData();
    data.append("action", "addHoroscope");
    data.append("day", day);
    data.append("month", month);
    fetch("./addHoroscope.php", {
        method: "POST",
        body: data
    }).then((response)=> {
        return response.json()
    }).then((result) => {
        // Printa ut svaret på skärmen
        // Kalla på view, hämta session ifrån php och printa ut det i en div
        console.log(result)
    })



}