const autor = () => {
    let fecha = new Date();
    const author = "<a href='mailto:ayonafamily@gmail.com' target='_blank' title='email de Jorge Ayona'><em>Jorge Ayona</em></a>";
    const whatsapp="<a href = 'https://api.whatsapp.com/send?phone=51963837204' target='_blank'><img src ='img/whatsapp.png' width = 1.8% > Whatsapp</a>";    
    
    document.getElementById("pie").innerHTML = `&copy; ${fecha.getFullYear()}  <br> Diseño: ${author} <br> ${whatsapp} `;
}

  autor();