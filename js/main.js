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
});

document.addEventListener("mousemove", function (details){
	document.querySelectorAll(".img").forEach((elem)=>{
		const position = elem.getAttribute("value");
		const x = (window.innerWidth - details.clientX * position)/10; 
		const Y = (window.innerHeight - details.clientY * position)/10; 
	})	
	// body...
})
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
      }, 750 * (idx + 1))
    });
