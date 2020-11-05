<div class="modal fade bd-example-modal-xl" id="myTCHRModal" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form method="POST">
                <!-- Modal Header -->
                <div class="modal-header bg-UNi">
                    <h4 class="modal-title mr-auto">Add Teacher</h4>
                    <button type="button" class="ml-2 btn btn-danger" data-dismiss="modal">Close</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div>
                        <div class="card card-animation my-3">
                            <div class="card-body">
                                <h4 class="card-title">Login Credentials</h4>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="txtUserID">User ID</label>
                                        <input type="text" class="form-control" id="txtUserID" name="txtUserID" minlength="11" maxlength="11" placeholder="User ID" value="" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="txtUserPass">Password</label>
                                        <input type="password" class="form-control" id="txtUserPass" name="txtUserPass" placeholder="Password" value="" minlength="6" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-animation my-3">
                            <div class="card-body">
                                <h4 class="card-title">Personal Information</h4>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="txtFirstName">First Name</label>
                                        <input type="text" class="form-control" id="txtFirstName" name="txtFirstName" placeholder="First Name" value="" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="txtLastName">Last Name</label>
                                        <input type="text" class="form-control" id="txtLastName" name="txtLastName" placeholder="Last Name" value="" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="txtEmail">Email</label>
                                        <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Email" value="" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="txtCNIC">CNIC</label>
                                        <input type="text" class="form-control" id="txtCNIC" name="txtCNIC" minlength="15" maxlength="15" placeholder="CNIC with dashes" value="" required>
                                    </div>


                                    <div class="col-md-6 mb-3">
                                        <label for="cbCountry">Country</label>
                                        <select name="cbCountry" class="custom-select d-block" id="cbCountry" required>
                                            <option value="00000" selected>Select</option>
                                            <?php

                                            $RtnValue = unipmscitycountry($dtCountry, "VCOUNTRY", "");
                                            if ($RtnValue == "Y") {
                                                while ($dtRow = mysqli_fetch_assoc($dtCountry)) {
                                                    echo "<option value='" . $dtRow["CC_CntryCode"] . "'>" . $dtRow["CC_CntryName"] . "</option>";
                                                }
                                            }

                                            ?>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="cbCity">City</label>
                                        <select name="cbCity" class="custom-select d-block" id="cbCity" required>
                                            <option value="00000" selected>Select</option>
                                            <?php

                                            $RtnValue = unipmscitycountry($dtCity, "VCITY", "");
                                            if ($RtnValue == "Y") {
                                                while ($dtRow = mysqli_fetch_assoc($dtCity)) {
                                                    echo "<option value='" . $dtRow["CC_CityCode"] . "'>" . $dtRow["CC_CityName"] . "</option>";
                                                }
                                            }

                                            ?>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="cbSchool">School</label>
                                        <select name="cbSchool" class="custom-select d-block" id="cbSchool" required>
                                            <option value="00" selected>Select</option>
                                            <?php

                                            $RtnValue = unipmsschools($dtSchools, "V", "");
                                            if ($RtnValue == "Y") {
                                                while ($dtRow = mysqli_fetch_assoc($dtSchools)) {
                                                    echo "<option value='" . $dtRow["SCL_SchoolCode"] . "'>" . $dtRow["SCL_SchoolName"] . " ( " . $dtRow["SCL_SchoolAbb"] . " )</option>";
                                                }
                                            }

                                            ?>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="txtPost">Post</label>
                                        <input type="text" class="form-control" id="txtPost" name="txtPost" placeholder="Post" value="" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="txtSpecialty">Specialty</label>
                                        <input type="text" class="form-control" id="txtSpecialty" name="txtSpecialty" placeholder="Specialty" value="" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="txtPhoneNo">Phone Number</label>
                                        <input type="text" class="form-control" id="txtPhoneNo" name="txtPhoneNo" placeholder="Phone Number" value="" required>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label for="txtAddress">Address</label>
                                        <textarea class="form-control" name="txtAddress" id="txtAddress" rows="4"></textarea>
                                    </div>
                                    
                                    <div>
                                        <input type="hidden" name="TCHRModel" value="TCHRModel">
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