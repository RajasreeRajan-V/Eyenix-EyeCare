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
               <a href="https://wa.me/919686193667" target="_blank">Open WhatsApp</a>`;

    if (type === "instagram")
      reply = `<i class="fa-brands fa-instagram"></i> 
               <a href="https://www.instagram.com/yourpage" target="_blank">Open Instagram</a>`;

    if (type === "email")
      reply = `<i class="fa-solid fa-envelope"></i> 
               <a href="mailto:example@gmail.com">Send Email</a>`;

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
