document.addEventListener("DOMContentLoaded", () => {
    const fields = document.querySelectorAll("input[required], textarea[required]");

    fields.forEach(field => {
        field.addEventListener("blur", () => {
            const errorEl = document.getElementById(field.id + "-error");
            if (!field.checkValidity()) {
                errorEl.textContent = field.validationMessage;
                errorEl.classList.remove("hidden");
                field.setAttribute("aria-invalid", "true");
            } else {
                errorEl.textContent = "";
                errorEl.classList.add("hidden");
                field.removeAttribute("aria-invalid");
            }
        });
    });

    const textarea = document.getElementById("message");
    const counter = document.getElementById("message-counter");
    const max = textarea.maxLength;

    const updateCounter = () => {
        const current = textarea.value.length;
        counter.textContent = `${current} / ${max}`;
    };

    // Initialisation
    updateCounter();

    // Mise à jour à chaque saisie
    textarea.addEventListener("input", updateCounter);
});

document.getElementById('contactForm').addEventListener('submit', function (e) {
    e.preventDefault();

    // On récupère les valeurs
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    // On les stocke temporairement dans localStorage
    localStorage.setItem('contact_name', name);
    localStorage.setItem('contact_email', email);
    localStorage.setItem('contact_message', message);

    // On redirige vers la page de résumé
    window.location.href = 'summary';
});


