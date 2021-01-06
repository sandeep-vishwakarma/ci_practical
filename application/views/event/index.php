<div class="container">
	<h3>Event Lists</h3>
	<div class="alert alert-success" style="display: none;">
		
	</div>
	<button id="btnAdd" class="btn btn-success">Add New Event</button>
	<table class="table table-bordered table-responsive" style="margin-top: 20px;">
		<thead>
			<tr>
				<td>ID</td>
				<td>Event Title</td>
				<td>Dates</td>
				<td>Occurrence</td>
				<td>Actions</td>
			</tr>
		</thead>
		<tbody id="showdata">
			
		</tbody>
	</table>
</div>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" style="width: 72%;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        	<form id="myForm" action="" method="post" class="form-horizontal">
        		<input type="hidden" name="ev_id" value="0">
        		<div class="form-group">
        			<label for="name" class="label-control col-md-4">Event Title</label>
        			<div class="col-md-8">
        				<input type="text" name="ev_title" id="ev_title" class="form-control">
        			</div>
        		</div>
        		<div class="form-group">
        			<label for="name" class="label-control col-md-4">Start Date</label>
        			<div class="col-md-8">
        				<input type="date" name="ev_start_dt" id="ev_start_dt" class="form-control">
        			</div>
        		</div>
        		<div class="form-group">
        			<label for="name" class="label-control col-md-4">End Date</label>
        			<div class="col-md-8">
        				<input type="date" name="ev_end_dt" id="ev_end_dt" class="form-control">
        			</div>
        		</div>

        		<div class="form-group">
        			<label for="name" class="label-control col-md-4">Recurrence</label>
        			<div class="col-md-8">
        				<div class="col-md-4">
	        				<input id="REPEAT" name="ev_recurr" tabindex="9" type="radio" value="REPEAT"><label for="REPEAT"><span style="font-size: 10pt; font-family: Verdana">Repeat</span></label>
	        			</div>

	        			<div class="col-md-4">
	        				<select id="ev_re_a" name="ev_re_a" class="form-control" name="lstRepeatType" >
		                        <option selected="selected" value="Every">Every</option>
		                        <option value="Every Other">Every Other</option>
		                        <option value="Every Third">Every Third</option>
		                        <option value="Every Fourth">Every Fourth</option>
		                    </select>
	        			</div>

	        			<div class="col-md-4">
		                    <select id="ev_re_b" name="ev_re_b" class="form-control" name="lstEvery" >
		                        <option selected="selected" value="Day">Day</option>
		                        <option value="Week">Week</option>
		                        <option value="Month">Month</option>
		                        <option value="Year">Year</option>
		                    </select>
	        			</div>
        			</div>
        		</div>

        		<div class="form-group">
        			<label for="name" class="label-control col-md-4">&nbsp;</label>
        			<div class="col-md-8">
        				<div class="col-md-4">
	        				<input id="REPEAT_ON_THE" name="ev_recurr" tabindex="9" type="radio" value="REPEAT_ON_THE"><label for="REPEAT_ON_THE"><span style="font-size: 10pt; font-family: Verdana">Repeat on the</span></label>
	        			</div>

	        			<div class="col-md-2">
	        				<select id="ev_re_c" name="ev_re_c" class="form-control" name="lstRepeatOn"  tabindex="12">
						        <option selected="selected" value="First">First</option>
						        <option value="Second">Second</option>
						        <option value="Third">Third</option>
						        <option value="Fourth">Fourth</option>
						    </select>
	        			</div>

	        			<div class="col-md-2">
		                    <select id="ev_re_d" name="ev_re_d" class="form-control" name="lstRepeatWeek"  tabindex="13">
							    <option selected="selected" value="Sun">Sun</option>
							    <option value="Mon">Mon</option>
							    <option value="Tue">Tue</option>
							    <option value="Wed">Wed</option>
							    <option value="Thu">Thu</option>
							    <option value="Fri">Fri</option>
							    <option value="Sat">Sat</option>
							</select>
	        			</div>

	        			<div class="col-md-4" style="display: inline-flex;">
	        				<span class="ofthespan">of the</span>
		                    <select id="ev_re_e" name="ev_re_e" class="form-control" language="javascript" name="lstRepeatMonth" >
		                        <option selected="selected" value="Month">Month</option>
		                        <option value="3 Months">3 Months</option>
		                        <option value="4 Months">4 Months</option>
		                        <option value="6 Months">6 Months</option>
		                        <option value="Year">Year</option>
		                    </select>
	        			</div>

	        			
        			</div>
        		</div>
        	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="btnSave" class="btn btn-primary">Submit</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="deleteModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirm Delete</h4>
      </div>
      <div class="modal-body">
        	Do you want to delete this record?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="btnDelete" class="btn btn-danger">Delete</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="vieweventModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog"  style="width: 72%;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">View Event</h4>
      </div>
      <div class="modal-body">
			<div clas="row">
				<table class="table table-bordered table-responsive" style="margin-top: 20px;">
					<thead>
						<tr>
							<td class="col-md-2" >Date</td>
							<td class="col-md-4" >Day Name</td>
						</tr>
					</thead>
					<tbody id="viewdata">
						
					</tbody>
				</table>
			</div>

			<div clas="row">
				<table class="table table-bordered table-responsive" style="margin-top: 20px;">
				<thead>
					<tr>
						<td class="col-md-4" >Total Recurrence Event</td>
						<td class="col-md-2 tot_Recurrence"  ></td>
					</tr>
				</thead>
			</table>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script>
	$(function(){
		showAllEvent();

		//Add New
		$('#btnAdd').click(function(){
			$('#myModal').modal('show');
			$('#myModal').find('.modal-title').text('Add New Event');
			$('#myForm').attr('action', '<?php echo base_url() ?>event/addEvent');
			$('#myForm')[0].reset();
		});


		$('#btnSave').click(function(){
			var url = $('#myForm').attr('action');
			var data = $('#myForm').serialize();
			//validate form
			var ev_title = $('#ev_title');
			var ev_start_dt = $('#ev_start_dt');
			var ev_end_dt = $('#ev_end_dt');

			var result = '';
			if(ev_title.val()==''){
				ev_title.parent().parent().addClass('has-error');
			}else{
				ev_title.parent().parent().removeClass('has-error');
				result +='1';
			}

			if(ev_start_dt.val()==''){
				ev_start_dt.parent().parent().addClass('has-error');
			}else{
				ev_start_dt.parent().parent().removeClass('has-error');
				result +='2';
			}

			if(ev_end_dt.val()==''){
				ev_end_dt.parent().parent().addClass('has-error');
			}else{
				ev_end_dt.parent().parent().removeClass('has-error');
				result +='3';
			}

			var ev_recurr = false;
			if($("#REPEAT").prop("checked")) {
			   result +='4';
			   var ev_recurr = true;
			}

			if($("#REPEAT_ON_THE").prop("checked")) {
			   result +='4';
			   var ev_recurr = true;
			}

			if(ev_recurr==false){
				alert('Please select Recurrence');
			}

			if(result=='1234'){
				$.ajax({
					type: 'ajax',
					method: 'post',
					url: url,
					data: data,
					async: false,
					dataType: 'json',
					success: function(response){
						if(response.success){
							$('#myModal').modal('hide');
							$('#myForm')[0].reset();
							if(response.type=='add'){
								var type = 'added'
							}else if(response.type=='update'){
								var type ="updated"
							}
							$('.alert-success').html('Event '+type+' successfully').fadeIn().delay(4000).fadeOut('slow');
							showAllEvent();
						}else{
							alert('Error');
						}
					},
					error: function(){
						alert('Could not add data');
					}
				});
			}
		});

		//edit
		$('#showdata').on('click', '.item-view', function(){
			var id = $(this).attr('data');
			$('#vieweventModal').modal('show');
			$.ajax({
				type: 'ajax',
				method: 'get',
				url: '<?php echo base_url() ?>event/viewEvent',
				data: {id: id},
				async: false,
				dataType: 'json',
				success: function(data){

					var tot_Rec = data.tot_Rec;
					$('.tot_Recurrence').html(tot_Rec);
					var tot_days = data.tot_days;

						var html = '';
						var i;
						for(i=0; i<tot_days.length; i++){
							
							html +='<tr>'+
										'<td>'+tot_days[i].date+'</td>'+
										'<td>'+tot_days[i].day+'</td>'+
								    '</tr>';
						}
						$('#viewdata').html(html);
				},
				error: function(){
					alert('Could not View Data');
				}
			});
		});

		//edit
		$('#showdata').on('click', '.item-edit', function(){
			var id = $(this).attr('data');
			$('#myModal').modal('show');
			$('#myModal').find('.modal-title').text('Edit Event');
			$('#myForm').attr('action', '<?php echo base_url() ?>event/updateEvent');
			$.ajax({
				type: 'ajax',
				method: 'get',
				url: '<?php echo base_url() ?>event/editEvent',
				data: {id: id},
				async: false,
				dataType: 'json',
				success: function(data){
					$('input[name=ev_title]').val(data.ev_title);
					$('input[name=ev_start_dt]').val(data.ev_start_dt);
					$('input[name=ev_end_dt]').val(data.ev_end_dt);

					$('select[name=ev_re_a]').val(data.ev_re_a);
					$('select[name=ev_re_b]').val(data.ev_re_b);
					$('select[name=ev_re_c]').val(data.ev_re_c);
					$('select[name=ev_re_d]').val(data.ev_re_d);
					$('select[name=ev_re_e]').val(data.ev_re_e);

					if(data.ev_recurr == "REPEAT"){
						$("#REPEAT").attr('checked', true);
						$("#REPEAT_ON_THE").attr('checked', false);
					}else{
						$("#REPEAT").attr('checked', false);
						$("#REPEAT_ON_THE").attr('checked', true);
					}

					$('input[name=ev_id]').val(data.ev_id);
				},
				error: function(){
					alert('Could not Edit Data');
				}
			});
		});

		//delete- 
		$('#showdata').on('click', '.item-delete', function(){
			var id = $(this).attr('data');
			$('#deleteModal').modal('show');
			//prevent previous handler - unbind()
			$('#btnDelete').unbind().click(function(){
				$.ajax({
					type: 'ajax',
					method: 'get',
					async: false,
					url: '<?php echo base_url() ?>event/deleteEvent',
					data:{id:id},
					dataType: 'json',
					success: function(response){
						if(response.success){
							$('#deleteModal').modal('hide');
							$('.alert-success').html('Event Deleted successfully').fadeIn().delay(4000).fadeOut('slow');
							showAllEvent();
						}else{
							alert('Error');
						}
					},
					error: function(){
						alert('Error deleting');
					}
				});
			});
		});



		//function
		function showAllEvent(){
			$.ajax({
				type: 'ajax',
				url: '<?php echo base_url() ?>event/showAllEevent',
				async: false,
				dataType: 'json',
				success: function(data){

					var html = '';
					var i;
					for(i=0; i<data.length; i++){
						var ev_recurrance = '';
						if(data[i].ev_recurr == "REPEAT"){
							ev_recurrance +='<td>'+data[i].ev_re_a+' '+data[i].ev_re_b+'</td>';
						}else{
							ev_recurrance +='<td>Every '+data[i].ev_re_c+' '+data[i].ev_re_d+' '+data[i].ev_re_e+'</td>';
						}
					
						html +='<tr>'+
									'<td>'+data[i].ev_id+'</td>'+
									'<td>'+data[i].ev_title+'</td>'+
									'<td>'+data[i].ev_start_dt+' To '+data[i].ev_end_dt+'</td>'+ev_recurrance+

									'<td>'+
										'<a style="margin:3px;" href="javascript:;" class="btn btn-success item-view" data="'+data[i].ev_id+'">View</a>'+
										'<a style="margin:3px;" href="javascript:;" class="btn btn-info item-edit" data="'+data[i].ev_id+'">Edit</a>'+
										'<a style="margin:3px;" href="javascript:;" class="btn btn-danger item-delete" data="'+data[i].ev_id+'">Delete</a>'+
									'</td>'+
							    '</tr>';
					}
					$('#showdata').html(html);
				},
				error: function(){
					alert('Could not get Data from Database');
				}
			});
		}
	});
</script>