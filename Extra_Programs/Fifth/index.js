const button = document.getElementById('myButton');
function handleClick() {
    console.log('Button was clicked!')
    document.getElementById('message').textContent = 'Button was clicked!';
}
button.addEventListener('click', handleClick);
