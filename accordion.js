const accordionbtn = document.querySelectorAll(".accordion-header");

accordionbtn.forEach((accordion)=>{

    accordion.onclick = function() {
        this.classList.toggle("active");

        let content = this.nextElementSibling;

        if(content.style.maxHeight){
            content.style.maxHeight = null;
        }else{
            content.style.maxHeight = content.scrollHeight + "px";
        }
    }

});