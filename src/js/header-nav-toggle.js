const headerNavToggle = () => {
  const body = document.querySelector('body');
  const nav = body.querySelector('.header-nav');
  const navToggle = document.createElement('div');
  navToggle.classList.add('header-nav-toggle');

  navToggle.onclick = () => {
    nav.classList.toggle('header-nav-on');
    body.classList.toggle('noscroll');
  };

  nav.appendChild(navToggle);
};

export default headerNavToggle;
