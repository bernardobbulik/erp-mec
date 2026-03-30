// Carregando DOM

const formLogin  = document.querySelector('#form-login');
const inputEmail = document.querySelector('#inpEmail');
const inputSenha = document.querySelector('#inpSenha');



function connect(formData){
    return fetch('../../src/api/verificaLogin.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json());

}


function error(response){
    alert(`ERRO: ${response}`);
    inputEmail.value = ``;
    inputSenha.value = ``;
    inputEmail.focus();
}

function success(response){

}

console.log(`ola`);

(function (){
    console.log('JS carregado');

    console.log('formLogin:', formLogin);

    if(formLogin){
        formLogin.addEventListener('submit', async function (event) {
            event.preventDefault();
            console.log('Submit interceptado');

            let formData = new FormData(this);

            await connect(formData).then((response) => {
                if(!response.success){
                    error(response.mensagem);
                }
                window.location.href = '../views/home.php'
            });
        });
    } else {
        console.log('Form não encontrado');
    }
})();