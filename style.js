// Элементы для лайков и дизлайков
const likeBtn = document.getElementById('like-btn');
const dislikeBtn = document.getElementById('dislike-btn');
const likeCountSpan = document.getElementById('like-count');
const dislikeCountSpan = document.getElementById('dislike-count');

// Переменные для подсчета лайков и дизлайков
let likeCount = 0;
let dislikeCount = 0;

// Обработчик для кнопки "Лайк"
likeBtn.addEventListener('click', () => {
    likeCount++;
    likeCountSpan.textContent = likeCount;
    likeBtn.style.backgroundColor = '#007bff';
    dislikeBtn.style.backgroundColor = '';
});

// Обработчик для кнопки "Дизлайк"
dislikeBtn.addEventListener('click', () => {
    dislikeCount++;
    dislikeCountSpan.textContent = dislikeCount;
    dislikeBtn.style.backgroundColor = '#ff0000';
    likeBtn.style.backgroundColor = '';
});

// Элементы для смены темы
const toggleThemeBtn = document.getElementById('toggle-theme-btn');

// Обработчик для кнопки "Сменить тему"
toggleThemeBtn.addEventListener('click', () => {
    document.body.classList.toggle('dark');
    const menuItems = document.querySelectorAll('.menu_item');
    menuItems.forEach(item => {
        item.classList.toggle('dark');
    });
});