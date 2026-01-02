(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner(0);


    // Initiate the wowjs
    new WOW().init();

    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });


    // Hero Header carousel
    $(".header-carousel").owlCarousel({
        animateOut: 'fadeOut',
        items: 1,
        margin: 0,
        stagePadding: 0,
        autoplay: true,
        smartSpeed: 500,
        dots: true,
        loop: true,
        nav: true,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
    });


    // attractions carousel
    $(".blog-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        center: false,
        dots: false,
        loop: true,
        margin: 25,
        nav: true,
        navText: [
            '<i class="fa fa-angle-right"></i>',
            '<i class="fa fa-angle-left"></i>'
        ],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 2
            },
            1200: {
                items: 3
            }
        }
    });


    // testimonial carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        center: false,
        dots: true,
        loop: true,
        margin: 25,
        nav: true,
        navText: [
            '<i class="fa fa-angle-right"></i>',
            '<i class="fa fa-angle-left"></i>'
        ],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 2
            },
            1200: {
                items: 3
            }
        }
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 5,
        time: 2000
    });


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });

    document.addEventListener("DOMContentLoaded", function () {
        const spinWrapper = document.querySelector(".about-spec-frame .spin-wrapper");
        if (!spinWrapper) return;

        const spinDuration = 3000; // match new CSS duration in ms
        const spinInterval = 8000; // how often to spin

        setInterval(() => {
            spinWrapper.classList.add("spin-360");

            setTimeout(() => {
                spinWrapper.classList.remove("spin-360");
                spinWrapper.style.transform = "rotateY(0deg)";
            }, spinDuration);
        }, spinInterval);
    });

    var owl = $('.brand-slider');

    owl.owlCarousel({
        loop: true,
        margin: 25,
        nav: false,         // disable Owl default nav
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        smartSpeed: 600,
        responsive: {
            0: { items: 1 },
            576: { items: 2 },
            992: { items: 3 }
        }
    });

    // Custom Button Controls
    $('.brand-next').click(function () {
        owl.trigger('next.owl.carousel');
    });

    $('.brand-prev').click(function () {
        owl.trigger('prev.owl.carousel');
    });

   document.addEventListener("DOMContentLoaded", function() {
    const titleElement = document.querySelector(".text-dcba");
    const desc = document.querySelector(".section-desc");

    if (!titleElement || !desc) return;

    const title = titleElement.innerText.trim().toLowerCase();

    let content = "";

    if (title === "wear your shape") {
        content = "Discover frames that perfectly match your face shape, enhancing your natural features.";
    } 
    else if (title === "our features") {
        content = "We bring you unique optical solutions designed to improve clarity and comfort.";
    } 
    else if (title === "benefits we offer") {
        content = "Experience unmatched quality, comfort, and eye care services tailored for your needs.";
    }

    desc.innerText = content;
});




document.addEventListener("DOMContentLoaded", () => {

  const chatbotToggle = document.getElementById("chatbotToggle");
  const chatbotBox = document.getElementById("chatbotBox");
  const closeBtn = document.getElementById("closeChatbot");
  const chatMessages = document.getElementById("chatMessages");
  const userInput = document.getElementById("userInput");
  const sendBtn = document.getElementById("sendBtn");

  /* ---------- Helpers ---------- */
  const scrollToBottom = () => {
    chatMessages.scrollTop = chatMessages.scrollHeight;
  };

  function addMessage(text, sender, isHTML = false) {
    const msg = document.createElement("div");
    msg.className = `message ${sender}`;
    if (isHTML) msg.innerHTML = text;
    else msg.textContent = text;
    chatMessages.appendChild(msg);
    scrollToBottom();
  }

  function showTyping() {
    const typing = document.createElement("div");
    typing.className = "message bot typing";
    typing.innerHTML = `
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    `;
    chatMessages.appendChild(typing);
    scrollToBottom();
    return typing;
  }

  /* ---------- Greetings (ICONS) ---------- */
  function randomGreeting() {
    const greetings = [
      `<i class="fa-solid fa-hand-wave"></i> Hi there!`,
      `<i class="fa-solid fa-smile"></i> Hello!`,
      `<i class="fa-solid fa-robot"></i> Welcome!`,
      `<i class="fa-solid fa-headset"></i> How can I help you?`
    ];
    return greetings[Math.floor(Math.random() * greetings.length)];
  }

  function greetUser() {
    addMessage(randomGreeting(), "bot", true);
    setTimeout(() => {
      addMessage(`<i class="fa-solid fa-robot"></i> I’m your virtual assistant.`, "bot", true);
    }, 600);

    setTimeout(() => {
      addMessage(`<i class="fa-solid fa-circle-question"></i> How can I help you today?`, "bot", true);
    }, 1200);

    setTimeout(showOptions, 1500);
  }

  /* ---------- Options ---------- */
  function showOptions() {
    const div = document.createElement("div");
    div.className = "bot-options";
    div.innerHTML = `
      <button data-type="whatsapp">
        <i class="fa-brands fa-whatsapp"></i> WhatsApp
      </button>
      <button data-type="instagram">
        <i class="fa-brands fa-instagram"></i> Instagram
      </button>
      <button data-type="email">
        <i class="fa-solid fa-envelope"></i> Email
      </button>
    `;
    chatMessages.appendChild(div);
    scrollToBottom();

    div.querySelectorAll("button").forEach(btn => {
      btn.addEventListener("click", () => handleOption(btn.dataset.type));
    });
  }

  function handleOption(type) {
    let reply = "";
    if (type === "whatsapp")
      reply = `<i class="fa-brands fa-whatsapp"></i> 
               <a href="https://wa.me/9961667111" target="_blank">Open WhatsApp</a>`;

    if (type === "instagram")
      reply = `<i class="fa-brands fa-instagram"></i> 
               <a href="https://www.instagram.com/eyenix_eye_care?igsh=N3NrY3p4ejMxZjdq" target="_blank">Open Instagram</a>`;

    if (type === "email")
      reply = `<i class="fa-solid fa-envelope"></i> 
               <a href="mailto:eyenixeyecareopticals@gmail.com">Send Email</a>`;

    addMessage(reply, "bot", true);
  }

  /* ---------- User Input ---------- */
  function handleUserInput() {
    const text = userInput.value.trim();
    if (!text) return;

    addMessage(text, "user");
    userInput.value = "";

    const typing = showTyping();
    setTimeout(() => {
      typing.remove();
      addMessage(
        `<i class="fa-solid fa-hand-point-down"></i> Please choose WhatsApp, Instagram, or Email.`,
        "bot",
        true
      );
      showOptions();
    }, 900);
  }

  /* ---------- OPEN CHATBOT ---------- */
  chatbotToggle.addEventListener("click", () => {
    chatbotBox.style.display = "flex";
    chatMessages.innerHTML = "";
    greetUser();
  });

  /* ---------- CLOSE CHATBOT ---------- */
  closeBtn.addEventListener("click", () => {
    chatbotBox.style.display = "none";
  });

  /* ---------- SEND EVENTS ---------- */
  sendBtn.addEventListener("click", handleUserInput);
  userInput.addEventListener("keypress", e => {
    if (e.key === "Enter") handleUserInput();
  });

});

document.addEventListener("DOMContentLoaded", function () {
    const modalElement = document.getElementById('getInTouchModal');
    const getInTouchModal = new bootstrap.Modal(modalElement);

    // Open after 5 minutes (300000 ms)
    setTimeout(() => {
        getInTouchModal.show();
    }, 300000);

    // Reopen every 5 minutes
    setInterval(() => {
        if (!modalElement.classList.contains('show')) {
            getInTouchModal.show();
        }
    }, 300000);
});
})(jQuery);