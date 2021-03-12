<?php 
  include "./includes/head.php";
?>

<body class="fundoLogin">
  <div class="container">
    <section class="selecao">
      <form action="" class="forme row">
        <label for="email" class="form-label col-sm-12 col-md-3">E-mail:</label>
        <input type="email" name="email" class="form-control col-sm-12 col-md-9" id="email" placeholder="email@exemplo.com">

        <label for="senha" class="form-label col-sm-12 col-md-3">Senha:</label>
        <input type="password" name="senha" class="form-control col-sm-12 col-md-9" id="senha">

        <input type="submit" class="btn btn-success col-10" value="Login">
      </form>
    </section>
  </div>
</body>

</html>