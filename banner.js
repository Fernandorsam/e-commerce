
var banner = ["./img/destaque-home.png","./img/destaque-home-2.png"];
var banner_atual = 0;
var timer = setInterval(trocar_banner, 4000);
var controle = document.querySelector('.pause');

function trocar_banner(){
    banner_atual = (banner_atual + 1)%2;
    document.querySelector('.banner-destaque img').src= banner[banner_atual];

}
timer;

controle.onclick = function(){
    if(controle.className == 'pause'){
        clearInterval(timer);
        controle.className = 'play';
    }else{
        timer = setInterval(trocar_banner,4000);
        controle.className = 'pause';
    }
    return false;
}
