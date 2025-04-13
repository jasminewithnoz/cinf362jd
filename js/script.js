document.getElementById('feedbackForm').addEventListener('submit', function (e) {
    e.preventDefault();

// Collect form data
const formData = new FormData(this);

// Create XMLHttpRequest
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'process.php', true);

    xhr.onload = function () {
    if (xhr.status === 200) {
    const responseDiv = document.getElementById('response');
    responseDiv.innerHTML = xhr.responseText;
    } else {
            console.error('Error occurred.');
            }
    };

    xhr.send(formData);
    });