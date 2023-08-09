let ImgInpt = document.querySelector('.imageInput')
let select = document.querySelector('select[name=model]');
select.addEventListener('change', function() {
    if(select.value == 'simplify'){
        if(document.querySelector('.imageInput')) {
            document.querySelector('.imageInput').remove();
        }
    } else if(select.value == 'javva') {
        let form = document.getElementById('post');
        let h2 = document.querySelector('.priaHeader');
        form.insertBefore(ImgInpt,h2)
    }
});
