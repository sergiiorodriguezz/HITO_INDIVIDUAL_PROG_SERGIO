<!--       Formulario de contacto -->
<style>

body {
  font-family: 'Roboto', sans-serif;
}

.content {
  background-color: #f2f2f2;
  padding: 20px;
}

h1 {
  font-family: 'Roboto', sans-serif;
  color: #333;
  text-align: center;
}

form p label {
  display: inline-block;
  width: 120px;
  font-weight: bold;
  margin-bottom: 10px;
  color: #555;
}

form {
  border: 1px solid #ccc;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
}

form p.block button[type="submit"] {
  background-color: #376c9e;
  color: #fff;
  border: none;
  padding: 10px;
  border-radius: 5px;
  cursor: pointer;
}

form p.block button[type="submit"]:hover {
  background-color: #00a2ff;
}
</style>
<section class="pagina_contacto">
        <div class="container">
          <div class="titulo1">
            <h2>Escribe tu post</h2>
          </div>
          <div class="inner-container">
            <div class="row clearfix">
  <!--       Formulario de login -->
                <div class="form-column col-md-8 col-sm-12 col-xs-12">
                  <div class="inner-column">
                    <div class="formulario_contacto">
                      <form method="post" action="../modelo/post_controler" id="formulario_contacto">
                        <div class="row clearfix">
                            <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                <input type="email" name="email" value="" placeholder="Email del Autor" required>
                                <input type="hidden" name="acction" value="registrar">
                            </div>
                            <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                <input type="text" name="titulo" value="" placeholder="Titulo" required>
                            </div>
                            <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                <input type="text" name="contenido" value="" placeholder="Post max 200 caracteres" required>
                            </div>
                            <div class="form-group col-md-6 col-sm-6 co-xs-12">
                            <input type="hidden" name="fecha"  value="<?php echo date("Y-m-d");?>"> <!-- La fecha la recoge automaticamente -->
                            </div>
                            <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                <input type="text" name="imagen" value="" placeholder="Imagen (Opcional)">
                            </div>
                            <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                <button type="submit" class="theme-btn btn-style-one">Registrarse</button>
                            </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </section>