<html>
  <head>
    <title> Pagina teste recaptcha</title>
    <script src="https://www.google.com/recaptcha/api.js"></script>
  </head>
<!-- <form action="cadastrar.php" method="post">
  <div class="g-recaptcha" data-sitekey="6LecZMsZAAAAAJMMCbfUwPn2Nr3KDpfxeZPaRtEk"></div>
  <input type="email" name="inputEmail">
  <button type="submit">Enviar</button>
</form> -->
  <body>
    <form action="cadastrar.php" method="POST">
        <div class="g-recaptcha" data-sitekey="6LecZMsZAAAAAJMMCbfUwPn2Nr3KDpfxeZPaRtEk"></div>
        <br/>
        <input type="email" name="inputEmail">
        <button type="submit">Enviar</button>
    </form>
  </body>
</html>
