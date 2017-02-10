
function escondeDiv(tipoEvento,flSituacao){
	//Esconde os eventos não marcados
        var tipoEvento;
/*      var divs = document.getElementsByTagName('fieldset');
        for(i = 0 ; i < divs.length; i++){
                if(divs[i].className=='evento') alert(divs[i] + ' classe ' + divs[i].className);
                if(!divs[i].id) continue;
                alert(divs[i].id + 'valor de i é ' + i);
        }*/
        var eventoE = document.getElementsByClassName('evento');
        var privadoE = document.getElementsByClassName('privado');
        for(i = 0; i< eventoE.length;i++){
                /*if(eventoE[i].id.match('^div\_[0-9]{1,}\_tp'+tipoEvento+'$')) eventoE[i].style.display='none';*/
                if(eventoE[i].id.match('^div\_[0-9]{1,}\_tp'+tipoEvento+'$')) validaCheck(eventoE[i],flSituacao);
        }       
        for(i = 0; i< privadoE.length;i++){
                /*if(privadoE[i].id.match('^div\_[0-9]{1,}\_tp'+tipoEvento+'$')) privadoE[i].style.display='none';*/
                if(privadoE[i].id.match('^div\_[0-9]{1,}\_tp'+tipoEvento+'$')) validaCheck(privadoE[i],flSituacao);
        }       
}
function validaCheck(elemento,flSituacao){
        if(!flSituacao) {
                elemento.style.display='none'
        } else {
                elemento.style.display='inline'
        }
}

function reduzLogo(){
        //colocada no onload para dimiuir o logo(sol) ao carregar a lista de eventos
        document.getElementsByClassName('logo')[0].style.width='80px';
        document.getElementsByClassName('logo')[0].style.height='80px';
}

