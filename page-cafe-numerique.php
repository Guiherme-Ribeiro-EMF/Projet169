<?php
/*
Template Name: Le Café Numérique
*/
get_header();
?>

<style>
  .cafe-container {
    max-width: 900px;
    margin: 50px auto;
    padding: 40px;
    background: #f6f6f6;
    border-radius: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    font-family: 'Segoe UI', sans-serif;
  }

  .cafe-container h1 {
    font-size: 2.5em;
    color: #2c3e50;
    text-align: center;
  }

  .cafe-container p {
    font-size: 1.2em;
    line-height: 1.6;
    color: #333;
  }

  .btn-cta {
    display: inline-block;
    margin-top: 30px;
    padding: 15px 30px;
    background-color: #e67e22;
    color: white;
    text-decoration: none;
    border-radius: 10px;
    transition: 0.3s ease;
  }

  .btn-cta:hover {
    background-color: #d35400;
  }
</style>

<div class="cafe-container">
  <h1>Bienvenue au Café Numérique</h1>
  <p>
    Le Café Numérique est un espace d’échange, de découverte et d’innovation où la technologie se mêle à la convivialité.
    Participez à nos événements, rencontrez des passionnés et partagez vos idées autour d’un bon café ☕.
  </p>

  <p>
    👉 Que vous soyez débutant, pro du code ou juste curieux, vous êtes le bienvenu !
  </p>

  <a class="btn-cta" href="#">Découvrir nos événements</a>
</div>

<script>
  document.querySelector(".btn-cta").addEventListener("click", function () {
    alert("Bientôt disponible !");
  });
</script>

<?php get_footer(); ?>
