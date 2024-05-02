document.addEventListener('DOMContentLoaded', function () {
const ratio = .1
const options = {
    root: null,
    rootMargin: "0px",
    threshold: ratio
  }

  const handleIntersect = function (entries, observer){
    entries.forEach(function(entry){
        if(entry.intersectionRatio > ratio){
            entry.target.classList.add('reveal-visible')
            observer.unobserve(entry.target)
        }
    })
  }
  
  const observer = new IntersectionObserver(handleIntersect, options)
  document.querySelectorAll('.reveal').forEach(function(r){
    observer.observe(r)
  })
})
/*

.fade-in {
    opacity: 0;
    transform: translateY(20px); 
    transition: opacity 0.8s ease-in-out, transform 0.8s ease-in-out; 
  }

  .fade-in.show {
    opacity: 1; 
    transform: translateY(0); 
    transition: 1s cubic-bezier(.5,0,0,1);
  }

  .fade-in.hide {
    opacity: 0;
    transform: translateY(20px); 
  }

document.addEventListener('DOMContentLoaded', function () {
    const elements = document.querySelectorAll('.fade-in');

    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('show');
          entry.target.classList.remove('hide');
        } else {
          entry.target.classList.remove('show');
          entry.target.classList.add('hide');
        }
      });
    }, { threshold: 0.5 });

    elements.forEach(element => {
      observer.observe(element);
    });
  });
  */