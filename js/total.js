var $input_Qtd = document.querySelector('#qtd');
var $output_total = document.querySelector('#total');

$input_Qtd.oninput = function(){
    var preco = document.querySelector('#preco').textContent;
    preco = preco.replace('R$',' ');
    preco = preco.replace(',','.');
    preco = parseFloat(preco);

    var quant = $input_Qtd.value;
    var total = quant * preco;
    total = 'R$'+total.toFixed(2);
    total = total.replace('.',',');

    $output_total.value = total;



}
$input_Qtd;