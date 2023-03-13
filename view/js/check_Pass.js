// $(document).ready(function(){
//     //Anime plusieurs propriétés en même temps
//     $("button").click(function(){
//         $("p").css( "background-color","red" );
//     });
// });

// const btn=document.getElementById("but");

// btn.addEventListener('click',event=>{
//     event.preventDefault();
//     // alert("samba");
// })


// verfication si les deux mot de passe sont identiques
const newPass = document.getElementById("floatingInput1");
const confPass = document.getElementById("floatingInput2");
const but = document.getElementById("but_new_pass");
const er = document.getElementById("error");

confPass.addEventListener('input', () => {
    if (newPass.value != confPass.value) {
        er.innerText = "mot de passe non identique.";
        er.style.color = "red";
        er.style.textAlign = "center";
    }
    if (confPass.value.length > newPass.value.length) {
        er.innerText = "mot de passe non identique.";
        er.style.color = "red";
        er.style.textAlign = "center";
        er.style.display = "block"
        but.setAttribute("disabled", "")
    }
    if (newPass.value == confPass.value) {
        er.style.display = "none"
        but.removeAttribute("disabled")
    }

})
newPass.addEventListener('input', () => {
    if (confPass.value != "") {
        if (newPass.value != confPass.value) {
            er.innerText = "mot de passe non identique.";
            er.style.color = "red";
            er.style.textAlign = "center";
            er.style.display = "block"
            but.setAttribute("disabled", "")
        } else {
            er.style.display = "none"
            but.removeAttribute("disabled")
        }
    }
})