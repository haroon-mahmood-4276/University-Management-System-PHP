<div class="modal fade bd-example-modal-xl" id="myProgramModal" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form method="POST">
                <!-- Modal Header -->
                <div class="modal-header bg-UNi">
                    <h4 class="modal-title mr-auto">Add Student</h4>
                    <button type="button" class="ml-2 btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                <!-- <div class="divider"></div> -->
                <!-- Modal body -->
                <div class="modal-body">
                    <div>
                        <div class="card card-animation my-3">
                            <div class="card-body">
                                <!-- <h4 class="card-title">Login Credentials</h4> -->
                                <div class="row">
                                <div class="col-md-6 mb-3">
                                        <label for="txtProgramCode">Program Code</label>
                                        <input type="text" class="form-control" id="txtProgramCode" name="txtProgramCode" minlength="2" maxlength="2" placeholder="Program Code" value="" required>
                                    </div>
                                    
                                    <div class="col-md-6 mb-3">
                                        <label for="txtProgramName">Program Name</label>
                                        <input type="text" class="form-control" id="txtProgramName" name="txtProgramName" placeholder="Program Name" value="" required>
                                    </div>
                                    
                                    <div class="col-md-6 mb-3">
                                        <label for="txtSectionCode">Section Code</label>
                                        <input type="text" class="form-control" id="txtSectionCode" name="txtSectionCode" minlength="2" maxlength="2" placeholder="Section Code" value="" required>
                                    </div>
                                    
                                    <div class="col-md-6 mb-3">
                                        <label for="txtSectionName">Section Name</label>
                                        <input type="text" class="form-control" id="txtSectionName" name="txtSectionName" placeholder="Section Name" value="" required>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer bg-UNi">
                    <input type="submit" class="btn btn-UNi" name="submit" value="Save" />
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>