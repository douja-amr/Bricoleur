const slides=document.querySelector(".slider").children;
const prev=document.querySelector(".prev");
const next=document.querySelector(".next");
const indicator=document.querySelector(".indicator");
let index=0; 


prev.addEventListener("click" ,function(){
   prevSlide()
   updateCircleIndicator ()
})

// create circle indicators
function circleIndicator(){
    for(let i=0; i< slides.length; i++){
        const div=document.createElement("div");  
        div.innerHTML=i+1;
        div.setAttribute("onclick","indicateSlide(this)")
        div.id=i; 
        if(i==0){
            div.className="active";
        }
        indicator.appendChild(div);
    }
}
circleIndicator();

function indicateSlide(element){
 index=element.id;
 changeSlide();
 updateCircleIndicator();
}


function updateCircleIndicator(){
    for(let i=0; i<indicator.children.length; i++){
        indicator.children[i].classList.remove("active");
    }
    indicator.children[index].classList.add("active");
}


function prevSlide(){
    if(index==0){
        index=slides.length-1;
    }
    else{
        index--; 
    }
    changeSlide();
}

next.addEventListener("click" ,function(){
    nextSlide()
    updateCircleIndicator()
}) 

function nextSlide(){
    if(index==slides.length-1){
        index=0;
    }
    else{
        index++;
    }
    changeSlide();
}

function changeSlide(){
        for (let i=0; i<slides.length; i++) {
            slides[i].classList.remove("active");
        }

    slides[index].classList.add("active");
}

 function autoPlay(){
     nextSlide();
     updateCircleIndicator();
 }

 let timer=setInterval(autoPlay,4000);