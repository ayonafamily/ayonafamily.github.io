$("p")
    .on("mouseenter", function () {
        $(this).css({
            "color": "blue"    
        });
    })
    .on("mouseout", function () {
        var styles = {            
            color: "#000"     
        };
        $(this).css(styles);
    });

    $("ul")
    .on("mouseenter", function () {
        $(this).css({
            "color": "blue"    
        });
    })
    .on("mouseout", function () {
        var styles = {            
            color: "#000"     
        };
        $(this).css(styles);
    });


$("#alertaDescarga").on("click", function () {
    alert("Pulse 'aceptar' para descargar..");    
});// Descarga cv
















$("document").ready(function () {
    $("img").addClass("bounce");
});



