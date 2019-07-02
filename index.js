const burger = document.querySelector('.burger')
const responsiveNav = document.querySelector('.responsive-nav')

burger.addEventListener('click', () => {
  console.log('salut')
  if (burger.classList.contains('open')) {
    burger.classList.remove('open')
    responsiveNav.style.display = 'none'
  } else {
    burger.classList.add('open')
    responsiveNav.style.display = 'flex'
  }
})

// bouton scroll to top
const btnScrollToTop = document.querySelector('#btnScrollToTop')
btnScrollToTop.addEventListener('click', function () {
  window.scrollTo({
    top: 0,
    left: 0,
    behavior: 'smooth'
  })
})
