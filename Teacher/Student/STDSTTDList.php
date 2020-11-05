<?php
$_SESSION['ErrMsg'] = "";

$RtnValue = "";
$Count = 0;
$Output = "";
include("../../DBFIles/DBConfig.php");
$RtnValue = CHECKDBCONNECTION();
if ($RtnValue == "N") {
    echo "Database is not Connected.";
    exit();
} elseif ($RtnValue != "Y") {
    $_SESSION['ErrMsg'] = $RtnValue;
}

include("../../DBFIles/DBQueries.php");

if (isset($_POST["ProgramID"]) && isset($_POST["SectionID"])) { ?>

    <div class="container mt-5 mb-5">
        <!-- <form method="POST" name="STDATTDStatus"> -->
            <div class="table-responsive-md">
                <table class="table table-hover">
                    <thead>
                        <tr class="bg-UNi">
                            <th scope="col">#</th>
                            <th scope="col">User ID</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Program</th>
                            <th scope="col">Sec</th>
                            <th scope="col" style="width: 15%;" class="text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $RtnValue = unipmsstudents($dtSQLDataTable, "VROLLNO", "(STD_Program = '" . $_POST["ProgramID"] . "') AND (STD_Section = '" . $_POST["SectionID"] . "')");
                        if ($RtnValue == "Y") {
                            while ($dtRow = mysqli_fetch_assoc($dtSQLDataTable)) {
                        ?>
                                <tr>
                                    <th scope="row"><?php echo ++$Count ?></th>
                                    <td><?php echo $dtRow["STD_RollNo"] ?></td>
                                    <td><?php echo $dtRow["STD_FirstName"] . ' ' . $dtRow["STD_LastName"] ?></td>
                                    <td><?php echo $dtRow["SchoolAbb"] . ' - ' . $dtRow["Program"] ?></td>
                                    <td><?php echo $dtRow["Section"] ?></td>
                                    <td class="text-center">

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="F2019027012Chk" name="F2019027012Chk" checked>
                                            <label class="custom-control-label" for="F2019027012Chk">Present</label>
                                        </div>

                                    </td>
                                    <input type="hidden" name="CHK" value="STDATTDStatus">
                                </tr>
                        <?php }
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <button class="btn btn-UNi btn-md btn-block" type="submit" >Save Lecture</button></div>
        <!-- </form> -->
    </div>
<?php

}
?>