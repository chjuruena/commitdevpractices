$(document).ready(function() {

	$('select').material_select();

    	//Materialize.toast('hahahaha', 600);

    	$('#select-field').change(function(){
    		Materialize.toast($(this).val(), 3000);
    		$.ajax({
    			type:'post',
    			url:'getid',
    			data:{
    				studentno:$(this).val(),
    			},
    			success:function(data){
    				Materialize.toast(data, 3000);
    			}
    		});
    	});

    $.ajax({



    });

});