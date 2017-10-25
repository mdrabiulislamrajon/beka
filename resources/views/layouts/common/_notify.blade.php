<script type="text/javascript">
	$(document).ready(function() {
		$.notify({
            icon: " {{ isset($icon) ? $icon : 'pe-7s-gift' }}",
            title: "{{ isset($title) ? $title : 'Bootstrap notify' }}",
            message: "{{ isset($message) ? $message : 'Turning standard Bootstrap alerts into notify like notifications' }}"
        },{
            timer: 4000,
            // can be success, info, primary, warning, danger
            type: "{{ isset($type) ? $type : 'info' }}",
            placement: {
                from: "{{ isset($from) ? $from : 'bottom' }}",
                align: "{{ isset($align) ? $align : 'right' }}"
            }
        });
	});
</script>