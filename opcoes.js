function atualizarOpcoes() {
  var categoriaSelect = document.getElementById('Companhia');
  var opcaoSelect = document.getElementById('Linha');
  

  // Limpar opções existentes
  opcaoSelect.innerHTML = ' ';

  // Adicionar novas opções baseadas na categoria selecionada
  if (categoriaSelect.value === 'Sião-Thur') {
    adicionarOpcao(opcaoSelect, 'Amazonas/São Camilo', 'Amazonas/São Camilo');
    adicionarOpcao(opcaoSelect, 'Fortaleza/Centro', 'Fortaleza/Centro');
    adicionarOpcao(opcaoSelect, 'Macapá/Santana(Via Fazendinha)', 'Macapá/Santana(Via Fazendinha)');
    adicionarOpcao(opcaoSelect, 'Marabaixo/Universidade', 'Marabaixo/Universidade');
    adicionarOpcao(opcaoSelect, 'Vale Verde', 'Vale Verde');
} else if (categoriaSelect.value === 'Expresso-Marco-Zero') {
    adicionarOpcao(opcaoSelect, 'Açucena/Centro', 'Açucena/Centro');
    adicionarOpcao(opcaoSelect, 'Congós/Jardim', 'Congós/Jardim');
    adicionarOpcao(opcaoSelect, 'Jardim/Centro/Zerão', 'Jardim/Centro/Zerão');
    adicionarOpcao(opcaoSelect, 'Jardim 1', 'Jardim 1');
    adicionarOpcao(opcaoSelect, 'Jardim/São Camilo', 'Jardim/São Camilo');
    adicionarOpcao(opcaoSelect, 'Univeridade/Jardim', 'Univeridade/Jardim');
    adicionarOpcao(opcaoSelect, 'Zerão/São Camilo', 'Zerão/São Camilo');
} else if (categoriaSelect.value === 'Amazontur') {
    adicionarOpcao(opcaoSelect, 'Canal do Jandia/São Camilo', 'Canal do Jandia/São Camilo');
    adicionarOpcao(opcaoSelect, 'Infraero 1/São Camilo', 'Infraero 1/São Camilo');
    adicionarOpcao(opcaoSelect, 'Pedrinhas/Novo Horizonte', 'Pedrinhas/Novo Horizonte');
    adicionarOpcao(opcaoSelect, 'Renascer/Unifap', 'Renascer/Unifap');
} else if (categoriaSelect.value === 'Capital-Morena') {
    adicionarOpcao(opcaoSelect, 'Brasil Novo/SãoCamilo', 'Brasil Novo/SãoCamilo');
    adicionarOpcao(opcaoSelect, 'Brasil Novo/Universidade', 'Brasil Novo/Universidade');
    adicionarOpcao(opcaoSelect, 'Buritizal/Sao Camilo', 'Buritizal/Sao Camilo');
    adicionarOpcao(opcaoSelect, 'Buritizal/Centro', 'Buritizal/Centro');
    adicionarOpcao(opcaoSelect, 'Goiabal/Centro', 'Goiabal/Centro');
    adicionarOpcao(opcaoSelect, 'Infraero II/Centro/Zerão', 'Infraero II/Centro/Zerão');
    adicionarOpcao(opcaoSelect, 'Infraero/Marabaixo', 'Infraero/Marabaixo');
    adicionarOpcao(opcaoSelect, 'Infraero/São Camilo', 'Infraero/São Camilo');
    adicionarOpcao(opcaoSelect, 'Macapaba/Garden', 'Macapaba/Garden');
    adicionarOpcao(opcaoSelect, 'Macapaba/São Camilo', 'Macapaba/São Camilo');
    adicionarOpcao(opcaoSelect, 'Mestre Oscar ipê/Centro', 'Mestre Oscar ipê/Centro');
}
}

function adicionarOpcao(select, valor, texto) {
  var option = document.createElement('option');
  option.value = valor;
  option.text = texto;
  select.add(option);
}
function goBack() {
  window.history.back();
}
// Chamar a função inicialmente para exibir as opções iniciais
atualizarOpcoes();
