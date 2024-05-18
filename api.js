let curso = document.querySelector('#curso');
let turma = document.querySelector('#turma');

curso.addEventListener('change', function(){
    BuscarTurmas(this.value);
});

function BuscarTurmas(curso) {
    fetch('ajax.php?turmas='+curso)
    .then(function(retorno) {
        return retorno.text();
    })
    .then(function(texto) {
        turma.innerHTML = texto;
    })
    .catch(function() {
        console.log("Error");
    })
}

let f1 = document.querySelector('#cadastrarAluno');

f1.addEventListener('submit', function(event) {
    event.preventDefault();

    let formData = new FormData(this);

    fetch('ajax.php', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        return response.text();
    })
    .then(mensagem => {
        carregarAlunos(turma.value);
        alert(mensagem); // Exibe a resposta do servidor
    });
});

carregarAlunos("");

function carregarAlunos(turma){
    fetch('ajax.php?alunos='+turma)
    .then(response => {
        return response.text();
    })
    .then(retorno => {
        tb_alunos.innerHTML = retorno;
    })
}