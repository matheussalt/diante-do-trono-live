export default function menuScroll() {
  const menu = document.querySelector('.header');

  window.addEventListener('scroll', (e) => {
    if (window.scrollY > 50) {
      menu.classList.add('ativo');
    } else {
      menu.classList.remove('ativo');
    }
  });
}
