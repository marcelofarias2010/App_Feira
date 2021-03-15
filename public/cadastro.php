<?php
include "./includes/head.php";
?>

<script type="text/javascript">
  function validar() {
    let email = form.email.value;
    let senha = form.senha.value;
    let rep_senha = form.rep_senha.value;

    if (senha.length < 8) {
      alert('A senha deve ter no mínimo 8 caracteres');
      form.senha.focus();
      return false;
    }

    if (senha != rep_senha) {
      alert('Senhas diferentes');
      form.senha.focus();
      return false;
    }
  }
</script>

<body>
  <div id="fundo-externo">
    <div class="cor"></div>
    <div id="fundo">
      <img src="./img/feira.jpg" />
    </div>
  </div>
  <div class="container">
    <section class="selecao row">
      <form action="" class="formec row col-11 col-sm-10 col-md-7 col-lg-6">
        <h2 class="col-12 text-light d-flex justify-content-center">Login</h2>
        <p class="col-12 text-light d-flex justify-content-center">Cadastro apenas para produtores/feirantes</p>

        <label for="nome" class="form-label col-sm-12 col-md-3 text-light">Nome:</label>
        <input type="text" name="nome" class="form-control col-sm-12 col-md-9" id="nome" placeholder="José" required>

        <label for="sobrenome" class="form-label col-sm-12 col-md-3 text-light">Sobrenome:</label>
        <input type="text" name="sobrenome" class="form-control col-sm-12 col-md-9" id="sobrenome" placeholder="da Silva">

        <label for="nicho" class="form-label col-sm-12 col-md-3 text-light">Nicho de atuação:</label>
        <select type="text" name="nicho" class="form-control col-sm-12 col-md-9" id="nicho" required>
          <option value="Orgânico">Orgânico</option>
          <option value="Bebidas">Bebidas</option>
          <option value="Laticínios">Laticínios</option>
        </select>

        <label for="cpf" class="form-label col-sm-12 col-md-3 text-light">CPF:</label>
        <input type="number" name="cpf" class="form-control col-sm-12 col-md-9" id="cpf" placeholder="Somente números" required>

        <label for="endereco" class="form-label col-sm-12 col-md-3 text-light">Endereço:</label>
        <input type="text" name="endereco" class="form-control col-sm-12 col-md-9 " id="endereco" placeholder="quadra 1 conjunto 1 lote 1 casa 1" required>

        <label for="telefone" class="form-label col-sm-12 col-md-3 text-light">Telefone:</label>
        <input type="tel" name="telefone" class="form-control col-sm-12 col-md-9" id="telefone" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" placeholder="99 98888-7777" required>


        <label for="email" class="form-label col-sm-12 col-md-3 text-light">E-mail:</label>
        <input type="email" name="email" class="form-control col-sm-12 col-md-9" id="email" placeholder="email@exemplo.com" required>

        <label for="senha" class="form-label col-sm-12 col-md-3 text-light">Senha:</label>
        <input type="password" name="senha" class="form-control col-sm-12 col-md-9" id="senha" placeholder="A senha deve ter no mínimo 8 caracteres" required>

        <label for="rep_senha" class="form-label col-sm-12 col-md-3 text-light">Repita a senha:</label>
        <input type="password" name="rep_senha" class="form-control col-sm-12 col-md-9" id="rep_senha" placeholder="Confirme sua senha" required>


        <input type="submit" class="btn btn-warning col-12" onclick="return validar()" value="Cadastrar">
      </form>
    </section>
  </div>
</body>

</html>