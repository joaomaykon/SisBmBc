/* 01/11/2019 01:00
Gera calendário ao abrir a pagina;
gera calendário ao selecionar uma data
css com erro de centralização
valida data vazia

*/ 
//let div3 = document.querySelector(`div#terceiradiv`)
function escolherData(){
    let Calendario = document.querySelector(`input#dtdata`)
    let div4 = document.querySelector(`div#quartadiv`)
    let dataEscolhida = new Date(Calendario.value)
    if (Calendario.value.length == 0){
        window.alert(`Data inválida`)
    }else{
        let diaEscolhido = dataEscolhida.getUTCDate()
        let mesEscolhido = dataEscolhida.getUTCMonth()+1
        let anoEscolhido = dataEscolhida.getUTCFullYear()
        //div4.innerHTML = `${diaEscolhido}, ${mesEscolhido}, ${anoEscolhido}`
        //numDiasNoMes()
        //div4.innerHTML = numDiasNoMes(anoEscolhido, mesEscolhido)
        gerarCalendario(numDiasNoMes(anoEscolhido, mesEscolhido))
        
    }    
}


let numDiasNoMes = function _numDias(Xano, Xmes){
        numDias = new Date(Xano, Xmes, 0).getDate();
  return numDias;
  }
function pegarMesAtual(){
    let dataAtual = new Date()
    let mesAtual = dataAtual.getMonth()
    let anoAtual = dataAtual.getUTCFullYear()
    numDias = new Date(anoAtual, mesAtual, 0).getDate();
    //div4.innerHTML = `Nr de dias${numDias}, mes ${mesAtual}, ano ${anoAtual}`
    gerarCalendario(numDias)
    
}

function gerarCalendario(numDias){
    let secao = document.querySelector(`section#secPcp`) 
    secao.innerHTML = ` `       
    let dia = 1
    while( dia < numDias){
        for (let i = 1; i < 8 || dia <= numDias; i++){
            let divisor = document.createElement(`div`)
            divisor.textContent = `${dia}`
            divisor.id = `div${i}`
            divisor.className = `divCalendario`
            secao.appendChild(divisor)
            dia++
            }
               
            }
            
    
}

 /*
function clicar() {
    let a = document.getElementsByClassName(`divCalendario`)
    a.innerText = 'Clicou!'
    
}
function entrar(a){
    let teste = a
    teste.innerHTML = `teste`
}
function sair(){
    a.innerText = "Saiu!"
    a.style.background = 'green'
}*/

/*function gerar(){
    for(let c = 0; c < 4; c++){
        let dia = 1
        for (let i = 0; i < 7; i++){
            let secao = document.querySelector(`section#secpcp`)
            let divisor = document.createElement(`div`)
            divisor.value = `nomeDivX`
            divisor.textContent = `${dia}`
            divisor.id = `div0`
            secao.appendChild(divisor)
            dia++
            }
    

    }


}*/