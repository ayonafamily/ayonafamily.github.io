var creditos = new Object();
creditos = {
autor: "Jorge Ayona",
empresa: "Freelance",
fecha: new Date(),
};

const autor = (creditos) =>{

  document.getElementById("pie").innerHTML =` &copy; ${creditos.fecha.getFullYear()} ${creditos.empresa} <br> ${creditos.autor`};
}

autor(creditos);