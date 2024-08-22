function addHoverListener(svgContainerClass, hoverTextClass) {
  const svgContainer = document.querySelector(svgContainerClass);
  const hoverText = document.querySelector(hoverTextClass);

  svgContainer.addEventListener('mouseover', () => {
    hoverText.style.opacity = '1'; // Show the text
  });

  svgContainer.addEventListener('mouseout', () => {
    hoverText.style.opacity = '0'; // Hide the text
  });
}

addHoverListener('.top', '.frontend');
addHoverListener('.mid', '.tools');
addHoverListener('.bot', '.backend');

document.addEventListener('DOMContentLoaded', () => {
  const skills = ['HTML', 'CSS', 'JS'];
  const frontend = document.getElementById('frontend');

  skills.forEach(skill => {
    const img = document.createElement('img');
    img.src = `imgs/${skill}_Logo.png`;
    img.className = 'mx-2 pt-4 w-20 inline-flex';

    frontend.appendChild(img);
  });
});

document.addEventListener('DOMContentLoaded', () => {
  const skills = ['Laravel', 'BS', 'Livewire', 'TW', 'Git'];
  const tools = document.getElementById('tools');

  skills.forEach(skill => {
    const img = document.createElement('img');
    img.src = `imgs/${skill}_Logo.png`;
    img.className = 'mx-2 pt-4 w-20 inline-flex';

    tools.appendChild(img);
  });
});

document.addEventListener('DOMContentLoaded', () => {
  const skills = ['PHP', 'MySQL'];
  const backend = document.getElementById('backend');

  skills.forEach(skill => {
    const img = document.createElement('img');
    img.src = `imgs/${skill}_Logo.png`;
    img.className = 'mx-2 pt-4 w-20 inline-flex';

    backend.appendChild(img);
  });
});

const btn = document.getElementById('menu-btn')
const nav = document.getElementById('menu')

btn.addEventListener('click', () => {
  btn.classList.toggle('open')
  nav.classList.toggle('flex')
  nav.classList.toggle('hidden')
})