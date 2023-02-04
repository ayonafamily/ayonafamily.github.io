const autor = () => {
    let fecha = new Date();
    const author = "<a href='https://jorgeayona.com'><em>Jorge Ayona</em></a>";
    const whatsapp="<a class='btn btn-outline-primary m-2' href = 'https://api.whatsapp.com/send?phone=51995121512' target='_blank'><i class='fa fa-whatsapp' aria-hidden='false'></i>Whatsapp</a>";    
    const contacto = "<a class='btn btn-outline-primary m-2' href='https://docs.google.com/forms/d/e/1FAIpQLSdsU-p8k6VS-8zhowHnzYotVzKLQbpc_H6Fgn8dY1s04QiMEQ/viewform?usp=sf_link' target='_blank'><i class='fa fa-envelope' aria-hidden='false'></i> Escríbeme</a><br>";    
      //Escribir en documento 
    document.getElementById("pie").innerHTML = `${whatsapp} ${contacto} <br>&copy; ${fecha.getFullYear()} Diseño: ${author}  `;
};
  autor(); //Llamada a la función.

