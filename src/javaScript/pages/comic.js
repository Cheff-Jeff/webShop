const id = $('.comic')[0]['id'];
const re = /^[0-9]*$/;
let amount = 1;

$('#btnAddToCard').click(function(e)
{
  e.preventDefault();
  amount = $('#anount').val();
  if(amount == '' || !re.test(amount))
  {
    amount = 1;
  }
  addCardItems(amount);
});

const addCardItems = (amount) =>
{
  const xhr = new XMLHttpRequest();
  xhr.open('GET', '/src/php/functions/cardItems.php?id='+id+'&amount='+amount, true);
  xhr.onload = function()
  {
    const card = document.getElementById('cardAmount');

    if(card.innerHTML == '')
    {
      card.innerHTML = amount;
    }
    else
    {
      const num1 = parseInt(card.innerHTML);
      const num2 = parseInt(amount);
      const newAmount = num1 + num2;
      card.innerHTML = newAmount;
    }
  }
  xhr.send();
}