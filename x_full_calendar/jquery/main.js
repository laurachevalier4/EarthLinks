$('#myModal').modal('show');
				$('.btn-submit').click(function () {
					calendar.fullcalendar('renderEvent', {
						title: $('#title').val();
						start: $('#start').val();
					}, true);
					$('#myModal').modal('hide');
				})


				/*
				<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <form>
		  <div class="form-group">
		    <label for="title">Event title</label>
		    <input type="text" class="form-control" id="title" placeholder="Email">
		  </div>
		  <div class="form-group">
		    <label for="start">Date</label>
		    <input type="text" class="form-control" id="start" placeholder="YYYY-MM-DD">
		  </div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn-submit">Save Event</button>
      </div>
    </div>
  </div>
</div>

				*/