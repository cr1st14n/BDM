function funcView(tipo) {
    let ruta = "";
    let data = "";
    switch (key) {
        case 1:
            ruta = "";
            break;
        case 2:
            ruta = "create";
            break;
        case 3:
            break;

        default:
            break;
    }

    $.ajax({
        type: "get",
        url: "/BDM/" + ruta,
        data: data,
        success: function (response) {
            console.log(response);
        },
    });
}
