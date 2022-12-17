const autor = () => {
    let fecha = new Date();
    const author = "<a><em>Jorge Ayona</em></a>";
    const qr="<img src ='img/marketin.jpeg' width= 20% >";
    const whatsapp="Via :<a href = 'https://api.whatsapp.com/send?phone=51995121512' target='_blank'><img src ='img/whatsapp.png' width = 1.8% > Whatsapp</a>";    
    const contacto = "Mándame un <br><a class='btn btn-primary' href='https://docs.google.com/forms/d/e/1FAIpQLSdsU-p8k6VS-8zhowHnzYotVzKLQbpc_H6Fgn8dY1s04QiMEQ/viewform?usp=sf_link' target='_blank' >mensaje</a><br>";
    
       
    document.getElementById("pie").innerHTML = `${whatsapp} <br><br> ${qr} <br><br>
     ${contacto} <hr>&copy; ${fecha.getFullYear()} <br> Diseño: ${author}  `;
};
  autor();