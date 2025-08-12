//--------------------HEADER-------------------------//
window.onscroll = function () {
  var header = document.getElementById("header");
  var lua = document.getElementById("lua");
  var sol = document.getElementById("sol");
  var logo = document.getElementById("logo_header")
  var nav = document.getElementById("nav_header")
  var logoComp = document.getElementById("logo_header_comp")


  // Verifica se a posição do scroll é maior que 50px
  if (window.scrollY > 10) {
    header.classList.add("shrink"); // Adiciona a classe "shrink"
    lua.classList.add("shrink");
    sol.classList.add("shrink");
    logo.classList.add("shrink");
    nav.classList.add("shrink");
    logoComp.classList.add("shrink");
  } else {
    header.classList.remove("shrink"); // Remove a classe "shrink"
    lua.classList.remove("shrink");
    sol.classList.remove("shrink");
    logo.classList.remove("shrink");
    nav.classList.remove("shrink");
    logoComp.classList.remove("shrink");
  }

};

const checkbox = document.getElementById('escolher_tema');

  // Restaurar estado salvo
  window.addEventListener('DOMContentLoaded', () => {
    const savedState = localStorage.getItem('checkboxState');
    checkbox.checked = savedState === 'true';
  });

  // Salvar sempre que o estado mudar
  checkbox.addEventListener('change', () => {
    localStorage.setItem('checkboxState', checkbox.checked ? 'true' : 'false');
  });

//---------------------------------------------------//
//------------------FIM HEADER-----------------------//


//------------------CAROUSEL RIVER-------------------//
// Seleciona o carrossel de logos (carousel-river)
const carouselTrack = document.querySelector('.carousel-track');
if (carouselTrack) {
  carouselTrack.addEventListener('mouseenter', () => {
    carouselTrack.style.animationPlayState = 'paused';
  });

  carouselTrack.addEventListener('mouseleave', () => {
    carouselTrack.style.animationPlayState = 'running';
  });
}
//----------------FIM CAROUSEL RIVER-----------------//

//----------Abas interativas-----------//
function openTab(evt, tabName) {
  // Esconde todos os conteúdos
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tab-content");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  // Remove a classe 'active' de todos os botões
  tablinks = document.getElementsByClassName("tab-link");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].classList.remove("active");
  }
  // Mostra o conteúdo da aba clicada e ativa o botão
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.classList.add("active");
}

// Feedback Carousel Navigation
document.addEventListener('DOMContentLoaded', function() {
    const feedbackContent = document.querySelector('.container-feedback-content');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    const cardWidth = 380; // card width + gap

    if (prevBtn && nextBtn && feedbackContent) {
        prevBtn.addEventListener('click', () => {
            feedbackContent.scrollBy({
                left: -cardWidth,
                behavior: 'smooth'
            });
        });

        nextBtn.addEventListener('click', () => {
            feedbackContent.scrollBy({
                left: cardWidth,
                behavior: 'smooth'
            });
        });

        // Auto scroll every 5 seconds
        let autoScroll = setInterval(() => {
            feedbackContent.scrollBy({
                left: cardWidth,
                behavior: 'smooth'
            });
        }, 5000);

        // Pause auto scroll on hover
        feedbackContent.addEventListener('mouseenter', () => {
            clearInterval(autoScroll);
        });

        feedbackContent.addEventListener('mouseleave', () => {
            autoScroll = setInterval(() => {
                feedbackContent.scrollBy({
                    left: cardWidth,
                    behavior: 'smooth'
                });
            }, 5000);
        });
    }
});



// chat de ajuda para as pessoinhas

function openTab(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tab-content");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tab-link");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}

function faqAnswer(id) {
  const messages = document.getElementById('faqMessages');
  let userQ = '';
  let botA = '';
  
  switch(id) {
    case 1:
      userQ = 'Como acesso meu certificado?';
      botA = 'Após concluir o curso, seu certificado estará disponível na sua área do aluno para download. Você pode acessá-lo a qualquer momento.';
      break;
    case 2:
      userQ = 'Posso estudar pelo celular?';
      botA = 'Sim! Nossa plataforma é totalmente responsiva e funciona em qualquer dispositivo. Você pode estudar pelo celular, tablet ou computador.';
      break;
    case 3:
      userQ = 'Como funciona o suporte?';
      botA = 'Oferecemos suporte por chat, e-mail e WhatsApp. Nossa equipe está disponível de segunda a sexta, das 8h às 22h.';
      break;
    case 4:
      userQ = 'Quais formas de pagamento?';
      botA = 'Aceitamos cartão de crédito, boleto bancário e Pix. Você pode parcelar em até 12x no cartão.';
      break;
    case 5:
      userQ = 'Como funciona a garantia?';
      botA = 'Oferecemos garantia de 7 dias. Se você não ficar satisfeito, devolvemos 100% do seu dinheiro.';
      break;
    case 6:
      userQ = 'Posso cancelar minha assinatura?';
      botA = 'Sim! Você pode cancelar sua assinatura a qualquer momento, sem multa. O acesso continua até o fim do período pago.';
      break;
  }
  
  messages.innerHTML += `
    <div class="faq-user">${userQ}</div>
    <div class="faq-bot">${botA}</div>
  `;
  messages.scrollTop = messages.scrollHeight;
}
