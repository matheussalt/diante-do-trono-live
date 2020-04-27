export default function scrollTo(trigger, to) {
  const btn = document.querySelector(trigger);
  const destiny = document.querySelector(to);

  btn.addEventListener('click', (e) => {
    e.preventDefault();

    window.scrollTo({
      top: destiny.getBoundingClientRect().y,
      left: 0,
      behavior: 'smooth',
    });
  });
}
