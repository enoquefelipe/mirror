//function validaBusca() {
//    if (document.querySelector('#q').value === '') {
//        document.querySelector('#form-busca').style.background = 'red';
//        alert('não podia deixar em branco');
//             return false;
//    }
//}
//document.querySelector('#form-busca').onsubmit = validaBusca;

document.querySelector('#form-busca').onsubmit = function() {
    if (document.querySelector('#q').value === '') {
        document.querySelector('#form-busca').style.background = 'red';
        alert('Por favor preencha o campo!');
        return false;
    }
};


var banners = ["img/destaque-home.png", "img/destaque-home-2.png"];
var bannerAtual = 0;
function trocaBanner() {
    bannerAtual = (bannerAtual + 1) % 2;
    document.querySelector('.destaque img').src = banners[bannerAtual];
}

var timer = setInterval(trocaBanner, 2000);


var controle = document.querySelector('.pause');
controle.onclick = function() {
    if (this.className === 'pause') {
        clearInterval(timer);
        controle.className = 'play';
    } else {
        timer = setInterval(trocaBanner, 2000);
        controle.className = 'pause';
    }
    return false;
};




