//  Modal
let modal =document.querySelector(".modal");
const btnCloseModal = document.querySelector('.exit');
const btnOpenModal = document.querySelector('.show-modal');

btnOpenModal.addEventListener('click', function(){
    console.log("Button is clicked")
    modal.classList.remove("hidden");
})

btnCloseModal.addEventListener('click', function(){
    console.log("Button is clicked");
    modal.classList.add("hidden");
})


//  For cards Modal
let mymodal =document.querySelector(".mymodal");
const btnOpenCardModal = document.querySelectorAll('.show');
const btnCloseCardModal = document.querySelector('.cardexit');
console.log(btnOpenCardModal)

for(let i = 0; i < btnOpenCardModal.length; i++){
    btnOpenCardModal[i].addEventListener('click', function(){
        console.log("Button is clicked")
        mymodal.classList.remove("myhidden");
        var id = this.value;
        console.log(id)
        
        var name= document.querySelector("#name"+id).textContent;
        var signature = document.querySelector("#signature"+id).textContent;
        var application = document.querySelector("#applications"+id).textContent;
        var longIntro = document.querySelector("#long-intro"+id).textContent;
        var website = document.querySelector("#website"+id).textContent;
        str = "Go to website";
        var link = str.link(website)
        document.querySelector("#vname").textContent = name;
        document.querySelector("#long-introv").textContent= longIntro;
        document.querySelector("#validate-signature").textContent= signature;
        document.querySelector("#applications-validate").textContent= application;
        document.getElementById("link").innerHTML = link;    
    })
    btnCloseCardModal.addEventListener('click', function(){
        console.log("Button is clicked");
        mymodal.classList.add("myhidden");
    })
}



//  For cards grade9 Modal
let grademodal =document.querySelector(".grademodal");
const btnOpenCardModalG = document.querySelectorAll('.showgrade');
const btnCloseCardModalG = document.querySelector('.gradeexit');
console.log(btnOpenCardModal)

for(let i = 0; i < btnOpenCardModalG.length; i++){
    btnOpenCardModalG[i].addEventListener('click', function(){
        console.log("Button is clicked")
        grademodal.classList.remove("myhiddenG");
        var id = this.value;
        console.log(id)
        
        var name= document.querySelector("#name"+id).textContent;
        var signature = document.querySelector("#signature"+id).textContent;
        var longIntro = document.querySelector("#long-intro"+id).textContent;
        var website = document.querySelector("#website"+id).textContent;
        str = "Click for more";
        var link = str.link(website)
        document.querySelector("#vname").textContent = name;
        document.querySelector("#long-introv").textContent= longIntro;
        document.querySelector("#validate-signature").textContent= signature;
        document.getElementById("link").innerHTML = link;    
    })
    btnCloseCardModalG.addEventListener('click', function(){
        console.log("Button is clicked");
        grademodal.classList.add("myhiddenG");
    })
}