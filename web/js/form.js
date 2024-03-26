const openPopupButton = document.getElementById('openPopup');
const closePopupButton = document.getElementById('closePopup');
const popupForm = document.getElementById('popupForm');

openPopupButton.addEventListener('click', function() {
    popupForm.style.display = 'block';
});

closePopupButton.addEventListener('click', function() {
    popupForm.style.display = 'none';
});