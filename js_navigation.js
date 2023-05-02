let menu = document.querySelector('#menu-icon');
let nav_links = document.querySelector('.nav_links');

menu.onclick = () => {
	menu.classList.toggle('bx-x');
	nav_links.classList.toggle('open');
}