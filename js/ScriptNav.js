var posicaoInicial = $('body').position().top;
$(document).scroll(function () { // oscultador de scroll
    var posicaoScroll = $(document).scrollTop(); // obtem a quantidade de scroll no momento
    //  if (posicaoInicial < posicaoScroll) $('#meuobjeto_id').animate({'opacity': 1}, 500);
    if(posicaoScroll>100){
       $('.cabecalho').css('height', "80px");
       $('.cabecalho img').css('width', "130px");  
       $('.nav-a').css('font-size', "18px"); 
       $('.cabecalho').css('box-shadow', "0px 4px 13px -2px rgba(0,0,0,0.75)");
       $('.barraa').css('margin-top', "1541px");  
       

    }
    else{
      $('.cabecalho').css('height', "110px");
       $('.cabecalho img').css('width', "170px");
       $('.nav-a').css('font-size', "20px");  
       $('.cabecalho').css('box-shadow', "");
       $('.barraa').css('margin-top', "1560px");  


    }
});