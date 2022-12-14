<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icon2.png">
    <link rel="stylesheet" href="adidas.css">
    <title>Inicio</title>
</head>
<body>
        <div class="contenedor">
          <header>

            <!-- Aqui empieza el carrusel -->
            
            <div class="slideshow-container">

              <div class="mySlides fade" align="center">
                <div class="numbertext">1 / 3</div>
                <img src="images/img1.webp">
                <div class="text">Producto 1</div>
              </div>
              
              <div class="mySlides fade" align="center">
                <div class="numbertext">2 / 3</div>
                <img src="images/img2.jpg">
                <div class="text">Producto 2</div>
              </div>
              
              <div class="mySlides fade" align="center">
                <div class="numbertext">3 / 3</div>
                <img src="images/img3.webp">
                <div class="text">Producto 3</div>
              </div>
              
              <a class="prev" onclick="plusSlides(-1)">❮</a>
              <a class="next" onclick="plusSlides(1)">❯</a>
              
              </div>
              <br>
              
              <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
              </div>
              
              <script>
              let slideIndex = 1;
              showSlides(slideIndex);
              
              function plusSlides(n) {
                showSlides(slideIndex += n);
              }
              
              function currentSlide(n) {
                showSlides(slideIndex = n);
              }
              
              function showSlides(n) {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                if (n > slides.length) {slideIndex = 1}    
                if (n < 1) {slideIndex = slides.length}
                for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";  
                }
                for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
              }
              </script>
          </header>
          <section class="barra">
            <!-- Aqui empeza la barra de navegación -->
            <div class="navbar">
              <a class="active" href="adidas.php">Inicio</a> 
              <a href="productos.php">Productos / Servicios</a> 
              <a href="tiendas.php">Tiendas</a> 
              <a href="contactenos.php">Contáctenos</a>
              <a href="index.php">Inicio de Sesión</a>
            </div>
          </section>
          <section class="titulo">
            Ofertas del Mes
          </section>
          <section class="producto1"><img src="images/produc1.jpg" onclick="myFunction(this);"></section>
          <section class="producto2"><img src="images/produc2.webp" onclick="myFunction(this);"></section>
          <section class="producto3"><img src="images/produc3.webp" onclick="myFunction(this);"></section>
          <section class="producto4"><img src="images/produc4.jpg" onclick="myFunction(this);"></section>
          <footer>
            <p class="pbx"><b>PBX. 20222004</b></p>
            <p class="direccion"><b>Dirección: Liceo Canadiense</b></p>
            <p class="carne"><b>Carne: 2021-40132</b></p>
            <p class="nombre"><b>Nombre: Elder Alejandro Iboy Montenegro</b></p>
          </footer>
        </div>

        <!--Proceso extra-->

        <div class="container">
          <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
          <img id="expandedImg" style="width:100%">
          <div id="imgtext"></div>
        </div>
        
        <script>
        function myFunction(imgs) {
          var expandImg = document.getElementById("expandedImg");
          var imgText = document.getElementById("imgtext");
          expandImg.src = imgs.src;
          imgText.innerHTML = imgs.alt;
          expandImg.parentElement.style.display = "block";
        }
        </script>
</body>
</html>