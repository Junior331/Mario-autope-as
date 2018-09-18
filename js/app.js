var imageList = ["cofap-min", "logo-nakata-min", "logoa-min", "fabrini-min", "Sem-Título--min", "axios-min", "monroe-min", "metalleve-min", "skf-min", "nkg-min", "tecfil-min", "shell-min", "gates-min", "cral-min", "moura-min", "visconde-min", "schadek-min", "boch-min", "trw-min", "havoline-min", "lubrax-min", "petronas-min", "ipiranga-min", "fte-min", "valeo-min", "sachs-min", "luk-min", "siemens-min", "continental-min", "nytron-min", "ima-min", "bfx-min", "cartego-min", "taranto-min", "sabo-min", "ate-min", "controil-min", "frasle-min", "hieprfreios-min", "sampel-min", "Brosol-min", "indisa-min", "magneti-min"];

var imageListHtml = gerarImageListHtml(imageList);

document.querySelector("#carousel-img").innerHTML = imageListHtml;

function gerarImageListHtml(lista) {
    var listaHtml = "";
    for (i = 0; i < lista.length; i++) {
        listaHtml += "<img src='./img/imgm/" + lista[i] + ".png' alt=''>";
    }
    return listaHtml;
}

var owl = $('.owl-carousel');
owl.owlCarousel({
    items: 9,
    lazyLoad: true,
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 1000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 5,
            nav: false,
        },
        600: {
            items: 7,
            nav: false,
        },
        1000: {
            items: 9,
            nav: false,
            loop: true,
        }
    }
});
