@extends('employee.employee_master')
@section('main')

<style type="text/css">
  .card-box{
    /*min-height: 100px;*/
    background: #fff;
    width: 100%;
    margin-bottom: 20px;
    padding: 15px;
   
    border: 1px solid #2e8894;
}
.icon-box {

    float: left;
    height: 70px;
    width: 70px;
    text-align: center;
    font-size: 30px;
    line-height: 74px;
    background: rgba(0, 0, 0, .2);
    border-radius: 100%;
}

.bg-blue {
    background-color: #398bf7;
}

.data_name_number {
    font-weight: 300;
    font-size:15px;
    text-transform: uppercase;
    font-weight: bold;
}
.data_name_text{
    display: block;
    font-size: 40px;
    /*white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-weight: 300;*/
}
.year{
  margin-bottom: 20px;
  font-size: 16px;
  padding: 0px;

}
.bootstrap-select .dropdown-menu li a {
  font-size: 16px;
  }
  .btn-dark,.btn-light{
    padding: 6px 5px;
    font-size: 16px;
    margin-bottom: 20px;
    padding: 5px;
    display: inline-block;
  }

  .catg .dropdown-toggle, .wtg .dropdown-toggle{
    padding: 6px 5px;
    font-size: 16px;
  }
  .radio {

    display: inline! important;
}
  
@keyframes animate{ 
   0%{ 
     opacity: 0; 
   } 
   50%{ 
     opacity: 0.7; 
   } 
   100%{ 
     opacity: 0; 
   } 
 } 
 .
 .bootstrap-select{
  border: 1px solid #ced4da;
    padding-left: 0px !important;
    padding-right: 0px !important;
 }
 .btn-dark:hover {
    color:#fff !important;
 }
 .part3{
  
  font-size: 16px;
 }
 .btn:hover, .btn:focus, .btn.focus {
  color: #fff;
 }
 .wizard > .steps ul li a{font-weight: bolder;}
 .submission{
  padding: 0.5em;
  font-size: 16px;
  text-align: center;
  font-weight: bolder;
  float: right;
 }
 .swal2-popup {
  width: 46em;
 }
 .swal2-modal .swal2-title {
    font-size: 18px;
}
#err{ 
        
        top: 144px; 
        z-index: 10000000000000000000000000000; 
        width: 426px;
        height: 60px;
        border: 1px solid #AB5454;
        text-align: center;
        padding-top: 10px;
        left: 32%;
        background-color: #AB5454;
        color: #FFF;
        font-weight: bold;  
        position: fixed;  
    }

 #success,#success_delete{
  top: 144px; 
        z-index: 10000000000000000000000000000; 
        width: 426px;
        
        border: 1px solid #4C9ED9;
        text-align: center;
        padding-top: 10px;
        left: 32%;
        background-color: #4C9ED9;
        color: #FFF;
        font-weight: bold;  
        position: fixed;  
 }
    .fade:not(.show) {
    opacity: 1;
}

.swal2-checkbox{
  display: block !important;
  margin-left: 30px;
  margin-top: -16px;
  margin-bottom: 0px;
  margin-right: 0px;
  display: block;
}

.fade-scale {
  transform: scale(0);
  opacity: 0;
  -webkit-transition: all .25s linear;
  -o-transition: all .25s linear;
  transition: all .25s linear;
}

.fade-scale.in {
  opacity: 1;
  transform: scale(1);
}
.nav-pills>li+li {
    margin-left: 0px !important;
}
.program_cmd{
  width: 100%;
  height: 40px;
}
.test {
  width: 60%;
  display: inline;
  overflow: auto;
  white-space: nowrap;
  margin: 0px auto;
}




.popover{
    min-width:30px;

    max-width:400px;
    word-wrap: break-word;
    border:1px solid #4c87b9;
    }

    .custom-file-input1 {
    display: inline-block;
    position: relative;
    color: #fff;
    }
    .custom-file-input1 input[type=file] {
    visibility: hidden;
    width: 100px;
    }
    .custom-file-input1:before {
    content: 'Upload File';
    display: block;
    background: -webkit-linear-gradient( -180deg, #236770, #236770);
    background: -o-linear-gradient( -180deg, #236770, #236770);
    background: -moz-linear-gradient( -180deg, #236770, #236770);
    background: linear-gradient( -180deg, #236770, #236770);
    border: 3px solid #236770;
    border-radius: 10px;
    padding: 5px 0px;
    outline: none;
    white-space: nowrap;
    cursor: pointer;
    text-shadow: 1px 1px rgba(255,255,255,0.7);
    font-weight: bold;
    text-align: center;
    font-size: 10pt;
    position: absolute;
    left: 0;
    right: 0;
    }
    .custom-file-input1:hover:before {
    border-color: #236770;
    }
    .custom-file-input1:active:before {
    background: #236770;
    }
    . :before {
    content: 'Browse File';
    background: -webkit-linear-gradient( -180deg, #99dff5, #02b0e6);
    background: -o-linear-gradient( -180deg, #99dff5, #02b0e6);
    background: -moz-linear-gradient( -180deg, #99dff5, #02b0e6);
    background: linear-gradient( -180deg, #99dff5, #02b0e6);
    border-color: #57cff4;
    color: #FFF;
    text-shadow: 1px 1px rgba(000,000,000,0.5);
    }
    . :hover:before {
    border-color: #02b0e6;
    }
    . :active:before {
    background: #02b0e6;
    }
    .tooltip{
    min-width:30px;

    max-width:400px;
    word-wrap: break-word;
    border:1px solid #4c87b9;
    }
    .blink_me {
  animation: blinker 1s linear infinite;
}

@keyframes blinker {
  50% {
    opacity: 0;
  }

</style>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<div class="sample">

    <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        
        


        <div class="wrapper">
            <!-- <div class="container"> -->

              
                <!-- start page title -->
                <div class="page-title-alt-bg"></div>
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0" style="font-size: small;background-color: transparent !important;">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Year-End Review</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Self</a></li>
                            <!-- <li class="breadcrumb-item active">Goalsheet & IDP</li> -->
                        </ol>
                    </div>
                    <h1 class="page-title" style="font-size: medium;">Year-End Review</h1>
                </div> 
                <!-- end page title -->
<!-- ////////////////////////////////////////////START PAGE ///////////////////////////////////////// -->
            

            <div class="alert alert-danger fade in" id="err" style="display: none;" >
                          <!-- <a href="#" class="close" data-dismiss="alert">&times;</a>      -->
                          <lable id="error_value"></lable>
            </div>
            <div class="alert alert-danger fade in" id="success" style="display: none;" >
                          <!-- <a href="#" class="close" data-dismiss="alert">&times;</a>      -->
                          <lable id="error_value">Your goalsheet has been successfully submitted</lable><br>

                          <a href="" style="color: #4c9ed9;border: 1px solid #fff;padding: 5px 7px;background: #FFF;">Return to the dashboard</a>
            </div>
            <div class="alert alert-danger fade in" id="success_delete" style="display: none;">
                          <!-- <a href="#" class="close" data-dismiss="alert">&times;</a>-->
                          <label id="success_del_msg"></label>
            </div>

            <label class="page-title-alt-bg1" id='goal_title' style="position: fixed;z-index:1001;width: 100%;background: #fff;padding: 20px 20px;padding: 30px 20px;line-height: 3px;top: 122px;display: none;padding-left: 129px;text-transform: uppercase;color: #216871;">
                        
                        Goalsheet
        </label>

      <!-- Basic Form Wizard -->
                <div class="row">

                    <div class="col-md-12">
                        <div class="card-box">

                          <!--   <h4 class="header-title">Goalsheet</h4> -->
                              
                              <div class="col-xl-12 text-right mb-3">

                                 <!--  <button class="btn btn-primary" id="download">Download pdf</button> -->

                              </div>


                               <select class="selectpicker col-md-4 btn-dark" name="financial_year" id="financial_year" data-live-search="true" data-style="btn-dark" style="padding-right: 0px;padding-left: 0px;">
                                  
                                            <option>--Select--</option>
                                            <option>2016-2017</option>
                                            <option>2017-2018</option>
                                            <option>2018-2019</option>
                                            <option>2019-2020</option>
                                            <option>2020-2021</option>
                                           <option>2021-2022</option>
                                      
                                 </select>
                                <!-- Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element. -->

                                
                                <label id="gaolsheet_type" style="display:none">
                                  
                                </label>
                                
                <label id="new_apr" style="display:none">
                  
                    
                </label>
                
                    <label id='emp_dept_name' style="display:none"></label>
                    <label id='cadre' style="display:none"></label>
                    <label id='designation'  class='designation' style="display:none"></label>
                    <label id="Reporting_officer1_id" style="display: none"> 
                    </label>
                    <label id="emp_code" style="display: none"><?php  if(isset($emp_data)&& count($emp_data)>0){ echo trim($emp_data[0]['Employee_id']);   }?> </label>
                    <label id='status_stop' style="display:none;"><?php if(isset($kpi_data['0']['KRA_status']) && $kpi_data['0']['KRA_status']!=''){
                          echo $kpi_data['0']['KRA_status']; } else{ echo  "NA";} ?>
                    </label>

                    
                    <label id='year_end_status' style="display: none;"><?php if(isset($kpi_data['0']['final_kra_status']) && $kpi_data['0']['final_kra_status']!=''){
                          echo $kpi_data['0']['final_kra_status']; } else{ echo  "NA";} ?>
                    </label>

                    
                    <label id="total_kra_count" style="display: none">
                    <?php 
                      $total_kra_id = '';
                      if (isset($kpi_data) && count($kpi_data)>0) { 
                        for ($k=0; $k < count($kpi_data); $k++) { 
                          if ($total_kra_id == '') {
                            $total_kra_id = $kpi_data[$k]['KPI_id'];
                          }
                          else
                          {
                            $total_kra_id = $total_kra_id.';'.$kpi_data[$k]['KPI_id'];
                          }
                        }
                      }
                    ?>
                    <?php if (isset($total_kra_id) && $total_kra_id != '') { echo $total_kra_id; } ?></label>


                    
                                <div class="table-responsive" style="margin-bottom: 20px;">
                                  <table class="table table-bordered mb-0">
                                      <thead>
                                      
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <th class="col-md-3">Employee Name</th>
                                          <td class="col-md-3">
                                            <?php 
                                                if(isset($emp_data)&& count($emp_data)>0){ echo $emp_data[0]['Emp_fname']." ".$emp_data[0]['Emp_lname'];}?>
                                            </td>
                                          <th class="col-md-3">Manager’s name</th>
                                          <td class="col-md-3">
                                            <?php if(isset($mgr_data) && count($mgr_data)>0){
                                            echo $mgr_data[0]['Emp_fname']." ".$mgr_data[0]['Emp_lname'];}
                                            ?>
                                          </td>
                                          
                                      </tr>
                                      <tr>
                                          <th class="col-md-3">Employee Code</th>
                                          <td class="col-md-3"><?php if(isset($emp_data)&& count($emp_data)>0){ echo $emp_data[0]['Employee_id'];}?></td>
                                          <th class="col-md-3">Submission date</th>
                                          <td class="col-md-3"></td>
                                           
                                      </tr>
                                     
                                      </tbody>
                                  </table>
                              </div>
                             

                           
                            <ul class="nav nav-pills mb-3 col-md-12" id="pills-tab" role="tablist">
                              <li class="nav-item first col-md-6">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true" >1.  Goalsheet</a>
                              </li>
                              <li class="nav-item scnd col-md-6">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false" >2. Individual Development Plan (IDP)</a>
                              </li>
                              
                            </ul>
              <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" style="opacity: 1;">
                  
                              <section style="padding-bottom: 73px;">
                                  <!-- <label class="col-md-12" style="color: #fff;background-color: #216871;padding: 10px;">Set Goalsheet</label> -->

  
  <div class="output_div1">
      
                                                       
                    <label style="color: #fff;width: 100%;background-color: #216871;padding: 10px;" >KRA Category  / KRA Weightage : </label>

                    <div class="table-responsive">
                            <table class="table table-bordered mb-0" style="border-top: 2px solid #ddd;">
                                <thead>
                               
                                             <tr>
                                                      <th>KRA Description</th>
                                                      <td colspan="4"></td>        
                                                      
                                              </tr> 
                                              <tr id="get_target_value">
                                                      <th class="col-md-3"> KPI List</th>
                                                      <th class="col-md-3"> Unit & Value</th>
                                                      <th class="col-md-2"> Actual achievement of year end </th>
                                                      <th class="col-md-2"> Appraisee comment on actual achievement* </th>
                                                      <th class="col-md-2"> Upload Supported Documents</th>
                                                               
                                              </tr>
                                </thead>
                                <tbody>
                                  
                                          <tr>
                                    
                                            <td class="validate_field1"></td>

                                           
                                            <td style="">

                                               
                                                <table class="table table-bordered" cellspacing="0" border="0">
                                                  
                                                       <tr>
                                                        <td colspan="5"><b>Type of Unit: </b>
                                                        </td>
                                                        </tr>
                                                            
                                                        <tr>
                                                            <td>1</td>
                                                            <td>2</td>
                                                            <td>3</td>
                                                            <td>4</td>
                                                            <td>5</td>
                                                        </tr>
                                                        <tr class="content_hover">                                                                    
                                                           
                                                        </tr>


                                                </table>

                                                <?php {?>

                                                           <table class="table table-bordered" cellspacing="0" border="0">
                                                              <tr>
                                                                  <td colspan="5"><b>Type of Unit:</b></td>
                                                               
                                                              </tr>
                                                              <tr>
                                                                  <td colspan="5"><b>Unit value:</b></td>
                                                                 
                                                              </tr>
                                                              <tr>
                                                                    <td>1</td>
                                                                    <td>2</td>
                                                                    <td>3</td>
                                                                    <td>4</td>
                                                                    <td>5</td>
                                                              </tr>
                                                              <tr>
                                                                  <td></td>
                                                                  <td></td>

                                                                  <td></td>

                                                                  <td></td>

                                                                  <td></td>
                                                              </tr>
                                                          </table>


                                                <?php }?>
                                            </td>
                                           
                                            <td>
                                              

                                             
                                            </td>
                                            <td>
                                              
                                              

                                            </td>
                                              <td>

                                                  
                                              </td>
                                            
                                                           
                                        </tr>
                                            
                                    <?php ?>



                                                             
                                </tbody>
                            </table>
                        </div>

                      
      <?php ?>
  </div>

  <div class="kras">
    

             
              <div style="margin-top: 20px;">
                  <label style="color: #fff;width: 100%;background-color: #216871;padding: 10px;" >Rating Of Qualitative Goals
                         
                   </label>
                   <label>Year-End Review (Part B) - To be filled by appraisee</label>
                   <h4 style="font-size: 16px;">This form captures the <span style="font-weight: bold;text-decoration: underline;">HOW</span> of performance and will be used to differentiate between 3, 4 and 5 ratings on the performance scale when such differentiation is not normally possible i.e. all the employees have performed equally well and manager has to make a tough choice to fit the employees on a bell curve</h4>

                   <table class="table table-bordered mb-0">
                     <thead>
                       <tbody>
                            <tr>
                                   <td class="bold" style="color: black;">
                                          1. I feel my goals were very challenging and stretched because:<span style="color:red;">*</span><br>
                                          <span style="color: #8e8a8a;">(In case if you have any document proof please use 'Upload' file button)</span>

                                          <?php  
                                            if(isset($employee_review_data['0']['proof_1']) && $employee_review_data['0']['proof_1'] != '')
                                            { 

                                          ?>
                                            <div style="float:right">
                                              <a href='<?php echo Yii::app()->request->baseUrl; ?>/data(proof)/year_end_proofs/<?php echo $employee_review_data['0']['proof_1']; ?>' target="_blank" download ><?php echo $employee_review_data['0']['proof_1']; ?></a>

                                              <input id='yearb-proof_1' value="Delete" class="btn btn-danger del_yearb" style="float:right;margin-top: -7px;cursor:pointer" type="button" data-toggle="confirmation" data-singleton="true">
                                            </div>
                                          <?php } else {
                                          ?>
                                            <div class='uploaded_file1' style="float:right;display:none">
                                              <a href="" target="_blank" download class="link1"><lable id='uploaded_file1' ></lable>
                                              </a>

                                              <input id='uploaded_file1-1' value="Delete" class="btn btn-danger cancel_upload" style="margin-top: -5px;cursor:pointer" type="button" data-toggle="confirmation" data-singleton="true">
                                            </div> 
                                            <div class='uploaded_file1-1'>
                                              <label id='proof_2' style="float:right">
                                              </label>
                                              <label  class="custom-file-input1   file_change" id="file_change-1" style="width: 96px;float:right;margin-top:-26px" data-toggle="tooltip" data-placement="top" title="Maximum file size should be 5 MB">
                                              <input class='proof_1' type="file"  name='proof_1' style="display: none" />
                                              </label>

                                            </div>
                                          <?php } ?>

                                   </td>
                             </tr>
                             <tr>
                                   <td>
                                    <?php 
                                      if (isset($employee_review_data) && count($employee_review_data)>0) {
                                          //echo "hjghj";die();
                                          $employee_review1 = $employee_review_data['0']['employee_review1'];
                                          $employee_review2 = $employee_review_data['0']['employee_review2']; 
                                          $review1_example1 = $employee_review_data['0']['review1_example1'];
                                          $review1_example2 = $employee_review_data['0']['review1_example2'];
                                          $review2_example1 = $employee_review_data['0']['review2_example1'];                     
                                          $review2_example2 = $employee_review_data['0']['review2_example2'];
                                      }
                                      else
                                      { 
                                          $employee_review1 = '';
                                          $employee_review2 = '';
                                          $review1_example1 = '';
                                          $review1_example2 = '';
                                          $review2_example1 = '';                     
                                          $review2_example2 = '';
                                      }

                                      if(isset($settings_data_new['0']['setting_type']) && strtotime(date('Y-M-d-d'))>strtotime($settings_data_new['0']['setting_type']))
                                      {?>
                                        <textarea rows='3' maxlength="1000" class="form-control" id='target1' name='employee_review1'><?php echo $employee_review1; ?></textarea>
                                        
                                     <?php }
                                      else
                                      { ?>
                                        <textarea rows='3' maxlength="1000" class="form-control" id='target1' name='employee_review1'><?php echo $employee_review1; ?></textarea>
                                        
                                     <?php }
                                    ?>
                                     
                                   </td>
                             </tr>
                             <tr>
                                   <td class="bold" style="color: black;">
                                        2. I have gone the extra mile to help my colleagues/team/organization by:<span style="color:red;">*</span><br>
                                          <span style="color: #8e8a8a;">(In case if you have any document proof please use 'Upload' file button)</span>


                                          <?php
                                              if(isset($employee_review_data['0']['proof_2']) && $employee_review_data['0']['proof_2'] != '')
                                              {
                                          ?>
                                              <div style="float:right">
                                              <a href='<?php echo Yii::app()->request->baseUrl; ?>/data(proof)/year_end_proofs/<?php echo $employee_review_data['0']['proof_2']; ?>' target="_blank" download><?php echo $employee_review_data['0']['proof_2']; ?></a>

                                              <!-- <i class="fa fa-times del_yearb" aria-hidden="true" style="color: red;cursor:pointer" id='yearb-proof_2'></i> -->
                                              <input id='yearb-proof_2' value="Delete" class="btn btn-danger del_yearb" style="float:right;margin-top: -7px;cursor:pointer" type="button" data-toggle="confirmation" data-singleton="true">

                                              </div>
                                          <?php } else { ?>

                                            <div class='uploaded_file2' style="display:none;float:right;"><a href="" target="_blank" download class="link2"><lable id='uploaded_file2'></lable></a>

                                            <input id='uploaded_file1-2' value="Delete" class="btn btn-danger cancel_upload" style="float:right;cursor:pointer" type="button" data-toggle="confirmation" data-singleton="true">

                                            </div>
                                            <div class='uploaded_file1-2'>
                                            <label  class="custom-file-input1   file_change" id="file_change-2" style="width: 96px;float:right;margin-top:-30px" data-toggle="tooltip" data-placement="top" title="Maximum file size should be 5 MB">
                                            <input class='proof_2' type="file"  name='proof_2' style="display: none" /></lable><label id='proof_2' style="float:right;">
                                            </label>

                                            </div>
                                          <?php } ?>
                                     
                                   </td>
                             </tr>
                             <tr>
                                   <td>
                                    <?php 
                                      if(isset($settings_data_new['0']['setting_type']) && strtotime(date('Y-M-d-d'))>strtotime($settings_data_new['0']['setting_type']))
                                      {?>
                                        <textarea rows='3' maxlength="1000" class="form-control" id='target2' name='employee_review2'><?php echo $employee_review2; ?></textarea>
                                        
                                     <?php }
                                      else
                                      { ?>
                                        <textarea rows='3' maxlength="1000" class="form-control" id='target2' name='employee_review2'><?php echo $employee_review2; ?></textarea>
                                        
                                     <?php }
                                    ?>
                                     
                                   </td>
                             </tr>
                             <tr>
                                  <td class="bold" style="color: black;">
                                        3. I have lived the Kritva values (Openness, Integrity, Respect, Trust, Innovation, Agility) in an exemplary fashion in the following way:<br>
                                          <span style="color: #8e8a8a;">(In case if you have any document proof please use 'Upload' file button)</span>


                                          <?php
                                              if(isset($employee_review_data['0']['proof1']) && $employee_review_data['0']['proof1'] != '')
                                              {
                                          ?>
                                            <div style="float:right">
                                              <a href='<?php echo Yii::app()->request->baseUrl; ?>/data(proof)/year_end_proofs/<?php echo $employee_review_data['0']['proof1']; ?>' target="_blank" download><?php echo $employee_review_data['0']['proof1']; ?>
                                                
                                              </a>
                                              <input id='yearb-proof1' value="Delete" class="btn btn-danger del_yearb" style="cursor:pointer" type="button" data-toggle="confirmation" data-singleton="true">

                                            </div>
                                          <?php } else { ?>

                                              <div class='uploaded_file3' style="display:none;float:right;"><a href="" target="_blank" download class="link3"><lable id='uploaded_file3' style="margin-top:-18px"></lable></a>

                                              <input id='uploaded_file1-3' value="Delete" class="btn btn-danger cancel_upload" style="float:right;margin-top: -5px;cursor:pointer" type="button" data-toggle="confirmation" data-singleton="true">
                                              </div>
                                              <div class='uploaded_file1-3'>
                                              <label  class="custom-file-input1   file_change" id="file_change-3" style="width: 96px;float: right;margin-top: -28px;" data-toggle="tooltip" data-placement="top" title="Maximum file size should be 5 MB">
                                              <input class='proof1' type="file"  name='proof1' style="display: none" />
                                              </div>
                                          <?php } ?>
                                  </td>
                             </tr>
                             <tr>
                                  <td>Please give at least 1 example but not more than 2 examples that are meaningful. These examples can be of the same value or of different values. Not the number of examples that matter but the impact created by living that value that <matters class=""></matters>
                                  </td>
                             </tr>
                             <tr>
                                    <td>
                                          e.g. I proactively created a process for updating clients on weekly basis which increased client satisfaction (Innovation)
                                    </td>
                             </tr>
                             <tr>
                                      <td class="">

                                            <span style="color: black;">Example:1 </span><span style="color: red;">*</span>

                                              <?php 
                                                if(isset($settings_data_new['0']['setting_type']) && strtotime(date('Y-M-d-d'))>strtotime($settings_data_new['0']['setting_type']))
                                                {?>
                                                  <textarea rows='3' maxlength="1000" class="form-control" id='text1' name='review1_example1'><?php echo $review1_example1; ?></textarea>
                                                  
                                               <?php }
                                                else
                                                { ?>
                                                  <textarea rows='3' maxlength="1000" class="form-control" id='text1' name='review1_example1'><?php echo $review1_example1; ?></textarea>
                                                  
                                              <?php } ?>



                                      </td>
                                      
                             </tr>
                             <tr>
                                      <td>
                                           <span style="color: black;"> Example:2 </span>

                                           <?php 
                                                if(isset($settings_data_new['0']['setting_type']) && strtotime(date('Y-M-d-d'))>strtotime($settings_data_new['0']['setting_type']))
                                                {?>
                                                  <textarea rows='3' maxlength="1000" class="form-control" id='text2' name='review1_example2'><?php echo $review1_example2; ?></textarea>
                                                  
                                               <?php }
                                                else
                                                { ?>
                                                  <textarea rows='3' maxlength="1000" class="form-control" id='text2' name='review1_example2'><?php echo $review1_example2; ?></textarea>
                                                  
                                              <?php } ?>
                                      </td>
                                      
                             </tr>
                             <tr>
                                  <td class="bold" style="color: black;">
                                        4. I have demonstrated the Kritva leadership competencies (Teamwork, Customer Orientation, Result Orientation, Developing self and team, Strategic thinking, Ownership and accountability) in the following way:<br>
                                          <span style="color: #8e8a8a;">(In case if you have any document proof please use 'Upload' file button)</span>


                                          <?php
                                              if(isset($employee_review_data['0']['proof2']) && $employee_review_data['0']['proof2'] != '')
                                              { 
                                          ?>
                                                <div style="float:right">
                                                    <a href='<?php echo Yii::app()->request->baseUrl; ?>/data(proof)/year_end_proofs/<?php echo $employee_review_data['0']['proof2']; ?>' target="_blank" download><?php echo $employee_review_data['0']['proof2']; ?>
                                                      
                                                    </a>

                                                    <!-- <i class="fa fa-times del_yearb" aria-hidden="true" style="color: red;cursor:pointer" id='yearb-proof2'></i> -->
                                                    <input id='yearb-proof2' value="Delete" class="btn btn-danger del_yearb" style="float:right;margin-top: -7px;cursor:pointer" type="button" data-toggle="confirmation" data-singleton="true">
                                                </div>
                                        <?php } else { ?>

                                                <div class='uploaded_file4' style="display:none;float:right"><a href="" target="_blank" download class="link4"><lable id='uploaded_file4' ></lable></a>
                                                    <!--   <lable id='uploaded_file1-4' style="cursor:pointer" class="cancel_upload">
                                                    <i class="fa fa-times" aria-hidden="true" style="margin-left: 11px;font-size: 21px;color: red;float:right"></i>
                                                    </lable> -->
                                                  <input id='uploaded_file1-4' value="Delete" class="btn btn-danger cancel_upload" style="float:right;cursor:pointer" type="button" data-toggle="confirmation" data-singleton="true">
                                                </div>
                                                <div class='uploaded_file1-4'>
                                                  <label id='proof2' style="float:right;display:none">
                                                  </label>     <label  class="custom-file-input1   file_change" id="file_change-4" style="width: 96px;float: right;margin-top:-28px" data-toggle="tooltip" data-placement="top" title="Maximum file size should be 5 MB">
                                                  <input class='proof2' type="file"  name='proof2' style="display: none" /> 
                                                </div> 
                                        <?php } ?>     
                                     
                                   </td>
                                
                             </tr>
                             <tr>
                                  <td>Please give at least 1 example but not more than 2 examples that are meaningful. These examples can be of the same value or of different values. Not the number of examples that matter but the impact created by living that value that <matters class=""></matters>
                                  </td>
                                  
                             </tr>
                             <tr>
                                    <td>
                                          e.g. Successfully arranged a session between IT team and production team that increased practical knowledge of MM module, thus reducing time required for system related process (teamwork, developing self and team)
                                    </td>
                             </tr>
                             <tr>
                                      <td class="">
                                            <span style="color: black;">Example:1 </span><span style="color: red;">*</span>
                                            <?php 
                                                if(isset($settings_data_new['0']['setting_type']) && strtotime(date('Y-M-d-d'))>strtotime($settings_data_new['0']['setting_type']))
                                                {?>
                                                  <textarea rows='3' maxlength="1000" class="form-control" id='text3' name='review2_example1'><?php echo $review2_example1; ?></textarea>
                                                  
                                               <?php }
                                                else
                                                { ?>
                                                  <textarea rows='3' maxlength="1000" class="form-control" id='text3' name='review2_example1'><?php echo $review2_example1; ?></textarea>
                                                  
                                              <?php } ?>

                                            
                                      </td>
                                      
                             </tr>
                              <tr>
                                      <td>
                                            <span style="color: black;">Example:2 </span>

                                            <?php 
                                                if(isset($settings_data_new['0']['setting_type']) && strtotime(date('Y-M-d-d'))>strtotime($settings_data_new['0']['setting_type']))
                                                {?>
                                                  <textarea rows='3' maxlength="1000" class="form-control" id='text4' name='review2_example2'><?php echo $review2_example2; ?></textarea>
                                                  
                                               <?php }
                                                else
                                                { ?>
                                                  <textarea rows='3' maxlength="1000" class="form-control" id='text4' name='review2_example2'><?php echo $review2_example2; ?></textarea>
                                                  
                                              <?php } ?>

                                      </td>
                                      
                             </tr>
                       </tbody>
                     </thead>
                   </table>

              </div>
                                  
                                  
                                <div class="button-list" style="margin-top: 20px;">
                                  <button type="button" class="btn btn-info waves-effect waves-light next" style="font-size: 16px;float: right;padding: 8px;font-weight: bold;">Next</button>
                                </div>



                        
                           
                                          <div class="test" style="position: fixed;bottom: 50%;right: -49%">
                                                  <button type="button" class="btn btn-primary waves-effect waves-light floating " style="font-size: 17px;margin-top: 20px;" onclick='js:save_final_year_data1()'> 
                                                            <span>save</span> <i class="mdi mdi-content-save-move"></i> 
                                                </button>
                                          </div>
                                      <?php ?>
                        
                        </section>


                  </div>
                  <div class="tab-pane" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <section style="padding-bottom: 63%;">


                            


                             <?php
                                      $set_flag = 'disabled';
                                      if(isset($IDP_data['0']['set_status']) && count($IDP_data)>0 && $IDP_data['0']['set_status']=='Approved')
                                      {
                                        //$set_flag = "'disabled'"."=>"."'disabled'";
                                        } 
                                      $set_flag1 = "'disabled'= 'false'";
                                      if(isset($IDP_data['0']['set_status']) && count($IDP_data)>0 && $IDP_data['0']['set_status']=='Approved')
                                      {
                                        $set_flag1 = "'disabled'= 'true'";
                                      } 
                             ?>
                                          

                                        <label style="color: #216871;">PLEASE DISCUSS YOUR STRENGTHS AND WORK RELATED WEAKNESSES WITH YOUR MANAGER AND IDENTIFY YOUR TRAINING NEEDS. YOUR DEVELOPMENT WILL HAPPEN THROUGH THE FOLLOWING WAYS:</label>
                                          <br>

                                        <label style="color: #216871;"><span style="color: red">*</span>Mandatory for all employees to attend this program </label>

                                        <br>
                                        <label class='col-md-12' style="color: #fff;background-color: #216871;padding: 10px;">PART A: DEVELOPMENT THROUGH INSTRUCTOR LED TRAINING IN CLASSROOM</label>

                                        





                                        <label id="total_prog" style="display: none"><?php if(isset($program_data_result) && count($program_data_result)>0) { echo count($program_data_result);} ?></label>
 

                                              <label style="display: none;">
                                                <?php if(isset($emp_data['0']['Cadre']) && $emp_data['0']['Cadre']!==''){echo $emp_data['0']['Cadre'];}?>
                                                  
                                              </label>


                        <label id="total_prog" style="display:none">
                            <?php  

                                if(isset($program_data_result) && count($program_data_result)>0){ 
                                    echo count($program_data_result);
                                }
                            ?>    
                        </label>

                        <table class="table table-bordered table-hover" id="maintable">
                            <thead>
                                <th>Name of program</th>
                                <th>Faculty</th>
                                <th>Days</th>                                        
                                <th>Please explain why the training is needed</th>
                                <th>Program completed<span style=color:red>*</span></th>
                                <!--   <th>Review</th> -->
                                <th>Comments</th>
                            </thead>
                            <tbody>
                                <?php 
                                $compulsory = '';$program_state = '';$program_cmnt = '';$state = 0;$review_state = '';$program_state1 = '';$not_undefine = '';$prg_list = '';

                                if (isset($program_data_result) && count($program_data_result)>0) 
                                {
                                    for ($i=0; $i <count($program_data_result); $i++) 
                                    {
                                        $cmnt = '';
                                        if (isset($IDP_data) && count($IDP_data)>0 && isset($IDP_data['0']['program_comment']) && $IDP_data['0']['program_comment'] != '')
                                        {
                                           
                                            $cmt2 = explode(';', $IDP_data['0']['program_comment']);    

                                            for ($j=0; $j < count($cmt2); $j++) 
                                            {
                                                $cmt1 = explode('?', $cmt2[$j]);
                                                //print_r($cmt1);die();
                                                    if (isset($cmt1[0]) && isset($cmt1[1]) && $i == $cmt1[0]) {                                                            
                                                        $cmnt = $cmt1[1];
                                                    }
                                            }
                                        }
                                        else
                                        {

                                            $cmnt = '';

                                        }
                                        //print_r($cmt2);
                                       //print_r($cmnt);

                                        if (isset($IDP_data['0']['mid_prgrm_cmd']) && $IDP_data['0']['mid_prgrm_cmd'] != '') 
                                        {

                                            //print_r($IDP_data['0']['mid_prgrm_cmd']);die();
                                            $program_state = explode(';',$IDP_data['0']['mid_status']);
                                            $program_cmnt = explode(';',$IDP_data['0']['mid_prgrm_cmd']);

                                            if (isset($program_cmnt[$state])) 
                                            { 
                                                    //echo "if";die();
                                                    $review_state = $program_cmnt[$state];
                                                    $program_state1 = $program_state[$state]; 
                                            } 
                                        } 
                                        else{ 
                                           // echo "ifff";die();
                                            $review_state = '';
                                            $program_state1 = ''; 
                                        }  

                                        if(isset($program_data_result[$i]['need']) && $program_data_result[$i]['need'] != 0) 
                                        { 

                                            if ($compulsory == '') 
                                            { 
                                               
                                                $compulsory= $i; 
                                               
                                            } 
                                            else { 
                                                $compulsory = $compulsory.';'.$i; 

                                            } 
                                        }

                                        if (isset($IDP_data['0']['Year_end_prg_status']) && isset($IDP_data['0']['Year_end_prg_comments']) && $IDP_data['0']['Year_end_prg_comments'] != '' && $IDP_data['0']['Year_end_prg_status'] != '') 
                                        { 
                                            //echo "if";die();
                                            
                                            $year_program_state = explode('^',$IDP_data['0']['Year_end_prg_status']);
                                            $year_program_cmnt = explode('^',$IDP_data['0']['Year_end_prg_comments']);
                                            if (isset($year_program_cmnt[$state]) && isset($year_program_state[$state])) 
                                            {
                                                $year_review_state = $year_program_cmnt[$state];
                                                $year_program_state1 = $year_program_state[$state];
                                            }

                                        }
                                        else
                                        {
                                            //echo "ifff";die();

                                            $year_review_state = '';
                                            $year_program_state1 = '';
                                        }   


                                        if ($cmnt != '' && $cmnt != 'undefined') 
                                        {
                                            

                                            if($prg_list == '')
                                            {
                                                

                                                $prg_list = $i;
                                            }
                                            else
                                            {
                                             
                                               $prg_list = $prg_list.';'.$i;
                                            } 
                                            ?>

                                            <tr class="error_row_chk">                                                               
                                                <!-- <td class="prog_name" id="<?php echo $i; ?>"> 
                                                    <?php if(isset($program_data_result[$i]['program_name'])) { echo $program_data_result[$i]['program_name']; } ?>
                                                     <?php if(isset($program_data_result[$i]['need']) && $program_data_result[$i]['need'] == 1) { ?>
                                                        <label style="color: red">*</label>
                                                     <?php }
                                                     else if(isset($program_data_result[$i]['need']) && $program_data_result[$i]['need'] == 2) { ?>
                                                        <label style="color: red">**</label><?php } ?>
                                                 </td> -->

                                                <td class="prog_name" id="<?php echo $i; ?>"> 
                                                        <?php if(isset($program_data_result[$i]['program_name'])) { echo  $program_data_result[$i]['program_name']; } ?> 
                                                        <?php if(isset($program_data_result[$i]['need']) && $program_data_result[$i]['need'] == 1) { ?><label style="color: red">*</label>
                                                        <?php }else if(isset($program_data_result[$i]['need']) && $program_data_result[$i]['need'] == 2) { ?><label style="color: red">**</label><?php }else{?>
                                                            <label style="color: red">**</label><?php } ?>
                                                        <?php if(isset($program_data_result[$i]['need']) && $program_data_result[$i]['need'] == 2 && isset($program_data_result[$i]['location']) && $program_data_result[$i]['location'] != '' && $program_data_result[$i]['location'] != 'undefined') { ?><label id = 'complusory_prg<?php echo $i; ?>' style="color: red;display: none"><?php if(isset($program_data_result[$i]['location'])) { echo $program_data_result[$i]['location']; } ?></label><?php } ?>
                                                        <?php  if(isset($program_data_result[$i]['program_name']) && $program_data_result[$i]['program_name']=='Strategic Thinking') {?>
                                                            <label style="color: red">*</label>
                                                        <?php } ?>
                                                        <?php  if(isset($program_data_result[$i]['program_name']) && $program_data_result[$i]['program_name']=='Execution Excellence 2.0') {?>
                                                            <label style="color: red">*</label>
                                                        <?php } ?>
                                                        <?php  if(isset($program_data_result[$i]['program_name']) && ($program_data_result[$i]['program_name']=='Result Orientation 2.0' || $program_data_result[$i]['program_name']=='Customer Orientation'|| $program_data_result[$i]['program_name']=='Leadership Development 2.0')) {?>
                                                            <label style="color: red">**</label>
                                                        <?php } ?>
                                                </td>

                                                <td>
                                                    <?php if(isset($program_data_result[$i]['faculty_name'])) { echo $program_data_result[$i]['faculty_name']; } 
                                                    // print_r($program_data_result);die();
                                                    ?> 
                                                </td>
                                                <td> 
                                                    <?php if(isset($program_data_result[$i]['training_days'])) { echo $program_data_result[$i]['training_days']; } ?> 
                                                </td>
                                                <td class="col-md-2">
                                                    <?php 
                                                        echo CHtml::textField('program_cmd',$cmnt,$htmlOptions=array('maxlength'=>80,'class'=>"form-control  validate_field program_cmd",'id'=>'program_cmd-'.$i,'disabled'=> "true",'data-toggle'=>"popover","data-trigger"=>"hover","data-placement"=>"bottom"));
                                                   
                                                    ?> 
                                                </td>


                                                <td>
                                                    <div id="yearAcompleteion_type_sta<?php echo $i; ?>"> 
                                                        <input type="radio" name='yearAcompleteion_type1<?php echo $i; ?>' 
                                                        <?php 
                                                        if(isset($settings_data_new['0']['setting_type']) && strtotime(date('Y-M-d'))>strtotime($settings_data_new['0']['setting_type'])){ 
                                                            ?>disabled="true" <?php } ?> value="Yes" id='yearAcompleteion_type<?php echo $i; ?>' class='yearAcompleteion_type<?php echo $i; ?>  yearA_comp' 
                                                        <?php if(isset($year_program_state1) && $year_program_state1 == 'Yes') { ?>checked='check'<?php } ?>>Yes
                                                        <input type="radio" <?php if(isset($settings_data_new['0']['setting_type']) && strtotime(date('Y-M-d'))>strtotime($settings_data_new['0']['setting_type']))
                                                        { ?>disabled="true"<?php } ?> name='yearAcompleteion_type1<?php echo $i; ?>' value="No" id='yearAcompleteion_type<?php echo $i; ?>' class='yearAcompleteion_type<?php echo $i; ?> yearA_comp' <?php if(isset($year_program_state1) && $year_program_state1 == 'No') { ?>checked='check'<?php } ?>>No

                                                    </div>
                                                </td>


                                                <td  style="display:none">
                                                    <?php 
                                                    echo CHtml::textField('program_review',$review_state,$htmlOptions=array('maxlength'=>80,'class'=>"form-control col-md-4 program_review",'id'=>'program_review-'.$i,'disabled'=> "true",'style'=>'display:none'));
                                                    ?>
                                                    
                                                </td>

                                                <td>

                                                    <?php 
                                                    if(isset($settings_data_new['0']['setting_type']) && strtotime(date('Y-M-d'))>strtotime($settings_data_new['0']['setting_type']))
                                                    {
                                                        if(isset($year_review_state) && $year_review_state !='' && $year_review_state!= "undefined"){
                                                            //echo "if1";die();
                                                            echo CHtml::textField('yearAprogram_cmd',$year_review_state,$htmlOptions=array('maxlength'=>1000,'class'=>"form-control validate_field program_cmd",'id'=>'yearAprogram_cmd-'.$i,'data-toggle'=>"popover","data-trigger"=>"hover","data-placement"=>"bottom",'disabled'=> "true"));
                                                        }
                                                        else{
                                                            //echo "else1";die();
                                                            echo CHtml::textField('yearAprogram_cmd','',$htmlOptions=array('maxlength'=>1000,'class'=>"form-control validate_field program_cmd",'id'=>'yearAprogram_cmd-'.$i,'data-toggle'=>"popover","data-trigger"=>"hover","data-placement"=>"bottom",'disabled'=> "true"));
                                                        }
                                                    
                                                    }
                                                    else
                                                    {
                                                        if(isset($year_review_state) && $year_review_state !='' && $year_review_state!= "undefined" ){
                                                        //echo "if2";echo $year_review_state;die();
                                                         echo CHtml::textField('yearAprogram_cmd',$year_review_state,$htmlOptions=array('maxlength'=>1000,'class'=>"form-control validate_field program_cmd",'id'=>'yearAprogram_cmd-'.$i,'data-toggle'=>"popover","data-trigger"=>"hover","data-placement"=>"bottom"));
                                                        }
                                                        else{
                                                            //echo "else2";die();
                                                            echo CHtml::textField('yearAprogram_cmd','' ,$htmlOptions=array('maxlength'=>1000,'class'=>"form-control validate_field program_cmd",'id'=>'yearAprogram_cmd-'.$i,'data-toggle'=>"popover","data-trigger"=>"hover","data-placement"=>"bottom"));
                                                        }
                                                    }
                                                    ?> 
                                                </td> 
                                            </tr>
                                            <?php 
                                            $not_undefine++;
                                            $state++;
                                        }
                                    }
                                }
                                ?>
                                <label id="program_count" style="display:none;"><?php if(isset($not_undefine)) { echo $not_undefine; } ?></label>
                                <label id="compulsory_id" style="display:none;"><?php if(isset($compulsory)) { echo $compulsory; } ?></label>
                                <label id="prg_list_defined" style="display:none;"><?php if(isset($prg_list)) { echo $prg_list; }  ?></label>
                            </tbody>

                        </table>  





                                        <label id="total_prog" style="display: none;"><?php if(isset($program_data_result) && count($program_data_result)>0) { echo count($program_data_result);} ?></label>
 

                            

                                        
                      


                                    <label style="color: #216871;font-size: 18px;">Please discuss and agree with your manager:</label><br><br>


                                    <label style="color: #216871;font-size: 16px;">1) One learning gap / strength area requiring further enhancement that if addressed will help you become more productive at the work place</label>
                                    <br>

                                    <div class="table-responsive" style="margin-bottom: 20px;">
                                        <table class="table table-bordered mb-0" style="border-top: 2px solid #ddd;">
                                            <thead>
                                              <tr>
                                                  <th class="col-md-3">Briefly mention what is the learning gap / area of strength which needs to be further enhanced</th>
                                                  <th class="col-md-3">Name of the program / topic which will help bridge this gap / build on the strength</th>
                                                  <th class="col-md-3">Please briefly explain how the training will help</th>
                                                  <th class="col-md-3">What would you like to learn in this program</th>
                                                  
                                              </tr>
                                            </thead>
                                            <tbody>
                                            
                                              <tr>
                                                <?php 
                                                              $user_prgm= '';
                                                                if (isset($IDP_data['0']['user_lead_prg'])) {
                                                                  $user_prgm = $IDP_data['0']['user_lead_prg'];
                                                                }
                                                                else
                                                                {
                                                                  $user_prgm = '';
                                                                }
                                                               

                                                                $user_prgm_cmt = '';
                                                                if (isset($IDP_data['0']['user_lead_prg_cmt'])) {
                                                                  $user_prgm_cmt = $IDP_data['0']['user_lead_prg_cmt'];
                                                                }
                                                                else
                                                                {
                                                                  $user_prgm_cmt = '';
                                                                }


                                                                 $breiefly_mention= '';
                                                                if (isset($IDP_data['0']['breiefly_mention'])) {
                                                                  $breiefly_mention = $IDP_data['0']['breiefly_mention'];
                                                                }
                                                                else
                                                                {
                                                                  $breiefly_mention = '';
                                                                }

                                                                 $how_the_traing= '';
                                                                if (isset($IDP_data['0']['how_the_traing'])) {
                                                                  $how_the_traing = $IDP_data['0']['how_the_traing'];
                                                                }
                                                                else
                                                                {
                                                                  $how_the_traing = '';
                                                                }


                                                      ?>   



                                                  <td>
                                                    <?php if(isset($IDP_data['0']['set_status']) && count($IDP_data)>0 && $IDP_data['0']['set_status']=='Approved') {?>

                                                            <textarea id="briefly_men" class="form-control" maxlength="225" rows="3" placeholder="" style="font-size: 16px;" disabled><?php echo $breiefly_mention; ?></textarea>

                                                    <?php }else{?>

                                                       <textarea id="briefly_men" class="form-control" maxlength="225" rows="3" placeholder="" style="font-size: 16px;" disabled><?php echo $breiefly_mention; ?></textarea >

                                                       <?php } ?>
                                                  </td>
                                                  <td>
                                                  <?php if(isset($IDP_data['0']['set_status']) && count($IDP_data)>0 && $IDP_data['0']['set_status']=='Approved') {?>
                                                            

                                                              <textarea id="user_prgm" class="form-control user_prgm" maxlength="225" rows="3" placeholder="" style="font-size: 16px;" disabled><?php echo $user_prgm; ?></textarea >
                                                         <?php }else{?>

                                                              <textarea id="user_prgm" class="form-control user_prgm" maxlength="225" rows="3" placeholder="" style="font-size: 16px;" disabled><?php echo $user_prgm; ?></textarea >
                                                            
                                                         <?php } ?>
                                                  </td>
                                                  <td>
                                                    <?php if(isset($IDP_data['0']['set_status']) && count($IDP_data)>0 && $IDP_data['0']['set_status']=='Approved') {?>

                                                            <textarea id="how_training_help" class="form-control" maxlength="225" rows="3" placeholder="" style="font-size: 16px;" disabled><?php echo $how_the_traing; ?></textarea>

                                                    <?php }else{?>

                                                       <textarea id="how_training_help" class="form-control" maxlength="225" rows="3" placeholder="" style="font-size: 16px;" disabled><?php echo $how_the_traing; ?></textarea >

                                                       <?php } ?>
                                                  </td>
                                                 
                                                  <td>


                                                         <?php if(isset($IDP_data['0']['set_status']) && count($IDP_data)>0 && $IDP_data['0']['set_status']=='Approved') {?>

                                                           <textarea id="user_prgm_cmt" class="form-control user_prgm_cmt" maxlength="225" rows="3" placeholder="" style="font-size: 16px;" disabled><?php echo $user_prgm_cmt; ?></textarea >

                                                             
                                                         <?php }else{?>

                                                               <textarea id="user_prgm_cmt" class="form-control user_prgm_cmt" maxlength="225" rows="3" placeholder="" style="font-size: 16px;" disabled><?php echo $user_prgm_cmt; ?></textarea >

                                                             
                                                         <?php } ?>
                                                  
                                                  
                                                  
                                                  </td>
                                                       
                                                 
                                                  
                                              </tr>
                                                
                                           
                                            </tbody>
                                        </table>
                                    </div>

                                <?php ?>

                                    <?php 

                                        if (isset($IDP_data) && $IDP_data !='' && count($IDP_data)>0 && isset($IDP_data['0']['extra_topic']) && $IDP_data['0']['extra_topic']!='' ) {

                                          $count = explode(';',$IDP_data['0']['extra_topic']);

                                          $extra_prgrm_cmd = '';$extra_program_status = '';$extra_prgrm_cmd1 = '';$extra_program_status1 = ''; $extra_program_status2 = ''; $extra_program_status3 = '';$rel_prgrm_cmd1 = '';$rel_prgrm_cmd2 = '';$year_extra_prg_stat='';$year_extra_prg_comt='';$year_rel_prg_stat='';$year_rel_prg_comt='';$extra_list = '';


                                    ?>
                                    

                                          <label style="color: #216871;font-size: 16px;">If you need a program that is not mentioned above, please use the space below.<br> Please note this program may be offered if at least 20 people request for it.</label>

                                        <div class="table-responsive" style="margin-bottom: 20px;border-top: 2px solid #ddd;">
                                            <table class="table table-bordered mb-0">
                                                <thead>
                                                  <tr>
                                                      <th class="col-md-3">Topics required</th>
                                                      <th class="col-md-2">No. of Days</th>
                                                      <th class="col-md-3">Faculty name</th>
                                                      <th class="col-md-2">Year End Review</th>
                                                      <th class="col-md-2">Year End Review Comments</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  
                                                  <?php 

                                                    if ($count !='') {
                                                    for ($m=0; $m < count($count); $m++) { 
                                                      if ($count[$m] != 'undefined') {
                                                        $count++;
                                                        if(isset($IDP_data['0']['extra_topic'])){
                                                            $topic1 = explode(';',$IDP_data['0']['extra_topic']);

                                                          }
                                                          if(isset($IDP_data['0']['extra_days'])){
                                                              $day1 = explode(';',$IDP_data['0']['extra_days']);

                                                          }
                                                          if(isset($IDP_data['0']['extra_faculty'])){
                                                              $faculty2 = explode(';',$IDP_data['0']['extra_faculty']);
                                                          
                                                          }


                                                          if(isset($IDP_data['0']['extra_prgrm_cmd'])){
                                                              $extra_prgrm_cmd = explode(';',$IDP_data['0']['extra_prgrm_cmd']);
                                                          }
                                                          if(isset($IDP_data['0']['extra_program_status'])){
                                                              $extra_program_status = explode(';',$IDP_data['0']['extra_program_status']);
                                                          }
                                                          if(isset($IDP_data['0']['rel_program_review_status'])){
                                                              $rel_program_status2 = explode(';',$IDP_data['0']['rel_program_review_status']);
                                                          }
                                                          if(isset($IDP_data['0']['rel_program_review'])){
                                                          $rel_program_status3 = explode(';',$IDP_data['0']['rel_program_review']);
                                                          }
                                                          if(isset($IDP_data['0']['Extra_year_end_prg_status'])){
                                                          $year_extra_prg_stat = explode('^',$IDP_data['0']['Extra_year_end_prg_status']);
                                                          }
                                                          if(isset($IDP_data['0']['Extra_year_end_prg_comments'])){
                                                          $year_extra_prg_cmt = explode('^',$IDP_data['0']['Extra_year_end_prg_comments']);
                                                          }
                                                          

                                                          if($extra_list == '')
                                                          {
                                                            $extra_list = $m;
                                                          }
                                                          else
                                                          {
                                                            $extra_list = $extra_list.';'.$m;
                                                          } 


                                                          if (isset($extra_prgrm_cmd[$m])) {
                                                            $extra_prgrm_cmd1 = $extra_prgrm_cmd[$m];
                                                          }
                                                          else
                                                          {
                                                            $extra_prgrm_cmd1 = '';
                                                          }
                                                          if (isset($extra_program_status[$m])) {
                                                            $extra_program_status1 = $extra_program_status[$m];
                                                          }
                                                          else
                                                          {
                                                            $extra_program_status1 = '';
                                                          }

                                                          if (isset($rel_program_status2[0]) || $rel_program_status2[0]!=''  ) {
                                                            // echo $rel_program_status3[0];die();
                                                            $extra_program_status2 = $rel_program_status2[0];
                                                            // $rel_prgrm_cmd1 = $rel_program_status3[0];
                                                          }
                                                          else
                                                          {
                                                          
                                                            $extra_program_status2 = '';
                                                          
                                                          }

                                                            if (isset($rel_program_status3[0]) || $rel_program_status3[0]!=''  ) {
                                                            // echo $rel_program_status3[0];die();
                                                            //$extra_program_status2 = $rel_program_status2[0];
                                                            $rel_prgrm_cmd1 = $rel_program_status3[0];
                                                            }
                                                            else
                                                            {
                                                            // echo "hiiii";die();
                                                            // $extra_program_status2 = '';
                                                            $rel_prgrm_cmd1 = '';
                                                            }

                                                            if (isset($rel_program_status2[1])) {
                                                            $extra_program_status3 = $rel_program_status2[1];

                                                            }
                                                            else
                                                            {
                                                            $extra_program_status3 = '';

                                                            }
                                                            if (isset($rel_program_status3[1])) {

                                                            $rel_prgrm_cmd2 = $rel_program_status3[1];
                                                            }
                                                            else
                                                            {

                                                            $rel_prgrm_cmd2 = '';
                                                            }
                                                            // print_r(count($count));die();
                                                            if (isset($year_extra_prg_stat[$m])) {

                                                              $year_extra_prg_stat = $year_extra_prg_stat[$m];

                                                            }
                                                            else
                                                            {
                                                              $year_extra_prg_stat = '';
                                                            }        
                                                            if(isset($year_extra_prg_cmt[$m])) {

                                                              $year_extra_prg_comt = $year_extra_prg_cmt[$m];

                                                            }
                                                            else
                                                            {
                                                              $year_extra_prg_comt = '';
                                                            } 

                                                           
                                                  ?>
                                                  <tr>
                                                    <?php 


                                                        $topic = '';$day = '';$faculty = '';
                                                        $topic = $topic1[$m];                                                                
                                                        $day = $day1[$m];                         
                                                        $faculty[$faculty2[$m]] = array('selected' => 'selected');


                                                    ?>
                                                    <td>
                                                            <input type="text" id="" name="" class="form-control topic<?php echo $m;?>" style="font-size: 16px;" value="<?php echo $topic; ?>" disabled>
                                                          
                                                      </td>
                                                      <td>
                                                            <input type="text" id="" name="" class="form-control days_required<?php echo $m;?>" style="font-size: 16px;" value="<?php echo $day; ?>" disabled>
                                                          
                                                      </td>
                                                      <td>
                                                        <?php 
                                                            $reporting_list = new EmployeeForm();
                                                            $records = $reporting_list->get_appraiser_list1();
                                                            for ($k=0; $k < count($records); $k++) { 
                                                                $where = 'where Email_id = :Email_id';
                                                                $list = array('Email_id');
                                                                $data = array($records[$k]['Email_id']);
                                                                $Reporting_officer_data[$k] = $reporting_list->get_employee_data($where,$data,$list);
                                                            }
                                                            $Cadre_id = array(); 
                                                            if (isset($Reporting_officer_data)) 
                                                            {
                                                                for ($l=0; $l < count($Reporting_officer_data); $l++) { 
                                                                    if (isset($Reporting_officer_data[$l]['0']['Emp_fname']) && isset($Reporting_officer_data[$l]['0']['Emp_lname']) && $Reporting_officer_data[$l]['0']['Email_id']) {
                                                                    $Cadre_id[$Reporting_officer_data[$l]['0']['Email_id'].'?'.$Reporting_officer_data[$l]['0']['Emp_fname']." ".$Reporting_officer_data[$l]['0']['Emp_lname']] = $Reporting_officer_data[$l]['0']['Emp_fname']." ".$Reporting_officer_data[$l]['0']['Emp_lname'];
                                                                    }

                                                                }
                                                            }
                                                            echo CHtml::DropDownList('faculty_email_id'.$m,'faculty_email_id1',$Cadre_id,array('class'=>'form-control faculty_email_id'.$m,'empty'=>'Select','options' => $faculty,'disabled'=> "true")); 
                                                        ?>


                                                      </td>
                                                      <td>

                                                            <div class="radio radio-info form-check-inline" id="yearAextraprgSta_<?php echo $m; ?>">
                                                                  <input type="radio" <?php if(isset($settings_data_new['0']['setting_type']) && strtotime(date('Y-M-d'))>strtotime($settings_data_new['0']['setting_type']))
                                                                  { ?>disabled="true"<?php } ?> name='yearAextra_prg1<?php echo $m; ?>'  value="Yes" class='yearAextraprg_<?php echo $m; ?>' <?php if($year_extra_prg_stat == 'Yes') { ?>checked='check'<?php } ?>style='position: relative;margin-left: 0px;'><label for="inlineRadio1" >Yes</label>

                                                           
                                                                  <input type="radio"  name='yearAextra_prg1<?php echo $m; ?>' value="No" <?php if(isset($settings_data_new['0']['setting_type']) && strtotime(date('Y-M-d'))>strtotime($settings_data_new['0']['setting_type']))
                                                                  { ?>disabled="true"<?php } ?> class='yearAextraprg_<?php echo $m; ?>' <?php if($year_extra_prg_stat == 'No') { ?>checked='check'<?php } ?> style='position: relative;margin-left: 0px;'><label for="inlineRadio2">No</label>
                                                           </div>

                                                      </td>
                                                      <td>
                                                        <?php 
                                                            if(isset($settings_data_new['0']['setting_type']) && strtotime(date('Y-m-d'))>strtotime($settings_data_new['0']['setting_type']))
                                                            {?>

                                                              <textarea id="yearAextraprogram_cmt-<?php echo $m?>" class="form-control program_cmd"  rows="3" placeholder="" style="font-size: 16px;" disabled
                                                                ><?php echo $year_extra_prg_comt;?></textarea>

                                                            <?php } else
                                                            {?>

                                                              <textarea id="yearAextraprogram_cmt-<?php echo $m?>" class="form-control program_cmd"  rows="3" placeholder="" style="font-size: 16px;"><?php echo $year_extra_prg_comt;?></textarea>


                                                            <?php } ?>



                                                            
                                                      </td>
                                                  </tr>

                                                  <?php } } }
                                                  ?>


                                               
                                                </tbody>
                                            </table>
                                        </div>

                                    <?php 

                                      }
                                    ?>



                                    <label style="color: #216871;font-size: 16px;">Note: Part B and Part C are to be filled by only AGM and above employees.</label>
                                           
                                    <label style="color: #fff;width:100%;background-color: #216871;padding: 10px;"> PART B: DEVELOPMENT THROUGH DEVELOPMENTAL RELATIONSHIPS</label>

                                    <div class="table-responsive" style="margin-bottom: 20px;">
                                        <table class="table table-bordered mb-0" style="border-top: 2px solid #ddd;">
                                            <thead>
                                              <tr>
                                                  <th class="col-md-2">Relationship<span style="color: red;">*</span></th>
                                                  <th class="col-md-2">Name of leader<span style="color: red;">*</span></th>
                                                  <th class="col-md-2">Number of Meetings planned<span style="color: red;">*</span></th>
                                                  <th class="col-md-2"> Target date</th>
                                                  <th class="col-md-2">Program Status<span style="color: red;">*</span></th>
                                                  <th class="col-md-2">Review<span style="color: red;">*</span></th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                            
                                              <tr>
                                                  <td>
                                                    Mentoring through leader from different function for behavioural inputs
                                                    (What would you want to learn from them. Clearly mention the objective)
                                                  </td>
                                                  <td>
                                                     <?php 
                                                      
                                                                $faculty4 = '';
                                                                if (isset($IDP_data['0']['leader_name'])) {
                                                                  $faclty = explode(';',$IDP_data['0']['leader_name']);
                                                                  if (isset($faclty[1])) {
                                                                    $faculty4 = $faclty[1];
                                                                }
                                                              //$faculty4[$faclty[1]] = array('selected' => 'selected');
                                                              }?>


                                                              <?php if (isset($IDP_data) && count($IDP_data)>0 && isset($IDP_data['0']['leader_name'])) {?>

                                                        <input type="text"  name="" class="form-control" id="faculty_email_id4" style="font-size: 16px;" value="<?php echo $faculty4; ?>" disabled>
                                                    <?php } else{?>
                                                        <input type="text"  name="" class="form-control" id="faculty_email_id4" style="font-size: 16px;" value="<?php echo $faculty4; ?>" disabled>
                                                    <?php } ?>

                                                  </td>
                                                  <td>  

                                                     <?php 
                                                           
                                                               //print_r($IDP_data['0']['meeting_planned']);die();
                                                                 $meet = '';
                                                                if (isset($IDP_data['0']['meeting_planned']) && $IDP_data['0']['meeting_planned']!='') {
                                                                  $meet = explode(';',$IDP_data['0']['meeting_planned']);
                                                                  if (isset($meet[1])) {
                                                                     $meet = $meet[1];
                                                                  }
                                                                  
                                                                }
                                                                else
                                                                {
                                                                  $meet = '';}
                                                              ?>
                                                              <?php if (isset($IDP_data) && count($IDP_data)>0 && isset($IDP_data['0']['meeting_planned'])) {?>

                                                        <input type="text" name="" class="form-control" id="number_of_meetings4" style="font-size: 16px;" value="<?php echo $meet; ?>" disabled>
                                                    <?php } else{?>
                                                        <input type="text" name="" class="form-control" id="number_of_meetings4" style="font-size: 16px;" value="<?php echo $meet; ?>" disabled>
                                                    <?php } ?>
                                                    
                                              </td>
                                             
                                              <td>

                                                <?php 
                                                                  if (isset($IDP_data['0']['rel_target_date']) && $IDP_data['0']['rel_target_date']!='') { $rel2 = explode(';',$IDP_data['0']['rel_target_date']); ?>
                                                                      
                                                                      <input class="form-control fields date_pickup11   target_date4" type="text" value="<?php echo $rel2[1]; ?>" id="target_date4" <?php echo $set_flag1; ?> style="font-size: 16px;" placeholder="dd-mmm-yyyy" data-provide="datepicker" data-date-autoclose="true" disabled>
                                                                   <?php }
                                                                    else
                                                                    { ?>
                                                                       <input class="form-control fields date_pickup11   target_date4" type="text"  id="target_date4"  placeholder="dd-mmm-yyyy" data-provide="datepicker" data-date-autoclose="true" style="font-size: 16px;" disabled>
                                                                 <?php   }
                                                                ?>



                                                          <!-- <div class="input-group-append">
                                                              <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                          </div> -->
                                              </td>

                                             
                                               <td>
                                                  
                                               
                                                    <div class="radio radio-info form-check-inline" id="yearArel_prgsta1">
                                                          <input type="radio" <?php if(isset($settings_data_new['0']['setting_type']) && strtotime(date('Y-m-d'))>strtotime($settings_data_new['0']['setting_type']))
                                                          { ?>disabled="true"<?php } ?> name='yearArel_prg1'  value="Yes" class='yearArel_prg1' <?php if(isset($year_rel_prg_stat[1])&&$year_rel_prg_stat[1]=="Yes")  { ?>checked='check'<?php } ?>style='position: relative;margin-left: 0px;'><label for="inlineRadio1" >Yes</label>

                                                         
                                                          <input type="radio" <?php if(isset($settings_data_new['0']['setting_type']) && strtotime(date('Y-m-d'))>strtotime($settings_data_new['0']['setting_type']))
                                                          { ?>disabled="true"<?php } ?> name='yearArel_prg1'  value="No" class='yearArel_prg1' <?php if(isset($year_rel_prg_stat[1])&&$year_rel_prg_stat[1]=="No")  { ?>checked='check'<?php } ?>style='position: relative;margin-left: 0px;'><label for="inlineRadio1" >No</label>
                                                    </div>



                                                  </td>
                                                  <td>
                                                      
                                                        
                                                      <?php
                                                          if(isset($settings_data_new['0']['setting_type']) && strtotime(date('Y-m-d'))>strtotime($settings_data_new['0']['setting_type']))
                                                          {?>

                                                            <textarea id="yearArel_program_review1" class="form-control yearArel_program_review"  rows="3" placeholder="" style="font-size: 16px;" disabled='true'>
                                                              <?php if(isset($year_rel_prg_cmt[1]) && $year_rel_prg_cmt[1]!==''){ echo trim($year_rel_prg_cmt[1]);}?>

                                                            </textarea>

                                                          
                                                          <?php } else
                                                          {?>

                                                            <textarea id="yearArel_program_review1" class="form-control yearArel_program_review"  rows="3" placeholder="" style="font-size: 16px;" ><?php if(isset($year_rel_prg_cmt[1]) && $year_rel_prg_cmt[1]!==''){ echo trim($year_rel_prg_cmt[1]);}?>
                                                              
                                                            </textarea>
                                                         
                                                          <?php } ?>
                                                        <!-- <textarea id="yearArel_program_review1" class="form-control yearArel_program_review"  rows="3" placeholder="" style="font-size: 16px;" ></textarea> -->
                                                  </td>
                                              </tr>
                                                
                                           
                                            </tbody>
                                        </table>
                                    </div>


                                    <label style="color: #fff;width:100%;background-color: #216871;padding: 10px;">PART C: DEVELOPMENT THROUGH ACTION LEARNING PROJECTS</label>
                                  <div class="col-md-12">
                                      <div class="partc_last" style="border: 1px solid #ddd;padding: 10px;">
                                        <form class="form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label" >Project Title<span style="color: red;">*</span></label>
                                                <div class="col-md-8">
                                                    <?php 
                                                             $project_title = '';
                                                                if (isset($IDP_data['0']['project_title'])) {
                                                                  $project_title = $IDP_data['0']['project_title'];
                                                                }
                                                                else
                                                                {
                                                                  $project_title = '';
                                                                }
                                                        ?>
                                                    <input type="text" id="project_title" name="" class="form-control form-control-md part3" placeholder="" value="<?php echo $project_title; ?>" disabled>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label" >Review date<span style="color: red;">*</span></label>
                                                <div class="col-md-8">
                                                    <?php
                                                                  if (isset($IDP_data['0']['project_review_date']) && $IDP_data['0']['project_review_date']!=='') { ?>
                                                                      

                                                                       <input type="text" id="rev_date" name="" class="form-control form-control-md part3" placeholder="" value="<?php echo $IDP_data['0']['project_review_date']; ?>" placeholder="dd-mmm-yyyy" data-provide="datepicker" data-date-autoclose="true" disabled>
                                                                   <?php }
                                                                    else
                                                                    { ?>
                                                                      <input class="form-control fields part3 " type="text"  id="rev_date"  placeholder="dd-mmm-yyyy" data-provide="datepicker" data-date-autoclose="true" disabled>
                                                                      
                                                                 <?php   } 
                                                                ?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label" >Due Date<span style="color: red;">*</span></label>
                                                <div class="col-md-8">
                                                    <?php
                                                                  if (isset($IDP_data['0']['project_end_date']) && $IDP_data['0']['project_end_date']!=='') {  ?>
                                                                  <input class="form-control fields part3 "   type="text" value="<?php echo $IDP_data['0']['project_end_date']; ?>" id="due_dateee" maxlength="20" placeholder="dd-mmm-yyyy" data-provide="datepicker" data-date-autoclose="true" disabled>
                                                                       
                                                                   <?php }
                                                                    else
                                                                    { ?>
                                                                      <input class="form-control fields part3 " type="text"  id="due_dateee"  placeholder="dd-mmm-yyyy" data-provide="datepicker" data-date-autoclose="true" disabled>
                                                                 <?php }
                                                                ?>
                                                </div>
                                            </div>

                                             <div class="form-group row">
                                                <label class="col-md-4 col-form-label" >Project scope<span style="color: red;">*</span></label>
                                                <div class="col-md-8">
                                                   <?php 
                                                                $project_scope = '';
                                                                if (isset($IDP_data['0']['project_scope'])) {
                                                                  $project_scope = $IDP_data['0']['project_scope'];
                                                                }
                                                                else
                                                                {
                                                                  $project_scope = '';
                                                                }
                                                                if(isset($IDP_data['0']['set_status']) && count($IDP_data)>0 && $IDP_data['0']['set_status']=='Approved') {?>

                                                                    <input type="text" id="project_scope" name="" class="form-control form-control-md part3" placeholder="" value="<?php echo $project_scope;?>" disabled>

                                                                <?php }else{?>
                                                                      <input type="text" id="project_scope" name="" class="form-control form-control-md part3" placeholder="" value="<?php echo $project_scope;?>" disabled>
                                                                <?php }?>
                                                   
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label" >Project exclusions<span style="color: red;">*</span></label>
                                                <div class="col-md-8">
                                                   <?php 
                                                                $project_exclusion = '';
                                                                if (isset($IDP_data['0']['project_exclusion'])) {
                                                                  $project_exclusion = $IDP_data['0']['project_exclusion'];
                                                                }
                                                                else
                                                                {
                                                                  $project_exclusion = '';
                                                                }
                                                                if(isset($IDP_data['0']['set_status']) && count($IDP_data)>0 && $IDP_data['0']['set_status']=='Approved') {?>

                                                                    <input type="text" id="project_exclusion" name="" class="form-control form-control-md part3" placeholder="" value="<?php echo $project_exclusion;?>" disabled>

                                                                <?php }else{?>
                                                                      <input type="text" id="project_exclusion" name="" class="form-control form-control-md part3" placeholder="" value="<?php echo $project_exclusion;?>" disabled>
                                                                <?php }?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label " >Project deliverables (Target at rating 3: good solid performance)<span style="color: red;">*</span></label>
                                                <div class="col-md-8">
                                                  <?php 
                                                                $Project_deliverables = '';
                                                                if (isset($IDP_data['0']['Project_deliverables'])) {
                                                                  $Project_deliverables = $IDP_data['0']['Project_deliverables'];
                                                                }
                                                                else
                                                                {
                                                                  $Project_deliverables = '';
                                                                }
                                                              if(isset($IDP_data['0']['set_status']) && count($IDP_data)>0 && $IDP_data['0']['set_status']=='Approved') {?>

                                                                  <input type="text" id="project_deliverables" name="" class="form-control form-control-md part3" placeholder="" value="<?php echo $Project_deliverables;?>" disabled>

                                                              <?php }else{?>
                                                                    <input type="text" id="project_deliverables" name="" class="form-control form-control-md part3" placeholder="" value="<?php echo $Project_deliverables;?>" disabled>
                                                              <?php }?>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label " >Learning Goals<span style="color: red;">*</span></label>
                                                <div class="col-md-8">
                                                  <?php 
                                                                $expected = '';
                                                                if (isset($IDP_data['0']['learn_from_project'])) {
                                                                  $expected = $IDP_data['0']['learn_from_project'];
                                                                }
                                                                else
                                                                {
                                                                  $expected = '';
                                                                }
                                                                if(isset($IDP_data['0']['set_status']) && count($IDP_data)>0 && $IDP_data['0']['set_status']=='Approved') {?>

                                                                    <input type="text" id="learning_goals" name="" class="form-control form-control-md part3" placeholder="" value="<?php echo $expected;?>" disabled>

                                                                <?php }else{?>
                                                                      <input type="text" id="learning_goals" name="" class="form-control form-control-md part3" placeholder="" value="<?php echo $expected;?>" disabled>
                                                                <?php }?>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label " >Reviewer(s) name<span style="color: red;">*</span></label>
                                                <div class="col-md-8">
                                                  <?php 
                                                                $review_name = '';
                                                                if (isset($IDP_data['0']['Reviewer'])) {
                                                                  $review_name = $IDP_data['0']['Reviewer'];
                                                                }
                                                                else
                                                                {
                                                                  $review_name = '';
                                                                }
                                                                if(isset($IDP_data['0']['set_status']) && count($IDP_data)>0 && $IDP_data['0']['set_status']=='Approved') {?>

                                                                    <input type="text" id="Reviewer_name" name="" class="form-control form-control-md part3" placeholder="" value="<?php echo $review_name;?>" disabled>

                                                                <?php }else{?>
                                                                      <input type="text" id="Reviewer_name" name="" class="form-control form-control-md part3" placeholder="" value="<?php echo $review_name;?>" disabled>
                                                                <?php }?>

                                                   
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label">Project Status<span style="color: red;">*</span></label>
                                                <div class="col-md-4">
                                                  <select id="yearA_project_status" class="form-control " <?php if(isset($settings_data_new['0']['setting_type']) && strtotime(date('Y-m-d'))>strtotime($settings_data_new['0']['setting_type'])){?>disabled="true"<?php } ?>>
                                                      <option>Select</option>
                                                      <option <?php  if(isset($IDP_data[0]['Year_end_prog_status'])&& $IDP_data[0]['Year_end_prog_status']== "Completed"){ ?> selected<?php }?>>Completed</option>
                                                      <option<?php  if(isset($IDP_data[0]['Year_end_prog_status'])&& $IDP_data[0]['Year_end_prog_status']== "Not Completed"){ ?> selected<?php }?>>Not Completed</option>
                                                      <option<?php  if(isset($IDP_data[0]['Year_end_prog_status'])&& $IDP_data[0]['Year_end_prog_status']== "Not Applicable"){ ?> selected<?php }?>>Not Applicable</option>
                                                  </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label " >Project Status Comments<span style="color: red;">*</span></label>
                                                <div class="col-md-8">
                                                    <?php if(isset($settings_data_new['0']['setting_type']) && strtotime(date('Y-m-d'))>strtotime($settings_data_new['0']['setting_type']))
                                                    { ?>

                                                      <textarea  class="form-control validate_field" id='yearA_prj_stat_comments' rows="3" placeholder="" name="appraisee_comment" style="font-size: 16px;" disabled="true"><?php if(isset($IDP_data[0]['Year_end_prog_comments'])&& $IDP_data[0]['Year_end_prog_comments']!= ""){
                                                        echo trim($IDP_data[0]['Year_end_prog_comments']);
                                                      }?>
                                                        
                                                      </textarea>

                                                    <?php }else{?>

                                                        <textarea  class="form-control validate_field" id='yearA_prj_stat_comments' rows="3" placeholder="" name="appraisee_comment" style="font-size: 16px;"><?php if(isset($IDP_data[0]['Year_end_prog_comments'])&& $IDP_data[0]['Year_end_prog_comments']!= ""){
                                                        echo trim($IDP_data[0]['Year_end_prog_comments']);
                                                      }?>
                                                        
                                                      </textarea>

                                                    <?php }?>
                                                      
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label " >View Document<span style="color: red;">*</span></label>
                                                <div class="col-md-8">

                                                      <button>Upload</button>
                                                </div>
                                            </div>

                                        </form>
                                      </div>
                                  </div>


                                

                                <div class="btn-group col-md-12" style="float:left">

                                        
                                         
                                     
                                        
                                       
                                        
                                </div>
                                <div class="button-list">
                                        <button type="button" class="btn btn-secondary waves-effect waves-light back" style="font-size: 16px;float: left;padding: 8px;font-weight: bold;margin-top: 20px;">Back</button>   
                                </div>




                                    
                                    </section>
                  </div>
                    
                <!-- <h3 style="font-weight: bold;">Individual Development Plan (IDP)</h3> -->
                                        

               </div>





                        </div> <!-- end card-box -->

                        <div>
                          
                        </div>


                    </div> <!-- end col -->
                </div>


<script type="text/javascript">
	$("body").on('click','.next',function(){
  


          $('#pills-home-tab').removeClass('active');
          $('#pills-profile-tab').addClass('active');
          $('.scnd').addClass('active');
          $('#pills-profile').addClass('active show in');
          $('#pills-home').removeClass('active show in');

          $('.page-title-alt-bg1').text('Individual Development Plan (IDP)');
          $('#pills-profile-tab').css('background-color','#188ae2');
          $('#pills-home-tab').css('background-color','#eeeeee');
          $('#pills-home-tab').css('color','#686767');
          // $('.card-box').css('padding-bottom','466px');
          $("body").scrollTop(0);



  });

  $('.back').click(function(){
    
      $('#pills-profile-tab').removeClass('active');
      $('#pills-home-tab').addClass('active');
      $('.first').addClass('active');
      $('.scnd').removeClass('active');
      $('#pills-home').addClass('active show in');
      $('#pills-profile').removeClass('active show in');

      $('.page-title-alt-bg1').text('Goalsheet');
      $('#pills-home-tab').css('color','#fff');
      $('#pills-home-tab').css('background-color','#188ae2');
      $('#pills-profile-tab').css('background-color','#eeeeee');
      $('.card-box').css('padding-bottom','0px');
      $("body").scrollTop(0);
  });

  $('.scnd').click(function(){
    $('.page-title-alt-bg1').text('Individual Development Plan (IDP)');
    $('#pills-profile-tab').css('background-color','#188ae2');
    $('#pills-home-tab').css('background-color','#eeeeee');
        // $('.card-box').css('padding-bottom','466px');
        
     

  });
  $('.first').click(function(){
    $('.page-title-alt-bg1').text('Goalsheet');
    $('#pills-home-tab').css('background-color','#188ae2');
    $('#pills-profile-tab').css('background-color','#eeeeee');
        $('.card-box').css('padding-bottom','0px');
        $('#pills-home-tab').css('color','#fff');
       
  });

</script>


@endsection