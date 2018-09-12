                
                function envioFormulario() {
                    var meuNumero = "5521984623153";
                    if($(window).width() <= 700) {
                        window.location = "https://api.whatsapp.com/send?phone=" + meuNumero + "&text=Olá,%20me%20chamo%20"+$("#nome").val()+"%A0"+$("#comentario").val()+"marca%20" + $("#marca option:selected").text() + "%0AModelo%20" + $("#modelo option:selected").text() + "%0AAno%20" + $("#ano option:selected").text();
                    } else {
                        var nome = $('#nome').val();
                        var telefone = $('#tel').val();
                        var marca = $('#marca').val();
                        var modelo = $('#modelo').val();
                        var ano = $('#ano').val();
                        var mensagem = $('#comentario').val();
                        $.ajax({
                            type: "POST",
                            data: {
                                "nome":nome,
                                "telefone": telefone,
                                "marca":marca,
                                "modelo":modelo,
                                "ano": ano,
                                "mensagem":mensagem
                            },
                            url: "./sendemail/enviaremail.php",
                            success: function (response) {
                                console.log(response);
                                location.reload();
                            },
                            error: function (e) {
                                console.log("Erro: " + e);
                            }
                        });
                    }
                }

                $.get("http://fipeapi.appspot.com/api/1/carros/marcas.json", function(marcas, status) {
                    // console.log(marcas[0]);
                    
                    var tamanho = marcas.length;
        
                    for (var i = 0; i < tamanho; i++) {
                        document.getElementById("marca").innerHTML += "<option value='" + marcas[i].id + "'>" + marcas[i].name + "</option>";
                    }
                });
                $("#marca").change(function() {
                    var htmlModelo = "<option value=''>Selecione o modelo</option>";
                    $.get("http://fipeapi.appspot.com/api/1/carros/veiculos/" + $("#marca").val() + ".json", function(modelos, status) {
                        var tamanho = modelos.length;
                        for (var i = 0; i < tamanho; i++) {
                            htmlModelo += "<option value='" + modelos[i].id + "'>" + modelos[i].name + "</option>";
                        }
                        document.getElementById("modelo").innerHTML = htmlModelo;
                    });
                });
                $("#modelo").change(function() {
                    var htmlAno = "<option value=''>Selecione o ano</option>";
                    $.get("http://fipeapi.appspot.com/api/1/carros/veiculo/" + $("#marca").val() + "/" + $("#modelo").val() + ".json", function(anos, status) {
                        var tamanho = anos.length;
                        for (var i = 0; i < tamanho; i++) {
                            htmlAno += "<option value='" + anos[i].id + "'>" + anos[i].name + "</option>";
                        }
                        document.getElementById("ano").innerHTML = htmlAno;
                    });
                });