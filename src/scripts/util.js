const SELECTOR_CLASSES = {
  'hidden': 'hidden',
  'navigation': 'header__nav',
  'burgerIcon': 'toggle__icon',
  'headerWrapper': 'header__wrapper'
};

const nav = document.querySelector(`.${SELECTOR_CLASSES['navigation']}`);
const navBrgButtonIcon = document.querySelector(`.${SELECTOR_CLASSES['burgerIcon']}`);

const toggleStates = (elem, selector) => {
  !elem.classList.contains(selector) ? elem.classList.add(selector) : elem.classList.remove(selector)
};
toggleStates(nav, SELECTOR_CLASSES['hidden']);


const onToggleNavigation = evt => {
  evt.preventDefault();
  const header = document.querySelector(`.${SELECTOR_CLASSES['headerWrapper']}`);
  toggleStates(nav, SELECTOR_CLASSES['hidden']);
  Array.from(navBrgButtonIcon.children).forEach(item => toggleStates(item, SELECTOR_CLASSES['hidden']))
};


const toggleBtn = document.querySelector('.toggle');
toggleBtn.addEventListener('click', onToggleNavigation);
