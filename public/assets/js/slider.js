

// slide show
const imgContainer = document.querySelector('.img-container');
const imgCtrlBlock = document.querySelector('.img-controls');
const imgCtrls = ['previous','next'];
const cards = document.querySelectorAll('.card');

class Carousel{

    constructor(container,items,controls){
        this.carouselContainer = container;
        this.carouselControls = controls;
        this.carouselArray = [...items];

    }
    updateGallery(){
        this.carouselArray.forEach(el => {
            el.classList.remove('card-1');
            el.classList.remove('card-2');
            el.classList.remove('card-3');
            el.classList.remove('card-4');
            el.classList.remove('card-5');
        });

        this.carouselArray.slice(0,5).forEach((el,i)=>{
            el.classList.add(`card-${i+1}`);
        });
    }

    setCurrentState(direction){
        if(direction.classList == 'img-controls-previous'){
            this.carouselArray.unshift(this.carouselArray.pop());
        }else{
            this.carouselArray.push(this.carouselArray.shift());
        }
        this.updateGallery();
    }

    setControls(){
        this.carouselControls.forEach(control =>{
            imgCtrlBlock.appendChild(document.createElement('button')).classList = `img-controls-${control}`;
            // document.querySelector(`.img-controls-${control}`).innerHTML = control;
        });
    };

    useControls(){
        const triggers = [...imgCtrlBlock.childNodes];
        triggers.forEach(control =>{
            control.addEventListener('click', e =>{
                e.preventDefault();
                this.setCurrentState(control);
            })
        })
    }
}

const explsldr = new Carousel(imgContainer,cards,imgCtrls);
explsldr.setControls();
explsldr.useControls();