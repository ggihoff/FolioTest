<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,700i|Roboto:400,700&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
    <link
      href="https://fonts.googleapis.com/css?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/styles.css" />
      <script
      src="https://kit.fontawesome.com/abec1cde80.js"
      crossorigin="anonymous"
    ></script>
    <title>Gustavo Iglesias - Portfolio</title>
  </head>
  <body id="home">
    <!--<div class="containspinner" id="spinner">
  <div class="loadingspinner">
  </div> //-->

    <header>
      <nav id="navigation">
        <div class="navCont">
          <ul id="menu">
            <!--  <div class="input">
                    <p>ES</p>
                    <input type="checkbox" id="switch" /><label for="switch">Toggle</label>
                    <p>EN</p>
                 </div>//-->
                 <a href="#home" class="scroll" onclick="hamburguer()"><li>Home</li></a> 
            <a href="#cards" class="scroll" onclick="hamburguer()"
              ><li>Ultimos proyectos</li></a
            >
            <a href="#sobremi" class="scroll" onclick="hamburguer()"><li>Sobre mi</li></a>
          </ul>
          <div class="hamburger" onclick="hamburguer()">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
          </div>
        </div>
      </nav>
      
    </header>
    <ul class="left-social">
      <a href="https://github.com/ggihoff/" target="_blank"><li><i class="icono fab fa-github"></i></li></a>
      <a href="https://www.linkedin.com/in/gustavo-iglesias-9b2ba8193/" target="_blank"> <li><i class="icono fab fa-linkedin-in"></i></li></a>
    </ul>
    <ul class="right-social">
      <a
        href="mailto:ggihoff@gmail.com"
        class="email__StyledEmailLink-sc-2epoq-1 jxlTta"
        >ggihoff@gmail.com</a
      >
    </ul>
    <main>
      <div class="textCont">
        <div class="principal">Hola! soy Gustavo.</div>
        <div class="secundario">
          Desarrollador Front end Trainee ubicado en Cordoba, Argentina.
        </div>
        <div>
          <a href="#contact" class="scroll"><button class="btn-text">Contacto</button></a>
         
        </div>
      </div>
      <div id="jacanvas"></div>

     <svg
        width="25px"
        height="50px"
        viewBox="0 0 247 390"
        version="1.1"
        xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;"
      >
        <path
          id="wheel"
          d="M123.359,79.775l0,72.843"
          style="fill:none;stroke:#ee4f4f;stroke-width:20px;"
        />
        <path
          id="mouse"
          d="M236.717,123.359c0,-62.565 -50.794,-113.359 -113.358,-113.359c-62.565,0 -113.359,50.794 -113.359,113.359l0,143.237c0,62.565 50.794,113.359 113.359,113.359c62.564,0 113.358,-50.794 113.358,-113.359l0,-143.237Z"
          style="fill:none;stroke:rgb(167, 167, 167);stroke-width:20px;"
        />
      </svg>
    </main>
    <div id="cards" class="container">
      <h1 class="title1">Proyectos</h1>
      <section class="cards">
        <article class="card card--1">
          <a href="https://covidcompare.netlify.app/" target="_blank">
          <div class="card__info">
            
            <span class="card__category">REACT JS</span>
            <h3 class="card__title"><i class="fas fa-virus"></i>Covid-19 Compare</h3>
            <p class="parrafo">Pequeña aplicacion que nos permite comparar la curva de crecimiento entre dos paises</p>
           
          </div>
        </a>
      </article>
      <article class="card card--1">
          
      
          <a href="https://checkoldestfollower.netlify.app/" target="_blank"><div class="card__info">
          <span class="card__category">REACT JS</span>
          <h3 class="card__title"><i class="fab fa-twitch"></i>Twitch first follower</h3>
          <p class="parrafo">Esta aplicacion permite encontrar los primeros seguidores de un canal</p>
       
        </div></a>
    </article>
    <article class="card card--1">
          
      <div class="card__info">
        <span class="card__category">MERN STACK</span>
        <h3 class="card__title"><i class="fas fa-tasks"></i>Project manager</h3>
        <p class="parrafo">Administrador de proyectos y tareas. Usuario unicos alojados en base de datos</p>
        
      </div>
  </article>
  <article class="card card--1">
          
  <a href="https://distracted-lichterman-fde4f6.netlify.app/" target="_blank"><div class="card__info">
      <span class="card__category">REACT, JS LOCALSTORAGE</span>
      <h3 class="card__title"><i class="fas fa-tasks"></i>Tasks manager</h3>
      <p class="parrafo">Este aplicacion permite encontrar los primeros seguidores de un canal</p>
     
    </div>
  </a>
</article>
<a href="https://github.com/ggihoff/" target="_blank"><button class="proyectos"><i class="fas fa-chevron-right"></i>Ver mis proyectos en Github</button></a>
      </section>
          
                 <section id="habs" class="habs">
      
        <h1 id="sobremi" class="title2">Sobre mi </h1>
        <div class="sobreMi">
        <div class="sobreText">Mi nombre es Gustavo Iglesias, tengo 24 años. Soy Técnico en Diseño Multimedial, actualmente enfocandome en el Desarrollo Front End y capacitandome Back End. Me gusta crear sitios y aplicaciones web, siempre cuidando el diseño. Mi principal objetivo actual es obtener experiencia laboral y así tambien mejorar mis conocimientos.
  
        </div>
        <div class="habs-container">
          <div><i class="icon devicon-html5-plain colored"></i><span>Html</span></div>
        <div><i class=" icon devicon-css3-plain colored"></i><span>CSS</span></div>
        
        <div><i class="icon devicon-javascript-plain colored"></i><span>Javascript</span></div>
        <div><i class="icon devicon-react-original"></i><span>React</span></div>
        
        <div><i class="icon devicon-mongodb-plain colored"></i><span>MongoDB</span></div>
        <div><i class="icon devicon-git-plain colored"></i><span>Git</span></div>
      </div>
  
     </section>
      <section id="contact" class="skills">
    
        <h1 class=" title3">Contacto</h1>
        <form action="contactform.php" class="form">
          <input type="text" name="name" placeholder="Nombre">
          <input type="text"  name="mail" placeholder="Email">
          <div class="message">
            
            <textarea name="message" placeholder="Mensaje" cols="30" rows="5" required></textarea>
          </div>
          <button type="submit" name="submit" class="sendForm"><i class="fas fa-chevron-right"></i>Enviar</button>
        </form>
       
     </section>
    
    

    </div>
  

    <script src="js/three.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
    <script src="js/scroll.js"></script>
    <script src="https://threejs.org/examples/js/controls/TrackballControls.js"></script>
    <script>


    if($(window).width() > 1024) {
  
      var prevScrollpos = window.pageYOffset;
      window.onscroll = function() {
      var currentScrollPos = window.pageYOffset;  
      const menu = document.getElementById("navigation");
      
        if (prevScrollpos > currentScrollPos) {
          menu.classList.add("sube")
          menu.classList.remove("baja")
        } else {
          if(currentScrollPos > 200) {
          menu.classList.add("baja")
          }
          menu.classList.remove("sube")
        }
        if(currentScrollPos == 0) {   
          menu.classList.remove("baja")
          menu.classList.remove("sube")
        }
        prevScrollpos = currentScrollPos;
      }
    }

    
      function hamburguer() {
              console.log("hola")
              if($(window).width() <= 700)
      {
        const menu = document.getElementById("menu");
              menu.classList.toggle("visible");
      } 
       
      }


      

    

      
      if (window.matchMedia("(min-width: 1500px)").matches) {
           var tamaño = 280;
      }
      else if (window.matchMedia("(min-width: 1200px)").matches) {
        var tamaño = 210;
      }
      else if (window.matchMedia("(min-width: 1000px)").matches) {
        var tamaño = 190;
      }
      else if (window.matchMedia("(min-width: 768px)").matches) {
        var tamaño = 130;
      }
      else if (window.matchMedia("(min-width: 500px)").matches) {
        var tamaño = 110;
      }
      else if (window.matchMedia("(min-width: 300px)").matches) {
        var tamaño = 90;
      }

 

      var scene = new THREE.Scene();
      var camera = new THREE.PerspectiveCamera(60, tamaño / tamaño, 0.1, 1000);
      var renderer = new THREE.WebGLRenderer({
        antialias: true
      });

      renderer.setSize(tamaño, tamaño);
      renderer.setClearColor(0x060606, 1);

      const divi = document.getElementById("jacanvas");
      divi.appendChild(renderer.domElement);
      ///////////////////////////////////////////////

      // Camera
      scene.add(camera);
      camera.position.z = 200;

      

      var pinkMat = new THREE.MeshPhongMaterial({
        color: new THREE.Color("#99080f"),
        emissive: new THREE.Color("#e30072"),
        specular: new THREE.Color("#ffe100"),
        emissiveIntensity: 0.2,
        shininess: 10,
        shading: THREE.FlatShading,
        transparent: 1,
        opacity: 1,
        pixelRatio: 1
      });


      pointLight = new THREE.PointLight(0xffffff, 0.8);
      pointLight.position.set(100, 50, 1);
      camera.add(pointLight);

 






      

      // IcoSphere -> THREE.IcosahedronGeometry(80, 1) 1-4
      
      var Ico = new THREE.Mesh(new THREE.IcosahedronGeometry(100, 1), pinkMat);
      var Ico2 = new THREE.Mesh(new THREE.IcosahedronGeometry(100, 1), pinkMat);
      Ico.rotation.z = 1;
      scene.add(Ico);
      var trackballControl = new THREE.TrackballControls(
        camera,
        renderer.domElement
      );
      trackballControl.rotateSpeed = 1.0; // need to speed it up a little
      trackballControl.noZoom = true;
      trackballControl.noPan = true;

      function update() {
        Ico.rotation.y += 1 / 100;
        Ico.rotation.x += 1 / 100;
      }

      function render() {
        trackballControl.update();
        requestAnimationFrame(render);
        renderer.render(scene, camera);
        renderer.setPixelRatio(window.devicePixelRatio);
        const canvas = renderer.domElement;
        camera.aspect = canvas.clientWidth / canvas.clientHeight;
        camera.updateProjectionMatrix();

        update();
      }

      render();
    </script>

    <script src="js/app.js"></script>
  </body>
</html>
