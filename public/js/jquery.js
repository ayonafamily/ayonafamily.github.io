
    
   

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

    
    
    







