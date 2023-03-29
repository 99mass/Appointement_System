// ajout de nouveau input sur le formulaire de creation de rendez-vous
function addInputs() {             
    const divs=document.querySelectorAll('.autres')
    for (var i = 0; i < divs.length/divs.length; i++) {
        divs[i].classList.remove('autres')
      }
}

// ajout de nouveau input sur le formulaire de modification de rendez-vous
function addInput2(id) {     
    const div=document.querySelectorAll(`.autre${id}`);
    diviseur=div.length>5 ? div.length/2 : div.length;
    for (var i = 0; i < diviseur; i++) {
        div[i].classList.remove('autres');
      }
   
}



