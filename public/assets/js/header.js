var menu = document.querySelector(".menu");
var drop = document.querySelector(".drop");
var searchBar = document.querySelector('.search-bar');
var hidenfield = document.querySelectorAll('.input');
var body = document.querySelector("body");
var city = document.querySelectorAll('.bar')[0];

menu.addEventListener("click",(e)=>{
    drop.classList.toggle('dropped');
    e.stopPropagation();
})

searchBar.addEventListener("click",function(){
    for(var i=0; i<hidenfield.length;i++){
        searchBar.classList.add('clicked');
        hidenfield[i].classList.remove('hide');
        city.classList.add("city");
    }
})

document.addEventListener('scroll',function(){
    for(var i=0; i<hidenfield.length;i++){
        hidenfield[i].classList.add('hide');
    }
    searchBar.classList.remove('clicked');
    city.classList.remove("city");
});

window.onclick = (e)=>{
    if(!e.target.matches('.menu, .icon')){
        if(drop.classList.contains('dropped')){
            drop.classList.remove('dropped');
        }
    }
    if(!e.target.matches('.search-bar, .bar, .checkout, .input')){
        for(var i=0; i<hidenfield.length;i++){
            hidenfield[i].classList.add('hide');
        }
        searchBar.classList.remove('clicked');
        city.classList.remove("city");
    }
}