document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Empêche le formulaire de se soumettre de façon traditionnelle

    const formData = new FormData(this);

    fetch('contact.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        if (data.includes('Merci')) {
            document.querySelector('.success-message').style.display = 'block';
            document.querySelector('.error-message').style.display = 'none';
        } else {
            document.querySelector('.error-message').style.display = 'block';
            document.querySelector('.success-message').style.display = 'none';
        }
    })
    .catch(error => {
        document.querySelector('.error-message').style.display = 'block';
        document.querySelector('.success-message').style.display = 'none';
    });
});