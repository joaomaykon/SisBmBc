const controle = (metodo, id) => console.log(metodo, id); // só para o exemplo

function deletarTudo() {
  var lista = document.querySelectorAll(`#lista div`);
  lista.forEach(el => controle(`adicionar`, el.id));
};


deletarTudo();