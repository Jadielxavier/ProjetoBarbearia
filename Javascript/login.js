const btnLogar = document.querySelector('#btn-entrar')
const inputLogin = document.querySelector('#input-usuario')
const inputSenha = document.querySelector('#input-senha')



btnLogar.addEventListener('click', function(){

    

    const inputLoginValor = inputLogin.value
    const inputSenhaValor = inputSenha.value

    if (inputLoginValor == 'BarbeariaHair+' && inputSenhaValor == 'SenhaDono') {
        alert('Seja muito bem vindo!')
        window.location.replace('tabela.php'); 
        
    } else {
        alert('Dados incorretos!')
    }


})

inputLogin.addEventListener('keyup', function(event){

    if(event.keyCode === 13){

        const inputLoginValor = inputLogin.value
        const inputSenhaValor = inputSenha.value

        if (inputLoginValor == 'BarbeariaHair+' && inputSenhaValor == 'SenhaDono') {
            alert('Seja muito bem vindo!')   
            window.location.replace('tabela.php');  
        } else {
            alert('Dados incorretos!')
        }
    }


})

inputSenha.addEventListener('keyup', function(event){

    if(event.keyCode === 13){

        const inputLoginValor = inputLogin.value
        const inputSenhaValor = inputSenha.value

        if (inputLoginValor == 'BarbeariaHair+' && inputSenhaValor == 'SenhaDono') {
            alert('Seja muito bem vindo!')
            window.location.replace('tabela.php');    
        } else {
            alert('dados incorretos')
        }
    }


})