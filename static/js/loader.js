  window.addEventListener('load', () => {
  setTimeout(() => {
    const loader = document.querySelector('.loader-wrapper');
    const main = document.querySelector('.body-wrap');
    const footer =  document.querySelector('.site-footer');
    // loader.classList.add('fade-out');

    // Wait for fade-out to finish
    setTimeout(() => {
      loader.style.display = 'none';
      main.style.display = 'block';
      footer.style.display = 'block';
    }, 1000); // fade-out duration
  }, 2000); // 2 seconds delay
});