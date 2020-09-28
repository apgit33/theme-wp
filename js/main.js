//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

//on récupère les burgers (normalement un seul)
const burgers = document.getElementsByClassName('navbar-burger');

//Pour chaque burger on ajoute un déclencheur d'évènement au click, qui toggle la classe is-active à celui-ci(this) et toggle la classe animated au menu($target)
for (let burger of burgers) {
    burger.addEventListener('click', function(){
        console.log("trst");
      //on récupère l'id cible de l'attribut "data-target" du burger
      const target = this.dataset.target;
      //on récupère l'élement du target
      const $target = document.getElementById(target);

      //on toggle la classe is-active au burger
      this.classList.toggle('is-active');
      //on toggle la classe animated au target du burger (menu)
      $target.classList.toggle('animated');
      $target.classList.toggle('is-active');
  })
}