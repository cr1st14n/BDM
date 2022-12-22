function funcView(tipo) {
    let ruta = "";
    let data = "";
    switch (tipo) {
        case 1:
            ruta = "";
            break;
        case 2:
            ruta = "meet/create";
            data = { tipo: 2 };
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
            $("#body_1").html(response);
        },
    });
}

const create = (val) => {
    $.ajax({
        type: "get",
        url: "/BDM/meet/store_1",
        data: $("#form_1_dbm").serialize(),
        // dataType: "dataType",
        success: function (response) {
            console.log(response);
        },
    });
};

const list_1 = () => {
    $.get("/BDM/meet/list_1", {}, function (data, textStatus, jqXHR) {
        console.log(data);
    });
};
