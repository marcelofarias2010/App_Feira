<?php
include "./includes/head.php";
?>

<body>
  <div id="fundo-externo">
    <div class="cor"></div>
    <div id="fundo">
      <img src="./img/feira.jpg" />
    </div>
  </div>
  <div class="container">
    <section class="selecao row">
      <form action="" class="forme row col-11 col-sm-10 col-md-7 col-lg-6">
        <h2 class="col-12 text-light d-flex justify-content-center">Login</h2>

        <label for="email" class="form-label col-sm-12 col-md-3 col-lg-2 text-light">E-mail:</label>
        <input type="email" name="email" class="form-control col-sm-12 col-md-9 col-lg-10" id="email" placeholder="email@exemplo.com">

        <label for="senha" class="form-label col-sm-12 col-md-3 col-lg-2 text-light">Senha:</label>
        <input type="password" name="senha" class="form-control col-sm-12 col-md-9 col-lg-10" id="senha">

        <input type="submit" class="btn btn-success col-12" value="Login">
      </form>
    </section>
  </div>
</body>

</html>