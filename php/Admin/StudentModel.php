<div class="modal fade bd-example-modal-xl" id="mySTDModal" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                                <h4 class="card-title">Login Credentials</h4>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="userid">User ID</label>
                                        <input type="text" class="form-control" id="userid" name="txtUserID" minlength="11" maxlength="11" placeholder="User ID" value="" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="userpass">Password</label>
                                        <input type="password" class="form-control" id="userpass" name="txtUserPass" placeholder="Password" value="" minlength="6" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-animation my-3">
                            <div class="card-body">
                                <h4 class="card-title">Personal Information</h4>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="txtfirstname">First Name</label>
                                        <input type="text" class="form-control" id="txtfirstname" name="txtFirstName" placeholder="First Name" value="" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="txtlastname">Last Name</label>
                                        <input type="text" class="form-control" id="txtlastname" name="txtLastName" placeholder="Last Name" value="" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="txtEmail">Email</label>
                                        <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Email" value="" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="txtPhoneNo">Phone No</label>
                                        <input type="text" class="form-control" id="txtPhoneNo" name="txtPhoneNo" minlength="11" maxlength="11" placeholder="03XXXXXXXXX" value="" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="txtCNIC">CNIC</label>
                                        <input type="text" class="form-control" id="txtCNIC" name="txtCNIC" minlength="15" maxlength="15" placeholder="XXXXX-XXXXXXX-X" value="" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="cbCountry">Country</label>
                                        <select name="cbCountry" class="custom-select d-block" id="cbCountry" required>
                                            <option value="00000" selected>Select</option>
                                            <?php

                                            $RtnValue = unipmscitycountry($dtSQLDataTable, "VCOUNTRY", "");
                                            if ($RtnValue == "Y") {
                                                while ($dtRow = mysqli_fetch_assoc($dtSQLDataTable)) {
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

                                            $RtnValue = unipmscitycountry($dtSQLDataTable, "VCITY", "");
                                            if ($RtnValue == "Y") {
                                                while ($dtRow = mysqli_fetch_assoc($dtSQLDataTable)) {
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

                                            $RtnValue = unipmsschools($dtSQLDataTable, "V", "");
                                            if ($RtnValue == "Y") {
                                                while ($dtRow = mysqli_fetch_assoc($dtSQLDataTable)) {
                                                    echo "<option value='" . $dtRow["SCL_SchoolCode"] . "'>" . $dtRow["SCL_SchoolName"] . " ( " . $dtRow["SCL_SchoolAbb"] . " )</option>";
                                                }
                                            }

                                            ?>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="cbprogram">Program</label>
                                        <select name="cbProgram" class="custom-select d-block" id="cbprogram" required>
                                            <option value="00" selected>Select</option>
                                            <?php

                                            $RtnValue = unipmsprograms($dtSQLDataTable, "VLOADPROGRAMS", "");
                                            if ($RtnValue == "Y") {
                                                while ($dtRow = mysqli_fetch_assoc($dtSQLDataTable)) {
                                                    echo "<option value='" . $dtRow["STDP_PCode"] . "'>" . $dtRow["STDP_Programs"] . "</option>";
                                                }
                                            }

                                            ?>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3" id="combosec">
                                        <label for="cbSection">Section</label>
                                        <select name="cbSection" class="custom-select d-block" id="cbSection" required>
                                            <option value="01" selected>A</option>
                                            <option value="02" >B</option>
                                        </select>
                                    </div>

                                    <div class="col-md-12 my-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="card card-animation my-3">
                            <div class="card-body">
                                <h4 class="card-title">Guardian Information</h4>
                                <div class="row">

                                    <div class="col-md-6 mb-3">
                                        <label for="txtGFirstName">First Name</label>
                                        <input type="text" class="form-control" id="txtGFirstName" name="txtGFirstName" placeholder="First Name" value="" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="txtGLastName">Last Name</label>
                                        <input type="text" class="form-control" id="txtGLastName" name="txtGLastName" placeholder="Last Name" value="" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="txtGPhoneNo">Phone No</label>
                                        <input type="text" class="form-control" id="txtGPhoneNo" name="txtGPhoneNo" minlength="11" maxlength="11" placeholder="03XXXXXXXXX" value="" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="txtGCNIC">CNIC</label>
                                        <input type="text" class="form-control" id="txtGCNIC" name="txtGCNIC" minlength="15" maxlength="15" placeholder="XXXXX-XXXXXXX-X" value="" required>
                                    </div>

                                    <div>
                                        <input type="hidden" name="STDModel" value="STDModel">
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