document.addEventListener("DOMContentLoaded", function() {
    const button = document.querySelector('.download-cv');
    const shortText = document.querySelector('.short-text');
    const fullText = document.querySelector('.full-text');
  
    button.addEventListener('click', function() {
      if (shortText.style.display === 'none') {
        shortText.style.display = 'block';
        fullText.style.display = 'none';
        button.textContent = 'Leer más';
      } else {
        shortText.style.display = 'none';
        fullText.style.display = 'block';
        button.textContent = 'Leer menos';
      }
    });
  });
  