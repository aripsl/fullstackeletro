    function exibir_categoria(categoria) {

        let elementos = document.getElementsByClassName('boxproduto');
        console.log(elementos);
        for (var i = 0; i < elementos.length; i++) {
            console.log(elementos[i].id);
            if (categoria == elementos[i].id)
                elementos[i].style = "display:inline-block";
            else
                elementos[i].style = "display:none";
        }
    }

    function exibir_todos() {

        let elementos = document.getElementsByClassName('boxproduto');
        for (var i = 0; i < elementos.length; i++) {
            elementos[i].style = "display:inline-block";

        }
    };

    let destaque = (imagem) => {
        console.log(imagem);
        if (imagem.width == 200)
            imagem.width = 120;
        else
            imagem.width = 200;
    };