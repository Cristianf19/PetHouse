<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/styles.css">
    <title>Productos</title>
</head>
<body>
    <!------------------------------------- NAVBAR ----------------------------------->
    
    <!--Navbar-->
    <div class=" navbar-fixed">
      <nav>
        <div class="nav-wrapper" style="background-color: #49C7AB;">
          <a href="index.html" class="brand-logo"><img src="img/logo.png" style="height: 4rem; height: 4rem; padding-left: 1rem;"></a>
          <a href="" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="index.html">Inicio</a></li>
            <li><a href="quienesSomos.html">¿Quienes Somos?</a></li>
            <li><a href="productos.php">Productos</a></li>
            <li><a href="contactenos.html">Contactenos</a></li>
            <li>
              <button data-target="modal1" class="btn waves-effect waves-light modal-trigger" type="submit" name="action" style="margin: 0rem 2rem 0rem 1rem;">
                iniciar sesion
              </button>
            </li>
            
          </ul>
        </div>
      </nav>
    </div>
    <!--Navbar mobile-->
      <ul class="sidenav" id="mobile-demo">
        <li>
          <div class="user-view">
            <div class="background">
              <img src="img/fondo-sidenav-blue.png">
            </div>
            <a href="#user"><img class="circle" src="img/perro-asomao.jpg"></a>
            <a href="#name"><span class="white-text name">John Doe</span></a>
            <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
          </div>
        </li>
        <li><a href="index.html">Inicio</a></li>
        <li><a href="quienesSomos.html">¿Quienes Somos?</a></li>
        <li><a href="productos.php">Productos</a></li>
        <li><a href="contactenos.html">Contactenos</a></li>
        <li>
          <button data-target="modal1" class="btn waves-effect waves-light modal-trigger" type="submit" name="action" style="margin: 0rem 2rem 0rem 1rem;">
            iniciar sesion
          </button>
        </li>
      </ul>
      
    <!------------------------------------------------------------------------------------------------------->
    <!-- ----------------------------------- MODAL LOGIN ----------------------------------->
  <!-- Inicio de sesion -->
  <div id="modal1" class="modal col s6" style=" border: 0.2rem solid #49C7AB; border-radius: 5%;background-color: #e0f4f4; padding: 2rem;">
    <div class="modal-content">

      <h4 class="center">Inicio de sesion</h4><br>

      <div class="row">
        <div class="col s3"></div>
        <form class="col s6">
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">account_circle</i>
              <input id="icon_prefix" type="text" class="validate">
              <label for="icon_prefix">First Name</label>
            </div>
            <div class="input-field col s12">
              <i class="material-icons prefix">phone</i>
              <input id="icon_telephone" type="tel" class="validate">
              <label for="icon_telephone">Telephone</label>
            </div>
            <div class="input-field center col s12">
              <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                <i class="material-icons right"></i>
              </button>
            </div>
          </div>
        </form>
        <div class="col s3"></div>
      </div>


    </div>
    <div class="modal-footer" style="background-color: #e0f4f4;">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Volver</a>
    </div>
  </div>
<!-------------------------------------------------------------------------------------------------->
    
    <!------------------------------------- Tabla Productos ----------------------------------->
    <h1 class="center-align">Productos</h1>
    <div class="row">
        <div class="col s3"></div>
        <div class="col s6" style="background-color: #49c7ac2d;">
            <table class="highlight">
                <thead>
                    <tr>
                        <td>Codigo</td>
                        <td>Nombre</td>
                        <td>Precio</td>
                        <td>Existencias</td>
                        <td>Iva</td>
                        <td>Proveedor id</td>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        include('php/conexionDB.php');
                        $sql = "SELECT * FROM producto";
                        $result = mysqli_query($conexion,$sql);
                        while ($mostrar = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $mostrar['codigo_producto']?></td>
                        <td><?php echo $mostrar['nombre_producto']?></td>
                        <td><?php echo $mostrar['precio_unitario_producto']?></td>
                        <td><?php echo $mostrar['existencia_producto']?></td>
                        <td><?php echo $mostrar['iva_producto']?></td>
                        <td><?php echo $mostrar['id_proveedor_producto']?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="col s3"></div>
    </div>
<!------------------------------------------------------------------------------------------------------->
    <br><br>
  <!-------------------------------------- FOOTER ----------------------------------->
  <footer class="page-footer" style="background-color: #49C7AB;">
    <div class="container">
      <div class="row">
        <div class="col s4">
          <img src="img/logo_gris.png" style="width: 12rem;height:8rem">
        </div>
        <div class="col s4">
          <h5 class="white-text">Enlaces</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="index.html">Inicio</a></li>
            <li><a class="grey-text text-lighten-3" href="quienesSomos.html">¿Quienes Somos?</a></li>
            <li><a class="grey-text text-lighten-3" href="productos.html">Productos</a></li>
            <li><a class="grey-text text-lighten-3" href="contactenos.html">Contactenos</a></li>
          </ul>
        </div>
        <div class="col s4">
            <h5>Siguenos en nuestras redes</h5>
            <img src="img/3721672-instagram_108066.png" style="width: 2rem;height:2rem;">
            <img src="img/social_facebook_box_blue_256_30649.png" style="width: 2rem;height:2rem;">
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      © 2022 Copyright
      <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
      </div>
    </div>
  </footer>
  <!-------------------------------------------------------------------------------------->
    <!-- ----------------------------------- SCRIPT ----------------------------------->
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems);
      });
    
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.modal');
            var instances = M.Modal.init(elems);
        });
    
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.parallax');
            var instances = M.Parallax.init(elems);
        });
    
      document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.carousel');
        var instances = M.Carousel.init(elems);
      });

      var instance = M.Carousel.init({
        fullWidth: true,
        indicators: true
      });
    </script>
<!-------------------------------------------------------------------------------------->
</body>
</html>