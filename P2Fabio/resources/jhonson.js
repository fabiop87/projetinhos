
function pedirConfirmacao() {
    if (confirm("Tem certeza que deseja fazer isso ?")) {
      return true; // o formulário será enviado para o arquivo PHP
    } else {
      return false; // o formulário não será enviado
    }
  }
    