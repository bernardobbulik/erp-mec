// Loading DOM

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
    alert('Error while signing in. Please check your credentials.');
    inputEmail.value = ``;
    inputSenha.value = ``;
    inputEmail.focus();
}

console.log('hello');

(function (){
    console.log('JS loaded');

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
                alert('Login successful');
                window.location.href = './home.php'
            });
        });
    } else {
        console.log('Form not found');
    }
})();
