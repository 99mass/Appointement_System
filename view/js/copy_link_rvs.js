const lien = document.getElementById("lien")
const iconCopy = document.getElementById("iconCopy")
const copy1 = document.getElementById("copy1")
const copy2 = document.getElementById("copy2")
const content_lien = document.getElementById("content-lien")
lien.innerText = window.location.href

iconCopy.addEventListener("mouseover", () => {
    copy1.style.display = "block"
    iconCopy.addEventListener("click", () => {
        copy1.style.display = "none"
        copy2.style.display = "block"
        setTimeout(() => {
            copy2.style.display = "none"
        }, 1000)

    });

    content_lien.style.paddingBottom = "0rem"
});
iconCopy.addEventListener("mouseout", () => {
    copy1.style.display = "none"
});

iconCopy.addEventListener("click", () => {
    const textarea = document.createElement("textarea");
    const contlien = lien.innerText;
    // Si aucun mot de passe n'a été généré, ne rien faire
    if (!contlien) {
        return;
    }
    // // Copier le mot de passe dans le presse-papiers
    textarea.value = contlien;
    document.body.appendChild(textarea);
    textarea.select();
    document.execCommand("copy");
    textarea.remove();

});