

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif}
* {box-sizing: border-box;}

.slideshow-container {
  max-width: 5000px;
  position: relative;
  margin: auto;
}

.bg-img {
  /* The image used */
  background-image: url("/image/image1.jpg");

  min-height: 1000px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

  /* Fade animation */
  animation-name: fade;
  animation-duration: 1.5s;

  /* Positioning the text */
  position: relative;
}

.description {
  text-align: center;
  padding: 20px;
  position: absolute;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
  font-size: 30px;

  color: white;
}

h1 {
  text-align: center;
  text-transform: uppercase;
  color: #4CAF50;
}

p {
  text-indent: 50px;
  text-align: justify;
  letter-spacing: 3px;
}

a {
  text-decoration: none;
  color: #008CBA;
}

/* Styles pour le conteneur des cartes */
.card-container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
   margin-top: 50px;
}

/* Styles pour les cartes */
.card {
  width: 400px;
  border: 1px solid #ccc;
  border-radius: 8px;
  overflow: hidden;
  margin: 20px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Styles pour les images dans les cartes */
.card img {
  width: 100%;
  height: auto;
  display: block;

}

/* Styles pour le texte dans les cartes */
.card-content {
  padding: 20px;
  text-align: center;
}

.card-title {
  font-size: 1.2em;
  margin-bottom: 10px;
}

.card-description {
  font-size: 1em;
  color: #555;
}

/* Transition pour agrandir la carte au survol */
.card:hover {
  transform: scale(1.1);
}


</style>
</head>
<body>
<div>@include('navbar')</div>

<div class="slideshow-container">
  <!-- bg-img -->
  <div class="bg-img">
    <div class="description"></div>
  </div>

  <div class="card-container">
  <!-- Première carte -->
  <div class="card">
    <img src="/image/image4.jpg" alt="Produit 1">
    <div class="card-content">
      <h2 class="card-title">PATATE</h2>
      <p class="card-description">5000FCFA</p>
    </div>
  </div>

  <!-- Deuxième carte -->
  <div class="card">
    <img src="/image/image5.jpg" alt="Produit 2">
    <div class="card-content">
      <h2 class="card-title">CAROTTE</h2>
      <p class="card-description">2000FCA</p>
    </div>
  </div>

  <!-- Troisième carte -->
  <div class="card">
    <img src="/image/image6.jpg" alt="Produit 3">
    <div class="card-content">
      <h2 class="card-title">BANANE</h2>
      <p class="card-description">2000FCFA</p>
    </div>
  </div>

</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var images = ["/image/image1.jpg", "/image/image2.jpg", "/image/image3.jpg"];
  var texts = [
    {
      title: "Qui sommes-nous?<br>Notre histoire",
      description: "AgriBros Market est une plate-forme digitale spécialisée dans la promotion et la commercialisation des produits agricoles, permettant de connecter les exploitations aux marchés et de valoriser les produits locaux sur le plan international. Plateforme web, mobile et SMS (USSD) connectant les agriculteurs et producteurs locaux aux acheteurs potentiels et consommateurs finaux sur un marché numérique et permettant le financement participatif des projets dans le domaine agricole et agro-alimentaire."
    },
    {
      title: "Nouvelle image, nouveau titre",
      description: "Description pour la deuxième image."
    },
    {
      title: "Encore un titre différent",
      description: "Description pour la troisième image."
    }
  ];
  var bgImg = document.querySelector(".bg-img");
  var description = bgImg.querySelector(".description");
  slideIndex++;
  if (slideIndex > images.length) {slideIndex = 1}
  bgImg.style.backgroundImage = "url('" + images[slideIndex-1] + "')";
  description.innerHTML = "<h1>" + texts[slideIndex-1].title + "</h1><p>" + texts[slideIndex-1].description + "</p>";
  setTimeout(showSlides, 2000);
}
</script>
</body>
</html>
