const buttons = document.querySelectorAll('.UI .number, .action');
const input = document.querySelector('.UI input');
const result = document.querySelector('.result');

buttons.forEach((btn) => {
  btn.addEventListener('click', (event) => {
    event.preventDefault();
    input.value += event.target.textContent;
  })
})

function clearAll() {
  input.value = '';
}