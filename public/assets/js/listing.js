
// filter popUp
var filterBox = document.querySelector('.box');
var popup = document.querySelector('.popup');
var popupclose = document.querySelector('.close');
var popupBox = document.querySelector('.popup-box');
filterBox.addEventListener('click',(e)=>{
    popup.classList.add('show-popup');
});
popupclose.addEventListener('click',(e)=>{
    popup.classList.remove('show-popup');
});

//price range section
var rangeInputs = document.querySelectorAll('.range-input input');
var progress = document.querySelector('.slider .progress');
var fieldInputs = document.querySelectorAll('.field input');
var priceGap = 50;
fieldInputs.forEach(input =>{
    input.addEventListener('input',(e)=>{
        let MinVal = parseInt(fieldInputs[0].value),
        MaxVal = parseInt(fieldInputs[1].value);
        
        if(MaxVal - MinVal >= priceGap && MaxVal <= 500 && MinVal>=10){
            if(e.target.className === "input-min"){
                rangeInputs[0].value = MinVal;
                progress.style.left = ((MinVal / rangeInputs[0].max) * 100)-1 + "%";
            }else{
                rangeInputs[1].value = MaxVal;
                progress.style.right = 100-(MaxVal / rangeInputs[1].max) * 100 + "%";
            }
        }
    })
})
rangeInputs.forEach(input =>{
    input.addEventListener('input',(e)=>{
        let MinVal = parseInt(rangeInputs[0].value),
        MaxVal = parseInt(rangeInputs[1].value);
        
        if(MaxVal - MinVal < priceGap){
            if(e.target.className === "range-min"){
                rangeInputs[0].value = MaxVal - priceGap;
            }else{
                rangeInputs[1].value = MinVal + priceGap;
            }
        }else{
            //changing inputs value
            fieldInputs[0].value = MinVal;
            fieldInputs[1].value = MaxVal;
            // getting percents
            progress.style.left = ((MinVal / rangeInputs[0].max) * 100) + "%";
            progress.style.right = 100-(MaxVal / rangeInputs[1].max) * 100 + "%";
            // console.log(((MinVal / rangeInputs[0].max) * 100) + "%")
        }
    });
});


//btn click 
var btnType = document.querySelectorAll('.type-button');
btnType.forEach(btn =>{
    btn.addEventListener('click',()=>{
        btn.classList.toggle('clicked')
    })
})

    // heart annonce
    var heart = document.querySelectorAll('.heart');
    var Fheart = document.querySelectorAll('.c-heart');
    
    if(heart !== undefined){
        for(let i=0;i<=heart.length;i++){
            heart[i].onclick = ()=>{
                heart[i].classList.toggle('fill-heart');
                Fheart[i].classList.toggle('fill-heart');
            }
            Fheart[i].onclick = ()=>{
                heart[i].classList.toggle('fill-heart');
                Fheart[i].classList.toggle('fill-heart');
            }
        };
    }


// how to create poopup
// let overlay = document.createElement('div');
    // overlay.classList.add('popup-overlay');
    // document.body.appendChild(overlay);

    // //create popup box 
    // let popupBox = document.createElement('div');
    // popupBox.classList.add('popup-box');
    // body.appendChild(popupBox);