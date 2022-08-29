$(document).ready(function(){
	$('#calculator_cost,#calculator_vat_rate_percentage').on('keyup', function(){
		console.log($(this).val());
		var cost = parseFloat($('#calculator_cost').val()) > 0 ? parseFloat($('#calculator_cost').val()) : 0;
		var vatRatePercentage = parseFloat($('#calculator_vat_rate_percentage').val()) ? parseFloat($('#calculator_vat_rate_percentage').val()) : 0;
		
		var vatRateAmount = parseFloat((cost / 100) * vatRatePercentage).toFixed(2);
		$('#calculator_vat_rate_amount').val(vatRateAmount);
		var grossAmount = parseFloat(cost * ((100 + vatRatePercentage) / 100)).toFixed(2);
		$('#calculator_gross_amount').val(grossAmount);
	});
});