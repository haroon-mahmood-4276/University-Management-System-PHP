<?php

declare(strict_types=1); // strict requirement

function unipmsstudents(&$GVFDtTable, $WorkAction, $ExtendQuery, $STDRollNo = "", $STDPassword = "", $STDFirstName = "", $STDLastName = "", $STDCNIC = "", $STDProgram = "", $STDSection = "", $STDSemester = "", $STDPhoneNo = "", $STDAddress = "", $STDEmail = "", $STDGender = "", $STDCity = "", $STDCountry = "", $STDPicture = "", $STDFatherName = "", $STDFatherPhone = "", $STDFatherHome = "", $STDFatherCNIC = "", $STDSCLSchoolCode = ""): string
{

  $RtnValue = "N";

  $Query = "";

  $nDataTable = "unipms_students";

  Up: try {
    if ($WorkAction == "S") {

      //Verify if Record exist
      $Query = "SELECT * FROM " . $nDataTable . " WHERE STD_RollNo = '". $STDRollNo ."'";

      if (DBFilDTable($GVFDtTable, $Query) == "Y") {
        $WorkAction = "U";
        goto Up;
      }

      $Query = "INSERT INTO " . $nDataTable . " (   STD_RollNo,       STD_Password,         STD_FirstName,         STD_LastName,          STD_CNIC,        STD_Program,          STD_CrrSemester,         STD_PhoneNo,       STD_Email,            STD_Gender,         STD_City,         STD_Country,         STD_Picture,         STD_FatherName,         STD_FatherPhone,         STD_FatherHome,         STD_FatherCNIC,           STD_Section,          STD_Address,       STD_SCLSchoolCode)" .
        " VALUES            ('" . $STDRollNo . "','" . $STDPassword . "','" . $STDFirstName . "','" . $STDLastName . "','" . $STDCNIC . "','" . $STDProgram . "','" . $STDSemester . "','" . $STDPhoneNo . "','" . $STDEmail . "','" . $STDGender . "','" . $STDCity . "','" . $STDCountry . "','" . $STDPicture . "','" . $STDFatherName . "','" . $STDFatherPhone . "','" . $STDFatherHome . "','" . $STDFatherCNIC . "', '" . $STDSection . "', '" . $STDAddress . "', '" . $STDSCLSchoolCode . "')";

      $RtnValue = DB_ExecuteNonQuery($Query);
      //MessageBox.Show( "Data Saved.", "PMS", MessageBoxButtons.OK, MessageBoxIcon.Information );

    } else if ($WorkAction == "U") {

      $Query = @"UPDATE " . $nDataTable . " SET " .
        "STD_RollNo ='" . $STDRollNo . "', STD_Password ='" . $STDPassword . "', STD_FirstName ='" . $STDFirstName . "', STD_LastName ='" . $STDLastName . "', STD_CNIC ='" . $STDCNIC . "', STD_Section ='" . $STDSection . "', " .
        "STD_Program ='" . $STDProgram . "', STD_Semester ='" . $STDSemester . "', STD_PhoneNo ='" . $STDPhoneNo . "', STD_Email ='" . $STDEmail . "', STD_Gender ='" . $STDGender . "', STD_City ='" . $STDCity . "', STD_Address ='" . $STDAddress . "', " .
        "STD_Country ='" . $STDCountry . "', STD_Picture ='" . $STDPicture . "', STD_FatherName ='" . $STDFatherName . "', STD_FatherPhone ='" . $STDFatherPhone . "', STD_FatherHome ='" . $STDFatherHome . "', STD_FatherCNIC ='" . $STDFatherCNIC . "'    WHERE STD_RollNo = '" . $STDRollNo . "'";

      $RtnValue = DB_ExecuteNonQuery($Query);

      //MessageBox.Show( "Data Updated.", "PMS", MessageBoxButtons.OK, MessageBoxIcon.Information );

    } else if ($WorkAction == "D") {
      $Query = @"DELETE FROM " . $nDataTable . " WHERE (STD_RollNo = '" . $STDRollNo . "')";
      $RtnValue = DB_ExecuteNonQuery($Query);
    } else if ($WorkAction[0] == 'V') {

      if ($WorkAction == "VSTDLIST") {
        $Query = "SELECT STD_RollNo, STD_FirstName, STD_LastName, STD_CNIC, (SELECT DISTINCT STDP_Programs FROM unipms_programs WHERE (STDP_PCode = STD_Program)) AS Program, (SELECT DISTINCT STDP_PSection FROM unipms_programs WHERE (STDP_PCode = STD_Program) AND (STDP_SCode = STD_Section)) AS Section, (SELECT SCL_SchoolName FROM unipms_schools WHERE (SCL_SchoolCode = STD_SCLSchoolCode)) AS SchoolName,(SELECT SCL_SchoolAbb FROM unipms_schools WHERE (SCL_SchoolCode = STD_SCLSchoolCode)) AS SchoolAbb, 
        STD_CrrSemester, STD_Email, STD_Gender, STD_FatherName, STD_FatherPhone, STD_FatherCNIC FROM " . $nDataTable . ((strlen($ExtendQuery) > 0) ? " WHERE " . $ExtendQuery : "") . " ORDER BY STD_RollNo";
      } else if ($WorkAction == "VLOGIN") {
        $Query = "SELECT STD_RollNo, STD_FirstName, STD_LastName, STD_Picture, STD_CrrSemester FROM " . $nDataTable . ((strlen($ExtendQuery) > 0) ? " WHERE " . $ExtendQuery : "");
      } else if ($WorkAction == "VMARKSSHEET") {
        $Query = "SELECT STD_RollNo AS [Student Roll No], ( STD_FirstName . ' ' . STD_LastName ) AS [Student Name], CAST(0.0 AS float) AS [Obtained Marks] FROM " . $nDataTable . ((strlen($ExtendQuery) > 0) ? " WHERE " . $ExtendQuery : "") . " ORDER BY [Student Name]";
      } else if ($WorkAction == "VROLLNO") {
        $Query = "SELECT STD_RollNo, STD_FirstName, STD_LastName,(SELECT DISTINCT STDP_Programs FROM unipms_programs WHERE (STDP_PCode = STD_Program)) AS Program, (SELECT DISTINCT STDP_PSection FROM unipms_programs WHERE (STDP_PCode = STD_Program) AND (STDP_SCode = STD_Section)) AS Section, (SELECT SCL_SchoolName FROM unipms_schools WHERE (SCL_SchoolCode = STD_SCLSchoolCode)) AS SchoolName,(SELECT SCL_SchoolAbb FROM unipms_schools WHERE (SCL_SchoolCode = STD_SCLSchoolCode)) AS SchoolAbb FROM " . $nDataTable . ((strlen($ExtendQuery) > 0) ? " WHERE " . $ExtendQuery : "") . " ORDER BY STD_RollNo";
      } else if ($WorkAction == "VRPTSTD") {
        $Query = @"SELECT PMS_Students.STD_RollNo, PMS_Students.*, PMS_STDAttendance.* FROM " . $nDataTable . " INNER JOIN " .
          "PMS_STDAttendance ON PMS_Students.STD_RollNo = PMS_STDAttendance.SA_STDRollNo " . ((strlen($ExtendQuery) > 0) ? " WHERE " . $ExtendQuery : "");
      } else if ($WorkAction == "V") {
        $Query = "SELECT * FROM " . $nDataTable . ((strlen($ExtendQuery) > 0) ? " WHERE " . $ExtendQuery : "");
      }

      if ($RtnValue == "N") {
        $RtnValue = DBFilDTable($GVFDtTable, $Query);
      }
    }
  } catch (Exception $ex) {
    $RtnValue = $ex->Message;
  }
  return $RtnValue;
}

function unipmsprograms(&$GVFDtTable, $WorkAction, $ExtendQuery, $STDPPCode = "", $STDPPrograms = "", $STDPSCode = "", $STDPPSection = ""): string
{

  $RtnValue = "N";

  $Query = "";

  $nDataTable = "unipms_programs";

  try {
    Up: if ($WorkAction == "S") {
      //Verify if Record exist
      $Query = "SELECT * FROM " . $nDataTable . " WHERE STDP_PCode = '" . $STDPPCode . "' AND STDP_SCode = '" . $STDPSCode . "'";
      if (DBFilDTable($GVFDtTable, $Query) == "Y") {
        $WorkAction = "U";
        goto Up;
      }


      $Query = @"INSERT INTO " . $nDataTable . "(       STDP_PCode,         STDP_Programs,          STDP_SCode,         STDP_PSection )" .
        " VALUES                                 ('" . $STDPPCode . "','" . $STDPPrograms . "','" . $STDPSCode . "', '" . $STDPPSection . "')";

      $RtnValue = DB_ExecuteNonQuery($Query);
    } else if ($WorkAction == "U") {
      $Query = @"UPDATE " . $nDataTable . " SET STDP_PCode ='" . $STDPPCode . "', STDP_Programs ='" . $STDPPrograms . "', STDP_SCode ='" . $STDPSCode . "', STDP_PSection ='" . $STDPPSection . "' WHERE STDP_PCode = '" . $STDPPCode . "' AND STDP_SCode = '" . $STDPSCode . "'";

      $RtnValue = DB_ExecuteNonQuery($Query);
    }
    if ($WorkAction[0] == 'V') {
      if ($WorkAction == "VLOADPROGRAMS") {
        $Query = "SELECT DISTINCT STDP_PCode, STDP_Programs FROM " . $nDataTable . ((strlen($ExtendQuery) > 0) ? " WHERE " . $ExtendQuery : "") . " ORDER BY STDP_Programs";
      } else if ($WorkAction == "VLOADSECTIONS") {
        $Query = "SELECT DISTINCT STDP_SCode, STDP_PSection FROM " . $nDataTable . ((strlen($ExtendQuery) > 0) ? " WHERE " . $ExtendQuery : "") . " ORDER BY STDP_PSection";
      }

      if ($RtnValue == "N") {
        $RtnValue = DBFilDTable($GVFDtTable, $Query);
      }
    }
  } catch (Exception $ex) {
    $RtnValue = $ex->Message;
  }
  return $RtnValue;
}

function unipmsadmin(&$GVFDtTable, $WorkAction, $ExtendQuery, $ADMINID = "", $ADMINPassword = "", $ADMINFirstName = "", $ADMINLastName = "", $ADMINCNIC = "", $ADMINPhoneNo = "", $ADMINAddress = "", $ADMINEmail = "", $ADMINGender = "", $ADMINCity = "", $ADMINCountry = "", $ADMINPicture = "", $ADMINFatherName = "", $ADMINFatherPhone = "", $ADMINFatherHome = "", $ADMINFatherCNIC = ""): string
{
  $RtnValue = "N";

  $Query = "";

  $nDataTable = "unipms_admin";

  try {
    if ($WorkAction[0] == 'V') {
      if ($WorkAction == "VLOGIN") {
        $Query = "SELECT ADMIN_ID, ADMIN_FirstName, ADMIN_LastName, ADMIN_Picture FROM " . $nDataTable . ((strlen($ExtendQuery) > 0) ? " WHERE " . $ExtendQuery : "");
      } else {
        $Query = "SELECT * FROM " . $nDataTable . ((strlen($ExtendQuery) > 0) ? " WHERE " . $ExtendQuery : "");
      }

      if ($RtnValue == "N") {
        $RtnValue = DBFilDTable($GVFDtTable, $Query);
      }
    }
  } catch (Exception $ex) {
    $RtnValue = $ex->Message;
  }
  return $RtnValue;
}

function unipmsteacher(&$GVFDtTable, $WorkAction, $ExtendQuery, $TCHRID = "", $TCHRPassword = "", $TCHRFirstName = "", $TCHRLastName = "", $TCHRCNIC = "", $TCHRPhoneNo = "", $TCHRAddress = "", $TCHREmail = "", $TCHRGender = "", $TCHRSpecialty = "", $TCHRCity = "", $TCHRCountry = "", $TCHRSCLSchoolCode = "", $TCHRPost = "", $TCHRPicture = "", $TCHRFatherName = "", $TCHRFatherPhone = "", $TCHRFatherHome = "", $TCHRFatherCNIC = "")
{
  $RtnValue = "N";

  $Query = "";

  $nDataTable = "unipms_teacher";

  try {
    Up: switch ($WorkAction) {
      case 'S':
        //Verify if Record exist
        $Query = "SELECT * FROM " . $nDataTable . " WHERE TCHR_ID = '" . $TCHRID . "'";

        if (DBFilDTable($GVFDtTable, $Query) == "Y") {
          $WorkAction = "U";
          goto Up;
        }

        $Query = "INSERT INTO " . $nDataTable . " (   TCHR_ID,       TCHR_Password,         TCHR_FirstName,         TCHR_LastName,          TCHR_CNIC,          TCHR_PhoneNo,       TCHR_Email,            TCHR_Gender,      TCHR_Specialty,      TCHR_City,         TCHR_Country,         TCHR_Picture,         TCHR_FatherName,         TCHR_FatherPhone,         TCHR_FatherHome,         TCHR_FatherCNIC,          TCHR_Address,                          TCHR_SCLSchoolCode,                    TCHR_Post)" .
          " VALUES                             ('" . $TCHRID . "','" . $TCHRPassword . "','" . $TCHRFirstName . "','" . $TCHRLastName . "','" . $TCHRCNIC . "','" . $TCHRPhoneNo . "','" . $TCHREmail . "','" . $TCHRGender . "','" . $TCHRSpecialty . "', '" . $TCHRCity . "','" . $TCHRCountry . "','" . $TCHRPicture . "','" . $TCHRFatherName . "','" . $TCHRFatherPhone . "','" . $TCHRFatherHome . "','" . $TCHRFatherCNIC . "', '" . $TCHRAddress . "', '" . $TCHRSCLSchoolCode . "', '" . $TCHRPost . "')";

        $RtnValue = DB_ExecuteNonQuery($Query);
        break;

      case 'U':
        $Query = @"UPDATE " . $nDataTable . " SET " .
          "TCHR_ID ='" . $TCHRID . "', TCHR_Password ='" . $TCHRPassword . "', TCHR_FirstName ='" . $TCHRFirstName . "', TCHR_LastName ='" . $TCHRLastName . "', TCHR_CNIC ='" . $TCHRCNIC . "', " .
          "TCHR_PhoneNo ='" . $TCHRPhoneNo . "', TCHR_Email ='" . $TCHREmail . "', TCHR_Gender ='" . $TCHRGender . "', TCHR_Specialty = '" . $TCHRSpecialty . "', TCHR_City ='" . $TCHRCity . "', TCHR_Address ='" . $TCHRAddress . "', " .
          "TCHR_Country ='" . $TCHRCountry . "', TCHR_Picture ='" . $TCHRPicture . "', TCHR_FatherName ='" . $TCHRFatherName . "', TCHR_FatherPhone ='" . $TCHRFatherPhone . "', TCHR_FatherHome ='" . $TCHRFatherHome . "', TCHR_FatherCNIC ='" . $TCHRFatherCNIC . "'  WHERE TCHR_ID = '" . $TCHRID . "'";

        $RtnValue = DB_ExecuteNonQuery($Query);
        break;

      case 'D':
        $Query = @"DELETE FROM " . $nDataTable . " WHERE (TCHR_ID = '" . $TCHRID . "')";
        $RtnValue = DB_ExecuteNonQuery($Query);
        break;

      default:
        switch ($WorkAction) {
          case 'VTCHRLIST':
            $Query = "SELECT unipms_teacher.TCHR_ID, unipms_teacher.TCHR_FirstName, unipms_teacher.TCHR_LastName, unipms_teacher.TCHR_Post, unipms_teacher.TCHR_SCLSchoolCode, unipms_schools.SCL_SchoolName, unipms_schools.SCL_SchoolAbb FROM unipms_teacher, unipms_schools" . ((strlen($ExtendQuery) > 0) ? " WHERE " . $ExtendQuery : "");
            break;

          case 'VLOGIN':
            // $Query = "SELECT   unipms.unipms_students.STD_RollNo,  unipms.unipms_students.STD_FirstName,  unipms.unipms_students.STD_LastName, ( SELECT unipms.unipms_programs.STDP_Programs FROM unipms_programs WHERE unipms.unipms_programs.STDP_PCode = unipms.unipms_students.STD_Program  ) AS Program,  (    SELECT      unipms.unipms_programs.STDP_PSection FROM unipms_programs    WHERE      unipms.unipms_programs.STDP_SCode = unipms.unipms_students.STD_Section  ) AS Section,  (    SELECT      unipms.unipms_schools.SCL_SchoolName FROM unipms_schools    WHERE      unipms.unipms_schools.SCL_SchoolCode = unipms.unipms_students.STD_SCLSchoolCode  ) AS SCHLName,  (    SELECT      unipms.unipms_schools.SCL_SchoolAbb FROM unipms_schools    WHERE      unipms.unipms_schools.SCL_SchoolCode = unipms.unipms_students.STD_SCLSchoolCode  ) AS SCHLAbb  FROM " . $nDataTable . ((strlen($ExtendQuery) > 0) ? " WHERE " . $ExtendQuery : "");
            $Query = "SELECT TCHR_ID, TCHR_FirstName, TCHR_LastName FROM " . $nDataTable . ((strlen($ExtendQuery) > 0) ? " WHERE " . $ExtendQuery : "");
            break;

          default:
            $Query = "SELECT * FROM " . $nDataTable . ((strlen($ExtendQuery) > 0) ? " WHERE " . $ExtendQuery : "");
            break;
        }

        if ($RtnValue == "N") {
          $RtnValue = DBFilDTable($GVFDtTable, $Query);
        }
        break;
    }
  } catch (Exception $ex) {
    $RtnValue = $ex->Message;
  }
  return $RtnValue;
}

function unipmsstdattendance(&$GVFDtTable, $WorkAction, $ExtendQuery, $SASTDRollNo = "", $SASubName = "", $SASTDPPCode = "", $SASTDPSCode = "", $SADate = "", $SAStartTime = "", $SAEndTime = "", $SAStatus = ""): string
{

  $RtnValue = "N";

  $Query = "";

  $nDataTable = "unipms_stdattendance";

  try {
    Up: if ($WorkAction == "S") {
      //Verify if Record exist
      // $Query = "SELECT * FROM " . $nDataTable . ((strlen($ExtendQuery) > 0) ? " WHERE " . $ExtendQuery : "");
      // if (DBFilDTable($GVFDtTable, $Query) == "Y") {
      //   $WorkAction = "U";
      //   goto Up;
      // }


      $Query = @"INSERT INTO " . $nDataTable . "(       SA_STDRollNo,         SA_SubName,          SA_STDPPCode,        SA_STDPSCode,         SA_Date,          SA_StartTime,         SA_EndTime,         SA_Status)" .
        " VALUES                          ('" . $SASTDRollNo . "','" . $SASubName . "', '" . $SASTDPPCode . "','" . $SASTDPSCode . "','" . $SADate . "','" . $SAStartTime . "','" . $SAEndTime . "','" . $SAStatus . "')";

      $RtnValue = DB_ExecuteNonQuery($Query);
    } else if ($WorkAction[0] == 'V') {
      if ($WorkAction == "VSTDATD") {
        $Query = "SELECT SA_SubName, SA_Date, SA_StartTime, SA_EndTime, SA_Status" .
          " FROM " . $nDataTable . ((strlen($ExtendQuery) > 0) ? " WHERE " . $ExtendQuery : "") . " ORDER BY SA_Date";
      }

      if ($RtnValue == "N") {
        $RtnValue = DBFilDTable($GVFDtTable, $Query);
      }
    }
  } catch (Exception $ex) {
    $RtnValue = $ex->Message;
  }
  return $RtnValue;
}

function unipmsstdmarks(&$GVFDtTable, $WorkAction, $ExtendQuery, $SMSTDRollNo = "", $SMExamType = "", $SMExamName = "", $SMSubjectName = "", $SMSunjectCrHr = "", $SMSTDPPCode = "", $SMSTDPSCode = "", $SMDate = "", $SMTotalMarks = "", $SMObtainedMarks = ""): string
{

  $RtnValue = "N";

  $Query = "";

  $nDataTable = "unipms_stdmarks";

  try {
    Up: if ($WorkAction == "S") {
      //Verify if Record exist
      // $Query = "SELECT * FROM " . $nDataTable . ((strlen($ExtendQuery) > 0) ? " WHERE " . $ExtendQuery : "");
      // if (DBFilDTable($GVFDtTable, $Query) == "Y") {
      //   $WorkAction = "U";
      //   goto Up;
      // }

      $Query = "INSERT INTO " . $nDataTable . " (     SM_STDRollNo,       SM_ExamType,          SM_ExamName,          SM_SubjectName,       SM_SunjectCrHr,       SM_STDPPCode,         SM_STDPSCode,         SM_Date,              SM_TotalMarks,      SM_ObtainedMarks)" .
        " VALUES                                 ('" . $SMSTDRollNo . "','" . $SMExamType . "','" . $SMExamName . "','" . $SMSubjectName . "','" . $SMSunjectCrHr . "','" . $SMSTDPPCode . "','" . $SMSTDPSCode . "','" . $SMDate . "','" . $SMTotalMarks . "','" . $SMObtainedMarks . "')";

      $RtnValue = DB_ExecuteNonQuery($Query);
    } else if ($WorkAction[0] == 'V') {
      if ($WorkAction == "VSTDMARKS") {
        $Query = "SELECT SM_ExamType, SM_SubjectName, SM_SunjectCrHr, SM_Date, " .
          "SM_ObtainedMarks, SM_TotalMarks FROM " . $nDataTable . ((strlen($ExtendQuery) > 0) ? " WHERE " . $ExtendQuery : "") . " ORDER BY SM_ExamType";
      } else if ($WorkAction == "V") {
        $Query = "SELECT * FROM " . $nDataTable . ((strlen($ExtendQuery) > 0) ? " WHERE " . $ExtendQuery : "");
      }

      if ($RtnValue == "N") {
        $RtnValue = DBFilDTable($GVFDtTable, $Query);
      }
    }
  } catch (Exception $ex) {
    $RtnValue = $ex->Message;
  }
  return $RtnValue;
}

function unipmsroadmap(&$GVFDtTable, $WorkAction, $ExtendQuery, $RMCourseCode = "", $RMCourseName = "", $RMCourseType = "", $RMCreditHr = "", $RMSemester = ""): string
{

  $RtnValue = "N";

  $Query = "";

  $nDataTable = "unipms_roadmap";

  try {
    if ($WorkAction[0] == 'V') {
      if ($WorkAction == "V") {
        $Query = "SELECT * FROM " . $nDataTable . ((strlen($ExtendQuery) > 0) ? " WHERE " . $ExtendQuery : "");
      }

      if ($RtnValue == "N") {
        $RtnValue = DBFilDTable($GVFDtTable, $Query);
      }
    }
  } catch (Exception $ex) {
    $RtnValue = $ex->Message;
  }
  return $RtnValue;
}

function unipmscitycountry(&$GVFDtTable, $WorkAction, $ExtendQuery, $CCCntryCode = "", $CCCntryName = "", $CCCityCode = "", $CCCityName = ""): string
{

  $RtnValue = "N";

  $Query = "";

  $nDataTable = "unipms_citycountry";

  try {
    if ($WorkAction[0] == 'V') {
      if ($WorkAction == "V") {
        $Query = "SELECT * FROM " . $nDataTable . ((strlen($ExtendQuery) > 0) ? " WHERE " . $ExtendQuery : "");
      } elseif ($WorkAction == "VCOUNTRY") {
        $Query = "SELECT DISTINCT unipms.unipms_citycountry.CC_CntryCode, unipms.unipms_citycountry.CC_CntryName FROM " . $nDataTable . ((strlen($ExtendQuery) > 0) ? " WHERE " . $ExtendQuery : "") . " ORDER BY unipms.unipms_citycountry.CC_CntryName";
      } elseif ($WorkAction == "VCITY") {
        $Query = "SELECT DISTINCT unipms.unipms_citycountry.CC_CityCode, unipms.unipms_citycountry.CC_CityName FROM " . $nDataTable . ((strlen($ExtendQuery) > 0) ? " WHERE " . $ExtendQuery : "") . " ORDER BY unipms.unipms_citycountry.CC_CityName";
      }

      if ($RtnValue == "N") {
        $RtnValue = DBFilDTable($GVFDtTable, $Query);
      }
    }
  } catch (Exception $ex) {
    $RtnValue = $ex->Message;
  }
  return $RtnValue;
}


function unipmsschools(&$GVFDtTable, $WorkAction, $ExtendQuery, $SCLSchoolCode = "", $SCLSchoolName = "", $SCLSchoolAbb = ""): string
{

  $RtnValue = "N";

  $Query = "";

  $nDataTable = "unipms_schools";

  try {
    Up: if ($WorkAction == "S") {
      //Verify if Record exist
      $Query = "SELECT * FROM " . $nDataTable . " WHERE SCL_SchoolCode = '" . $SCLSchoolCode . "'";
      if (DBFilDTable($GVFDtTable, $Query) == "Y") {
        $WorkAction = "U";
        goto Up;
      }


      $Query = @"INSERT INTO " . $nDataTable . "(       SCL_SchoolCode,         SCL_SchoolName,          SCL_SchoolAbb )" .
        " VALUES                                 ('" . $SCLSchoolCode . "','" . $SCLSchoolName . "', '" . $SCLSchoolAbb . "')";

      $RtnValue = DB_ExecuteNonQuery($Query);
    } else if ($WorkAction == "U") {
      $Query = @"UPDATE " . $nDataTable . " SET SCL_SchoolCode ='" . $SCLSchoolCode . "', SCL_SchoolName ='" . $SCLSchoolName . "', SCL_SchoolAbb ='" . $SCLSchoolAbb . "' " . ((strlen($ExtendQuery) > 0) ? " WHERE " . $ExtendQuery : "");

      $RtnValue = DB_ExecuteNonQuery($Query);
    } else if ($WorkAction[0] == 'V') {

      switch ($WorkAction) {
        case 'V':
          $Query = "SELECT * FROM " . $nDataTable . ((strlen($ExtendQuery) > 0) ? " WHERE " . $ExtendQuery : "");
          break;
      }

      if ($RtnValue == "N") {
        $RtnValue = DBFilDTable($GVFDtTable, $Query);
      }
    }
  } catch (Exception $ex) {
    $RtnValue = $ex->Message;
  }
  return $RtnValue;
}


//For Select Data
function DBFilDTable(&$nDTable, $SQLQuery)
{
  $nRtnValue = "N";
  global $conn;

  if ($nDTable = mysqli_query($conn, $SQLQuery)) {
    if (mysqli_num_rows($nDTable) > 0) {
      // output data of each row
      $nRtnValue = "Y";
    } else {
      $nRtnValue = "N";
    }
  } else {
    $nRtnValue = "<br><br><br>Error: " . $SQLQuery . "<br>" . mysqli_error($conn);
  }
  return $nRtnValue;
}

//For Save, Update and Delete Data
function DB_ExecuteNonQuery($SQLQuery)
{
  $nRtnValue = "N";
  global $conn;
  if (mysqli_query($conn, $SQLQuery)) {
    $nRtnValue = "Y";
  } else {
    $nRtnValue = "<br><br><br>Error: " . $SQLQuery . "<br>" . mysqli_error($conn);
  }
  return $nRtnValue;
}

function phpAlert($msg)
{
  echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

function DBFillComboSec()
{
  $Output = '';
  $dtSQLDataTable = '';
  $RtnValue = unipmsprograms($dtSQLDataTable, "VLOADSECTIONS", "");
  if ($RtnValue == "Y") {
    while ($dtRow = mysqli_fetch_assoc($dtSQLDataTable)) {
      $Output .= "<option value='" . $dtRow["STDP_SCode"] . "'>" . $dtRow["STDP_PSection"] . "</option>";
    }
  }

  return $Output;
}
