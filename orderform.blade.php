{!! evo()->runSnippet('Order',[
	'errorTpl'=>'@CODE:<div class="invalid-feedback">[+message+]</div>',
	'errorClass'=>'is-invalid',
	'requiredClass'=>'is-invalid',
	'templatePath'=>'views/commerce',
	'formTpl'=>'@B_FILE:order.order_form',
	'deliveryTpl'=> '@B_FILE:order.order_form_delivery',
	'deliveryRowTpl'=> '@B_FILE:order.order_form_delivery_row',
	'paymentsTpl'=> '@B_FILE:order.order_form_payments',
	'paymentsRowTpl'=> '@B_FILE:order.order_form_payments_row',
	'reportTpl'=>'@B_FILE:order.order_report',
	'ccSenderTpl'=>'@B_FILE:order.order_reportback',
	'subjectTpl'=>'@B_FILE:order.order_report_subject',
	'ccSubjectTpl'=>'@B_FILE:order.order_report_subject',
]) !!}