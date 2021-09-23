const id = $('.comic')[0]['id']
let amount = 1;

$('#btnAddToCard').click(function(e)
{
  e.preventDefault();
  addCardItems();
});

const addCardItems = () =>
{
  const xhr = new XMLHttpRequest();
  xhr.open('GET', '/src/php/functions/cardItems.php?id='+id+'&amount='+amount, true);
  xhr.onload = function()
  {
    console.log(this.responseText);
  }
  xhr.send();
}