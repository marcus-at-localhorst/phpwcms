/**
 * @author mo
 */
$(function(){
	$('#checkAll').click(
	   function()
	   {
	      var checked_status = this.checked;
				$("input.deletedump").each(function()
				{
					this.checked = checked_status;
				});
  
	   }
	);

	$('.status_message_warning,.status_message_success').click(function(){
		$(this).fadeOut();
	});

		$("input#backup").click(function(){
			$("input:radio,input:checkbox").each(function()
				{
					this.checked = false;
				});
				this.checked = true;
		})
	
    $("#backupform").submit(function() {
		console.log("na?")
		if($("input.deletedump:checked").length){
				$("input:radio").each(function()
				{
					this.checked = false;
				});
			return confirm("Delete selected items?")
		}	
	
      if ($("#revert:checked").length || $('input[name=importdump]:checked').length) {
	  	if ($("#revert:checked").length && $('input[name=importdump]:checked').length)
			return confirm("Are you sure to revert?")
		if ($("#revert:checked").length < 1 || $('input[name=importdump]:checked').length < 1)
			 alert("Select files to restore db or select revert db & files"); return false;
      }
	  
	  if($("#import:checked").length && $("#importfile").val()){
	  	console.log($("#importfile").val())
	  	return true;
	  }
	  
      return true;
    });

});