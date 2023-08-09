const buttonOpen = document.querySelector('.button');
document.addEventListener('DOMContentLoaded' , function(){
    buttonOpen.style.display = 'block';
    
    const cover = document.querySelector('.cover')
    const container = document.querySelector('.container');
    const music = document.querySelector('audio');
    const form = document.querySelector('.form');
    const formStore = document.querySelector('.formStore');
    const inputForm = document.querySelector('.inputForm');
    const select = document.querySelector('#status');
    const buttonSend = document.querySelector('.buttonSubmit');
    
    $('.carousel').slick({
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        prevArrow: '',
        nextArrow: '',
        dots:true,
        infinite: true,
        adaptiveHeight: true
      });
    
    let fullUrl = window.location;
    let objectUrl = new URL(fullUrl);
    let domain = objectUrl.protocol + '//' + objectUrl.host;
    
    let pathName = objectUrl.pathname;
    let slug = pathName.substring(1); 
    
    buttonOpen.addEventListener('click' , ()=> {
        cover.style.opacity = 0 ;
        container.style.display = 'block';
        AOS.init();
        music.play();
        setTimeout(()=>cover.style.display = 'none' , 1000)
    })
    
    const controllerAudio = document.querySelector('.controllerAudio');
    controllerAudio.addEventListener('click' , ()=> {
        if(music.paused) {
            controllerAudio.src = `${domain}/storage/svg/luxus/pause.svg`
            music.play()
        } else {
            controllerAudio.src = `${domain}/storage/svg/luxus/play.svg`
            music.pause()        
        }
    })
    
    const envelope = document.querySelector('img.envelope');
    const modalGift = document.querySelector('.modalGift');
    envelope.addEventListener('click' , function() {
        modalGift.style.display = 'flex';
    });
    
    window.onclick = function() {
        if (event.target == modalGift) {
           modalGift.style.display = "none";
        }   
    ;}
    
    const buttonClose = document.querySelector('.buttonClose');
    buttonClose.addEventListener('click' , function() {
        modalGift.style.display = 'none';
    });
    
    const copyNumber = document.querySelector('.copyNumber');
    copyNumber.addEventListener('click',function() {
        const noRek = document.querySelector('.noRek');
        navigator.clipboard.writeText(noRek.textContent)
    })
    
    buttonSend.addEventListener('click' , function() {
        if(document.querySelector('.cardReply')){
            document.querySelector('.cardReply').remove();
            select.style.display ='block';
        }
    })
    
    //replyButtonHandler
    
        const replyButton = document.querySelectorAll('.replyButton');
        replyButton.forEach(button => {
            button.addEventListener('click' , function() {
                const name = button.dataset.name;
                const body = button.dataset.body;
                const id = button.dataset.idreply;
    
                if(document.querySelector('.cardReply')){
                    document.querySelector('.cardReply').remove();
                    Livewire.emit("resetInput")
                }
                
                select.style.display ='none';
                
                let cardReply = document.createElement('div');
                cardReply.classList.add('cardReply');
    
                let nameReply = document.createElement('div');
                nameReply.classList.add('nameReply');
                nameReply.innerHTML = name;
    
                let bodyReply = document.createElement('div');
                bodyReply.classList.add('bodyReply');
                bodyReply.innerHTML = body;
                
                cardReply.appendChild(nameReply);
                cardReply.appendChild(bodyReply);
                
                Livewire.emit("setParentId",id)
    
                inputForm.insertBefore(cardReply,formStore);
    
                form.scrollIntoView({ behavior: "smooth" });
    
            })
        });
    
    //cancelReplyHandler
    
    const handleEscape = (event) => {
        if(event.key === 'Escape') {
            cancelReply();
        }
    }
    
    const cancelReply = () => {
        if(document.querySelector('.cardReply')){
            document.querySelector('.cardReply').remove()
            select.style.display = 'block'
        }
        Livewire.emit("resetInput");
    }
    
    document.addEventListener('keydown', handleEscape);
})
