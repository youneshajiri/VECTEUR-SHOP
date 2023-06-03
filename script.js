 var swiper = new Swiper(".home-slider", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    loop:true,
  });

function loader() {
  document.querySelector('.loader-container').classList.add('fade-out');
}

function fadeOut() {
  setInterval(loader, 3000);
}
window.onload = fadeOut;


function sendEmail() {
  sendEmail.send({
    Host : "stmp.gmail.com",
    Username : "test44@gmail.com",
    Password : "DRAGON BALL 2004",
    To : 'hajiriyounes43@gmail.com',
    From : document.getElementById("email").value,
    Subject : "new contact",
    Body : "Name " + document.getElementById("name").value + "<br> Number: " + document.getElementById("number").value
  }).then(
    message => alert(message)
  );
}



function addToCart() {
  document.querySelector('#order form').scrollIntoView({ behavior: 'smooth' });
}





function gotwhatsapp() {
  var name = document.getElementById("name").value;
  var url = "https://wa.me/+212606575892" +
  "Name: " +
  name;
  
  window.open(url, "_blank").focus();

}