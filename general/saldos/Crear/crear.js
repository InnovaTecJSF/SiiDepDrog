const viewButton = document.getElementById('viewButton');
const viewForm = document.getElementById('viewForm');
viewButton.addEventListener('click', function() {
  viewForm.classList.toggle('hidden');
});

const modifyButton = document.getElementById('modifyButton');
const modifyForm = document.getElementById('modifyForm');
modifyButton.addEventListener('click', function() {
  modifyForm.classList.toggle('hidden');
});

// Lógica adicional según tus necesidades
