document.addEventListener("DOMContentLoaded", function() {
  const imgElements = document.querySelectorAll(".img");
  imgElements.forEach(function(img) {
    img.addEventListener("mouseover", function() {
      imgElements.forEach(function(element) {
        element.classList.remove("active");
      });
      this.classList.add("active");
    });
  });

  const spans = document.querySelectorAll('.word span');

  spans.forEach((span, idx) => {
    span.addEventListener('click', (e) => {
      e.target.classList.add('active');
    });
    span.addEventListener('animationend', (e) => {
      e.target.classList.remove('active');
    });

    // Initial animation
    setTimeout(() => {
      span.classList.add('active');
    }, 750 * (idx + 1));
  });

  const roundt = document.querySelectorAll('.rounded-text p');

  roundt.forEach((p) => {
    p.innerHTML = p.innerText.split('').map(
      (char, i) => `<span style="transform:rotate(${i * 10}deg)">${char}</span>`
    ).join('');
  });
});
