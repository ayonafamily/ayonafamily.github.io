const autor = () => {
    let fecha = new Date();
    const author = "<a href='mailto:ayonafamily@gmail.com' target='_blank' title='email de Jorge Ayona'><em>Jorge Ayona</em></a>";
    const empresa="Freelancer";    
    
    document.getElementById("pie").innerHTML = `&copy; ${fecha.getFullYear()}  <br> Diseño: ${author}  `;
}

  autor();