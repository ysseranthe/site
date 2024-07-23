function showForm(itemName, itemPrice) {
    var modal = document.getElementById('modal');
    var formTitle = document.getElementById('form-title');
    var itemNameInput = document.getElementById('item-name');
    var itemPriceInput = document.getElementById('item-price');
    
    formTitle.textContent = 'Заказать ' + itemName;

    itemNameInput.value = itemName;
    itemPriceInput.value = itemPrice;
    
    modal.style.display = 'block';
    console.log(itemNameInput.value);
}  

function closeForm() {
    var modal = document.getElementById('modal');

    var inputs = modal.querySelectorAll('input[type="text"], input[type="email"], input[type="hidden"], textarea');
    inputs.forEach(function(input) {
        input.value = '';
    });

    modal.style.display = 'none';
}
