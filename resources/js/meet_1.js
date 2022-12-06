let data_text = "";

let dirVien =''
let min =''
let max =''
let trend =''
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
            console.log(response);
            $("#body_1").html(response);
        },
    });
}
function show_1() {
    $("#text_1").val(data_text);
}

function marq_1() {



    show_1()
}
