<!-- Modal -->
<div class="modal" id="myReportErrorModal" tabindex="-1" role="dialog" 
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
              Report Error Form
          </h4>
      </div>
          
      <!-- Modal Body -->
      <div class="modal-body">
          <form ng-submit="sendReportError($event)">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="report">Comment</label>
              <textarea class="form-control" ng-model="reportErrorFormData.report" rows="5" placeholder="report here" required autofocus></textarea>
            </div>          
            <div class="form-group">
              <label for="name">Name</label>
                <input type="text" class="form-control" id="name" ng-model="reportErrorFormData.name" placeholder="Name" required />
            </div>          
            <div class="form-group">
              <label for="email">Email</label>
                <input type="email" class="form-control" id="group" ng-model="reportErrorFormData.email" placeholder="Enter email" required/>
            </div>
            <button class="btn btn-primary">Send ReportError</button>
          </form>
      </div>
          
      <!-- Modal Footer -->
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>
