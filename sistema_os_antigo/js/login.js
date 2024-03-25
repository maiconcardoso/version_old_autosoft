let login = function() {
    let form = document.getElementById("login-form");
    let usuario = form.elements.namedItem("usuario").value;
    let senha = form.elements.namedItem("senha").value;
    let credentials = "usuario=" + usuario + "&senha" + senha;
    const xml = new XMLHttpRequest();

    xml.onreadystatechange = function() {
        if (xml.status == 200) {
            console.log(xml.response);
        }
    };
    xml.open("POST", login.php);
    xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xml.send(credentials);
};