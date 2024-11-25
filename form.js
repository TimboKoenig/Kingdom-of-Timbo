function handleFormSubmit(event) {
    event.preventDefault();

    // Get form data
    const username = document.getElementById('username').value;
    const firstname = document.getElementById('firstname').value;
    const lastname = document.getElementById('lastname').value;
    const age = document.getElementById('age').value;
    const email = document.getElementById('email').value;

    // Create confirmation message
    const confirmationMessage = `
        <p>Vielen Dank, ${firstname} ${lastname} (${username})!</p>
        <p>Du hast dich erfolgreich dem Königreich der Künstler*innen angeschlossen.</p>
        <p>Du wirst bald per E-Mail benachrichtigt.</p>
    `;

    // Show confirmation message
    document.getElementById('confirmation-message').innerHTML = confirmationMessage;

    // Optionally: clear form
    document.getElementById('join-form').reset();
}
