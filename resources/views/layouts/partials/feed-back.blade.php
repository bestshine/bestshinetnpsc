<!-- Modal -->
<div class="modal" id="myFeedbackModal" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
          <button type="button" class="close" 
             data-dismiss="modal">
                 <span aria-hidden="true">&times;</span>
                 <span class="sr-only">Close</span>
          </button>
          <h4 class="modal-title" id="myModalLabel">
              Feedback Form
          </h4>
      </div>
          
      <!-- Modal Body -->
      <div class="modal-body">
          <form ng-submit="sendFeedback($event)">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="feedback">Comment</label>
              <textarea class="form-control" ng-model="feedBackFormData.feedback" rows="5" placeholder="feedback here" required autofocus></textarea>
            </div>          
            <div class="form-group">
              <label for="name">Name</label>
                <input type="text" class="form-control" id="name" ng-model="feedBackFormData.name" placeholder="Name" required />
            </div>          
            <div class="form-group">
              <label for="email">Email</label>
                <input type="email" class="form-control" id="group" ng-model="feedBackFormData.email" placeholder="Enter email" required/>
            </div>
            <button class="btn btn-primary">Send Feedback</button>
          </form>
      </div>
          
      <!-- Modal Footer -->
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>
