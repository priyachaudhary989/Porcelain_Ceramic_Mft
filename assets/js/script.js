const menuButton = document.querySelector(".menu-btn");
const nav = document.querySelector(".nav-links");
if (menuButton && nav) {
  menuButton.addEventListener("click", () => {
    const isOpen = nav.classList.toggle("open");
    menuButton.setAttribute("aria-expanded", String(isOpen));
  });
  nav.querySelectorAll("a").forEach(link => link.addEventListener("click", () => {
    nav.classList.remove("open");
    menuButton.setAttribute("aria-expanded", "false");
  }));
}

const whatsAppForm = document.querySelector("#whatsapp-enquiry-form");
if (whatsAppForm) {
  whatsAppForm.addEventListener("submit", () => {
    const name = document.querySelector("#whatsapp-name").value.trim();
    const phone = document.querySelector("#whatsapp-phone").value.trim();
    const email = document.querySelector("#whatsapp-email").value.trim();
    const subject = document.querySelector("#whatsapp-subject").value;
    const enquiry = document.querySelector("#whatsapp-enquiry-message").value.trim();
    const message = [
      "New enquiry from the Jarral & Bros website",
      "",
      `Name: ${name}`,
      `Mobile: ${phone}`,
      email ? `Email: ${email}` : "",
      `Subject: ${subject}`,
      "",
      `Message: ${enquiry}`
    ].filter(Boolean).join("\n");

    document.querySelector("#whatsapp-message").value = message;
  });
}
