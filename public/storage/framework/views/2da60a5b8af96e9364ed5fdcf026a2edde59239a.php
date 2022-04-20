<?php $__env->startSection('home_content'); ?>

<!-- <div class="container-fluid">

                
                <div class="page-title-alt-bg"></div>
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Goalshet & IDP</a></li>
                        </ol>
                    </div>
                    <h4 class="page-title">Goalshet & IDP</h4>
                </div> 
                

                <div class="row">
                	<div class="">
                		
                	</div>
                    

                </div>
                
                
            </div>  -->



<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

// $this->title = 'Goalsheet & IDP';
// $this->params['breadcrumbs'][] = $this->title;
?>
<style type="text/css">
  .display-none{
  display:none;
}
.display-block{
  display:block;
}
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
  }

  .catg .dropdown-toggle, .wtg .dropdown-toggle{
    padding: 6px 5px;
    font-size: 16px;
  }
  
@keyframes  animate{ 
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
#err,#cascade_list{ 
        
        top: 144px; 
        z-index: 10000000000000000000000000000; 
        width: 426px;
        height: 60px;
        border: 1px solid #6c757d;
        text-align: center;
        padding-top: 10px;
        left: 32%;
        background-color: #AB5454;
        color: #FFF;
        font-weight: bold;  
        position: fixed;  
    }

#cascade_list{
  top: 144px; 
        z-index: 10000000000000000000000000000; 
       
        border: 1px solid #fff;
        text-align: center;
        padding-top: 20px;
        left: 32%;
        background-color: #fff;
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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Goalsheet & IDP</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Self</a></li>
                            <!-- <li class="breadcrumb-item active">Goalsheet & IDP</li> -->
                        </ol>
                    </div>
                    <h1 class="page-title" style="font-size: medium;">Goalsheet & IDP</h1>
                </div> 
                <!-- end page title -->
<!-- ////////////////////////////////////////////START PAGE ///////////////////////////////////////// -->
        
                <div class="row">

                    <div class="col-md-12">
                        <div class="card-box">

                          <!--   <h4 class="header-title">Goalsheet</h4> -->
                              
                              <div class="col-xl-12 text-right mb-3">

                                 <!--  <button class="btn btn-primary" id="download">Download pdf</button> -->

                              </div>


                              <select class="selectpicker col-md-4 year" name="financial_year" id="financial_year" data-live-search="true" data-style="btn-dark" style="padding-right: 0px;padding-left: 0px;">
                                  
                                            <option>--Select--</option>
                                            <option>2016-2017</option>
                                            <option>2017-2018</option>
                                            <option>2018-2019</option>
                                            <option>2019-2020</option>
                                            <option>2020-2021</option>
                                           <option>2021-2022</option>
                                      
                              </select>
                                <!-- Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element. -->

                                

                                <div class="table-responsive" style="margin-bottom: 20px;">
                                  <table class="table table-bordered mb-0">
                                      <thead>
                                      
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <th class="col-md-3">Employee Name</th>
                                          <td class="col-md-3">
                                            <?php 
                                                      if(isset($emp_data)&& count($emp_data)>0){ echo $emp_data[0]['Emp_fname']." ".$emp_data[0]['Emp_lname'];
                                                                }?>
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
                                          <td class="col-md-3"></td>
                                          <th class="col-md-3">Financial Year</th>
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
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false" style="background-color: #eeeeee;">2. Individual Development Plan (IDP)</a>
                              </li>
                              
                            </ul>


                              <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" style="opacity: 1;">
                  
                              <section style="padding-bottom: 73px;">
                                  <label class="col-md-12" style="color: #fff;background-color: #216871;padding: 10px;">

                                    <?php if(isset($cascade_flag) && $cascade_flag=='1'){?>Cascade KPI<?php }else{ ?>
                                  Set Goalsheet<?php } ?></label>


                                   <div class="table-responsive" id='kpi_table' style="border: 1px solid #ddd;">
                                      <table class="table mb-0">
                                          <thead>
                                         
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  
                                                  <td class="col-md-4">KRA Category</td>
                                                  <td class="col-md-4">
                                                    
                                                       <!--    

                                                        <select class="form-control target_value col-md-5" id="target_value" name="" >
                                                            <option value="---select----">---select----</option>
                                                            <option value="People">People</option>
                                                            <option value="Customer">Customer</option>
                                                            <option value="Business">Business</option>
                                                            <option value="Process">Process</option>
                                                        </select>
                                                            -->

                                                        <?php 
                                                            //print_r($kpi_auto_data);die();
                                                             if (isset($kra_list) && count($kra_list)>0) {


                                                             // print_r($kra_list);
                                                                $list_data = '';
                                                                $models = new KRAStructureForm();
                                                                 $models1 = $models->findAll();
                                                                $list = CHtml::listData($models1,'KRA_category', 'KRA_category');
                                                             }
                                                            $kpi_category = '';$kpi_desc = '';$wtg = '';$kpi_count = '';$target_value1 = '';$target_unit = '';$kpi_id = '';
                                                           $format_list = array('Select' => 'Select','Days' => 'Days','Date' => 'Date','Units' => 'Units','Weight' => 'Weight','Ratio' => 'Ratio','Value' => 'Value','Percentage' => 'Percentage','Text' => 'Text');
                                                            $wtage = array('10'=>'10','15'=>'15','20'=>'20','25'=>'25','30'=>'30','35'=>'35','40'=>'40','45'=>'45','50'=>'50','55'=>'55','60'=>'60');
                                                            if (isset($kpi_data_edit) && count($kpi_data_edit)>0) {
                                                               $kpi_category[$kpi_data_edit['0']['KRA_category']] = array('selected' => 'selected');
                                                               //print_r($kpi_category);die();
                                                               $kpi_desc = $kpi_data_edit['0']['KRA_description'];
                                                               $kpi_id = $kpi_data_edit['0']['KPI_id'];
                                                               $list_count = explode(';', $kpi_data_edit['0']['target_unit']);
                                                               $wtg[$kpi_data_edit['0']['target']] = array('selected' => 'selected');
                                                               $kpi_count = explode(';', $kpi_data_edit['0']['kpi_list']);
                                                               $target_unit = explode(';', $kpi_data_edit['0']['target_unit']);
                                                               //print_r($target_unit);die();
                                                               $target_value1 = explode(';', $kpi_data_edit['0']['target_value1']);
                                                               $per_kpi_wt = explode(';', $kpi_data_edit['0']['KPI_target_value']);
                                                               $kpi_category1 = $kpi_data_edit['0']['KRA_category'];
                                                            }
                                                           
                                                           
                                                            ?><label></label>



                                                  </td>
                                                
                                              </tr>
                                              <tr>
                                                 
                                                 <!--  <td class="col-md-4">KRA Description</td> 
                                                  <td class="col-md-8">
                                                    <input type="text" id="KRA_description" name="" class="form-control" style="font-size: 16px;">
                                                  </td> -->
                                                  <?php 


                                                          if (isset($kpi_data_edit) && count($kpi_data_edit)>0) {
                                                               $kpi_id = $kpi_data_edit['0']['KPI_id'];
                                                               
                                                            }

                                                  ?>


                                                  <td class="col-md-4"><label id="kpi_edit_id" style="display: none"><?php echo $kpi_id; ?></label>
                                                                KRA Description
                                                  </td>
                                                  <td class="col-md-8">                
                                                        
                                                  </td>
                                                  
                                              </tr>
                                              <tr>

                                              <tr>



                                                  <td class="col-md-4">
                                                                  Weightage
                                                  </td>
                                                  <td class="col-md-8" align="center" id="Weightage_list">
                                                     
                                                  </td>
                                               
                                              </tr>
                                              
                                          
                                          <!-- 
                                  <div class="table-responsive" id='kpi_record' style="border-bottom: 2px solid #ddd;"> -->
                                      <table class="table table-bordered mb-0" style="border-top: 2px solid #ddd;" id='kpi_record'>
                                          <thead>
                                              <tr id="get_target_value">

                                                  <?php if(isset($cascade_flag) && $edit_flag=='2'){?>
                                                      <th style="text-align: center;">Select Kpi</th>

                                                   <?php }else if(isset($edit_flag) && $edit_flag=='1'){?>
                                                        <th style="text-align:center;">Delete </th>
                                                  <?php } else{}?>
                                                  <th style=""> Key Performance Indicator (KPI) description  </th>
                                                  <th style="text-align:center;"> Unit </th>
                                                  <th style="text-align:center;"> KPI Weightage </th>
                                                  <th style="text-align:center;"> Value </th>
                                                  <th style="text-align:center;"> (1)<br>Unsatisfactory <br>Performance1</th>
                                                  <th style="text-align:center;"> (2)<br>Needs<br>Improvement </th>
                                                  <th style="text-align:center;"> (3)<br>Good Solid <br>Performance </th>
                                                  <th style="text-align:center;"> (4)<br>Superior <br>Performance </th>
                                                  <th style="text-align:center;"> (5)<br>Outstanding <br>Performance </th>
                                                
                                                  <!-- <th style="text-align:center;">Delete </th> -->
                                                  
                                              </tr>
                                       </thead>


                                          <tbody>
                                            <?php 
                                                    if (isset($kpi_data_edit) && count($kpi_data_edit)>0) {
                                                          
                                                               
                                                             $kpi_id = $kpi_data_edit['0']['KPI_id'];
                                                               
                                            }?>
                                            <tr id="other_format_text">
                                                   <label id="kpi_list_number" style="display:none"><?php if(isset($kpi_count) && $kpi_count != '' && count($kpi_count) != 1)
                                                    {
                                                        echo count($kpi_count);
                                                    }else if(isset($KRA_category_auto['0']['minimum_kpi'])) { echo $KRA_category_auto['0']['minimum_kpi']; } ?></label>
                                                    <label id='min_kpiwt' style="display: none"><?php if(isset($KRA_category_auto['0']['min_kpi_wt']) && $KRA_category_auto['0']['min_kpi_wt'] != ''){ echo $KRA_category_auto['0']['min_kpi_wt']; }?></label>
                                                    <label id='min_kpi' style="display: none"><?php if(isset($KRA_category_auto['0']['minimum_kpi']) && $KRA_category_auto['0']['minimum_kpi'] != ''){ echo $KRA_category_auto['0']['minimum_kpi']; }?></label><label style="display: none" id='max_kpi'></label>
                                                    <label style="display: none" id='target_need1'></label>
                                                    <label style="display: none" id='target_need2'></label>
                                                    <label style="display: none" id='target_need3'></label>
                                                    <label style="display: none" id='target_need4'></label>
                                                    <label style="display: none" id='target_need5'></label>                                                   
                                                    <?php 
                                                        $val = array();
                                                        $disable_select = true;
                                                        $disable_select1 = false;
                                                         if (isset($list_count) && $list_count!='') {
                                                            $cnt = 0;
                                                            $list_cnt = 0;
                                                            //print_r(count($list_count));die();
                                                            if (isset($KRA_category_auto['0']['minimum_kpi']) && count($list_count) == 1) {
                                                                $list_cnt = $KRA_category_auto['0']['minimum_kpi'];
                                                            }
                                                            else
                                                            {
                                                                $list_cnt = count($list_count);
                                                            }
                                                            
                                                            //print_r($KRA_category_auto['0']['minimum_kpi']);die();
                                                           
                                                            for ($i=0; $i < $list_cnt; $i++) {
                                                                
                                                                if(isset($target_unit[$cnt]))
                                                                {
                                                                    $unit = $target_unit[$cnt];
                                                                }                   
                                                                
                                                                
                                                                if (isset($unit) && $unit=='Select') {
                                                                    $unit_type[$unit] = array('selected' => 'selected');
                                                                    $unit_target = '';
                                                                    for ($j=0; $j < 5; $j++) { 
                                                                        $val[$i][$j] = '';
                                                                    }
                                                                    $disable_select = true;

                                                                }
                                                                else if (isset($unit) && $unit=='Days' || $unit=='Text' || $unit=='Ratio' || $unit=='Percentage' || $unit=='Date') { 

                                                                $disable_select = false; 
                                                                $disable_select1 = true;                                                                
                                                                    $unit_target = '';
                                                                     $unit_type[$unit] = array('selected' => 'selected');
                                                                //      if ($unit == '') {
                                                                //    print_r("gfhfg");die();
                                                                // }
                                                                // else
                                                                // {
                                                                //     print_r($target_unit);die();
                                                                // }
                                                                     
                                                                    if (isset($target_value1[$i]) && $target_value1[$i] != '') {
                                                                       $val_data = explode('-',$target_value1[$i]);
                                                                        for ($j=0; $j < count($val_data); $j++) { 
                                                                            if(isset($val_data[$j]))
                                                                            {
                                                                                $val[$i][$j] = $val_data[$j];
                                                                            }                                                                            
                                                                        }
                                                                        
                                                                    }
                                                                    else
                                                                    {
                                                                         for ($j=0; $j < 5; $j++) { 
                                                                            $val[$i][$j] = '';
                                                                        }
                                                                    }



                                                                    
                                                                   
                                                                }
                                                                else if(isset($unit) && $unit=='Units' || $unit=='Weight' || $unit=='Value')
                                                                {
                                                                    $disable_select = true;
                                                                    $disable_select1 = false;
                                                                    $unit_type[$unit] = array('selected' => 'selected');
                                                                   if (isset($target_value1[$cnt]) && isset($target_value1[$i]) && count($target_unit[$cnt])>0 && ($target_value1[$i]!='' || $target_value1[$i]!=0)) {
                                                                       $unit_target = $target_value1[$i];
                                                                           for ($j=0; $j < 5; $j++) { 
                                                                            if ($j==0) {
                                                                                $val[$i][$j] = '< '.round($unit_target*0.69,2);
                                                                            }
                                                                            else if($j==1)
                                                                            {
                                                                                $val[$i][$j] = round($unit_target*0.70,2)." to ".round($unit_target*0.95,2);
                                                                            }
                                                                            else if($j==2)
                                                                            {
                                                                                $val[$i][$j] = round($unit_target*0.96,2)." to ".round($unit_target*1.05,2);
                                                                            }
                                                                            else if($j==3)
                                                                            {
                                                                                $val[$i][$j] = round($unit_target*1.06,2)." to ".round($unit_target*1.29,2);
                                                                            }
                                                                            else if($j==4)
                                                                            {
                                                                                $val[$i][$j] = '> '.round($unit_target*1.39,2);
                                                                            }
                                                                            
                                                                        }
                                                                    }
                                                                    else
                                                                    {
                                                                        $unit_target = '';
                                                                        for ($j=0; $j < 5; $j++) { 
                                                                            $val[$i][$j] = '';
                                                                        }
                                                                    }
                                                                    
                                                                                                                                     
                                                                    
                                                                }
                                                                 $cnt++;
                                             if (isset($format_list)) {
                                                 $format_list = $format_list;
                                             }
                                             else
                                             {
                                                $format_list = '';
                                             }
                                             if (isset($per_kpi_wt[$i])) {
                                                 $per_kpi_wt[$i] = $per_kpi_wt[$i];
                                             }
                                             else
                                             {
                                                $per_kpi_wt[$i] = '';
                                             }
                                             if (isset($kpi_count[$i])) {
                                                 $kpi_count[$i] = $kpi_count[$i];
                                             }
                                             else
                                             {
                                                $kpi_count[$i] = '';
                                             }
                                              if (isset($unit_type)) {
                                                 $unit_type = $unit_type;
                                             }
                                             else
                                             {
                                                $unit_type = '';
                                             }
                                             if (isset($unit_target)) {
                                                 $unit_target = $unit_target;
                                             }
                                             else
                                             {
                                                $unit_target = '';
                                             }
                                              if (isset($disable_select)) {
                                                 $disable_select = $disable_select;
                                             }
                                             else
                                             {
                                                $disable_select = '';
                                             }
                                             if (isset($disable_select1)) {
                                                 $disable_select1 = $disable_select1;
                                             }
                                             else
                                             {
                                                $disable_select1 = '';
                                             }
                                             if (isset($val[$i][0])) {
                                                 $val[$i][0] = $val[$i][0];
                                             }
                                             else
                                             {
                                                $val[$i][0] = '';
                                             }
                                             if (isset($val[$i][1])) {
                                                 $val[$i][1] = $val[$i][1];
                                             }
                                             else
                                             {
                                                $val[$i][1] = '';
                                             }
                                             if (isset($val[$i][2])) {
                                                 $val[$i][2] = $val[$i][2];
                                             }
                                             else
                                             {
                                                $val[$i][2] = '';
                                             }
                                             if (isset($val[$i][3])) {
                                                 $val[$i][3] = $val[$i][3];
                                             }
                                             else
                                             {
                                                $val[$i][3] = '';
                                             }
                                             if (isset($val[$i][4])) {
                                                 $val[$i][4] = $val[$i][4];
                                             }
                                             else
                                             {
                                                $val[$i][4] = '';
                                             }

                                             if(isset($cascade_flag) && $cascade_flag!='' && $edit_flag='2'){

                                               if (isset($kpi_data_edit) && count($kpi_data_edit)>0) {
                                                    $kpi_id = $kpi_data_edit['0']['KPI_id'];
                                                               
                                                            }



echo '<tr>
<td><input type="checkbox" id="'.$i.'_'.$kpi_id.'" value="'.$kpi_id.'" class="'.$kpi_id.'"></td>




<td id="kpilist_'.$i.'"  style="width: 10px;"><input type="text" class="form-control kpi_list"  style="display: none">'.CHtml::textarea('kpi_list',$kpi_count[$i],array('maxlength'=>'1000','rows'=>'3','class'=>'form-control kpi_list validate_field','id'=>'kpilistyii_'.$i.'','style'=>'width: 250px;','data-toggle'=>'popover','data-trigger'=>'hover','data-placement'=>'bottom')).'<div id="kpi_list_drop_'.$i.'" style="position: absolute;border: 1px solid rgb(177, 178, 178);padding: 15px;display: none;background-color: rgb(177, 178, 178);opacity: 0.8;width: 326px;height: auto;max-height: 200px;overflow-y: scroll;"></div></td>
<td>'.CHtml::dropDownList("format_list",'',$format_list,$htmlOptions=array('class'=>'form-control format_list format_detail','id'=>'mask_number-'.$i,'options' => $unit_type,'style'=>'width: 135px;font-size:16px')).'</td>
<td>'.CHtml::textField('kpi_target_value',$per_kpi_wt[$i],array('class'=>'form-control fields ','id'=>'kpi_target_value-'.$i,"maxlength"=>"1000")).'</td>
<td id="value_field">'.CHtml::textField('unit_value','',array('class'=>'form-control validate_field','id'=>'unit_value','style'=>'display:none',"maxlength"=>"1000")).CHtml::textField('unit_value',$unit_target,array('class'=>'form-control validate_field value_field','id'=>'unit_value-'.$i.'','disabled' => $disable_select1,'data-toggle'=>'popover','data-trigger'=>'hover','data-placement'=>'bottom','style'=>'width:89px')).'</td>
<td>'.CHtml::textField('target_value1',$val[$i][0],array('class'=>($unit=='Date') ? "form-control fields date_pickup validate_field target_value1".$i:"form-control fields validate_field target_value1".$i,'disabled' => $disable_select,'data-toggle'=>'popover','data-trigger'=>'hover','data-placement'=>'bottom')).'</td>
<td>'.CHtml::textField('target_value2',$val[$i][1],array('class'=>($unit=='Date') ? "form-control fields date_pickup validate_field target_value2".$i:"form-control fields validate_field target_value2".$i,'disabled' => $disable_select,'data-toggle'=>'popover','data-trigger'=>'hover','data-placement'=>'bottom')).'</td>
<td>'.CHtml::textField('target_value3',$val[$i][2],array('class'=>($unit=='Date') ? "form-control fields date_pickup validate_field target_value3".$i:"form-control fields validate_field target_value3".$i,'disabled' => $disable_select,'data-toggle'=>'popover','data-trigger'=>'hover','data-placement'=>'bottom')).'</td><td>'.CHtml::textField('target_value4',$val[$i][3],array('class'=>($unit=='Date') ? "form-control fields date_pickup validate_field target_value4".$i:"form-control fields validate_field target_value4".$i,'disabled' => $disable_select,'data-toggle'=>'popover','data-trigger'=>'hover','data-placement'=>'bottom')).'</td>
<td>'.CHtml::textField('target_value5',$val[$i][4],array('class'=> ($unit=='Date') ? "form-control fields date_pickup validate_field target_value5".$i:"form-control fields validate_field target_value5".$i,'disabled' => $disable_select,'data-toggle'=>'popover','data-trigger'=>'hover','data-placement'=>'bottom')).'</td>

</tr>';   
                                 $unit_type='';

                                             }
                                             
                                              else if(isset($edit_flag) && $edit_flag!='')
                                             {




                                              if (isset($kpi_data_edit) && count($kpi_data_edit)>0) {


                                                    $kpi_id = $kpi_data_edit['0']['KPI_id'];
                                              }
                                              
                                              if(isset($cascaded_data) && count($cascaded_data)!='0'){

                                                   

                                                    if(isset($cascaded_data['0']['access_flag']) && $cascaded_data['0']['access_flag']!==''){
                                                      $acc_data1=$cascaded_data['0']['access_flag'];
                                                      
                                                    }
                                                    if(isset($cascaded_data['0']['kpi_count']) && $cascaded_data['0']['kpi_count']!==''){

                                                        $kpi_cnt1=$cascaded_data['0']['kpi_count'];
                                                        $kpi_cnt=explode(";",$kpi_cnt1);

                                                    }

                                                 }   
                                                        
                                                   if(isset($kpi_cnt[$i]) && count($kpi_cnt[$i])>0 && $acc_data1=='2'){

                                                  

                                              echo '<tr>
<td></td>

<td id="kpilist_'.$i.'"  style="width: 10px;"><input type="text" class="form-control kpi_list"  style="display: none">'.CHtml::textarea('kpi_list',$kpi_count[$i],array('maxlength'=>'1000','rows'=>'3','class'=>'form-control kpi_list validate_field','id'=>'kpilistyii_'.$i.'','style'=>'width: 250px;','data-toggle'=>'popover','data-trigger'=>'hover','data-placement'=>'bottom','disabled'=>'disabled')).'<div id="kpi_list_drop_'.$i.'" style="position: absolute;border: 1px solid rgb(177, 178, 178);padding: 15px;display: none;background-color: rgb(177, 178, 178);opacity: 0.8;width: 326px;height: auto;max-height: 200px;overflow-y: scroll;"></div></td>
<td>'.CHtml::dropDownList("format_list",'',$format_list,$htmlOptions=array('class'=>'form-control format_list format_detail','id'=>'mask_number-'.$i,'options' => $unit_type,'style'=>'width: 135px;font-size:16px','disabled'=>'disabled')).'</td>
<td>'.CHtml::textField('kpi_target_value',$per_kpi_wt[$i],array('class'=>'form-control fields ','id'=>'kpi_target_value-'.$i,"maxlength"=>"1000",'disabled'=>'disabled')).'</td>
<td id="value_field">'.CHtml::textField('unit_value','',array('class'=>'form-control validate_field','id'=>'unit_value','style'=>'display:none;disabled:disabled',"maxlength"=>"1000",'disabled'=>'disabled')).CHtml::textField('unit_value',$unit_target,array('class'=>'form-control validate_field value_field','id'=>'unit_value-'.$i.'','disabled' => $disable_select1,'data-toggle'=>'popover','data-trigger'=>'hover','data-placement'=>'bottom','style'=>'width:89px','disabled'=>'disabled')).'</td>
<td>'.CHtml::textField('target_value1',$val[$i][0],array('class'=>($unit=='Date') ? "form-control fields date_pickup validate_field target_value1".$i:"form-control fields validate_field target_value1".$i,'disabled' => $disable_select,'data-toggle'=>'popover','data-trigger'=>'hover','data-placement'=>'bottom','disabled'=>'disabled')).'</td>
<td>'.CHtml::textField('target_value2',$val[$i][1],array('class'=>($unit=='Date') ? "form-control fields date_pickup validate_field target_value2".$i:"form-control fields validate_field target_value2".$i,'disabled' => $disable_select,'data-toggle'=>'popover','data-trigger'=>'hover','data-placement'=>'bottom','disabled'=>'disabled')).'</td>
<td>'.CHtml::textField('target_value3',$val[$i][2],array('class'=>($unit=='Date') ? "form-control fields date_pickup validate_field target_value3".$i:"form-control fields validate_field target_value3".$i,'disabled' => $disable_select,'data-toggle'=>'popover','data-trigger'=>'hover','data-placement'=>'bottom','disabled'=>'disabled')).'</td><td>'.CHtml::textField('target_value4',$val[$i][3],array('class'=>($unit=='Date') ? "form-control fields date_pickup validate_field target_value4".$i:"form-control fields validate_field target_value4".$i,'disabled' => $disable_select,'data-toggle'=>'popover','data-trigger'=>'hover','data-placement'=>'bottom','disabled'=>'disabled')).'</td>
<td>'.CHtml::textField('target_value5',$val[$i][4],array('class'=> ($unit=='Date') ? "form-control fields date_pickup validate_field target_value5".$i:"form-control fields validate_field target_value5".$i,'disabled' => $disable_select,'data-toggle'=>'popover','data-trigger'=>'hover','data-placement'=>'bottom','disabled'=>'disabled')).'</td>

</tr>';   
                                 $unit_type='';
    


                                          }else{



echo '<tr>
<td><i class="mdi mdi-trash-can-outline del_kra_kpi" style="cursor: pointer;font-size:24px;color: rgb(51, 122, 183);padding-left: 3px;padding-right: 8px;" id="del_kra_kpi-'.$kpi_id.'-'.$i.'" title="Delete" aria-hidden="true"></i></td>

<td id="kpilist_'.$i.'"  style="width: 10px;"><input type="text" class="form-control kpi_list"  style="display: none">'.CHtml::textarea('kpi_list',$kpi_count[$i],array('maxlength'=>'1000','rows'=>'3','class'=>'form-control kpi_list validate_field','id'=>'kpilistyii_'.$i.'','style'=>'width: 250px;','data-toggle'=>'popover','data-trigger'=>'hover','data-placement'=>'bottom')).'<div id="kpi_list_drop_'.$i.'" style="position: absolute;border: 1px solid rgb(177, 178, 178);padding: 15px;display: none;background-color: rgb(177, 178, 178);opacity: 0.8;width: 326px;height: auto;max-height: 200px;overflow-y: scroll;"></div></td>
<td>'.CHtml::dropDownList("format_list",'',$format_list,$htmlOptions=array('class'=>'form-control format_list format_detail','id'=>'mask_number-'.$i,'options' => $unit_type,'style'=>'width: 135px;font-size:16px')).'</td>
<td>'.CHtml::textField('kpi_target_value',$per_kpi_wt[$i],array('class'=>'form-control fields ','id'=>'kpi_target_value-'.$i,"maxlength"=>"1000")).'</td>
<td id="value_field">'.CHtml::textField('unit_value','',array('class'=>'form-control validate_field','id'=>'unit_value','style'=>'display:none',"maxlength"=>"1000")).CHtml::textField('unit_value',$unit_target,array('class'=>'form-control validate_field value_field','id'=>'unit_value-'.$i.'','disabled' => $disable_select1,'data-toggle'=>'popover','data-trigger'=>'hover','data-placement'=>'bottom','style'=>'width:89px')).'</td>
<td>'.CHtml::textField('target_value1',$val[$i][0],array('class'=>($unit=='Date') ? "form-control fields date_pickup validate_field target_value1".$i:"form-control fields validate_field target_value1".$i,'disabled' => $disable_select,'data-toggle'=>'popover','data-trigger'=>'hover','data-placement'=>'bottom')).'</td>
<td>'.CHtml::textField('target_value2',$val[$i][1],array('class'=>($unit=='Date') ? "form-control fields date_pickup validate_field target_value2".$i:"form-control fields validate_field target_value2".$i,'disabled' => $disable_select,'data-toggle'=>'popover','data-trigger'=>'hover','data-placement'=>'bottom')).'</td>
<td>'.CHtml::textField('target_value3',$val[$i][2],array('class'=>($unit=='Date') ? "form-control fields date_pickup validate_field target_value3".$i:"form-control fields validate_field target_value3".$i,'disabled' => $disable_select,'data-toggle'=>'popover','data-trigger'=>'hover','data-placement'=>'bottom')).'</td><td>'.CHtml::textField('target_value4',$val[$i][3],array('class'=>($unit=='Date') ? "form-control fields date_pickup validate_field target_value4".$i:"form-control fields validate_field target_value4".$i,'disabled' => $disable_select,'data-toggle'=>'popover','data-trigger'=>'hover','data-placement'=>'bottom')).'</td>
<td>'.CHtml::textField('target_value5',$val[$i][4],array('class'=> ($unit=='Date') ? "form-control fields date_pickup validate_field target_value5".$i:"form-control fields validate_field target_value5".$i,'disabled' => $disable_select,'data-toggle'=>'popover','data-trigger'=>'hover','data-placement'=>'bottom')).'</td>

</tr>';   
                                 $unit_type='';





                                          }
     

                                                
 
                                             }
                                             else{ 
                                             
                                         echo '<tr>
<td id="kpilist_'.$i.'"  style="width: 10px;"><input type="text" class="form-control kpi_list"  style="display: none">'.CHtml::textarea('kpi_list',$kpi_count[$i],array('maxlength'=>'1000','rows'=>'3','class'=>'form-control kpi_list validate_field','id'=>'kpilistyii_'.$i.'','style'=>'width: 250px;','data-toggle'=>'popover','data-trigger'=>'hover','data-placement'=>'bottom')).'<div id="kpi_list_drop_'.$i.'" style="position: absolute;border: 1px solid rgb(177, 178, 178);padding: 15px;display: none;background-color: rgb(177, 178, 178);opacity: 0.8;width: 326px;height: auto;max-height: 200px;overflow-y: scroll;"></div></td>
<td>'.CHtml::dropDownList("format_list",'',$format_list,$htmlOptions=array('class'=>'form-control format_list format_detail','id'=>'mask_number-'.$i,'options' => $unit_type,'style'=>'width: 135px;font-size:16px')).'</td>
<td>'.CHtml::textField('kpi_target_value',$per_kpi_wt[$i],array('class'=>'form-control fields ','id'=>'kpi_target_value-'.$i,"maxlength"=>"1000")).'</td>
<td id="value_field">'.CHtml::textField('unit_value','',array('class'=>'form-control validate_field','id'=>'unit_value','style'=>'display:none',"maxlength"=>"1000")).CHtml::textField('unit_value',$unit_target,array('class'=>'form-control validate_field value_field','id'=>'unit_value-'.$i.'','disabled' => $disable_select1,'data-toggle'=>'popover','data-trigger'=>'hover','data-placement'=>'bottom','style'=>'width:89px')).'</td>
<td>'.CHtml::textField('target_value1',$val[$i][0],array('class'=>($unit=='Date') ? "form-control fields date_pickup validate_field target_value1".$i:"form-control fields validate_field target_value1".$i,'disabled' => $disable_select,'data-toggle'=>'popover','data-trigger'=>'hover','data-placement'=>'bottom')).'</td>
<td>'.CHtml::textField('target_value2',$val[$i][1],array('class'=>($unit=='Date') ? "form-control fields date_pickup validate_field target_value2".$i:"form-control fields validate_field target_value2".$i,'disabled' => $disable_select,'data-toggle'=>'popover','data-trigger'=>'hover','data-placement'=>'bottom')).'</td>
<td>'.CHtml::textField('target_value3',$val[$i][2],array('class'=>($unit=='Date') ? "form-control fields date_pickup validate_field target_value3".$i:"form-control fields validate_field target_value3".$i,'disabled' => $disable_select,'data-toggle'=>'popover','data-trigger'=>'hover','data-placement'=>'bottom')).'</td><td>'.CHtml::textField('target_value4',$val[$i][3],array('class'=>($unit=='Date') ? "form-control fields date_pickup validate_field target_value4".$i:"form-control fields validate_field target_value4".$i,'disabled' => $disable_select,'data-toggle'=>'popover','data-trigger'=>'hover','data-placement'=>'bottom')).'</td>
<td>'.CHtml::textField('target_value5',$val[$i][4],array('class'=> ($unit=='Date') ? "form-control fields date_pickup validate_field target_value5".$i:"form-control fields validate_field target_value5".$i,'disabled' => $disable_select,'data-toggle'=>'popover','data-trigger'=>'hover','data-placement'=>'bottom')).'</td>

</tr>';   
                                 $unit_type='';
                  
                                                 
                                                 
                                            // print_r("fdgfdgf");die();
                                                       } } } 
                                                        
                                                    ?> 
                                                    <?php  if (isset($kpi_data_edit) && count($kpi_data_edit)>0) {
                                                               $kpi_id = $kpi_data_edit['0']['KPI_id'];
                                                               
                                                            } ?>  
                                                    <tr id="extra_kpi<?php echo $kpi_id; ?>">
                                                        
                                                    </tr> 
                                          </tbody>
                                      </table>
                                  
                                  </tr>                                             
                                                </table><br></div>





                                  <div class="row">
                                    <div class="col-md-7 button-list" style="margin-bottom: 10px;">

                                      <?php if(isset($cascade_flag) && $cascade_flag!='' && $edit_flag='2'){
                                        ?>

                                        <button type="button" class="btn btn-primary waves-effect waves-light cascade_submit" id='<?php echo $kpi_data_edit['0']['KPI_id'];?>' style="float: right;font-size: 17px;margin-top: 20px;"> 
                                            <span>Cascade</span> <i class="mdi mdi-content-save-move"></i> 
                                        </button>

                                         <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Goalsheet/">
                                            <button type="button" class="btn btn-dark waves-effect waves-light" style="float: right;font-size: 17px;margin-top: 20px;"> 
                                                <span>Back</span> <i class="icon-action-undo"></i> 
                                            </button></a>

                                      <?php }else if(isset($edit_flag) && $edit_flag!=''){?>

      
                                                       <label id="single_kpi_id" style="display:none;"><?php if(isset($kpi_data_edit['0']['target_value2']) &&  $kpi_data_edit['0']['target_value2']!==''){echo $kpi_data_edit['0']['target_value2'];}?></label>
                                                      <button type="button" class="btn btn-primary waves-effect waves-light" id='kpi_update_data' style="float: right;font-size: 17px;margin-top: 20px;"> 
                                                          <span>Update</span> <i class="mdi mdi-content-save-move"></i> 
                                                      </button>
                                                 
                                                      <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Goalsheet/">
                                                        <button type="button" class="btn btn-dark waves-effect waves-light" style="float: right;font-size: 17px;margin-top: 20px;"> 
                                                            <span>Back</span> <i class="icon-action-undo"></i> 
                                                        </button></a>
                                                      
                                                       <?php
                                                                if(isset($list_cnt)){
                                                                  $list_cnt = $list_cnt; 
                                                                }else {
                                                                  $list_cnt = '';
                                                                }
                                                        ?>
                                                        <button type="button" class="btn btn-info waves-effect waves-light add_kpi" style="float: left;font-size: 17px;margin-top: 20px;" id='add_kpi-<?php echo $kpi_id?>-<?php echo $list_cnt?>'> 
                                                          <span>Add KPI</span>  
                                                        </button>
                                                              <!-- echo CHtml::button('Add KPI',array('class'=>'btn border-blue-soft add_kpi','style'=>'float:left;margin-left: 10px;','id'=>'add_kpi-'.$kpi_id.'-'.$list_cnt)); -->
                                                        
                                              <?php }else{ ?>

                                                      <button type="button" class="btn btn-primary waves-effect waves-light" style="float: right;   font-size: 17px;margin-top: 20px;" onclick='js:kpi_save_data()'> 
                                                            <span>Save</span> <i class="mdi mdi-content-save-move"></i> 
                                                      </button>
                                                     
                                        <?php } ?>

                                        
                                      </div>
                                  </div>



  
  <div class="output_div1">
      <?php if (isset($kpi_data) && count($kpi_data)>0) { $cnt_num = 1; ?>

        <label class='count_goal' id="count_goal1" style="display:none"><?php echo count($kpi_data); ?></label>
        <?php  $ch_cnt = 0;
                       foreach ($kpi_data as $row) { $ch_cnt++; ?>
                        <label id="total_<?php echo $cnt_num; ?>" style='display:none';><?php echo $row['target']; ?></label>
                                                       
                    <label style="color: #fff;width: 100%;background-color: #216871;padding: 10px;" >KRA Category <?php echo  $ch_cnt;?> : <?php echo $row['KRA_category'];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; KRA Weightage : <?php echo $row['target'];?>
                      







                    </label>

                    <div class="table-responsive">
                            <table class="table table-bordered mb-0" style="border-top: 2px solid #ddd;">
                                <thead>
                                  <tr>
                                    <th>KRA Description</th>
                                    <td colspan="8"><?php echo $row['KRA_description']; ?></td>
                                    <?php 
                                            if (isset($row['KRA_status']) && $row['KRA_status'] != 'Approved') {
                                        ?>
                                        <td><i class="mdi mdi-trash-can-outline del_kpi" id="KPI_id-<?php echo $row['KPI_id'];?>" style="font-size: 26px;margin-right: 20px;color: #216871;"></i>
                                      <span><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/Goalsheet/kpi_edit/KPI_id/<?php echo $row['KPI_id'];?>"><i class="icon-pencil" style="font-size: 23px;color: #216871;"></i></a></span>
                                    </td>
                                      <?php } else{ ?>

                                        <td><i class="mdi mdi-trash-can-outline not" id="KPI_id-<?php echo $row['KPI_id'];?>" style="font-size: 26px;margin-right: 20px;color: #216871;" disabled></i>
                                      <span><a><i class="icon-pencil not_edit" style="font-size: 23px;color: #216871;" disabled></i></a></span>
                                    </td>

                                    <?php  }?>
                                    
                                  </tr>
                                    <tr id="get_target_value">
                                        <th>
                                          

                    <?php
                              if (isset($is_apr) && count($is_apr)>0) {
                      ?>
                            
                            <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/Goalsheet/cascade_edit/KPI_id/<?php echo $row['KPI_id'];?>" class='cascade-edit' style='background: #05b2ec;border: 0px solid;padding-top: 4px;padding-bottom: 4px;padding-left: 12px;padding-right: 12px;color: #fff;'>Cascade</a>

                    <?php                              $kpi_id= $row['KPI_id'];
                                                      // print_r($kpi_id);
                                                      $year =Yii::app()->user->getState('financial_year_check');

                                                      $notification_data =new NotificationsForm;
                                                      $Employee_id = Yii::app()->user->getState("Employee_id");
                                                      $where = 'where goal_set_year = :goal_set_year and  mgr_kpi_id= :mgr_kpi_id';
                                                      $list = array('goal_set_year','mgr_kpi_id');
                                                      $data = array($year,$kpi_id);
                                                      $cascadedd_to = $notification_data->get_cascaded_data($where,$data,$list);

                                                     if(isset($cascadedd_to) && count($cascadedd_to)>0){?>

                                                                 <i class="mdi mdi-arrow-down-drop-circle-outline cascaded_down" id='cascaded_down_<?php echo $row['KPI_id']?>' style='font-size: 28px;color: green;'></i>

                                                      <?php

                                                    }

                                            ?>

         <div class="modal fade-scale" id="cascade_list2_<?php echo $row['KPI_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style="top: 20%;">
    <div class="modal-content">
      <div class="modal-header"><h4 style="color: black;">Cascaded Employee list</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <!-- <h4 class="modal-title" id="myModalLabel">Modal title</h4> -->
      </div>
      <div class="modal-body">
            
          <?php 

                                                      $kpi_id= $row['KPI_id'];
                                                      // print_r($kpi_id);
                                                      $year =Yii::app()->user->getState('financial_year_check');

                                                      $notification_data =new NotificationsForm;
                                                      $Employee_id = Yii::app()->user->getState("Employee_id");
                                                      $where = 'where goal_set_year = :goal_set_year and  mgr_kpi_id= :mgr_kpi_id';
                                                      $list = array('goal_set_year','mgr_kpi_id');
                                                      $data = array($year,$kpi_id);
                                                      $cascadedd_to = $notification_data->get_cascaded_data($where,$data,$list); 

                                                if(isset($cascadedd_to) && count($cascadedd_to)!=='0'){?>

                                                      <table class="table" style="color: #000;border-top: 1px solid #c8d0d7;">
                                                        <thead>
                                                          <tr>
                                                            <th>Sr. no</th>
                                                            <th>Employee Name</th>
                                                          </tr>
                                                       </thead>
                                                       <tbody>
                                                        


                                                            <?php 

                                                              for($j=0;$j<count($cascadedd_to);$j++){?>

                                                                  <tr>
                                                                  
                                                                   
                                                                    <td><?php echo $j+1;?></td>

                                                                  <?php 
                                                                        $emploee_data =new EmployeeForm;
                                                                        $where = 'where Employee_id = :Employee_id';
                                                                        $list = array('Employee_id');
                                                                        $data = array($cascadedd_to[$j]['Employee_id']);
                                                                        $empp_data = $emploee_data->get_employee_data($where,$data,$list);
                                                                  ?>
                                                                  <td> <?php if(isset($empp_data)&& count($empp_data)>0){ echo $empp_data[0]['Emp_fname']." ".$empp_data[0]['Emp_lname'];}?>
                                                                        </td>
                                                                   <?php } ?>
                                                                  </tr>

                                                           
                                                        
                                                       </tbody>
                                                      </table><?php } ?>
      </div>
      
    </div>
  </div>
</div>



















                      <?php } ?>
                                        </th>
                                        <th style="" class="col-md-2"> KPI List</th>
                                        <th style="text-align:center;" class="col-md-1"> Unit </th>
                                        <th style="text-align:center;" class="col-md-1"> KPI Weightage </th>
                                        <th style="text-align:center;" class="col-md-1"> Value </th>
                                        <th style="text-align:center;" class="col-md-1"> (1)<br>Unsatisfactory <br>Performance1</th>
                                        <th style="text-align:center;" class="col-md-1"> (2)<br>Needs<br>Improvement </th>
                                        <th style="text-align:center;" class="col-md-1"> (3)<br>Good Solid <br>Performance </th>
                                        <th style="text-align:center;" class="col-md-2"> (4)<br>Superior <br>Performance </th>
                                        <th style="text-align:center;" class="col-md-2"> (5)<br>Outstanding <br>Performance </th>
                                       
                                        <!-- <th style="text-align:center;">Delete </th> -->
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                          $kpi_list_data = '';
                                          $kpi_list_data = explode(';',$row['kpi_list']);
                                          $kpi_list_unit = explode(';',$row['target_unit']);
                                          $kpi_list_target = explode(';',$row['target_value1']); 
                                          $KPI_target_value = explode(';',$row['KPI_target_value']);
                                          $kpi_data_data = 0;
                                          if(isset($kpi_list_data) && count($kpi_list_data)>0)
                                          {
                                              for ($i=0; $i < count($kpi_list_data); $i++) { 
                                                if (isset($kpi_list_data[$i]) && $kpi_list_data[$i] != '') {
                                                    if($kpi_data_data == '')
                                                    {
                                                        $kpi_data_data = 1;
                                                    }
                                                    else
                                                    {
                                                        $kpi_data_data = 2;
                                                    }                                                                        
                                                }
                                            }
                                          } 
                                    ?>
                                    <?php 
                                        $cnt = 0;
                                        for ($i=0; $i <count($kpi_list_data); $i++){if (isset($kpi_list_data[$i]) && $kpi_list_data[$i]!=''){ $cnt++;?>
                                          <tr>
                                                <td>
                                                

                                              <?php  

                                                  $kpi_id= $row['KPI_id'];
                                                  // print_r($kpi_id);
                                                  $year =Yii::app()->user->getState('financial_year_check');

                                                   $notification_data =new NotificationsForm;
                                                    $Employee_id = Yii::app()->user->getState("Employee_id");
                                                    $where = 'where Employee_id = :Employee_id and goal_set_year = :goal_set_year and KPI_id = :KPI_id';
                                                    $list = array('Employee_id','goal_set_year','KPI_id');
                                                    $data = array($Employee_id,$year,$kpi_id);
                                                    $cascadedd = $notification_data->get_cascaded_data($where,$data,$list);


                                                    if(isset($cascadedd['0']['kpi_count']) && $cascadedd['0']['kpi_count']!==''){


                                                        $cnt=explode(";",$cascadedd['0']['kpi_count']);
                                                   

                                                     if(isset($cnt[$i]) && $cnt[$i]!==''){?>
                                                      <label style="color:#05b2ec;">Cascaded</label>

                                                       <?php }else{

                                                        }
                                                    }
                                                    
                                                ?>
                                                
                                                <!-- Modal -->

                                               </td>

                                              
                                            <td class="validate_field1"><?php if(isset($kpi_list_data[$i])) { echo $kpi_list_data[$i]; } ?></td>
                                            <td class="validate_field1" style="text-align: center;"><?php if(isset($kpi_list_unit[$i])) { echo $kpi_list_unit[$i]; } ?></td>
                                            
                                              <?php
                                                    if (isset($kpi_list_unit[$i]) && ($kpi_list_unit[$i] == 'Units' || $kpi_list_unit[$i] == 'Weight' || $kpi_list_unit[$i] == 'Value')) { ?>

                                            <td class="validate_field1" style="text-align: center;">
                                                                           
                                                <label data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="<?php echo $kpi_list_target[$i];  ?>">
                                                    <?php if(isset($KPI_target_value[$i])) { echo $KPI_target_value[$i]; } ?>
                                                </label>
                                            </td>
                                            <td class="validate_field1" style="text-align: center;">
                                               <label data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="<?php echo $kpi_list_target[$i];  ?>">
                                                    <?php echo strlen($kpi_list_target[$i]) >= 20 ? substr($kpi_list_target[$i] , 0, 20) . '<label style="cursor:pointer;color:blue"> >></label>' :$kpi_list_target[$i];  ?>
                                                </lable>
                                            </td>
                                            <td class="validate_field1" style="text-align: center;">
                                                <label data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="<?php echo round($kpi_list_target[$i]*0.69,2)+0.01;?>">
                                                    <?php echo strlen(round($kpi_list_target[$i]*0.69,2)) >= 20 ? substr(round($kpi_list_target[$i]*0.69,2) , 0, 20) . '<lable style="cursor:pointer;color:blue"> >></lable>' :'< '.round($kpi_list_target[$i]*0.69,2);  ?>
                                                </label>
                                            </td>
                                            <td class="validate_field1" style="text-align: center;">
                                                <?php //echo round($kpi_list_target[$i]*0.70,2);?>
                                                <lable data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="<?php echo round($kpi_list_target[$i]*0.69,2)+0.01;?>"><?php echo strlen(round($kpi_list_target[$i]*0.69,2)+0.01) >= 20 ?  '<lable style="cursor:pointer;color:blue"> >></lable>' : 
                                                    round($kpi_list_target[$i]*0.69,2)+0.01." to ".round($kpi_list_target[$i]*0.95,2);  ?>
                                                </lable>
                                            </td>
                                            <td class="validate_field1" style="text-align: center;">
                                                <lable data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="<?php echo round($kpi_list_target[$i]*0.95,2)+0.01;?>">
                                                    <?php echo strlen(round($kpi_list_target[$i]*0.95,2)+0.01 ) >= 20 ?round($kpi_list_target[$i]*0.95,2)+0.01." to ".round($kpi_list_target[$i]*1.05,2) . '<lable style="cursor:pointer;color:blue"> >></lable>' : 
                                                       round($kpi_list_target[$i]*0.95,2)+0.01." to ".round($kpi_list_target[$i]*1.05,2);  ?>
                                                </lable>
                                            </td>
                                            <td class="validate_field1" style="text-align: center;">
                                                <lable data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="<?php echo round($kpi_list_target[$i]*1.05,2)+0.01;  ?>">
                                                    <?php echo strlen(round($kpi_list_target[$i]*1.05,2)+0.01 ) >= 20 ? 
                                                    round($kpi_list_target[$i]*1.05,2)+0.01." to ".round($kpi_list_target[$i]*1.29,2). '<lable style="cursor:pointer;color:blue"> >></lable>' : 
                                                    round($kpi_list_target[$i]*1.05,2)+0.01." to ".round($kpi_list_target[$i]*1.29,2);  ?>
                                                </lable>
                                            </td>                           
                                            <td class="validate_field1" style="text-align: center;">
                                                <lable data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="<?php echo round($kpi_list_target[$i]*1.29,2);  ?>">
                                                    <?php echo strlen(round($kpi_list_target[$i]*1.29,2)) >= 20 ? 
                                                    substr(round($kpi_list_target[$i]*1.29,2) , 0, 20) . '<lable style="cursor:pointer;color:blue"> >></lable>' : 
                                                    '> '.round($kpi_list_target[$i]*1.29,2);  ?>
                                                </lable>
                                            </td>

                                                <?php }else{ ?>

                                            <td style="text-align: center;">
                                              <?php if(isset($KPI_target_value[$i]) && count($KPI_target_value[$i])>0) { echo $KPI_target_value[$i]; } ?>
                                            </td>
                                            <td class="validate_field1" style="text-align: center;"></td>
                                                      <?php 
                                                          if(isset($kpi_list_target[$i]))
                                                          {
                                                                  $value_data = explode('-', $kpi_list_target[$i]);
                                                          }                                                                                
                                                            for ($j=0; $j < 5; $j++){ 
                                                                if (isset($value_data[$j])) { ?>
                                                                    <td class="validate_field1" style="text-align: center;">
                                                                       <!--  <lable data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="<?php if(isset($value_data[$j])) { echo $value_data[$j]; } ?>">
                                                                        <?php echo strlen($value_data[$j]) >= 20 ? substr($value_data[$j], 0, 20) . '<lable style="cursor:pointer;color:blue"> >></lable>' :$value_data[$j];  ?>
                                                                        </lable> -->


                                                                         <lable ><?php if(isset($value_data[$j])) { echo $value_data[$j]; } ?>

                                                                        </lable>

                                           </td>
                                                                 <?php } else { ?>
                                           <td><?php echo ""; ?>
                                                            
                                            </td>
                                                              <?php }
                                                            } ?>

                                                   <?php }?>

                                                           
                                        </tr>
                                            
                                    <?php } } ?>



                                                             
                                </tbody>
                            </table>
                        </div>

                       <?php $cnt_num++;?>

      <?php }}?>
  </div>
                                  
                                  
                                <div class="button-list" style="margin-top: 20px;">
                                  <button type="button" class="btn btn-info waves-effect waves-light next" style="font-size: 16px;float: right;padding: 8px;font-weight: bold;">Next</button>
                                </div>



                             

                                          <!-- <div class="test" style="position: fixed;bottom: 50%;right: -49%">        
                                                 <button type="button" class="btn btn-primary waves-effect waves-light" id='kpi_update_data' style="margin-top: 20px;font-size: 17px;"> 
                                                  <span>Update</span> <i class="mdi mdi-content-save-move"></i> 
                                                </button>
                                          </div> -->

                                      
                           
                                          <div class="test" style="position: fixed;bottom: 50%;right: -49%">
                                                  <button type="button" class="btn btn-primary waves-effect waves-light floating " style="font-size: 17px;margin-top: 20px;" onclick='js:kpi_save_data()'> 
                                                            <span>save</span> <i class="mdi mdi-content-save-move"></i> 
                                                </button>
                                          </div>
                                      
                        
                        </section>


                  </div>





                   <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <section style="padding-bottom: 76px;">


                             
                                          

                                        <label style="color: #216871;">PLEASE DISCUSS YOUR STRENGTHS AND WORK RELATED WEAKNESSES WITH YOUR MANAGER AND IDENTIFY YOUR TRAINING NEEDS. YOUR DEVELOPMENT WILL HAPPEN THROUGH THE FOLLOWING WAYS:</label>
                                          <br>

                                        <label style="color: #216871;"><span style="color: red">*</span>Mandatory for all employees to attend this program </label>

                                        <br>
                                        <label class='col-md-12' style="color: #fff;background-color: #216871;padding: 10px;">PART A: DEVELOPMENT THROUGH INSTRUCTOR LED TRAINING IN CLASSROOM</label>

                                        





                                        <label id="total_prog" style="display: none"><?php if(isset($program_data_result) && count($program_data_result)>0) { echo count($program_data_result);} ?></label>
 
                                            <!--  <label id="total_prog" style="display: none">4</label> -->


    <table class="table table-bordered table-hover" id="maintable">
            <thead>
                <th></th>
                <th class="col-md-3">Name of program</th>
                <th class="col-md-3">Faculty</th>
                <th class="col-md-1">Days</th>
                <th class="col-md-5">Please mention what you would like to learn from this program</th>
                <th style="display: none">Required</th>
            </thead>
            <tbody>

    
                
                                               <td class='select_prgm11'>

                                                      <form>
                                                      
                                                      <label><input type="checkbox" class="select_prgm" id="" name="select_prgm" checked></label>
                                                      
                                                          <label><input type="checkbox" class="select_prgm" id="" name="select_prgm" checked></label>
                                                      

                                                      <label><input type="checkbox" class="select_prgm" id="" name="select_prgm" ></label>
                                                      


                                                     
                                                  
                                                  </form>
                                                </td>
                                                <td class="prog_name" id=""> 
                                                    <label style="color: red">*</label>
                                                <label style="color: red">**</label>
                                                    <label style="color: red">**</label>
                                                
                                                
                                                    <label style="color: red">*</label>
                                                
                                                
                                                    <label style="color: red">*</label>
                                                
                                                
                                                    <label style="color: red">**</label>
                                                
                                                </td>
                                                <td>  </td>
                                                <td> </td>
                                                <td class="col-md-4">
                                   </tbody>

                                 </table>  


                                        <label id="total_prog" style="display: none;"><?php if(isset($program_data_result) && count($program_data_result)>0) { echo count($program_data_result);} ?></label>
 

                                        <!-- <div class="checkbox mb-2 checkbox-primary" style="margin: 0px;padding: 0px;">
                                            <input id="checkbox02" type="checkbox" checked style="position: inherit;">
                                            <label for="checkbox02" style="position: absolute;">
                                               
                                            </label>
                                        </div> -->

                                        
                    

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

                                                            <textarea id="briefly_men" class="form-control" maxlength="225" rows="3" placeholder="" style="font-size: 16px;" disabled=""><?php echo $breiefly_mention; ?></textarea>

                                                    <?php }else{?>

                                                       <textarea id="briefly_men" class="form-control" maxlength="225" rows="3" placeholder="" style="font-size: 16px;"><?php echo $breiefly_mention; ?></textarea >

                                                       <?php } ?>
                                                  </td>
                                                  <td>
                                                  <?php if(isset($IDP_data['0']['set_status']) && count($IDP_data)>0 && $IDP_data['0']['set_status']=='Approved') {?>
                                                            

                                                              <textarea id="user_prgm" class="form-control user_prgm" maxlength="225" rows="3" placeholder="" style="font-size: 16px;" disabled><?php echo $user_prgm; ?></textarea >
                                                         <?php }else{?>

                                                              <textarea id="user_prgm" class="form-control user_prgm" maxlength="225" rows="3" placeholder="" style="font-size: 16px;"><?php echo $user_prgm; ?></textarea >
                                                            
                                                         <?php } ?>
                                                  </td>
                                                  <td>
                                                    <?php if(isset($IDP_data['0']['set_status']) && count($IDP_data)>0 && $IDP_data['0']['set_status']=='Approved') {?>

                                                            <textarea id="how_training_help" class="form-control" maxlength="225" rows="3" placeholder="" style="font-size: 16px;" disabled=""><?php echo $how_the_traing; ?></textarea>

                                                    <?php }else{?>

                                                       <textarea id="how_training_help" class="form-control" maxlength="225" rows="3" placeholder="" style="font-size: 16px;"><?php echo $how_the_traing; ?></textarea >

                                                       <?php } ?>
                                                  </td>
                                                 
                                                  <td>


                                                         <?php if(isset($IDP_data['0']['set_status']) && count($IDP_data)>0 && $IDP_data['0']['set_status']=='Approved') {?>

                                                           <textarea id="user_prgm_cmt" class="form-control user_prgm_cmt" maxlength="225" rows="3" placeholder="" style="font-size: 16px;" disabled><?php echo $user_prgm_cmt; ?></textarea >

                                                             
                                                         <?php }else{?>

                                                               <textarea id="user_prgm_cmt" class="form-control user_prgm_cmt" maxlength="225" rows="3" placeholder="" style="font-size: 16px;"><?php echo $user_prgm_cmt; ?></textarea >

                                                             
                                                         <?php } ?>
                                                  
                                                  
                                                  
                                                  </td>
                                                       
                                                 
                                                  
                                              </tr>
                                                
                                           
                                            </tbody>
                                        </table>
                                    </div>






                                

                                    <label style="color: #216871;font-size: 16px;">2)  If there is more than 1 learning gap/strength area and if the learning can be imparted by an internal subject matter expert (SME), please mention it below</label>

                                    <div class="table-responsive" style="margin-bottom: 20px;border-top: 2px solid #ddd;">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                              <tr>
                                                  <th class="col-md-5">Topics required</th>
                                                  <th class="col-md-2">No. of Days</th>
                                                  <th class="col-md-5">Faculty name</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              
                                              
                                              <tr>
                                                <?php 
                                                $topic = '';$day = '';$faculty = '';
                                                if(isset($IDP_data) && count($IDP_data)>0 && isset($IDP_data['0']['extra_topic']) && $IDP_data['0']['extra_topic']!=''){

                                                    
                                                    $topic1 = explode(';',$IDP_data['0']['extra_topic']);
                                                    if(isset($topic1[0]))
                                                                {
                                                                        $topic = $topic1[0];
                                                                }
                                                                    if(isset($IDP_data['0']['extra_days']))
                                                                    {
                                                                         $day1 = explode(';',$IDP_data['0']['extra_days']);
                                                                    }
                                                                    if(isset($day1[0]))
                                                                    {
                                                                       $day = $day1[0];
                                                                    }
                                                                    if(isset($IDP_data['0']['extra_faculty']))
                                                                    {
                                                                       $faculty2 = explode(';',$IDP_data['0']['extra_faculty']);
                                                                    }
                                                                    if(isset($faculty2[0]))
                                                                    {
                                                                       $faculty[$faculty2[0]] = array('selected' => 'selected');
                                                                    }
                                                                    $faculty1 = explode('?',$faculty2[0]);       


                                                }else{
                                                  $topic='';$day='';

                                                }?>
                                                <td>
                                                      <input type="text" id="" name="" class="form-control topic1" style="font-size: 16px;" value="<?php echo $topic; ?>">
                                                    
                                                </td>
                                                <td>
                                                      <input type="text" id="" name="" class="form-control days_required1" style="font-size: 16px;" value="<?php echo $day; ?>">
                                                    
                                                </td>
                                                <td>
                                                
                                                               <?php 
                                                                   $reporting_list = new EmployeeForm();
                                                                   
                                    $where = 'where Email_id != :Email_id';
                                    $list = array('Email_id');
                                    $data = array($emp_data['0']['Email_id']);
                                    $records = $reporting_list->get_reporting_data($where,$data,$list);
                                                                 //  print_r($records);die();
                                                                  for ($k=0; $k < count($records); $k++) { 
                                                                     //  echo $emp_data['0']['Email_id'];
                                                                      $where = 'where Email_id = :Email_id';
                                                                      $list = array('Email_id');
                                                                      $data = array($records[$k]['Reporting_officer1_id']);
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
                                                                    $Cadre_id1['External Faculty'] = 'External Faculty';
                                                          $Cadre_id = array_merge($Cadre_id,$Cadre_id1);
                                    if(isset($IDP_data['0']['set_status']) && count($IDP_data)>0 && $IDP_data['0']['set_status']=='Approved') {
                                        echo CHtml::DropDownList('faculty_email_id1','faculty_email_id1',$Cadre_id,array('disabled' => 'disabled','class'=>'form-control faculty_email_id1 selectpicker Faculty_report','empty'=>'Select','options' => $faculty));
                                    }
                                    else
                                    {
                                     echo CHtml::DropDownList('faculty_email_id1','faculty_email_id1',$Cadre_id,array('class'=>'form-control faculty_email_id1 Faculty_report','empty'=>'Select','options' => $faculty));
                                    }
                                                                ?>
                                                        
                                              </td>
  <tr>
                                                <?php 
                                                $topic = '';$day = '';$faculty = '';
                                                if(isset($IDP_data) && count($IDP_data)>0 && isset($IDP_data['0']['extra_topic']) && $IDP_data['0']['extra_topic']!=''){

                                                    
                                                    $topic1 = explode(';',$IDP_data['0']['extra_topic']);
                                                    if(isset($topic1[1]))
                                                                {
                                                                        $topic = $topic1[1];
                                                                }
                                                                    if(isset($IDP_data['0']['extra_days']))
                                                                    {
                                                                         $day1 = explode(';',$IDP_data['0']['extra_days']);
                                                                    }
                                                                    if(isset($day1[1]))
                                                                    {
                                                                       $day = $day1[1];
                                                                    }
                                                                    if(isset($IDP_data['0']['extra_faculty']))
                                                                    {
                                                                       $faculty2 = explode(';',$IDP_data['0']['extra_faculty']);
                                                                    }
                                                                    if(isset($faculty2[1]))
                                                                    {
                                                                       $faculty[$faculty2[1]] = array('selected' => 'selected');
                                                                    }
                                                                    $faculty1 = explode('?',$faculty2[0]);       


                                                }else{
                                                  $topic='';$day='';

                                                }?>

                                                
                                              

                                                <td>
                                                      <input type="text" id="" name="" class="form-control topic2" style="font-size: 16px;" value="<?php if(isset($topic) && $topic!=''){ echo $topic;}?>">
                                                    
                                                </td>
                                                <td>
                                                      <input type="text" id="" name="" class="form-control days_required2" style="font-size: 16px;" value="<?php if(isset($day) && $day!=''){ echo $day;}?>">
                                                    
                                                </td>
                                                <td>
                                                    <?php 
                                    $reporting_list = new EmployeeForm();
                                    //$records = $reporting_list->get_appraiser_list1();
                                    $where = 'where Email_id != :Email_id';
                                    $list = array('Email_id');
                                    $data = array($emp_data['0']['Email_id']);
                                    $records = $reporting_list->get_reporting_data($where,$data,$list);
                                                                   for ($k=0; $k < count($records); $k++) { 
                                                                      $where = 'where Email_id = :Email_id';
                                                                      $list = array('Email_id');
                                                                      $data = array($records[$k]['Reporting_officer1_id']);
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
                                  if(isset($IDP_data['0']['set_status']) && count($IDP_data)>0 && $IDP_data['0']['set_status']=='Approved') {
                                   echo CHtml::DropDownList('faculty_email_id2','faculty_email_id2',$Cadre_id,array('disabled' => 'disabled','class'=>'form-control faculty_email_id2','empty'=>'Select','options' => $faculty,$set_flag));
                                  }
                                  else
                                  {
                                    echo CHtml::DropDownList('faculty_email_id2','faculty_email_id2',$Cadre_id,array('class'=>'form-control faculty_email_id2','empty'=>'Select','options' => $faculty,$set_flag));
                                  }
                                                              ?>
                                                  </td>

                                                
                                              </tr>
                                           
                                           
                                            </tbody>
                                        </table>
                                    </div>
                                    <label style="color: #216871;font-size: 16px;"><span style="color: red;">*</span> Please note that the above programs would be offered if at least 20 people request for it, if not you need to get in touch with the L&D team for facilitating its completion.</label><br><br>
                                    <label style="color: #216871;font-size: 16px;">Note: Part B and Part C are to be filled by only AGM and above employees.</label>
                                           
                                    <label style="color: #fff;width:100%;background-color: #216871;padding: 10px;"> PART B: DEVELOPMENT THROUGH DEVELOPMENTAL RELATIONSHIPS</label>

                                    <div class="table-responsive" style="margin-bottom: 20px;">
                                        <table class="table table-bordered mb-0" style="border-top: 2px solid #ddd;">
                                            <thead>
                                              <tr>
                                                  <th class="col-md-3">Relationship<span style="color: red;">*</span></th>
                                                  <th class="col-md-2">Name of leader<span style="color: red;">*</span></th>
                                                  <th class="col-md-2">Number of Meetings planned<span style="color: red;">*</span></th>
                                                  <th class="col-md-3">Mention 2 to 3 objectives<span style="color: red;">*</span></th>
                                                  <th class="col-md-2">Due date<span style="color: red;">*</span></th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                            
                                              <tr>
                                                  <td>
                                                    Mentoring through leader from different function for behavioural inputs
                                (What would you want to learn from them. Clearly mention the objective)</td>
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

                                                        <input type="text"  name="" class="form-control" id="faculty_email_id4" style="font-size: 16px;" value="<?php echo $faculty4; ?>">
                                                    <?php } else{?>
                                                        <input type="text"  name="" class="form-control" id="faculty_email_id4" style="font-size: 16px;" value="<?php echo $faculty4; ?>">
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

                                                        <input type="text" name="" class="form-control" id="number_of_meetings4" style="font-size: 16px;" value="<?php echo $meet; ?>">
                                                    <?php } else{?>
                                                        <input type="text" name="" class="form-control" id="number_of_meetings4" style="font-size: 16px;" value="<?php echo $meet; ?>">
                                                    <?php } ?>
                                                    
                                              </td>
                                              <td>  

                                                     <?php 
                                                           
                                                               //print_r($IDP_data['0']['meeting_planned']);die();
                                                                 $meet = '';
                                                                if (isset($IDP_data['0']['topic_to_be_diss']) && $IDP_data['0']['topic_to_be_diss']!='') {
                                                                  $meet = explode(';',$IDP_data['0']['topic_to_be_diss']);
                                                                  if (isset($meet[1])) {
                                                                     $meet = $meet[1];
                                                                  }
                                                                  
                                                                }
                                                                else
                                                                {
                                                                  $meet = '';}
                                                              ?>
                                                              <?php if (isset($IDP_data) && count($IDP_data)>0 && isset($IDP_data['0']['topic_to_be_diss'])) {?>

                                                                  <textarea id="topic_to_be_diss4" class="form-control" maxlength="225" rows="3" placeholder="" style="font-size: 16px;"><?php echo $meet;?></textarea >

                                                        
                                                    <?php } else{?>
                                                        <textarea id="topic_to_be_diss4" class="form-control" maxlength="225" rows="3" placeholder="" style="font-size: 16px;"><?php echo $meet;?></textarea >
                                                    <?php } ?>
                                                    
                                              </td>
                                              <td>

                                                <?php 
                                                                  if (isset($IDP_data['0']['rel_target_date']) && $IDP_data['0']['rel_target_date']!='') { $rel2 = explode(';',$IDP_data['0']['rel_target_date']); ?>
                                                                      
                                                                      <input class="form-control fields date_pickup11   target_date4" type="text" value="<?php echo $rel2[1]; ?>" id="target_date4" <?php echo $set_flag1; ?> style="font-size: 16px;" placeholder="dd-mmm-yyyy" data-provide="datepicker" data-date-autoclose="true">
                                                                   <?php }
                                                                    else
                                                                    { ?>
                                                                       <input class="form-control fields date_pickup11   target_date4" type="text"  id="target_date4"  placeholder="dd-mmm-yyyy" data-provide="datepicker" data-date-autoclose="true" style="font-size: 16px;">
                                                                 <?php   }
                                                                ?>



                                                          <!-- <div class="input-group-append">
                                                              <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                          </div> -->
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
                                                    <input type="text" id="project_title" name="" class="form-control form-control-md part3" placeholder="" value="<?php echo $project_title; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label" >Review date<span style="color: red;">*</span></label>
                                                <div class="col-md-8">
                                                    <?php
                                                                  if (isset($IDP_data['0']['project_review_date']) && $IDP_data['0']['project_review_date']!=='') { ?>
                                                                      

                                                                       <input type="text" id="rev_date" name="" class="form-control form-control-md part3" placeholder="" value="<?php echo $IDP_data['0']['project_review_date']; ?>" placeholder="dd-mmm-yyyy" data-provide="datepicker" data-date-autoclose="true">
                                                                   <?php }
                                                                    else
                                                                    { ?>
                                                                      <input class="form-control fields part3 " type="text"  id="rev_date"  placeholder="dd-mmm-yyyy" data-provide="datepicker" data-date-autoclose="true">
                                                                      
                                                                 <?php   } 
                                                                ?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label" >Due Date<span style="color: red;">*</span></label>
                                                <div class="col-md-8">
                                                    <?php
                                                                  if (isset($IDP_data['0']['project_end_date']) && $IDP_data['0']['project_end_date']!=='') {  ?>
                                                                  <input class="form-control fields part3 "   type="text" value="<?php echo $IDP_data['0']['project_end_date']; ?>" id="due_dateee" maxlength="20" placeholder="dd-mmm-yyyy" data-provide="datepicker" data-date-autoclose="true">
                                                                       
                                                                   <?php }
                                                                    else
                                                                    { ?>
                                                                      <input class="form-control fields part3 " type="text"  id="due_dateee"  placeholder="dd-mmm-yyyy" data-provide="datepicker" data-date-autoclose="true">
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
                                        <input type="text" id="project_scope" name="" class="form-control form-control-md part3" placeholder="" value="<?php echo $project_scope;?>">
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
                                        <input type="text" id="project_exclusion" name="" class="form-control form-control-md part3" placeholder="" value="<?php echo $project_exclusion;?>">
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
                                        <input type="text" id="project_deliverables" name="" class="form-control form-control-md part3" placeholder="" value="<?php echo $Project_deliverables;?>">
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
                                        <input type="text" id="learning_goals" name="" class="form-control form-control-md part3" placeholder="" value="<?php echo $expected;?>">
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
                                        <input type="text" id="Reviewer_name" name="" class="form-control form-control-md part3" placeholder="" value="<?php echo $review_name;?>">
                                  <?php }?>

                                                   
                                                </div>
                                            </div>
                                        </form>
                                      </div>
                                  </div>


                                  <div class="button-list">
                                      
                                 <?php 
                                       if (isset($kpi_data) && count($kpi_data)>0) { ?>
                                      <div id="show_spin" style="display: none"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i></div>     
                                        
                   

                          <?php  if(Yii::app()->user->getState('financial_year_check')!='2020-2021' && Yii::app()->user->getState('financial_year_check')!='2021-2022' && $kpi_data['0']['KRA_status']=='Approved'){
                              echo CHtml::button('Submit',array('class'=>'btn btn-success btn-lg send_for_appraisal','style'=>'float:right;display:none','id'=>'sa-warning send_for_appraisal')); 
                              }
                              else{
                                  echo CHtml::button('Submit',array('class'=>'btn btn-success btn-lg send_for_appraisal','style'=>'float:right;font-size:16px;margin-top: 20px;','id'=>'sa-warning send_for_appraisal')); 
                                  ?>
                        <?php } 
                                          
                                             
                        } ?>
                                      

                                      <button type="button" class="btn btn-secondary waves-effect waves-light back" style="font-size: 16px;float: left;padding: 8px;font-weight: bold;margin-top: 20px;">Back</button>
                                      
                                    </div>

                                    
                                    </section>
                  </div>
                    


                    </div>





                        </div> <!-- end card-box -->
                         <?php 
                              if (isset($kpi_data) && count($kpi_data)>0) {?>
                                    
                   

                                  <?php  if($kpi_data['0']['KRA_status']!=''){?>

                                           <button  style='background-color: #0ead6c;font-size: 14px;margin-top: 20px;' class='btn border-blue-soft' onclick="exportTableToExcel('tblData', 'goalsheet_<?php echo $emp_data['0']['Emp_fname']?>_<?php echo $emp_data['0']['Emp_lname'].Yii::app()->user->getState('financial_year_check')?>')" >  <span>Download Excel</span> <i class="dripicons-arrow-down"></i> 
                                          </button>

                                  <?php  } 
                                } ?>

                 
                    </div> <!-- end col -->
                </div>
                <!-- End row -->
      

                <!-- Button trigger modal -->


  <div id="tblData" style="display: none;">

      <table>
        <thead>
            <th><b> Employee Name </b></th>
            <th><b> Manager name </b></th>
            <th><b>Employee ID </b></th>
            <th><b>Year </b></th>
        </thead>
        <tbody>


    <table id="tblData1">
        
        <?php 
            $ch_cnt = 0;
            foreach ($kpi_data as $row) { $ch_cnt++; 

                $kpi_list_data = explode(';',$row['kpi_list']);
                $kpi_list_unit = explode(';',$row['target_unit']);
                $kpi_list_target = explode(';',$row['target_value1']); 
                $KPI_target_value = explode(';',$row['KPI_target_value']);
                $kpi_data_data = 0;

                if(isset($kpi_list_data) && count($kpi_list_data)>0)
                {
                    for ($i=0; $i < count($kpi_list_data); $i++)
                    { 
                        if (isset($kpi_list_data[$i]) && $kpi_list_data[$i] != '')
                        {
                            if($kpi_data_data == '')
                            {
                                  $kpi_data_data = 1;
                            }
                            else
                            {
                                  $kpi_data_data = 2;
                            }                                                                        
                        }
                    }
                }
        ?>
        <thead>
            <tr><td colspan="9" class="col-md-10"><b><?php echo "KRA Category ".$ch_cnt." : ".$row['KRA_category']; ?><?php echo ' / '."KRA Weightage : ".$row['target']; ?></b></td></tr>
            <tr><td class="col-md-2"><b style="float: left;">KRA Description3</b></td><td colspan="8" class="col-md-10"><?php echo $row['KRA_description']; ?></td></tr>

                    <tr>
                  
                       <th> KPI List </th>
                       <th> KPI Unit Format2 </th>
                       <th> KPI Weightage </th>
                       <th> KPI Target Value </th>
                       <th> (1)<br>Unsatisfactory <br>Performance </th>
                       <th> (2)<br>Needs<br>Improvement </th>
                       <th> (3)<br>Good Solid <br>Performance </th>
                       <th> (4)<br>Superior <br>Performance </th>
                       <th> (5)<br>Outstanding <br>Performance </th>
                 
                    </tr>
        </thead>
        <?php 
                $cnt = 0;
                for ($i=0; $i < count($kpi_list_data); $i++) { if (isset($kpi_list_data[$i]) && $kpi_list_data[$i]!='') { $cnt++;
        ?>
            <tr>
                    <td><?php if(isset($kpi_list_data[$i])) { echo $kpi_list_data[$i]; } ?></td>
                    <td><?php if(isset($kpi_list_unit[$i])) { echo $kpi_list_unit[$i]; } ?></td>
                    <?php
                            if (isset($kpi_list_unit[$i]) && ($kpi_list_unit[$i] == 'Units' || $kpi_list_unit[$i] == 'Weight' || $kpi_list_unit[$i] == 'Value')) {
                    ?>
                                                                               
                    <td>
                            <?php if(isset($KPI_target_value[$i])) { echo $KPI_target_value[$i]; } ?>          
                    </td>
                    <td>
                           <?php echo strlen($kpi_list_target[$i]) >=5000 ? substr($kpi_list_target[$i] , 0, 5000) . '<lable style="cursor:pointer;color:blue"> >></lable>' : $kpi_list_target[$i];  ?>
                           
                    </td>
                    <td>
                            <?php echo strlen(round($kpi_list_target[$i]*0.69,2)) >=5000 ? 
                            substr(round($kpi_list_target[$i]*0.69,2) , 0, 5000) . '<lable style="cursor:pointer;color:blue"> >></lable>' : 
                            '< '.round($kpi_list_target[$i]*0.69,2);  ?>    
                    </td>
                    <td>
                        <!-- <?php
                            //echo round($kpi_list_target[$i]*0.70,2);
                        ?> -->
                        
                            <?php echo strlen(round($kpi_list_target[$i]*0.70,2)) >=5000 ?  '<lable style="cursor:pointer;color:blue"> >></lable>' : 
                            round($kpi_list_target[$i]*0.70,2)." to ".round($kpi_list_target[$i]*0.95,2);  ?>
                           
                    </td>   
                    <td>
                            <?php echo strlen(round($kpi_list_target[$i]*0.96,2) ) >=5000 ? 
                              round($kpi_list_target[$i]*0.96,2)." to ".round($kpi_list_target[$i]*1.05,2) . '<lable style="cursor:pointer;color:blue"> >></lable>' : 
                              round($kpi_list_target[$i]*0.96,2)." to ".round($kpi_list_target[$i]*1.05,2);  ?>              
                    </td>     
                    <td>
                            <?php echo strlen(round($kpi_list_target[$i]*1.06,2) ) >=5000 ? 
                                round($kpi_list_target[$i]*1.06,2)." to ".round($kpi_list_target[$i]*1.29,2). '<lable style="cursor:pointer;color:blue"> >></lable>' : 
                                round($kpi_list_target[$i]*1.06,2)." to ".round($kpi_list_target[$i]*1.29,2);  ?>            
                    </td>    
                    <td>
    
                            <?php echo strlen(round($kpi_list_target[$i]*1.39,2)) >=5000 ? 
                            substr(round($kpi_list_target[$i]*1.39,2) , 0, 5000) . '<lable style="cursor:pointer;color:blue"> >></lable>' : 
                            '> '.round($kpi_list_target[$i]*1.39,2);  ?>
                           
                    </td>
                    <?php } else { ?>
                    <td><?php if(isset($KPI_target_value[$i])) { echo $KPI_target_value[$i]; } ?></td>
                    <td></td>
                        <?php if(isset($kpi_list_target[$i])) { $value_data = explode('-', $kpi_list_target[$i]);  }                                                                                
                                for ($j=0; $j < 5; $j++) { 
                                    if (isset($value_data[$j])) { ?>
                                         <td>
                                            <?php echo strlen($value_data[$j]) >=5000 ? 
                                            substr($value_data[$j], 0, 5000) . '<lable style="cursor:pointer;color:blue"> >></lable>' : 
                                            $value_data[$j];  ?>
                                            
                                          </td>
                                    <?php }  
                                    else  { ?>
                                      <td><?php echo ""; ?></td>
                                   <?php } 
                                }
                        ?>
                    <?php  }  ?>                                                                      
            </tr>
                <?php } } ?>                 
      <?php }?> 
      </table>
      <br><br><br>
      <?php
        $emp_id_goal1 = '';
        if(isset($emp_data['0']['Employee_id']) && $emp_data['0']['Employee_id'] !='') 
        { 
            $emp_id_goal1 = $emp_data['0']['Employee_id']; 
        } 

        $model = new LoginForm; 
        $program_data =new ProgramDataForm;
        $employee = new EmployeeForm; 
        $IDPForm =new IDPForm;  
        $Compare_Designation =new CompareDesignationForm;   
        $where = 'where  goal_set_year =:goal_set_year';
        $list = array('goal_set_year');
        $data = array(Yii::app()->user->getState('financial_year_check'));
        $program_data_result = $program_data->get_kpi_data($where,$data,$list);

        //$program_data_result = $program_data->get_data();
        // print_r($program_data_result);die();
        //$Employee_id = Yii::app()->user->getState("Employee_id");
          $where = 'where Employee_id = :Employee_id';
          $list = array('Employee_id');
          $data = array(Yii::app()->user->getState("Employee_id"));
          $emp_data = $employee->get_employee_data($where,$data,$list);
          $designation_flag = 0;
 
        if(isset($emp_data['0']['Designation']) && $emp_data['0']['Designation'] != '') {
            $where = 'where designation = :designation';
            $list = array('designation');
            $data = array($emp_data['0']['Designation']);
            $Compare_Designation1 = $Compare_Designation->get_designation_flag($where,$data,$list);
            if (isset($Compare_Designation1['0']['flag'])) {
              $designation_flag = $Compare_Designation1['0']['flag'];
            }
            
        }

        $where = 'where Employee_id = :Employee_id and goal_set_year = :goal_set_year';
        $list = array('Employee_id','goal_set_year');
        $data = array(Yii::app()->user->getState("Employee_id"),Yii::app()->user->getState('financial_year_check'));
        $IDP_data = $IDPForm->get_idp_data($where,$data,$list);
          //print_r($IDP_data);die();
          //print_r(Yii::app()->user->getState('emp_id1'));die();
        $where = 'where Email_id = :Email_id';
        $list = array('Email_id');
        $data = array($emp_data['0']['Reporting_officer1_id']);
        $mgr_data = $employee->get_employee_data($where,$data,$list);
         //print_r($emp_data);die();
   ?>
   
<div id="target_idp" >
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.1.135/jspdf.min.js"></script>
    <script type="text/javascript" src="http://cdn.uriit.ru/jsPDF/libs/adler32cs.js/adler32cs.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2014-11-29/FileSaver.min.js"></script>
    <script type="text/javascript" src="libs/Blob.js/BlobBuilder.js"></script>
    <!-- <script type="text/javascript" src="http://cdn.immex1.com/js/jspdf/plugins/jspdf.plugin.addimage.js"></script>
    <script type="text/javascript" src="http://cdn.immex1.com/js/jspdf/plugins/jspdf.plugin.standard_fonts_metrics.js"></script>
    <script type="text/javascript" src="http://cdn.immex1.com/js/jspdf/plugins/jspdf.plugin.split_text_to_size.js"></script>
    <script type="text/javascript" src="http://cdn.immex1.com/js/jspdf/plugins/jspdf.plugin.from_html.js"></script>
     -->

    
    

    <br><br>
<?php if( Yii::app()->user->getState('financial_year_check')=='2019-2020'){ ?>
    <span class="caption-subject  bold uppercase" ><b>Design your Learning Needs (Applicable for SMC and MMC):</b></span>                                                
                                        
            <ul  style="font-size: 14px;" >
                <li>1. Review your <?php echo Yii::app()->user->getState('financial_year_check'); ?> goals</li>
                <li>2. Discuss with your manager on areas of improvement</li>
                <li>3. Recall the feedback from previous year PMS</li>
            </ul>
            <br><br>
            <?php if(isset($emp_data['0']['Cadre']) && $emp_data['0']['Cadre']!='JMC') { ?> 
                <table class="table table-bordered table-hover" id="comp_table">
                    <thead>
                        <th colspan=2 >Craft your Learning Path – What would you want to develop in yourself for <?php echo Yii::app()->user->getState('financial_year_check'); ?>  (Applicable for SMC and MMC)</th>
                    </thead>
                    <tbody>
                        <?php if(isset($emp_data['0']['Cadre']) && $emp_data['0']['Cadre']!='SMC') { ?> 
                        <tr>
                            <td class="col-md-3"  >Technical</td>
                            <td class="col-md-9" ><?php if(isset($IDP_data['0']['tech_comp'])){ echo $IDP_data['0']['tech_comp'];}?></td>
                        </tr>
                        <?php } ?>
                        <tr>
                            <td class="col-md-3" >Behavior</td>
                            <td class="col-md-9" ><?php if(isset($IDP_data['0']['beh_comp'])){ echo $IDP_data['0']['beh_comp'];}?></td>
                        </tr>
                        <tr>
                            <td class="col-md-3" >Managerial</td>
                            <td class="col-md-9" ><?php if(isset($IDP_data['0']['mgrcomp'])){ echo $IDP_data['0']['mgrcomp'];}?></td>
                        </tr>
                    </tbody>    
                </table>   
            <?php } }?>



<p style="margin-bottom: 0.35cm; line-height: 115%"><font face="Cambria, serif"><span lang="en-US"><i><b>Please
discuss your strengths and work related weaknesses with your manager
and identify your training needs. Your development will happen
through the following ways:</b></i></span></font></p>
<p style="margin-bottom: 0.35cm; line-height: 115%"><font face="Cambria, serif"><span lang="en-US"><b>Part
A: Development through Instructor led training in Classroom</b></span></font></p>
<table cellpadding="3" cellspacing="0" >
      <col width="17">
      <col width="207">
      <col width="71">
      <col width="33">
      <col width="306">
  <tr>
    <td height="23">
      <p><font face="Cambria, serif">No</font></p>
    </td>
    <td>
      <b>Name of program</b>
    </td>
    <td>
      <b>Faculty</b>
    </td>
    <td >
      <b><font face="Cambria, serif">Days</b>
    </td>
    <td>
      <b>Please explain why the training is
      needed</b>
    </td>

   
  </tr>
  <?php 
     $compulsory = '';
    if (isset($program_data_result) && count($program_data_result)>0) {
        for ($i=0; $i < count($program_data_result); $i++) {                                            
            if (isset($program_data_result[$i]['need']) && $program_data_result[$i]['need'] == 1) {
                if ($compulsory == '') {
                   $compulsory = $i;
                }
                else
                {
                    $compulsory = $compulsory.';'.$i;
                }
            }

            ?>   
  <tr valign="top"> 
    <td> <?php echo $i+1; ?> </td> 
    <td class="prog_name" id="nm<?php echo $i; ?>"> <?php if(isset($program_data_result[$i]['program_name'])) { echo $program_data_result[$i]['program_name']; } ?> <?php if($program_data_result[$i]['need'] == 1) { ?><?php }else if($program_data_result[$i]['need'] == 2) { ?><?php } ?>
            
            </td>
            <td> <?php if(isset($program_data_result[$i]['faculty_name'])) { echo $program_data_result[$i]['faculty_name']; } ?> </td>
            <td> <?php if(isset($program_data_result[$i]['training_days'])) { echo $program_data_result[$i]['training_days']; } ?> </td>
            <td>
            <?php 
            $cmnt = '';$prg_state1 = '';$prg_state_com1 = '';
            if (isset($IDP_data) && count($IDP_data)>0 && isset($IDP_data['0']['program_comment']) && isset($IDP_data['0']['Year_end_prg_status']) && isset($IDP_data['0']['Year_end_prg_comments'])) {
                $cmt2 = explode(';', $IDP_data['0']['program_comment']);
                $prg_state = explode('^', $IDP_data['0']['Year_end_prg_status']);
                $prg_state_com = explode('^', $IDP_data['0']['Year_end_prg_comments']);
                if(isset($cmt2) && count($cmt2)>0)
                {
                  for ($j=0; $j < count($cmt2); $j++) {
                        $cmt1 = explode('?', $cmt2[$j]);
                        if (isset($cmt1[1]) && isset($cmt1[0]) && $i == $cmt1[0]) {                                                            
                             $cmnt = $cmt1[1];
                             if(isset($prg_state[$j]))
                             {
                                $prg_state1 = $prg_state[$j];
                             }
                             if(isset($prg_state_com[$j]))
                             {
                                $prg_state_com1 = $prg_state_com[$j];
                             }                             
                             
                        }
                    }
                }
                
            }
            else
            {
                $cmnt = '';
            }

                echo $cmnt;
            ?> </td>
      </tr>
      <?php      

      } }
      //print_r("gfdgfd");die();
      ?>
</table>

<?php if(Yii::app()->user->getState('financial_year_check')=='2020-2021' || Yii::app()->user->getState('financial_year_check')=='2021-2022'){?>


                                  <p><font face="Cambria, serif">Please discuss and agree with your manager:</p><br>
                                  <p><font face="Cambria, serif">1) One learning gap / strength area requiring further enhancement that if addressed will help you become more productive at the work place</p><br>
                                 

                                    <div class="table-responsive">
                                       
                                          <table cellpadding="3" cellspacing="0" class="table table-striped table-bordered table-hover">
                                            <tr valign="top">
                                            
                                             
                                                  <td style="border:1px solid black"><b>Briefly mention what is the learning gap / area of strength which needs to be further enhanced</b></td>
                                                  <td style="border:1px solid black"><b>Name of the program / topic which will help bridge this gap / build on the strength</b></td>
                                                  <td style="border:1px solid black"><b>Please briefly explain how the training will help</b></td>
                                                  <td style="border:1px solid black"><b>What would you like to learn in this program<</td>
                                                  
                                              </tr>
                                           
                                            
                                              <tr valign="top">
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



                                                  <td style="border:1px solid black">
                                                    <?php if(isset($IDP_data['0']['set_status']) && count($IDP_data)>0 && $IDP_data['0']['set_status']=='Approved') {?>

                                                           <?php echo $breiefly_mention; ?>

                                                    <?php }else{?>

                                                       <?php echo $breiefly_mention; ?>

                                                       <?php } ?>
                                                  </td>
                                                  <td style="border:1px solid black">
                                                  <?php if(isset($IDP_data['0']['set_status']) && count($IDP_data)>0 && $IDP_data['0']['set_status']=='Approved') {?>
                                                            

                                                              <?php echo $user_prgm; ?>
                                                         <?php }else{?>

                                                              <?php echo $user_prgm; ?>
                                                            
                                                         <?php } ?>
                                                  </td>
                                                  <td style="border:1px solid black">
                                                    <?php if(isset($IDP_data['0']['set_status']) && count($IDP_data)>0 && $IDP_data['0']['set_status']=='Approved') {?>

                                                           <?php echo $how_the_traing; ?>

                                                    <?php }else{?>

                                                       <?php echo $how_the_traing; ?>

                                                       <?php } ?>
                                                  </td>
                                                 
                                                  <td style="border:1px solid black">


                                                         <?php if(isset($IDP_data['0']['set_status']) && count($IDP_data)>0 && $IDP_data['0']['set_status']=='Approved') {?>

                                                          <?php echo $user_prgm_cmt; ?>

                                                             
                                                         <?php }else{?>

                                                              <?php echo $user_prgm_cmt; ?>

                                                             
                                                         <?php } ?>
                                                  
                                                  
                                                  
                                                  </td>
                                                       
                                                 
                                                  
                                              </tr>
                                                
                                           
                                       
                                        </table>
                                    </div>






                                <?php }?>





                                    <p><font face="Cambria, serif">2)  If there is more than 1 learning gap/strength area and if the learning can be imparted by an internal subject matter expert (SME), please mention it below</font></p><br>

                                   


<table cellpadding="3" cellspacing="0">
  <tr valign="top">
    <td >
      <p><font face="Cambria, serif"><b>No</b></font></p>
    </td>
    <td>
      <p><font face="Cambria, serif"><b>Topics required</b></font></p>
    </td>
    <td>
      <p><font face="Cambria, serif"><b>No. of Days</b></font></p>
    </td>
    <td>
      <p><font face="Cambria, serif"><b>Internal faculty name</b></font></p>
    </td>

  </tr>
  <?php
    $topic = '';$day = '';$faculty = '';
       if (isset($IDP_data) && count($IDP_data)>0 && isset($IDP_data['0']['extra_topic'])) {
              $topic1 = explode(';',$IDP_data['0']['extra_topic']);
              if(isset($topic1[0]))
              {
                $topic = $topic1[0];
              }
              if(isset($IDP_data['0']['extra_days']))
              {
                $day1 = explode(';',$IDP_data['0']['extra_days']);
              }
              if(isset($IDP_data['0']['Extra_year_end_prg_status']))
              {
                $finaltopic = explode('^',$IDP_data['0']['Extra_year_end_prg_status']);
              }
              if(isset($IDP_data['0']['Extra_year_end_prg_comments']))
              {
                $finaltopic_cmt = explode('^',$IDP_data['0']['Extra_year_end_prg_comments']);
              }

if(isset($day1[0]))
{
$day = $day1[0];
}
if(isset($IDP_data['0']['extra_faculty']))
              {
                $faculty2 = explode(';',$IDP_data['0']['extra_faculty']);
              }
              
              
              // $faculty1 = explode('?',$faculty2[0]); 
if(isset($faculty2[0]))
{
$faculty[$faculty2[0]] = array('selected' => 'selected');
 $reporting_list = new EmployeeForm();
             $records = $reporting_list->get_appraiser_list1();
             
                $where = 'where Email_id = :Email_id';
                $list = array('Email_id');
                $data = array($faculty2[0]);
                $Reporting_officer_data = $reporting_list->get_employee_data($where,$data,$list);
}                         
                          
             
             
       }
  ?>
  <tr valign="top">
    <td>
      <p><font face="Cambria, serif">1</font></p>
    </td>
    <td>
      <p><br/>
      <?php echo $topic; ?>
      </p>
    </td>
    <td>
      <p><br/>
      <?php echo $day; ?>
      </p>
    </td>
    <td>
      <p><br/>
      <?php if(isset($faculty2[0])) { echo $faculty2[0]; } ?>
      </p>
    </td>

  </tr>
  <?php
    $topic = '';$day = '';$faculty = '';$finaltopic1 = '';$finaltopic_cmt1 = '';
    if (isset($IDP_data) && count($IDP_data)>0 && isset($IDP_data['0']['extra_topic'])) {

    if(isset($IDP_data['0']['extra_topic']))
              {
                $topic1 = explode(';',$IDP_data['0']['extra_topic']);
              }
              if(isset($IDP_data['0']['Extra_year_end_prg_status']))
              {
                $finaltopic = explode('^',$IDP_data['0']['Extra_year_end_prg_status']);
              }
              if(isset($IDP_data['0']['Extra_year_end_prg_comments']))
              {
                $finaltopic_cmt = explode('^',$IDP_data['0']['Extra_year_end_prg_comments']);
              }
//print_r($IDP_data);die();
        if (isset($topic1[1])) {
           $topic = $topic1[1];
            $day1 = explode(';',$IDP_data['0']['extra_days']);
if(isset($day1[1]))
{
$day = $day1[1];
}
            
            $faculty2 = explode(';',$IDP_data['0']['extra_faculty']);
            // $faculty1 = explode('?',$faculty2[0]);  
if(isset($faculty2[1]))
{
$faculty[$faculty2[1]] = array('selected' => 'selected');
 $reporting_list = new EmployeeForm();
             $records = $reporting_list->get_appraiser_list1();
             
                $where = 'where Email_id = :Email_id';
                $list = array('Email_id');
                $data = array($faculty2[1]);
                $Reporting_officer_data = $reporting_list->get_employee_data($where,$data,$list);
}                         
            
        }
       
    }
  ?>
  <tr valign="top">
    <td>
      <p><font face="Cambria, serif">2</font></p>
    </td>
    <td>
      <p><br/>
      <?php echo $topic; ?>
      </p>
    </td>
    <td>
      <p><br/>
      <?php echo $day; ?>
      </p>
    </td>
    <td>
      <p><br/>
      <?php if(isset($faculty2[1])) { echo $faculty2[1]; } ?>
      </p>
    </td>

  </tr>
</table>

<p><font face="Cambria, serif">Please note that the above programs would be offered if at least 20 people request for it, if not you need to get in touch with the L&D team for facilitating its completion.</font></p>

<p><font face="Cambria, serif"><i><u><b>Note:
Part B and Part C are to be filled by only AGM and above employees.</b></u></i></font></p>
<p><font face="Cambria, serif"><b>Part
B: Development through developmental relationships</b></font></p>
<table cellpadding="3" cellspacing="0">
  <?php
    $faculty3 = '';
        if (isset($IDP_data['0']['leader_name'])) {
                if(isset($IDP_data['0']['leader_name']))
              {
                $faclty = explode(';',$IDP_data['0']['leader_name']);
              }
              if(isset($IDP_data['0']['Relationship_year_end_status']))
              {
                $relfinaltopic = explode('^',$IDP_data['0']['Relationship_year_end_status']);
              }
              if(isset($IDP_data['0']['Relationship_year_end_comments']))
              {
                $relfinaltopic_cmt = explode('^',$IDP_data['0']['Relationship_year_end_comments']);
              }
          

          if (isset($faclty[0])) {
            $faculty3 = $faclty[0];
          }
          //$faculty3[$faclty[0]] = array('selected' => 'selected');
        }
  ?>
  <tr valign="top">
    <td>
      <p><font face="Cambria, serif"><b>No</b></font></p>
    </td>
    <td>
      <p><font face="Cambria, serif"><b>Relationship</b></font></p>
    </td>
    <td>
      <p><font face="Cambria, serif"><b>Name of leader</b></font></p>
    </td>
    <td>
      <p><font face="Cambria, serif"><b>Number of Meetings planned</b></font></p>
    </td>
    <td>
      <p><font face="Cambria, serif"><b>Target date</b></font></p>
    </td>
<td>
      <p><font face="Cambria, serif"><b>Program Completed</b></font></p>
    </td>
<td>
      <p><font face="Cambria, serif"><b>Reviews</b></font></p>
    </td>
  </tr>
  <?php if( Yii::app()->user->getState('financial_year_check')!='2019-2020' && Yii::app()->user->getState('financial_year_check')!='2020-2021'){ ?>

  <tr valign="top">
        <td height="43">
          <p><font face="Cambria, serif">1</font></p>
        </td>
        <td>
          <p><font face="Cambria, serif"><b>Coaching</b></font><font face="Cambria, serif">
          through leader in own function for </font><font face="Cambria, serif"><b>functional</b></font><font face="Cambria, serif">
          inputs</font></p>
        </td>
        <td>
          <p><br/>
          <?php echo $faculty3; ?>
          </p>
        </td>
        <td>
          <p><br/>
          <?php
            $meet = '';
                  if (isset($IDP_data['0']['meeting_planned']) && $IDP_data['0']['meeting_planned']!='') {
                    $meet = explode(';',$IDP_data['0']['meeting_planned']);
                    if(isset($meet[0]))
    {
    $meet = $meet[0];
    }
                    
                  }
                  else
                  {
                    $meet = '';
                  }
          ?>
          <?php echo $meet; ?>
          </p>
        </td>
        <td>
          <p><br/>
            
            <?php
                    if (isset($IDP_data['0']['rel_target_date'])) { $rel2 = explode(';',$IDP_data['0']['rel_target_date']); ?>
                         <?php if(isset($rel2[0])) { echo $rel2[0]; } ?>
                     <?php }
                      else
                      { ?>
                         <?php echo ''; ?>
                   <?php   }
                  ?>
          </p>
        </td>
        <td>
              <p><br/>
              <?php if(isset($relfinaltopic[0])) { echo $relfinaltopic[0]; } ?>
              </p>
        </td>
        <td>
              <p><br/>
              <?php if(isset($relfinaltopic_cmt[0])) { echo $relfinaltopic_cmt[0]; } ?>
              </p>
        </td>

  </tr>

<?php }?>
  <?php 
    $faculty4 = '';
    if (isset($IDP_data['0']['leader_name'])) {
      $faclty = explode(';',$IDP_data['0']['leader_name']);
      if (isset($faclty[1])) {
        $faculty4 = $faclty[1];
      }
    }
    ?>
  <tr valign="top">
    <td height="42">
      <p><font face="Cambria, serif">2</font></p>
    </td>
    <td>
      <p><font face="Cambria, serif"><b>Mentoring</b></font><font face="Cambria, serif">
      through leader in own function for </font><font face="Cambria, serif"><b>behavioural</b></font><font face="Cambria, serif">
      inputs</font></p>
    </td>
    <td>
      <p><br/>
      <?php echo $faculty4; ?>
      </p>
    </td>
    <td>
      <p><br/>
      <?php
        $meet = '';
              if (isset($IDP_data['0']['meeting_planned']) && $IDP_data['0']['meeting_planned']!='') {
                $meet = explode(';',$IDP_data['0']['meeting_planned']);
                if(isset($meet[1]))
{
$meet = $meet[1];
}
              }
              else
              {
                $meet = '';
              }
      ?>
      <?php echo $meet; ?>
      </p>
    </td>
    <td>
      <p><br/>
        
        <?php
                if (isset($IDP_data['0']['rel_target_date'])) { $rel2 = explode(';',$IDP_data['0']['rel_target_date']); ?>
                     <?php if(isset($rel2[1])) { echo $rel2[1]; } ?>
                 <?php }
                  else
                  { ?>
                     <?php echo ''; ?>
               <?php   }
              ?>
      </p>
    </td>
<td>
      <p><br/>
      <?php if(isset($relfinaltopic[1])) { echo $relfinaltopic[1]; } ?>
      </p>
    </td>
<td>
      <p><br/>
      <?php if(isset($relfinaltopic_cmt[1])) { echo $relfinaltopic_cmt[1]; } ?>
      </p>
    </td>
  </tr>

</table>
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
<p><font face="Cambria, serif"><b>Part
C: Development through action learning projects</b></font></p>
<table cellpadding="3" cellspacing="0">
    <tr>
    <td height="42">
      <p><font face="Cambria, serif"><b>Project Title</b></font></p>
    </td>
    <td>
      <p><br/>
      <?php echo $project_title; ?>
      </p>
    </td>
  </tr>
  <tr valign="top">
    <td height="14">
      <p><font face="Cambria, serif"><b>Review date</b></font></p>
    </td>
    <td>
      <p><br/>
        <?php
                  if (isset($IDP_data['0']['project_review_date'])) { ?>
                      <?php echo $IDP_data['0']['project_review_date']; ?>
                   <?php }
                    else
                    { ?>
                       <?php echo ""; ?>
                 <?php   }
                ?>
      </p>
    </td>
  </tr>
  <tr valign="top">
    <td>
      <p><font face="Cambria, serif"><b>Target end date</b></font></p>
    </td>
    <td>
      <p><br/>
         <?php
                  if (isset($IDP_data['0']['project_end_date'])) { ?>
                      <?php echo $IDP_data['0']['project_end_date']; ?>
                   <?php }
                    else
                    { ?>
                       <?php echo ""; ?>
                 <?php   }
                ?>
      </p>
    </td>
  </tr>
  <tr valign="top">
    <td>
      <p><font face="Cambria, serif"><b>Project scope</b></font></p>
    </td>
    <td>
      <p><br/>
         <?php 
                  $project_scope = '';
                  if (isset($IDP_data['0']['project_scope'])) {
                    $project_scope = $IDP_data['0']['project_scope'];
                  }
                  else
                  {
                    $project_scope = '';
                  }
                  echo $project_scope;
                  ?>
      </p>
    </td>
  </tr>
  <tr valign="top">
    <td height="47">
      <p><font face="Cambria, serif"><b>Project exclusions</b></font></p>
    </td>
    <td>
      <p><br/>
        <?php 
                $project_exclusion = '';
                if (isset($IDP_data['0']['project_exclusion'])) {
                  $project_exclusion = $IDP_data['0']['project_exclusion'];
                }
                else
                {
                  $project_exclusion = '';
                }
                 echo $project_exclusion;
                ?>
      </p>
    </td>
  </tr>
  <tr valign="top">
    <td>
      <p><font face="Cambria, serif"><b>Project deliverables </b></font><font face="Cambria, serif">(Target
      at rating 3: good solid performance)</font></p>
    </td>
    <td>
      <p><br/>
        <?php 
                 $Project_deliverables = '';
                if (isset($IDP_data['0']['Project_deliverables'])) {
                  $Project_deliverables = $IDP_data['0']['Project_deliverables'];
                }
                else
                {
                  $Project_deliverables = '';
                }
                echo $Project_deliverables;
                ?>
      </p>
    </td>
  </tr>
  <tr valign="top">
    <td>
      <p><font face="Cambria, serif"><b>What is the employee expected to
      learn from this project</b></font></p>
    </td>
    <td>
      <p><br/>
        <?php 
               $expected = '';
                if (isset($IDP_data['0']['learn_from_project'])) {
                  $expected = $IDP_data['0']['learn_from_project'];
                }
                else
                {
                  $expected = '';
                }
                echo $expected;
            ?>
      </p>
    </td>
  </tr>
  <tr valign="top">
    <td>
      <p><font face="Cambria, serif"><b>Reviewer(s) name</b></font></p>
    </td>
    <td>
      <p><br/>
        <?php 
                $review_name = '';
                if (isset($IDP_data['0']['Reviewer'])) {
                  $review_name = $IDP_data['0']['Reviewer'];
                }
                else
                {
                  $review_name = '';
                }
                echo $review_name;
                ?>
      </p>
    </td>
  </tr>
<tr valign="top">
    <td>
      <p><font face="Cambria, serif"><b>Project Status
</b></font></p>
    </td>
    <td>
      <p><?php if (isset($IDP_data['0']['Year_end_prog_status'])) { echo $IDP_data['0']['Year_end_prog_status']; } ?></p>
    </td>
  </tr>
<tr valign="top">
    <td>
      <p><font face="Cambria, serif"><b>Project Status Comments</b></font></p>
    </td>
    <td>
      <p><?php if (isset($IDP_data['0']['Year_end_prog_comments'])) { echo $IDP_data['0']['Year_end_prog_comments']; } ?></p>
    </td>
  </tr>
</table>
<p><br/>
<br/>

</p>
</div>

</table>
</div>















<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<div class="modal fade-scale" id="report_mang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style="top: 20%;">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Select reporting Manager</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       
      </div>
      <div class="modal-body">
                
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th></th>
                      <th>Name</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <input type="radio" name="manager" id='1' value='<?php echo $emp_data['0']['Reporting_officer1_id'];?>'>
                      </td>
                      <td id='report_1'>
                        

                        <?php if(isset($mgr_data) && count($mgr_data)>0){
                                     echo $mgr_data[0]['Emp_fname']." ".$mgr_data[0]['Emp_lname'];} ?>
                      </td>
                    </tr>
                    

                    <?php if(isset($emp_data['0']['Reporting_officer2_id']) && $emp_data['0']['Reporting_officer2_id']!=''){
                              
                              $employee = new EmployeeForm;
                              $where = 'where Email_id = :Email_id';
                              $list = array('Email_id');
                              $data = array($emp_data['0']['Reporting_officer2_id']);
                              $mgr_data2 = $employee->get_employee_data($where,$data,$list);
                      ?>

                    <tr>
                      <td>
                        <input type="radio" name="manager" id='2' value="<?php if(isset($emp_data['0']['Reporting_officer2_id']) && $emp_data['0']['Reporting_officer2_id']!=''){ echo $emp_data['0']['Reporting_officer2_id'];}?>">
                      </td>
                      <td id='report_2'>
                        <?php if(isset($mgr_data2) && count($mgr_data2)>0){
                                     echo $mgr_data2[0]['Emp_fname']." ".$mgr_data2[0]['Emp_lname'];} ?>
                      </td>
                    </tr>

                    <?php } ?>
                  </tbody>
                </table>
      </div>
      
       <div class="modal-footer">
                
                <div class="swal2-actions" style="display: flex;">
                  <button type="button" class="swal2-confirm btn btn-success mt-2 " id='continue_mang' style="display: inline-block;" >OK!</button>
                  <button type="button" data-dismiss="modal" class="swal2-cancel btn btn-danger ml-2 mt-2" style="display: inline-block;" aria-label="close">No, cancel!</button>
                </div>
        </div>

    </div>
  </div>
</div>





<!-- Modal -->
<div class="modal fade-scale" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style="top: 20%;">
    <div class="modal-content" style="width: 600px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <!-- <h4 class="modal-title" id="myModalLabel">Modal title</h4> -->
      </div>
      <div class="modal-body">
            
          <div class="swal2-header">
            <div class="swal2-icon swal2-warning swal2-animate-warning-icon" style="display: flex;margin-top: 0px;margin-bottom: 10px"></div>
            <br><label><b style="font-size: 18px;">Are you sure you want to submit the goalsheet?</b></label>
          </div>


          <div class="swal2-content">
            
            <div id="swal2-content" style="display: block;font-size: 15px;text-align: left;">
              <!-- <input type="checkbox" name="" id='checkbox' style="margin-right: 2px;">
              <span class="blink" style="margin-left: 30px;">
                   

              </span> -->

              <div class="col-md-1"><input type="checkbox" name="" id='checkbox' style="margin-right: 2px;"></div>
              <div class="col-md-11" id='myBlinkingDiv'><?php
                              if (isset($is_apr) && count($is_apr)>0) {?>
                               <label style="text-align: left;"> I have discussed all KRA/KPIs with my manager, and I am in agreement of the same</label><br>

                               <label style="text-align: left;">I would be discussing all editable/non-editable cascaded goals with my subordinates, and shall finalise the same with them jointly.</label>
                    <?php }else{?>

                                I have discussed all KRA/KPIs with my manager, and I am in agreement of the same
                    <?php } ?> </div>
            </div>
          </div>




          <div class="swal2-actions" style="display: flex;">
            <div id="show_spin_kpi" style="display: none"><i class="fa fa-spinner fa-spin" style="font-size:24px;float: left;"></i></div>
            <button type="button" class="swal2-confirm btn btn-success mt-2 continue_goal_set" style="display: inline-block;font-size: 16px;" aria-label="">Agree</button><button type="button" class="swal2-cancel btn btn-danger ml-2 mt-2" style="display: inline-block;font-size: 16px;" aria-label="">No, cancel!</button>
            
          </div>
      </div>
      
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade-scale" id="del_goal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style="top: 20%;">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Delete KRA</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       
      </div>
      <div class="modal-body">
                <p> Are you sure you want to delete this KRA? </p>
      </div>
      
       <div class="modal-footer">
                <div id="del_goal_set_kra" style="display: none"><i class="fa fa-spinner fa-spin" style="font-size:24px;float: left;"></i></div>
                <!-- <button type="button" data-dismiss="modal" class="btn dark btn-outline">Cancel</button>
                <button type="button" class="btn border-blue-soft" id="del_goal_set">Delete</button> -->
                <div class="swal2-actions" style="display: flex;">
                  <button type="button" class="swal2-confirm btn btn-success mt-2 " id='del_kpi2' data-dismiss="modal" style="display: inline-block;" aria-label="" id="del_goal_set">Yes, delete it!</button>
                  <button type="button" data-dismiss="modal" class="swal2-cancel btn btn-danger ml-2 mt-2" style="display: inline-block;" aria-label="close">No, cancel!</button>
                </div>
        </div>

    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade-scale" id="del_krakpi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style="top: 20%;">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Delete KPI</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       
      </div>
      <div class="modal-body">
                <p> Are you sure you want to delete this KPI? </p>
      </div>
      
       <div class="modal-footer">
                <div id="del_goal_set_kra" style="display: none"><i class="fa fa-spinner fa-spin" style="font-size:24px;float: left;"></i></div>
                <!-- <button type="button" data-dismiss="modal" class="btn dark btn-outline">Cancel</button>
                <button type="button" class="btn border-blue-soft" id="del_goal_set">Delete</button> -->
                <div class="swal2-actions" style="display: flex;">
                  <button type="button" class="swal2-confirm btn btn-success mt-2 " id='continue_del_krakpi' data-dismiss="modal" style="display: inline-block;" aria-label="" id="del_goal_set">Yes, delete it!</button>
                  <button type="button" data-dismiss="modal" class="swal2-cancel btn btn-danger ml-2 mt-2" style="display: inline-block;" aria-label="close">No, cancel!</button>
                </div>
        </div>

    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade-scale" id="cascade_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style="top: 20%;">
    <div class="modal-content">
      <div class="modal-header">
         <h3 style="margin-top: 0px;margin-bottom: 0px;"><b>List of Subordinates</b></h3>
        <button type="button" class="close close_cass" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
        <!-- <h4 class="modal-title" id="myModalLabel">Modal title</h4> -->
      </div>
      <div class="modal-body">
            
          <!-- <div class="swal2-header">
            <div class="swal2-icon swal2-warning swal2-animate-warning-icon" style="display: flex;"></div>
            <br><label><b style="font-size: 18px;"></b></label>
          </div> -->
          <div class="swal2-content">

           
            
            <div id="swal2-content" style="display: block;">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th></th>
                    <th>Sr.no</th>
                    <th>Employee Name</th>
                    <th>Do not allow to edit</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 

                      $employee = new EmployeeForm; 
                      $Email_id = Yii::app()->user->getState("employee_email");
                      $where = 'where Reporting_officer1_id = :Reporting_officer1_id';
                      $list = array('Reporting_officer1_id');
                      $data = array($Email_id);
                      $emp_data = $employee->get_employee_data($where,$data,$list);
                      

                  ?>
                  <?php for($i=0;$i<count($emp_data);$i++){ ?>
                    <tr>
                        <td><input type="checkbox" id="<?php print_r($emp_data[$i]['Employee_id']);?>" value="<?php print_r($emp_data[$i]['Employee_id']);?>" class="cascade_to"/> </td>
                        <td><?php echo $i+1;?></td>
                        <td id='cass'><?php print_r($emp_data[$i]['Emp_fname'].' '.$emp_data[$i]['Emp_lname']);?></td>
                        <td>
                          <input type="checkbox" id="<?php print_r($emp_data[$i]['Employee_id']);?>_2" value="2" class="donot"/> 
                         <!--  <input type="radio" id="<?php print_r($emp_data[$i]['Employee_id']);?>_1" name="<?php print_r($emp_data[$i]['Employee_id']);?>" value="1"><label>Editable</label>
                          <input type="radio" id="<?php print_r($emp_data[$i]['Employee_id']);?>_2" name="<?php print_r($emp_data[$i]['Employee_id']);?>" value="0"><label>Non editale</label><br> -->

                        </td>
                    </tr>

                  <?php } ?>
                </tbody>
              </table>
              
                
             
            </div>
          </div>
          <div class="swal2-actions" style="display: flex;">
            <button type="button" class="swal2-cancel btn btn-danger ml-2 mt-2 cancel_cascade" style="display: inline-block;font-size: 16px;margin-right: 10px;" aria-label="">No, cancel!</button>
            <button type="button" class="btn btn-success mt-2 continue_cascade" style="display: inline-block;font-size: 16px;" aria-label="">Ok</button>
          </div>
      </div>
      
    </div>
  </div>
</div>



 <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" id="lg_cascade" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" style="width: 1140px!important;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myExtraLargeModalLabel">Extra large modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
               <!--Accordion wrapper-->
      <div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true">


              <?php 

              if(isset($kpi_data3) && $kpi_data3!=''){
                       print_r($kpi_data3); 
                       
                      }else{
                        echo '2';
                      }

              ?>


              <?php 

                  if(isset($data1) && $data1!=''){
                   print_r($data1); 
                   
                  }else{
                    echo '2';
                  }

                   if(isset($kpi_list_new) && $kpi_list_new!==''){
                      print_r($kpi_list_new);
                   }
                   if(isset($target_unit_new) && $target_unit_new!==''){
                      print_r($target_unit_new);
                   }
                   if(isset($target_value1_new) && $target_value1_new!==''){
                      print_r($target_value1_new);
                   }
                   if(isset($kpi_target_value_new) && $kpi_target_value_new!==''){
                      print_r($kpi_target_value_new);
                   }
                   if(isset($kra_target) && $kra_target!==''){
                      print_r($kra_target);
                   }
                   if(isset($kra_catg) && $kra_catg!==''){
                      print_r($kra_catg);
                   }
                   if(isset($goal_set_year) && $goal_set_year!==''){
                      print_r($goal_set_year);
                   }
                   if(isset($kpi_no) && $kpi_no!==''){
                      print_r($kpi_no);
                   }


              ?>
             <?php 

                  $employee = new EmployeeForm; 
                  $Email_id = Yii::app()->user->getState("employee_email");
                  $where = 'where Reporting_officer1_id = :Reporting_officer1_id';
                  $list = array('Reporting_officer1_id');
                  $data = array($Email_id);
                  $emp_data = $employee->get_employee_data($where,$data,$list);
                          

                   for($i=0;$i<count($emp_data);$i++){ ?>

                      <!-- Accordion card -->
                      <div class="card">
                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingTwo<?php echo $i; ?>">
                          <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx<?php echo $i;?>" href="#collapseTwo<?php echo $i;?>"
                            aria-expanded="false" aria-controls="collapseTwo<?php echo $i;?>">
                            <h5 class="mb-0">
                              <?php print_r($emp_data[$i]['Emp_fname'].' '.$emp_data[$i]['Emp_lname']);?> <i class="fas fa-angle-down rotate-icon" style="float: right;"></i>
                            </h5>
                          </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseTwo<?php echo $i;?>" class="collapse" role="tabpanel" aria-labelledby="headingTwo<?php echo $i;?>"
                          data-parent="#accordionEx<?php echo $i;?>">
                          <div class="card-body">

                            <div class="table-responsive-md">
                              <table class="table">
                                <thead></thead>
                                <tbody>
                                  
                                  <tr>
                                    <td class="col-md-3">KRA Category</td>
                                    <td class="col-md-3">
                                   
                                                            <?php 
                                                                //print_r($kpi_auto_data);die();
                                                                 if (isset($kra_list) && count($kra_list)>0) {


                                                                 // print_r($kra_list);
                                                                    $list_data = '';
                                                                    $models = new KRAStructureForm();
                                                                     $models1 = $models->findAll();
                                                                    $list = CHtml::listData($models1,'KRA_category', 'KRA_category');
                                                                 }
                                                                $kpi_category = '';$kpi_desc = '';$wtg = '';$kpi_count = '';$target_value1 = '';$target_unit = '';$kpi_id = '';
                                                               $format_list = array('Select' => 'Select','Days' => 'Days','Date' => 'Date','Units' => 'Units','Weight' => 'Weight','Ratio' => 'Ratio','Value' => 'Value','Percentage' => 'Percentage','Text' => 'Text');
                                                                $wtage = array('10'=>'10','15'=>'15','20'=>'20','25'=>'25','30'=>'30','35'=>'35','40'=>'40','45'=>'45','50'=>'50','55'=>'55','60'=>'60');
                                                                if (isset($kpi_data_edit) && count($kpi_data_edit)>0) {
                                                                   $kpi_category[$kpi_data_edit['0']['KRA_category']] = array('selected' => 'selected');
                                                                   //print_r($kpi_category);die();
                                                                   $kpi_desc = $kpi_data_edit['0']['KRA_description'];
                                                                   $kpi_id = $kpi_data_edit['0']['KPI_id'];
                                                                   $list_count = explode(';', $kpi_data_edit['0']['target_unit']);
                                                                   $wtg[$kpi_data_edit['0']['target']] = array('selected' => 'selected');
                                                                   $kpi_count = explode(';', $kpi_data_edit['0']['kpi_list']);
                                                                   $target_unit = explode(';', $kpi_data_edit['0']['target_unit']);
                                                                   //print_r($target_unit);die();
                                                                   $target_value1 = explode(';', $kpi_data_edit['0']['target_value1']);
                                                                   $per_kpi_wt = explode(';', $kpi_data_edit['0']['KPI_target_value']);
                                                                   $kpi_category1 = $kpi_data_edit['0']['KRA_category'];
                                                                }
                                                               
                                                               $cities = array('Business'=>'Business','Process'=>'Process','People'=>'People','Customer'=>'Customer');
                                           
                                                                 echo CHtml::dropDownList("target_value",'',$list,$htmlOptions=array('class'=>"form-control col-md-3 target_value",'onchange'=>'js:get_target_value();','options' => $kpi_category));
                                                                ?><label id="kpi_cat_value-<?php echo $kpi_id; ?>" style="display:none"><?php if(isset($kpi_category1)) { echo $kpi_category1; } ?></label>

                                    </td>
                                    
                                  </tr>
                                  <tr>
                                    <td class="col-md-3">
                                                      Weightage
                                      </td>
                                      <td class="col-md-3" align="center" id="Weightage_list">
                                          <?php echo CHtml::dropDownList("target_value",'',$wtage,$htmlOptions=array('class'=>"form-control col-md-3 Weightage",'id'=>'Weightage','options' => $wtg));
                                            ?>
                                      </td>
                                  </tr>
                                  <tr>
                                                     
                                        <?php 
                                                if (isset($kpi_data_edit) && count($kpi_data_edit)>0) {
                                                     $kpi_id = $kpi_data_edit['0']['KPI_id'];
                                                  }

                                        ?>
                                        <td class="col-md-4"><label id="kpi_edit_id" style="display: none"><?php echo $kpi_id; ?></label>
                                                KRA Description
                                        </td>
                                        <td class="col-md-8">                
                                              <?php  echo CHtml::textField('KRA_description',$kpi_desc,array('style'=>'float: left;font-size: 16px;','class'=>'form-control',"maxlength"=>"1000")); ?>
                                        </td>
                                                      
                                  </tr>
                                 

                                </tbody>
                                
                              </table>

                              <div class="table-responsive">
                                <table class="table table-bordered mb-0">
                                  <thead>
                                    <tr>
                                      <th>Kra Description</th>
                                      <td colspan="8">dfjksdjfkds</td>

                                    </tr>
                                    <tr>
                                        <th style="" class="col-md-2"> KPI List</th>
                                        <th style="text-align:center;" class="col-md-1"> Unit </th>
                                        <th style="text-align:center;" class="col-md-1"> KPI Weightage </th>
                                        <th style="text-align:center;" class="col-md-1"> Value </th>
                                        <th style="text-align:center;" class="col-md-1"> (1)<br>Unsatisfactory <br>Performance1</th>
                                        <th style="text-align:center;" class="col-md-1"> (2)<br>Needs<br>Improvement </th>
                                        <th style="text-align:center;" class="col-md-1"> (3)<br>Good Solid <br>Performance </th>
                                        <th style="text-align:center;" class="col-md-2"> (4)<br>Superior <br>Performance </th>
                                        <th style="text-align:center;" class="col-md-2"> (5)<br>Outstanding <br>Performance</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    
                                    <tr>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>
                                  </tbody>
                                  
                                </table>

                              </div>




                                                

                              


                            </div>

                          </div>
                        </div>

                      </div>
                      <!-- Accordion card -->

                  <?php } ?>
      </div>
      <!-- Accordion wrapper -->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->





  

                <!-- /////////////////////////////END PAGE /////////////////////////// -->
                
           <!--  </div> --> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

</div>
















            </div>
          </div>
        </div>






























<script src="<?php echo Yii::app()->request->baseUrl; ?>/Greeva_v2.0/horizontal/dist/assets/js/pages/form-advanced.init.js"></script>
<!-- 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
<script>
$(function(){
$("#getdata").click(function(){
var base_url = window.location.origin;
save_detail_pdf();
});
});
function save_detail_pdf()
                { 
                    var base_url = window.location.origin;
                    var data = {
                        doc : $('#goals').html(),
                        emp_id : $('#emp_id').text(),
                        year1:$('#yr').text(),
                    };
                    $.ajax({                            
                    type : 'post',
                    datatype : 'html',
                    data : data,
                    url : base_url+$("#basepath").attr('value')+'/index.php?r=Checkattach/check_goal_idp',
                    success : function(data)
                    {

                        location.href = base_url+$("#basepath").attr('value')+'/Goalsheet_docs/goalsheet'+'_'+$("#femp_name").text()+'_'+$("#lemp_name").text()+$('#yr').text()+'.pdf'; 
                    }
                    });                 
                }
</script>
<script type="text/javascript">
  window.onload = function(){

      document.getElementById("download")

      .addEventListener("click",()=>{

         $('#goals').css('display','block');

        const goals = this.document.getElementById("goals");

        // console.log(goals);

        // console.log(window);

        var opt = {

          margin: 5,

          filename: 'midyearreview.pdf',

          image: {type: 'jpeg', quality:0.98},

          html2canvas: {scale:2},

          pagebreak: {mode: 'avoid-all',after: '#validate', after: '#target_date4'},

          jsPDF:{unit: 'mm',format: 'a4', orientation: 'landscape'}      

        };

        html2pdf().from(goals).set(opt).then(function(){

            $("#goals").css( { "font-size":"12px", "background-color" : "#F5F5F5" });


          }).save();
        $('#goals').css('display','none');

      })



}

</script>
<script type="text/javascript">
    $(function(){
        var Status = $('#status_stop').text();
        var status1=Status.trim()
        var goal_year=$("#financial_year option:selected").text();
        if(status1!='Approved' &&  (goal_year=='2021-2022' || goal_year=='2020-2021')){
                setInterval(kpi_idp_data,3000);  
       }

       // else{
       //          $('textarea').prop('disabled', true);
       //          $('.send_for_appraisal').css('display','none');
       //          $('input').prop('disabled', true);
       //          // $('#temp_save').css('display','none'); 
       //          $("#err").show();  
       //          $("#err").text("System will not allow to fill up details now.");
       //          $("#err").css('background-color','#B2EAC5');
       //          $("#err").css('color','black');
       //          $("#err").css('top','150px');
       //          $("#err").css('border','1px solid #0DEA56');
       // }

    });
</script>
<script type="text/javascript">
  
  // $("body").on('click','.del_kpi',function(){
  //  //alert('fdfdf');
 //            $("#del_goal").modal('show');                         
 //            var id = $(this).attr('id');
 //            var id_value = id.split('-');                        
 //            var data = {
 //                        'KPI_id' : id_value[1],
 //                        };
 //            var base_url = window.location.origin;
 //            $("#del_goal_set").click(function(){
 //                 $("#del_goal_set_kra").modal('show');
 //                 $('#del_kpi2').click(function(){
 //                   $.ajax({                            
  //                  type : 'post',
  //                  datatype : 'html',
  //                  data : data,
  //                  url : base_url+'pms/index.php?r=Goalsheet/kpi_del1',
  //                  success : function(data)
  //                  {
  //                     alert(data);
  //                      $(".count_goal").text(data);
  //                      if(data != '')
  //                      {
  //                          $("#output_div_"+id_value[1]).fadeOut(1000);
  //                         $("output_div_"+id_value[1]).load(location.href + " .output_div"); 
  //                         $("#del_goal").modal('hide');
  //                         $("#del_goal_set_kra").modal('hide');
  //                         location.reload();
  //                      }

  //                  }
  //              });
 //                 })
                  
 //            });                       
 //    });


 $("body").on('click','.add_kpi',function(){
                       // alert($(this).attr('id'));
                        var value = $(this).attr('id');
                        var get_id = value.split('-');
                        //alert(get_id);
                        $(this).css('display','none');
                        //alert($(this).attr('id'));
                        //alert($("#kpi_cat_value-"+get_id[1]).text());
                        var selected_unit = {
                                'kra_category' : $("#kpi_cat_value-"+get_id[1]).text(),
                                'kra_id' : get_id[1],
                                'kpi_last_id' : get_id[2],
                                //'extra_kpi' : $("#no_ki_extra-"+get_id[1]).val(),
                                'extra_kpi' : 1,
                        }
                       // alert($('.target_value').find(':selected').val());
                        var base_url = window.location.origin;
                         $.ajax({
                                    type : 'post',
                                    datatype : 'json',
                                    data : selected_unit,
                                    url : base_url+$("#basepath").attr('value')+'/index.php?r=Goalsheet/gettarget_value2',
                                    success : function(data)
                                    { 
                                        //alert(data);
                                        var detail = jQuery.parseJSON(data);
      
                                        if(detail[0] == '<lable style="color:red">Maximum 7 KPI are allowed to add.</lable>')
                                        {
                                                  $("#err").css('display','block');
                                                  $("#err").fadeOut(6000);
                                                  $("#error_value").text("Maximum 7 KPI are allowed to add.");
                                                  $('#'+get_id[1]).css('display','none');
                                        }
                                        else
                                        {
                                           // alert("get_id[1]");
                                                  $("#extra_kpi"+get_id[1]).show(); 
                                                  $("#extra_kpi"+get_id[1]).html(detail[0]);
                                                  //$("#kpi_list_number"+get_id[1]).text(detail[1]);
                                                  var cnt=parseInt($('#kpi_list_number').text());

                                                  var newcnt=cnt+1;
                                                  //alert(newcnt);
                                                  $("#kpi_list_number").text(newcnt);
                                        } 
                                    
                                    }
                            });
});

 $("body").on('click','.del_kra_kpi',function(){

        //alert('dfsdfs');

        var this_id = $(this).attr('id');
        var splited = this_id.split('-');
        $("#del_krakpi").modal('show');

        var data =  {
                last_id : splited[2],
                kra_id : splited[1],
            };
            $("#continue_del_krakpi").click(function(){
            $("#show_spin_kpi").css('display','block');
                $.ajax({
                  type : 'post',
                  data : data,
                  url : base_url+$("#basepath").attr('value')+'/index.php?r=Goalsheet/krakpi_del',
                  success : function(data)
                  {
                      //alert(data);
                      $("#show_spin_kpi").css('display','none');
                      $("#del_krakpi").modal('hide');
                      if(data == 1)
                      {
                          $("#output_div_edit").load(location.href + " #output_div_edit");
                          $("#extra_"+splited[1]).css('display','block');
                          location.reload();
                      }
                      location.reload();
                  }
              });
        });
                      
});

  $("body").on('click','.del_kpi',function(){

      $("#del_goal").modal('show');                         
            var id = $(this).attr('id');
            var id_value = id.split('-');                        
            var data = {
                        'KPI_id' : id_value[1],
                        };
            var base_url = window.location.origin;
            $('#del_kpi2').click(function(){

                $.ajax({                            
                    type : 'post',
                    datatype : 'html',
                    data : data,
                    url : base_url+'/pms/index.php?r=Goalsheet/kpi_del1',
                    success : function(data)
                    {
                        $(".count_goal").text(data);
                        $("#output_div_"+id_value[1]).fadeOut(1000);
                        $("output_div_"+id_value[1]).load(location.href + " .output_div"); 
                        $("#del_goal").modal('hide');
                        // $("#del_goal_set_kra").modal('hide');
                        location.reload();
                        // if(data != '')
                        // {
                        //    $("#output_div_"+id_value[1]).fadeOut(1000);
                        //    $("output_div_"+id_value[1]).load(location.href + " .output_div"); 
                        //    $("#del_goal").modal('hide');
                        //    // $("#del_goal_set_kra").modal('hide');
                        //    location.reload();
                        // }

                    }
                });

            });

  });


</script>
<script type="text/javascript">

  function get_target_value()
                {
                   //alert($('.target_value').find(':selected').val());
                    var business=0;var people=0;var customer=0;var process=0;
                    
                    var kar_cat=$('.target_value').find(':selected').val();
                   
                    process=<?php echo $proc ?>;
                    business=<?php echo $buis ?>;
                    people=<?php  echo $ppl ?>;
                    customer=<?php echo $cust ?>;
                    var edt =$('#edit1').text();
                    if(edt == ""){
                        var edt_flg=0;
                    }
                    else{
                        var edt_flg=1;
                    }
                    $("#kra_cat_cnt31").text(0);
                   
                        if($('#kra_cat_cnt1').text() == 1 && ($('#cnt_kra_cat_people').text() > 1 || $('#cnt_kra_cat_process').text() > 1 || $('#cnt_kra_cat_customer').text() > 1 || $('#cnt_kra_cat_business').text() > 1))
                    {
                         $("#err").show();  
                        $("#err").fadeOut(6000);
                        $("#error_value").text("Selection of all KRA category is mandatory");
                        $("#err").addClass("alert-danger");
                         $("html, body").animate({ scrollTop: 0 }, "slow");
                    }
                    else if(parseInt(process) >= 2 && kar_cat=="Process"){
                              
             
                     $("#err").show();  
                     $("#err").fadeOut(6000);
                    $("#error_value").text("Please select another KRA category");
               
                     
                    }
                    else if(parseInt(business) >= 2 && kar_cat=="Business"){
                        $("#err").show();  
                     $("#err").fadeOut(6000);
                    $("#error_value").text("Please select another KRA category");
                    
                    }
                   else if(parseInt(people) >= 2 && kar_cat=="People"){
                        $("#err").show();  
                     $("#err").fadeOut(6000);
                    $("#error_value").text("Please select another KRA category");
                     
                    }
                    else if(parseInt(customer) >= 2 && kar_cat=="Customer"){
                         $("#err").show();  
                     $("#err").fadeOut(6000);
                    $("#error_value").text("Please select another KRA category");
                    
                    }
                    else if(edt_flg == 0) {

                     var selected_unit = {
                            'kra_category' : $('.target_value').find(':selected').val(),
                    }
                    $("#get_target_value").css('display','none');
                    // alert('jslkdjls');
                    var base_url = window.location.origin;
                     $.ajax({
                            type : 'post',
                            datatype : 'json',
                            data : selected_unit, 
                            url : base_url+'/pms/index.php?r=goalsheet/gettarget_value',
                            success : function(data)
                            { 
                                //alert(data);
                                var detail = jQuery.parseJSON(data);
                                //alert(detail[5]);
                                $("#kpi_record").html(detail[0]);
                                $("#kpi_list_number").html(detail[1]);
                                $("#min_kpi").text(detail[2]);
                                $("#max_kpi").text(detail[3]);
                                $("#min_kpiwt").text(detail[5]);
                                var target_value_need = detail[4].split(';');
                                $("#target_need1").text(target_value_need[0]);
                                $("#target_need2").text(target_value_need[1]);
                                $("#target_need3").text(target_value_need[2]);
                                $("#target_need4").text(target_value_need[3]);
                                $("#target_need5").text(target_value_need[4]);
                            }
                        });
                        }
                }

  // $('.swal2-confirm').click(function(){
  
  //     $("#success").css('display','block');  
        
  // });

   
    $(function(){

              $("body").on('click','.send_for_appraisal',function(){

                var total = 0;
                    var total_goal = $("#count_goal1").text();
                    var cadree=$.trim($('#cadre').text());
                    var designation=$.trim($('#designation').text());
                    // alert(total_goal);
                    var j = jQuery.noConflict();
                    console.log(total_goal);
                    $(window).scroll(function()
                    {
                        $('#err').animate({top:$(window).scrollTop()+"px" },{queue: false, duration: 350});  
                    });
                    if(total_goal < 3)
                    {
                        $("#err").show();  
                        $("#err").fadeOut(6000);
                        $("#error_value").text("Minimum 3 KRA Required.");
                        $("#err").addClass("alert-danger");
                         $("html, body").animate({ scrollTop: 0 }, "slow");
                    }                    
                    else
                    {
                          for (var i = 1; i<=total_goal; i++) 
                          {  
                            if(total != 0)
                                {
                                    //alert(i);
                                    total = parseInt(total)+parseInt($("#total_"+i).text());
                                } 
                                else
                                {
                                    total = $("#total_"+i).text();
                                }
                               
                          }
                             
                            var kra_cat=parseInt($('#kra_cat_cnt').text());
                      
                            if(kra_cat!= 0){
                                $("#err").show();  
                                $("#err").fadeOut(6000);
                                $("#error_value").text("KRA category should not repeat more than 2 times.");
                                $("#err").addClass("alert-danger");
                                 $("html, body").animate({ scrollTop: 0 }, "slow");
                            }
                            else if (total!=100) 
                            {
                                $("#err").show();  
                                $("#err").fadeOut(6000);
                                $("#error_value").text("Total of KRA should be 100 only.");
                                $("#err").addClass("alert-danger");
                                 $("html, body").animate({ scrollTop: 0 }, "slow");
                               
                            }
                            else if($('#briefly_men').val()==''){

                                $("#err").show();  
                                $("#err").fadeOut(6000);
                                $("#error_value").text("Please mention what is the learning gap / area of strength which needs to be further enhanced");
                                $("#err").addClass("alert-danger");
                                $("html, body").animate({ scrollTop: 0 }, "slow");
                                $("#briefly_men").css('border','2px solid red');
                                

                            }else if($('#user_prgm').val()==''){

                                $("#err").show();  
                                $("#err").fadeOut(6000);
                                $("#error_value").text("Please enter name of program");
                                $("#err").addClass("alert-danger");
                                $("html, body").animate({ scrollTop: 0 }, "slow");
                                $("#user_prgm").css('border','2px solid red');
                                

                            }else if($('#how_training_help').val()==''){

                                $("#err").show();  
                                $("#err").fadeOut(6000);
                                $("#error_value").text("Please explain how the training will help ");
                                $("#err").addClass("alert-danger");
                                $("html, body").animate({ scrollTop: 0 }, "slow");
                                $("#how_training_help").css('border','2px solid red');
                                

                            }else if($('#user_prgm_cmt').val()==''){

                                $("#err").show();  
                                $("#err").fadeOut(6000);
                                $("#error_value").text("Please enter Program comments");
                                $("#err").addClass("alert-danger");
                                $("html, body").animate({ scrollTop: 0 }, "slow");
                                $("#user_prgm_cmt").css('border','2px solid red');
                               

                            }
                          else
                          {

                                    var chk_cmnts = 0;var chk_cmnts1 = 0;var chk_cmnts2 = 0;var chk_compl = 0;var chk_compl1 = 0;
                                    var get_list = $("#compulsory_id").text();
                                    var get_list_value = get_list.split(';');
                                    var prgrm_cmd = ''; var chk = /[;]/; var topic = '';var date_value = '';var faculty_value = '';var development_data = '';var number_of_meetings = '';var faculty_value1 = '';topic_diss1='';

                                    for (var i = 0; i < $("#total_prog").text(); i++) {

                                          if (get_list != '') 
                                      {
                                          for (var j = 0; j < get_list_value.length; j++) {                                
                                                  if (get_list_value[j] == i && ($("#program_cmd-"+get_list_value[j]).val() === undefined || $("#program_cmd-"+get_list_value[j]).val() == '' || chk.test($("#program_cmd-"+get_list_value[j]).val())))
                                                  {
                                                      chk_cmnts = 0;chk_compl = 0;
                                                      $("#program_cmd-"+get_list_value[j]).css('border-color','red');$("#program_cmd"+i).focus();break;
                                                     
                                                  } 
                                                  else if($("#program_cmd-"+get_list_value[j]).val().length>500)
                                                  {
                                                  chk_cmnts = 0;chk_compl = 0;chk_compl1 = 1;
                                                                                          $("#program_cmd-"+get_list_value[j]).css('border-color','red');$("#program_cmd"+i).focus();break;
                                                  }
                                                  else if (get_list_value[j] == i && ($("#program_cmd-"+get_list_value[j]).val() != 'undefined' && $("#program_cmd-"+get_list_value[j]).val() != '' || !chk.test($("#program_cmd-"+get_list_value[j]).val())))
                                                  {chk_compl1 = 0;
                                                      $("#program_cmd-"+get_list_value[j]).css('border-color','');chk_compl++;
                                                  }         
                                          }
                                      }
                                      if ($("#complusory_prg"+i).text() != '' && $("#complusory_prg"+i).text() != 'undefined')
                                      {
                                         var comp_loc = $("#complusory_prg"+i).text();
                                                  var comp_loc_list = comp_loc.split(';');
                                                for (var k = 0; k < comp_loc_list.length; k++) { 
                                                    if (comp_loc_list[k] == $("#company_loc").text() && ($("#program_cmd-"+i).val() === undefined || $("#program_cmd-"+i).val() == '' || chk.test($("#program_cmd-"+i).val())))
                                                      {  
                                                        //alert(comp_loc_list[k]);
                                                          chk_cmnts = 0;chk_compl = 0;
                                                          $("#program_cmd-"+i).css('border-color','red'); $("#program_cmd"+i).focus();
                                                          break;
                                                         
                                                      }  
                                                      else if (comp_loc_list[k] != $("#company_loc").text() && ($("#program_cmd-"+i).val() != 'undefined' && $("#program_cmd-"+i).val() != '' || !chk.test($("#program_cmd-"+i).val())))
                                                      {chk_compl1 = 0;
                                                          $("#program_cmd-"+i).css('border-color','');chk_compl++;
                                                      }   
                                                 }  
                                      }
                                      
                                      if (!($("#program_cmd-"+i).val() === undefined || $("#program_cmd-"+i).val() == '' || chk.test($("#program_cmd-"+i).val())))
                                      {
                                          if (prgrm_cmd == '') 
                                          {
                                              prgrm_cmd = i+'?'+$("#program_cmd-"+i).val();
                                          }
                                          else
                                          {
                                              prgrm_cmd = prgrm_cmd+';'+i+'?'+$("#program_cmd-"+i).val();
                                          }
                                          $("#program_cmd-"+get_list_value[j]).css('border-color','');
                                          $("#program_cmd-"+i).css('border-color','');
                                           chk_cmnts++;
                                      }

                                    }



                                    for (var i = 1; i <= 2; i++) {
                                       if (topic == '') 
                                            {
                                               
                                                topic =$.trim($(".topic"+i).val());
                                                date_value = $.trim($(".days_required"+i).val());
                                                faculty_value = $.trim($(".faculty_email_id"+i).find(":selected").val());
                                            }
                                            else
                                            {
                                                topic = topic+';'+$.trim($(".topic"+i).val());
                                                date_value = date_value+';'+$.trim($(".days_required"+i).val());
                                                faculty_value = faculty_value+';'+$.trim($(".faculty_email_id"+i).find(":selected").val());
                                            }
                                    }
                                    var topic_diss1='';
                                    for (var i = 3; i<=4; i++) {
                                         if (development_data == '') 
                                              {
                                                 
                                                 development_data =  $.trim($("#target_date"+i).val());
                                                 number_of_meetings = $.trim($("#number_of_meetings"+i).val());
                                                 faculty_value1 = $.trim($("#faculty_email_id"+i).val());
                                                 topic_diss1 = $.trim($("#topic_to_be_diss"+i).val());
                                                  //alert(development_data);
                                              }
                                              else
                                              {
                                                  development_data = development_data+';'+$.trim($("#target_date"+i).val());
                                                  number_of_meetings = number_of_meetings+';'+$.trim($("#number_of_meetings"+i).val());
                                                  faculty_value1 = faculty_value1+';'+$.trim($("#faculty_email_id"+i).val());
                                                  topic_diss1 = topic_diss1+';'+$.trim($("#topic_to_be_diss"+i).val());
                                              }
                                      }

                                    if(designation=='Assistant General Manager' || designation=='General Manager'|| designation=='Deputy General Manager' || designation=='Vice President' || designation=='Chief Financial Officer' || designation== 'Director & President' || designation== 'Associate Vice President' || designation=='Joint Managing Director' || designation=='Chairman'|| designation=='Deputy General Manager' || designation=='Senior Vice President' || designation=='Director & COO' || designation=='Managing Director' || designation=='Sr. Vice President' || designation=='Deputy'){


                                          if($.trim($("#faculty_email_id4").val())=='' || $.trim($("#faculty_email_id4").val())=='undefined'){

                                    

                                                  $("#err").show();  
                                                  $("#err").fadeOut(6000);
                                                  $("#error_value").text("Please enter Leader name");
                                                  $("#err").addClass("alert-danger");
                                                  $("html, body").animate({ scrollTop: 0 }, "slow");
                                                  $("#faculty_email_id4").css('border','2px solid red');
                                                  
                                            

                                            }
                                            else if($.trim($("#number_of_meetings4").val())=='' || $.trim($("#number_of_meetings4").val())=='undefined'){

                                      
                                                  $("#err").show();  
                                                  $("#err").fadeOut(6000);
                                                  $("#error_value").text("Please enter number of meetings");
                                                  $("#err").addClass("alert-danger");
                                                  $("html, body").animate({ scrollTop: 0 }, "slow");
                                                  $("#number_of_meetings4").css('border','2px solid red');
                                                  $("#faculty_email_id4").css('border','');

                                              }
                                              else if($.trim($("#topic_to_be_diss4").val())=='' || $.trim($("#topic_to_be_diss4").val())=='undefined'){


                                                  $("#err").show();  
                                                  $("#err").fadeOut(6000);
                                                  $("#error_value").text("Please enter Program objectives");
                                                  $("#err").addClass("alert-danger");
                                                  $("html, body").animate({ scrollTop: 0 }, "slow");
                                                  $("#topic_to_be_diss4").css('border','2px solid red');
                                                  $("#faculty_email_id4").css('border','');
                                                  $("#number_of_meetings4").css('border','');
                                                
                                              }
                                              else if($.trim($("#target_date4").val())=='' || $.trim($("#target_date4").val())=='undefined'){


                                                  $("#err").show();  
                                                  $("#err").fadeOut(6000);
                                                  $("#error_value").text("Please enter Program due date");
                                                  $("#err").addClass("alert-danger");
                                                  $("html, body").animate({ scrollTop: 0 }, "slow");
                                                  $("#target_date4").css('border','2px solid red');
                                                  $("#faculty_email_id4").css('border','');
                                                  $("#number_of_meetings4").css('border','');
                                                  $("#topic_to_be_diss4").css('border','');
                                                
                                                 //$("#error_value").text("Please fill comments for selected program");
                                              }
                                              else{
                                                        
                                                        
                                                        

                                                        $("#target_date4").css('border','');
                                                        $("#number_of_meetings4").css('border','');
                                                        $("#faculty_email_id4").css('border','');
                                                        $("#topic_to_be_diss4").css('border','');
                                                        $("#error_spec2").text("");

                                                        if($("#project_title").val() == '' || $("#project_title").val().length>500)
                                                        {
                                                                    

                                                                  $("#err").show();  
                                                                  $("#err").fadeOut(6000);
                                                                  $("#error_value").text("Please provide project title(Note: 50characters are maximum limit).");
                                                                  $("#err").addClass("alert-danger");
                                                                  $("html, body").animate({ scrollTop: 0 }, "slow");
                                                                  $("#project_title").css('border','2px solid red');
                                                         
                                                        }
                                                        else if($("#rev_date").val() == '')
                                                        {
                                                                   
                                                                  $("#err").show();  
                                                                  $("#err").fadeOut(6000);
                                                                  $("#error_value").text("Please provide project review date.");
                                                                  $("#err").addClass("alert-danger");
                                                                  $("#rev_date").focus();
                                                                  $("html, body").animate({ scrollTop: 0 }, "slow");
                                                                  $("#project_title").css('border','');
                                                                  $("#rev_date").css('border','2px solid red');

                                                        }
                                                        else if($("#due_dateee").val() == '')
                                                        {
                                                               
                                                                  $("#err").show();  
                                                                  $("#err").fadeOut(6000);
                                                                  $("#error_value").text("Please provide project target end date.");
                                                                  $("#err").addClass("alert-danger");
                                                                  $("#due_dateee").focus();
                                                                  $("html, body").animate({ scrollTop: 0 }, "slow");
                                                                  $("#project_title").css('border','');
                                                                  $("#rev_date").css('border','');
                                                                  $("#due_dateee").css('border','2px solid red');
                                                                    
                                                        }
                                                        else if($("#project_scope").val() == '' || $("#project_scope").val().length>500)
                                                        {


                                                                  $("#err").show();  
                                                                  $("#err").fadeOut(6000);
                                                                  $("#error_value").text("Please provide project scope(Note: 500characters are maximum limit).");
                                                                  $("#err").addClass("alert-danger");
                                                                  $("#project_scope").focus();
                                                                  $("html, body").animate({ scrollTop: 0 }, "slow");
                                                                  $("#project_title").css('border','');
                                                                  $("#rev_date").css('border','');
                                                                  $("#due_dateee").css('border','');
                                                                  $("#project_scope").css('border','2px solid red');


                                                                       
                                                        }
                                                        else if($("#project_exclusion").val() == '' || $("#project_exclusion").val().length>500)
                                                        {
                  
                                                                  $("#err").show();  
                                                                  $("#err").fadeOut(6000);
                                                                  $("#error_value").text("Please provide project exclusion(Note: 500characters are maximum limit).");
                                                                  $("#err").addClass("alert-danger");
                                                                  $("#project_exclusion").focus();
                                                                  $("html, body").animate({ scrollTop: 0 }, "slow");
                                                                  $("#project_title").css('border','');
                                                                  $("#rev_date").css('border','');
                                                                  $("#due_dateee").css('border','');
                                                                  $("#project_scope").css('border','');
                                                                  $("#project_exclusion").css('border','2px solid red');
                                                                       
                                                        }
                                                        else if($("#project_deliverables").val() == '' || $("#project_deliverables").val().length>500)
                                                          {
                                                              
                                                                    $("#err").show();  
                                                                    $("#err").fadeOut(6000);
                                                                    $("#error_value").text("Please provide comments in project deliverables field(Note: 500 characters are maximum limit).");   
                                                                    $("#err").addClass("alert-danger");
                                                                    $("#project_deliverables").focus();
                                                                    $("html, body").animate({ scrollTop: 0 }, "slow");
                                                                    $("#project_title").css('border','');
                                                                    $("#rev_date").css('border','');
                                                                    $("#due_dateee").css('border','');
                                                                    $("#project_scope").css('border','');
                                                                    $("#project_exclusion").css('border','');
                                                                    $("#project_deliverables").css('border','2px solid red');


                                                                  
                                                          }
                                                          else if($("#learning_goals").val() == '' || $("#learning_goals").val().length>300)
                                                          {
                                                            
                                                              

                                                                    $("#err").show();  
                                                                    $("#err").fadeOut(6000);
                                                                    $("#error_value").text("Please provide comments in what is expected to learn from this project(Note: 300 characters are maximum limit).");  
                                                                    $("#err").addClass("alert-danger");
                                                                    $("#learning_goals").focus();
                                                                    $("html, body").animate({ scrollTop: 0 }, "slow");
                                                                    $("#project_title").css('border','');
                                                                    $("#rev_date").css('border','');
                                                                    $("#due_dateee").css('border','');
                                                                    $("#project_scope").css('border','');
                                                                    $("#project_exclusion").css('border','');
                                                                    $("#project_deliverables").css('border','');
                                                                    $("#learning_goals").css('border','2px solid red');
                                                                 
                                                          }
                                                          else if($("#Reviewer_name").val() == '' || $("#Reviewer_name").val().length>50)
                                                          {
                                                            

                                                                    $("#err").show();  
                                                                    $("#err").fadeOut(6000);
                                                                    $("#error_value").text("Please provide reviewer(s) name(Note: 50 characters are maximum limit)."); 
                                                                    $("#err").addClass("alert-danger");
                                                                    $("#Reviewer_name").focus();
                                                                    $("html, body").animate({ scrollTop: 0 }, "slow");
                                                                    $("#project_title").css('border','');
                                                                    $("#rev_date").css('border','');
                                                                    $("#due_dateee").css('border','');
                                                                    $("#project_scope").css('border','');
                                                                    $("#project_exclusion").css('border','');
                                                                    $("#project_deliverables").css('border','');
                                                                    $("#learning_goals").css('border','');
                                                                    $("#Reviewer_name").css('border','2px solid red');



                                                                     
                                                          } else{
                                                                  $("#project_title").css('border','');
                                                                  $("#rev_date").css('border','');
                                                                  $("#due_dateee").css('border','');
                                                                  $("#project_scope").css('border','');
                                                                  $("#project_deliverables").css('border','');
                                                                  $("#learning_goals").css('border','');
                                                                  $("#Reviewer_name").css('border','');

                                                                  

                                                                        
                                                                        str = $("#Reporting_officer1_id").text().replace(/\s+/g, '');
                                                                        str1 = $("#emp_code").text().replace(/\s+/g, '');
                                                                        var base_url = window.location.origin;
                                                                       

                                                                          var detail_data = {
                                                                              prgrm_cmd: prgrm_cmd,
                                                                              topic: topic,
                                                                              date_value: date_value,
                                                                              faculty_value: faculty_value,
                                                                              development_data: development_data,
                                                                              number_of_meetings: number_of_meetings,
                                                                              faculty_value1: faculty_value1,
                                                                              topic_diss1: topic_diss1,
                                                                              breiefly_mention:$("#briefly_men").val(),
                                                                              how_the_traing:$("#how_training_help").val(),
                                                                              user_prgm:$("#user_prgm").val(),
                                                                              user_prgm_cmt:$("#user_prgm_cmt").val(),
                                                                              project_title: $("#project_title").val(),
                                                                              review_date: $("#rev_date").val(),
                                                                              target_end_date: $("#due_dateee").val(),
                                                                              project_scope: $("#project_scope").val(),
                                                                              project_exclusion: $("#project_exclusion").val(),
                                                                              Project_deliverables: $("#project_deliverables").val(),
                                                                              learn_from_project: $("#learning_goals").val(),
                                                                              Reviewer: $("#Reviewer_name").val(),
                                                                              emp_code : str1,
                                                                              Reporting_officer1_id: str,
                                                                              tech:'',
                                                                              beh:'',
                                                                              mgr:''
                                                                          };
                                                                          console.log(detail_data);
                                                                           

                                                                          $.ajax({
                                                                                'type' : 'post',
                                                                                'datatype' : 'html',
                                                                                'data' : detail_data,
                                                                                'url' : base_url+$("#basepath").attr('value')+'/index.php?r=IDP/save_data1',
                                                                                success : function(data)
                                                                                {
                                                                                    
                                                                                    $("#error_spec1").text("");
                                                                                    $("#error_spec2").text("");
                                                                                    $("#error_spec3").text("");
                                                                                    $("#error_spec4").text("");


                                                                                    jQuery("#myModal").modal('show');
                                                                                        // if($.trim($('#error_value').text())==""){

                                                                                        //      jQuery("#myModal").modal('show');
                                                                                        //     //alert('ok');
                                                                                        // }

                                                                              

                                                                                  $(".continue_goal_set").click(function(){

                                                                                    var isChecked = $("#checkbox").is(":checked");
                                                                                    if (isChecked) {

                                                                                    $('#success').css('display','none');
                                                                                    $("#show_spin").css('display','block');
                                                                                      var base_url = window.location.origin;
                                                                                      $.ajax({
                                                                                              type : 'post',
                                                                                              datatype : 'html',
                                                                                              url : base_url+'/pms/index.php?r=Goalsheet/sendmail',
                                                                                              success : function(data)
                                                                                              {
                                                                                                 //alert(data);
                                                                                                  $("#show_spin").css('display','none');
                                                                                                  $("#myModal").hide();
                                                                                                  $("#success").show();  
                                                                                                  // $("#success").fadeOut(6000);
                                                                                                  // $("#error_value").text("Notification Sent to your manager");
                                                                                                 // $("#success").addClass("alert-success");                       
                                                                                                }
                                                                                              });



                                                                                      } else {
                                                                                          
                                                                                                var blink_speed = 1000; // every 1000 == 1 second, adjust to suit
var t = setInterval(function () {
    var ele = document.getElementById('myBlinkingDiv');
    ele.style.visibility = (ele.style.visibility == 'hidden' ? '' : 'hidden');
}, blink_speed);

                                                                                      }
                                                                                        });


                                                                                  // 

                                                                                  
                                                                                    
                                                                                  }
                                                                              });
                                                                            
                                                                    
                                                          }
                                                    }

                                    }

                                    
                                    else{
                                      
                                                                        
                                            str = $("#Reporting_officer1_id").text().replace(/\s+/g, '');
                                            str1 = $("#emp_code").text().replace(/\s+/g, '');
                                            var base_url = window.location.origin;
                                           

                                            var detail_data = {
                                                prgrm_cmd: prgrm_cmd,
                                                topic: topic,
                                                date_value: date_value,
                                                faculty_value: faculty_value,
                                                development_data: development_data,
                                                number_of_meetings: number_of_meetings,
                                                faculty_value1: faculty_value1,
                                                topic_diss1: topic_diss1,
                                                breiefly_mention:$("#briefly_men").val(),
                                                how_the_traing:$("#how_training_help").val(),
                                                user_prgm:$("#user_prgm").val(),
                                                user_prgm_cmt:$("#user_prgm_cmt").val(),
                                                project_title: $("#project_title").val(),
                                                review_date: $("#rev_date").val(),
                                                target_end_date: $("#due_dateee").val(),
                                                project_scope: $("#project_scope").val(),
                                                project_exclusion: $("#project_exclusion").val(),
                                                Project_deliverables: $("#project_deliverables").val(),
                                                learn_from_project: $("#learning_goals").val(),
                                                Reviewer: $("#Reviewer_name").val(),
                                                emp_code : str1,
                                                Reporting_officer1_id: str,
                                                tech:'',
                                                beh:'',
                                                mgr:''
                                            };
                                                            console.log(detail_data);
                                                            

                                            $.ajax({
                                                    'type' : 'post',
                                                    'datatype' : 'html',
                                                    'data' : detail_data,
                                                    'url' : base_url+$("#basepath").attr('value')+'/index.php?r=IDP/save_data1',
                                                    success : function(data)
                                                    {
                                                        $("#error_spec1").text("");
                                                        $("#error_spec2").text("");
                                                        $("#error_spec3").text("");
                                                        $("#error_spec4").text("");

                                                          jQuery("#myModal").modal('show');
                                                            // if($.trim($('#error_value').text())==""){

                                                            //      jQuery("#myModal").modal('show');
                                                            //     //alert('ok');
                                                            // }
                                                            
                                                                                      
                                                        $(".continue_goal_set").click(function(){

                                                            var isChecked = $("#checkbox").is(":checked");
                                                            if (isChecked) 
                                                            {

                                                              $('#success').css('display','none');
                                                                 $("#show_spin").show();
                                                                    var base_url = window.location.origin;
                                                                        $.ajax({
                                                                            type : 'post',
                                                                            datatype : 'html',
                                                                            url : base_url+'/pms/index.php?r=Goalsheet/sendmail',
                                                                                  success : function(data)
                                                                                  {
                                                                                     //alert(data);
                                                                                      $("#show_spin").hide(); 
                                                                                      $("#myModal").hide();
                                                                                      $("#success").show();  
                                                                                      // $("#success").fadeOut(6000);
                                                                                      // $("#error_value").text("Notification Sent to your manager");
                                                                                     // $("#success").addClass("alert-success");                       
                                                                                  }
                                                                              });

                                                              }else
                                                              {

                                                                                          
                                                                    var blink_speed = 1000; // every 1000 == 1 second, adjust to suit
                                                                    var t = setInterval(function () {
                                                                    var ele = document.getElementById('myBlinkingDiv');
                                                                    ele.style.visibility = (ele.style.visibility == 'hidden' ? '' : 'hidden');
                                                                    }, blink_speed);
                                                              }
                                                              
                                                            });

                                                                              // 
                                                                            
                                                                          }
                                                                  });
                                                          
                                              
                                    }





                                    


                          }
                      }




            });

       });

  // $('.swal2-confirm').click(function(){
  
  //    $("#success").css('display','block');  
        
  // });
</script>






<script type="text/javascript">
  $('.next').click(function(){

          var total = 0;
                    var total_goal = $("#count_goal1").text();
                    var j = jQuery.noConflict();
                    console.log(total_goal);
                    
                    if(total_goal < 3)
                    {
                        $("#err").show();  
                        $("#err").fadeOut(6000);
                        $("#error_value").text("Minimum 3 KRA Required.");
                        $("#err").addClass("alert-danger");
                         $("html, body").animate({ scrollTop: 0 }, "slow");
                    }                    
                    else
                    {
                        for (var i = 1; i <= total_goal; i++) 
                        {
                            
                                if(total != 0)
                                {
                                    //alert(i);
                                    total = parseInt(total)+parseInt($("#total_"+i).text());
                                } 
                                else
                                {
                                    total = $("#total_"+i).text();
                                }
                        }
                       
                        var kra_cat=parseInt($('#kra_cat_cnt').text());
                       
                            if(kra_cat!= 0){
                                $("#err").show();  
                                $("#err").fadeOut(6000);
                                $("#error_value").text("KRA category should not repeat more than 2 times.");
                                $("#err").addClass("alert-danger");
                                 $("html, body").animate({ scrollTop: 0 }, "slow");
                           }
                           else if (total!=100) 
                            {
                                $("#err").show();  
                                $("#err").fadeOut(6000);
                                $("#error_value").text("Total of KRA should be 100 only.");
                                $("#err").addClass("alert-danger");
                                 $("html, body").animate({ scrollTop: 0 }, "slow");
                               
                            }
                            else{



                            $('#pills-home-tab').removeClass('active');
                $('#pills-profile-tab').addClass('active');
                $('.scnd').addClass('active');
                $('#pills-profile').addClass('active show in');
                $('#pills-home').removeClass('active show in');

                $('.page-title-alt-bg1').text('Individual Development Plan (IDP)');
                $('#pills-profile-tab').css('background-color','#188ae2');
                $('#pills-home-tab').css('background-color','#eeeeee');
                $('#pills-home-tab').css('color','#686767');
                    $('.card-box').css('padding-bottom','466px');
                    $("body").scrollTop(0);
                          }
                    }
                        
          

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
        $('.card-box').css('padding-bottom','466px');
        
     

  });
  $('.first').click(function(){
    $('.page-title-alt-bg1').text('Goalsheet');
    $('#pills-home-tab').css('background-color','#188ae2');
    $('#pills-profile-tab').css('background-color','#eeeeee');
        $('.card-box').css('padding-bottom','0px');
        $('#pills-home-tab').css('color','#fff');
       
  });
</script>
<script type="text/javascript">


  $('body').on('keyup','.value_field',function(e){

       // alert('dsfdsf');
      
        var id = $(this).prop('id');
          var id_value = id.split('-');
          var selected_unit = $('#mask_number-'+id_value[1]).find(':selected').val();
          var unit_value = $(this).val();

          if(selected_unit!==''){

              if(selected_unit=='Units' || selected_unit =='Weight' || selected_unit=='Value'){
                  var date_str = unit_value;
                  var field1 ='<'+Number((date_str*0.69).toFixed(2));
                  var field2 =Number((date_str*0.69).toFixed(2))+ Number(0.01)+' to '+(date_str*0.95).toFixed(2);
                  var field3 =Number((date_str*0.95).toFixed(2))+ Number(0.01)+' to '+(date_str*1.05).toFixed(2);
                  var field4 =Number((date_str*1.05).toFixed(2))+ Number(0.01)+' to '+(date_str*1.29).toFixed(2);
                  var field5 ='>'+Number((date_str*1.29).toFixed(2));

                  $(".target_value1"+id_value[1]).val(field1);
                  $(".target_value2"+id_value[1]).val(field2);
                  $(".target_value3"+id_value[1]).val(field3);
                  $(".target_value4"+id_value[1]).val(field4);
                  $(".target_value5"+id_value[1]).val(field5);
              }
          }

      });




  


  
</script>
<script type="text/javascript">
  // $(function(){

  //     $('.validate_field').keyup(function() {

         
  //           if ($(this).attr('id') === undefined) 
  //           {
  //               var id = $(this).attr('id');
                
  //               var class_name = $(this).attr('class');
  //               var class_value = class_name.split(' ');
  //               var last_id_value = class_value[3].substr(class_value[3].length - 1);
  //               var string1 = /^([0-9])([.]{1})([0-9])*$/;
  //               var ratio_chk1 = /^([0-9]{1,5}[:]{1}[0-9]{1,5})$/;
  //               var letter_chk = /([a-zA-Z]{1,})([0-9]{1,})*$/;
  //               var chk = /[;-]/;


                  
  //                   if($("#mask_number-"+last_id_value).find(':selected').val() == 'Text')
  //                   {
  //                          //alert($(this).val()); 
  //                           if ($("#mask_number-"+last_id_value).find(':selected').val() == 'Text' && chk.test($(this).val())) 
  //                           {
  //                               $("#err").css('display','block');
  //                               $("#err").addClass("alert-danger"); 
  //                               $(this).css('border','1px solid red');
  //                               $("#error_value").text("KPI with unit Text should not contain special characters like '-;'.");
  //                           }
  //                           else if ($("#mask_number-"+last_id_value).find(':selected').val() == 'Text' && $(this).val().length>2000) 
  //                           {
  //                               $("#err").css('display','block');
  //                               $("#err").addClass("alert-danger"); 
  //                               $(this).css('border','1px solid red');
  //                               $("#error_value").text("KPI Text unit should contain maximum 2000 characters.");
  //                           }
  //                           else
  //                           {
  //                                $("#err").css('display','none');
  //                               $(this).css('border','1px solid #999');
  //                           }
  //                   }
  //                   else if($("#mask_number-"+last_id_value).find(':selected').val() == 'Ratio')
  //                   {
  //                         if ($("#mask_number-"+last_id_value).find(':selected').val() == 'Ratio' && !ratio_chk1.test($(this).val())) 
  //                         {
  //                             $("#err").css('display','block');
  //                             $("#err").addClass("alert-danger"); 
  //                             $(this).css('border','1px solid red');
  //                             $("#error_value").text("Please enter valid value in ratio field");
  //                         }
  //                         else
  //                         {
  //                              $("#err").css('display','none');
  //                             $(this).css('border','1px solid #999');
  //                         }
  //                   }
  //                   else if ($("#mask_number-"+last_id_value).find(':selected').val() != 'Text' && $(this).val() != '' && !$.isNumeric($(this).val())) 
  //                   {
  //                         $("#err").css('display','block');
  //                         $("#err").addClass("alert-danger"); 
  //                         $(this).css('border','1px solid red');
  //                         $("#error_value").text("Only numbers are allowed");
  //                   }
  //                   else if ($("#mask_number-"+last_id_value).find(':selected').val() == 'Days' && $(this).val() == '0' ) 
  //                   {
  //                         $("#err").css('display','block');
  //                         $("#err").addClass("alert-danger"); 
  //                         $(this).css('border','1px solid red');
  //                         $("#error_value").text("Please fill correct days number");
  //                   }
  //                   else
  //                   {
  //                         $("#err").css('display','none');
  //                         $(this).css('border','1px solid #999');
  //                   }


  //           }
  //           else{
  //                 var id = $(this).attr('id');                
  //                   var id_value = id.split('-');
  //                   var id_value_text = id_value[0].split('_');


  //                   if(id_value_text[0] == 'kpilistyii')
  //                     { 
  //                        var string1 = /[;]/;
  //                         if (string1.test($(this).val())) 
  //                         {
  //                             $("#err").css('display','block');
  //                             $("#err").addClass("alert-danger"); 
  //                             $(this).css('border','1px solid red');
  //                             $("#error_value").text("KPI description should not contain special character ';'");
  //                         }
  //                         else if($(this).val().length>1000)
  //                         {
  //                             $("#err").css('display','block');
  //                             $("#err").addClass("alert-danger"); 
  //                             $(this).css('border','1px solid red');
  //                             $("#error_value").text("KPI description should contain only 1000 characters");
  //                         }
  //                         else if(!string1.test($(this).val()))
  //                         {
  //                             $("#err").css('display','none');
  //                             $(this).css('border','1px solid #999');
  //                         }
  //                     }    
  //           }

  //       });
  // });
</script>
<script type="text/javascript">
  $("body").on('keyup','.validate_field',function(){

   // alert($(this).attr('id'));

                        if ($(this).attr('id') === undefined) 
                        {
                             var id = $(this).attr('id');
                            var class_name = $(this).attr('class');

                            var class_value = class_name.split(' ');
                            var last_id_value = class_value[3].substr(class_value[3].length - 1);
                            var string1 = /^([0-9])([.]{1})([0-9])*$/;
                            var ratio_chk1 = /^([0-9]{1,5}[:]{1}[0-9]{1,5})$/;
                            var letter_chk = /([a-zA-Z]{1,})([0-9]{1,})*$/;
                            var chk = /[;-]/;
                            if($("#mask_number-"+last_id_value).find(':selected').val() == 'Text')
                                {
                                   //alert($(this).val()); 
                                    if ($("#mask_number-"+last_id_value).find(':selected').val() == 'Text' && chk.test($(this).val())) 
                                    {
                                        $("#err").css('display','block');
                                        $("#err").addClass("alert-danger"); 
                                        $(this).css('border','1px solid red');
                                        $("#error_value").text("KPI with unit Text should not contain special characters like '-;'.");
                                    }
                                    else if ($("#mask_number-"+last_id_value).find(':selected').val() == 'Text' && $(this).val().length>2000) 
                                    {
                                        $("#err").css('display','block');
                                        $("#err").addClass("alert-danger"); 
                                        $(this).css('border','1px solid red');
                                        $("#error_value").text("KPI Text unit should contain maximum 2000 characters.");
                                    }
                                    else
                                    {
                                         $("#err").css('display','none');
                                        $(this).css('border','1px solid #999');
                                    }
                                }
                                else if($("#mask_number-"+last_id_value).find(':selected').val() == 'Ratio')
                                {
                                    if ($("#mask_number-"+last_id_value).find(':selected').val() == 'Ratio' && !ratio_chk1.test($(this).val())) 
                                    {
                                        $("#err").css('display','block');
                                        $("#err").addClass("alert-danger"); 
                                        $(this).css('border','1px solid red');
                                        $("#error_value").text("Please enter valid value in ratio field");
                                    }
                                    else
                                    {
                                         $("#err").css('display','none');
                                        $(this).css('border','1px solid #999');
                                    }
                                }
                                else if ($("#mask_number-"+last_id_value).find(':selected').val() != 'Text' && $(this).val() != '' && !$.isNumeric($(this).val())) 
                                {
                                    $("#err").css('display','block');
                                    $("#err").addClass("alert-danger"); 
                                    $(this).css('border','1px solid red');
                                    $("#error_value").text("Only numbers are allowed");
                                }
                                else if ($("#mask_number-"+last_id_value).find(':selected').val() == 'Days' && $(this).val() == '0' ) 
                                {
                                    $("#err").css('display','block');
                                    $("#err").addClass("alert-danger"); 
                                    $(this).css('border','1px solid red');
                                    $("#error_value").text("Please fill correct days number");
                                }
                                else
                                {
                                     $("#err").css('display','none');
                                    $(this).css('border','1px solid #999');
                                }
                        }
                        else
                        {
                            var id = $(this).attr('id');
                            var id_value = id.split('-');
                            var id_value_text = id_value[0].split('_');
                            if(id_value_text[0] == 'kpilistyii')
                            { 
                                 var string1 = /[;]/;
                                  if (string1.test($(this).val())) 
                                  {
                                      $("#err").css('display','block');
                                      $("#err").addClass("alert-danger"); 
                                      $(this).css('border','1px solid red');
                                      $("#error_value").text("KPI description should not contain special character ';'");
                                  }
                                  else if($(this).val().length>1000)
                                  {
                                      $("#err").css('display','block');
                                      $("#err").addClass("alert-danger"); 
                                      $(this).css('border','1px solid red');
                                      $("#error_value").text("KPI description should contain only 1000 characters");
                                  }
                                  else if(!string1.test($(this).val()))
                                  {
                                      $("#err").css('display','none');
                                      $(this).css('border','1px solid #999');
                                  }
                            }                        
                            else if(id_value_text[0] == 'kpi')
                            { 
                                var string1 = /^([0-9])*$/;
                                if ($(this).val() != '' && !$.isNumeric($(this).val())) 
                                {
                                    $("#err").css('display','block');
                                    $("#err").addClass("alert-danger"); 
                                    $(this).css('border','1px solid red');
                                    $("#error_value").text("KPI Weightage should contain only numbers.");
                                }
                                else if($(this).val() == '' || $.isNumeric($(this).val()))
                                {
                                    $("#err").css('display','none');
                                    $(this).css('border','1px solid #999');
                                }
                            }                        
                            else if(id_value_text[0] == 'unit')
                            {
                                var string1 = /^([0-9])*$/;
                                    if(id_value[0] == 'unit_value')
                                    {
                                        if ($("#mask_number-"+id_value[1]).find(':selected').val() == 'Select' && $(this).val() !='') 
                                        {
                                            $("#err").css('display','block');
                                            $("#err").addClass("alert-danger"); 
                                            $(this).css('border','1px solid red');
                                            $("#error_value").text("Please Select Unit type first.");
                                        } 
                                        else if (($("#mask_number-"+id_value[1]).find(':selected').val() == 'Units' || $("#mask_number-"+id_value[1]).find(':selected').val() == 'Weight' || $("#mask_number-"+id_value[1]).find(':selected').val() == 'Value') && !$.isNumeric($(this).val())) 
                                        {
                                            $("#err").css('display','block');
                                            $("#err").addClass("alert-danger"); 
                                            $(this).css('border','1px solid red');
                                            $("#error_value").text("KPI Unit value should contain only numbers.");
                                        }
                                        else if ($(this).val() !='' && ($(this).val() == 0 || $(this).val().length>6)) 
                                        {
                                            $("#err").css('display','block');
                                            $("#err").addClass("alert-danger"); 
                                            $(this).css('border','1px solid red');
                                            $("#error_value").text("Minimum 1 number and maximum 6 digits are allowed.");
                                        }
                                        else if ($("#mask_number-"+id_value[1]).find(':selected').val() != 'Text' && $(this).val() != '' && !$.isNumeric($(this).val()))
                                        {
                                            $("#err").css('display','none');
                                            $("#error_value").text("");
                                            $(this).css('border','1px solid #999');
                                        }  
                                        else
                                        {
                                            $("#err").css('display','none');
                                            $(this).css('border','1px solid #999');
                                        }                               
                                    }                            
                                    else if($.isNumeric($(this).val()))
                                    {
                                        $("#err").css('display','none');
                                        $(this).css('border','1px solid #999');
                                    }
                            }
                            else if(id_value_text[0] == '')
                            { 

                                var class_name = $(this).attr('class');
                                var class_value = class_name.split(' ');var chk = /[;-]/;
                                var last_id_value = class_value[4].substr(class_value[4].length - 1);
                                var string1 = /^([0-9])([.]{1})([0-9])*$/;
                                var ratio_chk1 = /^([0-9]{1,5}[:]{1}[0-9]{1,5})$/;
                                if($("#mask_number-"+last_id_value).find(':selected').val() == 'Text')
                                {
                                    if ($("#mask_number-"+last_id_value).find(':selected').val() == 'Text' && chk.test($(this).val())) 
                                    {
                                        $("#err").css('display','block');
                                        $("#err").addClass("alert-danger"); 
                                        $(this).css('border','1px solid red');
                                        $("#error_value").text("KPI with unit Text should not contain special characters like '-;'.");
                                    }
                                    else if ($("#mask_number-"+last_id_value).find(':selected').val() == 'Text' && $(this).val().length>2000) 
                                    {
                                        $("#err").css('display','block');
                                        $("#err").addClass("alert-danger"); 
                                        $(this).css('border','1px solid red');
                                        $("#error_value").text("KPI Text unit should contain maximum 2000 characters.");
                                    }
                                    else
                                    {
                                         $("#err").css('display','none');
                                        $(this).css('border','1px solid #999');
                                    }
                                }
                                else if($("#mask_number-"+last_id_value).find(':selected').val() == 'Ratio')
                                {
                                    if ($("#mask_number-"+last_id_value).find(':selected').val() == 'Ratio' && !ratio_chk1.test($(this).val())) 
                                    {
                                        $("#err").css('display','block');
                                        $("#err").addClass("alert-danger"); 
                                        $(this).css('border','1px solid red');
                                        $("#error_value").text("Please enter valid value in ratio field");
                                    }
                                    else
                                    {
                                         $("#err").css('display','none');
                                        $(this).css('border','1px solid #999');
                                    }
                                }
                                else if ($("#mask_number-"+last_id_value).find(':selected').val() != 'Text' && $(this).val() != '' && !$.isNumeric($(this).val())) 
                                {
                                    $("#err").css('display','block');
                                    $("#err").addClass("alert-danger"); 
                                    $(this).css('border','1px solid red');
                                    $("#error_value").text("Only numbers are allowed");
                                }
                                else if ($("#mask_number-"+last_id_value).find(':selected').val() == 'Days' && $(this).val() == '0' ) 
                                {
                                    $("#err").css('display','block');
                                    $("#err").addClass("alert-danger"); 
                                    $(this).css('border','1px solid red');
                                    $("#error_value").text("0 number is not allowed");
                                }
                                else
                                {
                                     $("#err").css('display','none');
                                     $(this).css('border','1px solid #999');
                                }
                            }
                        }
                        
                        
                    });
                // });
</script>
<script type="text/javascript">
 
       $('body').on('change','.format_detail',function(){
          //alert('fgdfg');
          var value = $(this).val();
          var id = $(this).prop('id');
          var id_value = id.split('-');

      //alert($('#mask_number-'+id_value[1]).find(':selected').val());
        for (var v = 0; v <= 3; v++) {
            // $j(".target_value1"+v).removeAttr('id');
            // $j(".target_value2"+v).removeAttr('id');
            // $j(".target_value3"+v).removeAttr('id');
            // $j(".target_value4"+v).removeAttr('id');
            // $j(".target_value5"+v).removeAttr('id');
        }
        var selected_unit1 = $('#mask_number-'+id_value[1]).find(':selected').val();
        var selected_unit = $.trim(selected_unit1)

        
                $("#unit_value-"+id_value[1]).val('');
                $(".target_value1"+id_value[1]).val('');
                $(".target_value2"+id_value[1]).val('');
                $(".target_value3"+id_value[1]).val('');
                $(".target_value4"+id_value[1]).val('');
                $(".target_value5"+id_value[1]).val('');

                $(".target_value1"+id_value[1]).removeAttr('onkeydown');
                $(".target_value2"+id_value[1]).removeAttr('onkeydown');
                $(".target_value3"+id_value[1]).removeAttr('onkeydown');
                $(".target_value4"+id_value[1]).removeAttr('onkeydown');
                $(".target_value5"+id_value[1]).removeAttr('onkeydown');

                $("#unit_value-"+id_value[1]).css("border","1px solid rgb(153, 153, 153)");      
                $(".target_value1"+id_value[1]).css("border","1px solid rgb(153, 153, 153)"); 
                $(".target_value2"+id_value[1]).css("border","1px solid rgb(153, 153, 153)"); 
                $(".target_value3"+id_value[1]).css("border","1px solid rgb(153, 153, 153)"); 
                $(".target_value4"+id_value[1]).css("border","1px solid rgb(153, 153, 153)"); 
                $(".target_value5"+id_value[1]).css("border","1px solid rgb(153, 153, 153)"); 


                if(selected_unit == 'Units' || selected_unit == 'Weight' || selected_unit == 'Value')
                { 
                    $(".target_value1"+id_value[1]).attr('disabled','true');
                    $(".target_value2"+id_value[1]).attr('disabled','true');
                    $(".target_value3"+id_value[1]).attr('disabled','true');
                    $(".target_value4"+id_value[1]).attr('disabled','true');
                    $(".target_value5"+id_value[1]).attr('disabled','true');
                    $("#unit_value-"+id_value[1]).removeAttr('disabled');
                    $("#unit_value-"+id_value[1]).removeAttr('readonly');
                    $(".target_value1"+id_value[1]).css('background-color','');
                    $(".target_value2"+id_value[1]).css('updateground-color','');
                    $(".target_value3"+id_value[1]).css('background-color','');
                    $(".target_value4"+id_value[1]).css('background-color','');
                    $(".target_value5"+id_value[1]).css('background-color','');

                    $("#unit_value-"+id_value[1]).removeAttr('data-provide','datepicker');
                   
                    // $("#unit_value-"+id_value[1]).datepicker("destroy");      
                    // $(".target_value1"+id_value[1]).datepicker("destroy");
                    // $(".target_value2"+id_value[1]).datepicker("destroy");
                    // $(".target_value3"+id_value[1]).datepicker("destroy");
                    // $(".target_value4"+id_value[1]).datepicker("destroy");
                    // $(".target_value5"+id_value[1]).datepicker("destroy");

                    $(".target_value1"+id_value[1]).removeAttr('data-provide','datepicker');
                    $(".target_value2"+id_value[1]).removeAttr('data-provide','datepicker');
                    $(".target_value3"+id_value[1]).removeAttr('data-provide','datepicker');
                    $(".target_value4"+id_value[1]).removeAttr('data-provide','datepicker');
                    $(".target_value5"+id_value[1]).removeAttr('data-provide','datepicker');
                   
                }
                else
                {
                   if (selected_unit == 'Date') 
                    {

                          $("#unit_value-"+id_value[1]).attr('readonly','readonly');
                          $(".target_value1"+id_value[1]).removeAttr('disabled');
                          $(".target_value2"+id_value[1]).removeAttr('disabled');
                          $(".target_value3"+id_value[1]).removeAttr('disabled');
                          $(".target_value4"+id_value[1]).removeAttr('disabled');
                          $(".target_value5"+id_value[1]).removeAttr('disabled');
                          $(".target_value1"+id_value[1]).attr('onkeydown','return false');
                          $(".target_value2"+id_value[1]).attr('onkeydown','return false');
                          $(".target_value3"+id_value[1]).attr('onkeydown','return false');
                          $(".target_value4"+id_value[1]).attr('onkeydown','return false');
                          $(".target_value5"+id_value[1]).attr('onkeydown','return false');
                            // maskuse =  "99/99/9999";
                            // $(".target_value1"+id_value[1]).inputmask("99/99/9999", { "mask": maskuse });

                            // $("target_value1"+id_value[1]).attr('data-provide','datepicker');
                          
                          $(".target_value1"+id_value[1]).attr('data-provide','datepicker');
                          $(".target_value2"+id_value[1]).attr('data-provide','datepicker');
                          $(".target_value3"+id_value[1]).attr('data-provide','datepicker');
                          $(".target_value4"+id_value[1]).attr('data-provide','datepicker');
                          $(".target_value5"+id_value[1]).attr('data-provide','datepicker');

                            // $(".target_value1"+id_value[1]).datepicker({
                            //     // minDate: "0",
                            //     // maxDate: "+2Y",
                            //     // defaultDate: "+1w",
                            //     dateFormat: 'd-M-yyyy',
                            //     // numberOfMonths: 1,
                            //     // changeMonth: true,
                            //     // changeYear: true,
                            //     // minDate: '01-Jan-2020', 
                            //     // maxDate: '15-Jul-2021',
                               
                                
                            // });
                            
                            // $(".target_value2"+id_value[1]).datepicker({
                            //     minDate: "0",
                            //     maxDate: "+2Y",
                            //     defaultDate: "+1w",
                            //     dateFormat: 'd-M-yyyy',
                            //     numberOfMonths: 1,
                            //     changeMonth: true,
                            //     changeYear: true,
                            //     // minDate: '01-Jan-2020', 
                            //     // maxDate: '15-Jul-2021',
                                
                            // });
                            //   $(".target_value3"+id_value[1]).datepicker({
                            //       minDate: "0",
                            //       maxDate: "+2Y",
                            //       defaultDate: "+1w",
                            //       dateFormat: 'dd-mm-yyyy',
                            //       numberOfMonths: 1,
                            //       changeMonth: true,changeYear: true,minDate: '01-Jan-2020', maxDate: '15-Jul-2021',
                                 
                                  
                            //   });
                            //   $(".target_value4"+id_value[1]).datepicker({
                            //       minDate: "0",
                            //       maxDate: "+2Y",
                            //       defaultDate: "+1w",
                            //       dateFormat: 'dd-mm-yyyy',
                            //       numberOfMonths: 1,
                            //       changeMonth: true,changeYear: true,minDate:'01-Jan-2020', maxDate: '15-Jul-2021',
                                 
                                  
                            //   });
                            //   $(".target_value5"+id_value[1]).datepicker({
                            //       minDate: "0",
                            //       maxDate: "+2Y",
                            //       defaultDate: "+1w",
                            //       dateFormat: 'dd-mm-yyyy',
                            //       numberOfMonths: 1,
                            //       changeMonth: true,changeYear: true,minDate:'01/Apr/2019', maxDate: '31/Mar/2021',
                                 
                                  
                            //   });
                                                               
                   
                            //$(".target_value1"+id_value[1]).addClass('input_custom_date');
                            //$('.input_custom_date').css('display','block');
                            $("#unit_value-"+id_value[1]).removeAttr('disabled');
                       
                    }
                    else if(selected_unit == 'Percentage' || selected_unit == 'Ratio' || selected_unit == 'Days' || selected_unit == 'Text')
                    {
                         
                          $("#unit_value-"+id_value[1]).attr('readonly','readonly');
                         
                          $("#unit_value-"+id_value[1]).removeAttr('disabled');
                          $(".target_value1"+id_value[1]).removeClass('input_custom_date');
                          $(".target_value1"+id_value[1]).removeAttr('disabled');
                          $(".target_value2"+id_value[1]).removeAttr('disabled');
                          $(".target_value3"+id_value[1]).removeAttr('disabled');
                          $(".target_value4"+id_value[1]).removeAttr('disabled');
                          $(".target_value5"+id_value[1]).removeAttr('disabled');
                         // $("#unit_value-"+id_value[1]).datepicker("destroy");      
                         

                          $(".target_value1"+id_value[1]).removeAttr('data-provide','');
                          $(".target_value2"+id_value[1]).removeAttr('data-provide','');
                          $(".target_value3"+id_value[1]).removeAttr('data-provide','');
                          $(".target_value4"+id_value[1]).removeAttr('data-provide','');
                          $(".target_value5"+id_value[1]).removeAttr('data-provide','');










                                          
                          $(".fields").keyup(function(){
                              var data_value = $(this).val();
                              var str = /^([0-9/]{1,})$/;
                              // if ((data_value.length>0) && !str.test(data_value)) {
                              //     $("#validation_msg").css('display','block');
                              // }
                              // else
                              // {
                              //     $("#validation_msg").css('display','none');
                              // }
                          });
                      }




                }  
    });                 
</script>
<script>
  $(document).ready(function() {
        var designation = $.trim($('#designation').text());

        if(designation=='Assistant General Manager' || designation=='General Manager' || designation=='Deputy General Manager' || designation=='Vice President' || designation=='Chief Financial Officer' || designation== 'Director & President' || designation== 'Associate Vice President' || designation=='Joint Managing Director' || designation=='Chairman'|| designation=='Deputy General Manager' || designation=='Senior Vice President' || designation=='Director & COO' || designation=='Managing Director' || designation=='Sr. Vice President' || designation=='Deputy'){

          
        }else{

          $('#faculty_email_id4').prop('disabled',true);
            $('#number_of_meetings4').prop('disabled',true);
            $('#topic_to_be_diss4').prop('disabled',true);
            $('#target_date4').prop('disabled',true);
            $('#project_title').prop('disabled',true);
            $('#rev_date').prop('disabled',true);
            $('#due_dateee').prop('disabled',true);
            $('#project_scope').prop('disabled',true);
            $('#project_exclusion').prop('disabled',true);
            $('#project_deliverables').prop('disabled',true);
            $('#learning_goals').prop('disabled',true);
            $('#Reviewer_name').prop('disabled',true);
        }
});
</script>
<script type="text/javascript">

  function kpi_idp_data(){
    var user_prgm = $.trim($('.user_prgm').val());
    
    var user_prgm_cmt =$.trim($('.user_prgm_cmt').val());
    var topic=''; var date_value=''; var faculty_value='';
    var development_data='';

    var cadre = $.trim($('#cadre').text());
    
    var designation = $.trim($('#designation').text());

    var prgrm_cmd = ''; var chk = /[;]/; var topic = '';var date_value = '';var faculty_value = '';var development_data = '';var number_of_meetings = '';var faculty_value1 = '';var topic_diss1 = '';


    var get_list = $("#compulsory_id").text();
        var get_list_value = get_list.split(';');
                   
    //var id = $('.select_prgm:checkbox).attr('id');

           var idSelector = function() { return this.id; };
           var fruitsGranted = $(":checkbox:checked").map(idSelector).get() ;
          // alert(fruitsGranted);
          var latlongpieces = fruitsGranted.toString().split(",");
          

          for (var i = 0; i < latlongpieces.length; i++) {
          
            //for (var i = 0; i < $("#total_prog").text(); i++) {  
            if (!($("#program_cmd-"+latlongpieces[i]).val() === undefined || $("#program_cmd-"+latlongpieces[i]).val() == '' || chk.test($("#program_cmd-"+latlongpieces[i]).val())))
                    {

                        // if(prgg_cnt=='3'){
                        //     alert("dfjskdjfls");
                        // }
                        // else{

                            if (prgrm_cmd == '') 
                            {
                                prgrm_cmd = latlongpieces[i]+'?'+$("#program_cmd-"+latlongpieces[i]).val();
                            }
                            else
                            {
                                prgrm_cmd = prgrm_cmd+';'+latlongpieces[i]+'?'+$("#program_cmd-"+latlongpieces[i]).val();
                            }
                    }
                   
                    // }                
                
            }
    
   


    
    for (var i = 1; i <= 2; i++) {
         if (topic == '') 
              {
                 
                  topic =$.trim($(".topic"+i).val());
                  date_value = $.trim($(".days_required"+i).val());
                  faculty_value = $.trim($(".faculty_email_id"+i).find(":selected").val());
              }
              else
              {
                  topic = topic+';'+$.trim($(".topic"+i).val());
                  date_value = date_value+';'+$.trim($(".days_required"+i).val());
                  faculty_value = faculty_value+';'+$.trim($(".faculty_email_id"+i).find(":selected").val());
              }
      }
     
      
      var number_of_meetings='';var faculty_value1=''; var topic_diss1='';
      for (var i = 3; i<=4; i++) {
           if (development_data == '') 
                {
                   
                   development_data =  $.trim($("#target_date"+i).val());
                   number_of_meetings = $.trim($("#number_of_meetings"+i).val());
                   faculty_value1 = $.trim($("#faculty_email_id"+i).val());
                   topic_diss1 = $.trim($("#topic_to_be_diss"+i).val());
                    //alert(development_data);
                }
                else
                {
                    development_data = development_data+';'+$.trim($("#target_date"+i).val());
                    number_of_meetings = number_of_meetings+';'+$.trim($("#number_of_meetings"+i).val());
                    faculty_value1 = faculty_value1+';'+$.trim($("#faculty_email_id"+i).val());
                    topic_diss1 = topic_diss1+';'+$.trim($("#topic_to_be_diss"+i).val());
                }
        }
        
        
        if(designation=='Assistant General Manager' || designation=='Deputy General Manager' || designation=='Vice President' || designation=='Chief Financial Officer' || designation== 'Director & President' || designation== 'Associate Vice President' || designation=='Joint Managing Director' || designation=='Chairman'|| designation=='Deputy General Manager' || designation=='Senior Vice President' || designation=='Director & COO' || designation=='Managing Director' || designation=='Sr. Vice President' || designation=='Deputy'){

              var project_title = $('#project_title').val();
          var review_date = $('#rev_date').val();
          var target_end_date = $('#due_dateee').val();
          var project_scope = $('#project_scope').val();
          var project_exclusion =$('#project_exclusion').val();
          var Project_deliverables =$('#project_deliverables').val();
          var learn_from_project = $('#learning_goals').val();
          var Reviewer = $('#Reviewer_name').val();

          
        }else{
            var development_data = 'NA';
          var number_of_meetings = 'NA';
          var faculty_value1 = 'NA';
          var topic_diss1 = 'NA';
          var project_title = 'NA';
          var review_date = 'NA';
          var target_end_date = 'NA';
          var project_scope = 'NA';
          var project_exclusion ='NA';
          var Project_deliverables ='NA';
          var learn_from_project = 'NA';
          var Reviewer = 'NA';
        }

   
        str = $("#Reporting_officer1_id").text().replace(/\s+/g, '');
                            str1 = $("#emp_code").text().replace(/\s+/g, '');

                            var base_url = window.location.origin;
                             var detail_data = {
                                prgrm_cmd: prgrm_cmd,
                                topic: topic,
                                date_value: date_value,
                                faculty_value: faculty_value,
                                development_data: development_data,
                                number_of_meetings: number_of_meetings,
                                faculty_value1: faculty_value1,
                                topic_diss1: topic_diss1,
                                breiefly_mention:$("#briefly_men").val(),
                                how_the_traing:$("#how_training_help").val(),
                                user_prgm:$("#user_prgm").val(),
                                user_prgm_cmt:$("#user_prgm_cmt").val(),
                                project_title: project_title,
                                review_date: review_date,
                                target_end_date: target_end_date,
                                project_scope: project_scope,
                                project_exclusion: project_exclusion,
                                Project_deliverables: Project_deliverables,
                                learn_from_project: learn_from_project,
                                Reviewer: Reviewer,
                                emp_code : str1,
                                Reporting_officer1_id: str,
                                tech:'',
                                beh:'',
                                mgr:''
                            };
                            console.log(detail_data);

                            $.ajax({
                                'type' : 'post',
                                'datatype' : 'html',
                                'data' : detail_data,
                                'url' : base_url+'/pms/index.php?r=IDP/save_data1',
                                success : function(data)
                                {
                          // alert(data);
                                }
                            });



        

        

        





  }
</script>


<script type="text/javascript">
  
  function kpi_save_data(){

    var kpi_id_value = Math.random().toString(16).slice(2);
        var updated_kpi_value = '';

    var kra_des = $("#KRA_description").val();
        var final_kpi_total = 0;var er = '';
        var string_num = /^([0-9])*$/;
        var data_length = kra_des.length;
    var wtg_value = $(".Weightage").find(':selected').val();
    var catergory = $(".target_value").find(':selected').val();

       // alert(catergory);
        if(catergory == '--Select--')
        { 

            error = 'Please select KRA Category.';
        }
        else if (data_length==0)
        {
            error = 'Please enter KRA description';
        }
        else if(data_length>1000)
        {
            error = 'Maximum 1000 characters are allowed in KRA description';
        }
        else if(wtg_value == 'select')
        {
            error = 'Please select Weightage.';
        }
        else
        {
            error = '';
        }

        if(error=='')
        {
          
          var kra_num = $("#kpi_list_number").text();
          var min_kpiwt = $("#min_kpiwt").text();
          var min_kpi = $("#min_kpi").text();
        

          var kpi_list = '';var kpi_unit = '';var kpi_value = '';
          var kpi_total = 0;
          var kpi_list_data =0;
          var kpi_target_total = '';
          var tot_kpi_wt1 = 0;var tot_kpi_wt = 0;

          var add_value = 0;var final_kpi_total = 0;var final_kpi_wt = '';

          for (var i = 0; i < kra_num; i++) 
          { 
               //alert($("#min_kpiwt").text());
                if ($("#kpilistyii_"+i).val()!= '' && $("#mask_number-"+i).find(':selected').val()!='Select') 
                {
                    kpi_list_data = parseInt(kpi_list_data)+parseInt(1);
                    
                }
                if ($("#kpi_target_value-"+i).val() != '' && $.isNumeric($("#kpi_target_value-"+i).val())) 
                {   tot_kpi_wt++;
                  
                    if(parseInt($("#kpi_target_value-"+i).val()) < parseInt($("#min_kpiwt").text()))
                    {                      
                        error = "Minimum KPI Weightage allowed is "+$("#min_kpiwt").text();break;
                    }
                    else
                    {
                            if (final_kpi_wt == '') 
                            {
                                final_kpi_wt = $("#kpi_target_value-"+i).val();
                                final_kpi_total = $("#kpi_target_value-"+i).val();
                            }
                            else
                            {
                               final_kpi_wt = final_kpi_wt+';'+$("#kpi_target_value-"+i).val();
                                final_kpi_total = parseFloat(final_kpi_total)+parseFloat($("#kpi_target_value-"+i).val());
                            }
                    }
                }
                else if(!$.isNumeric($("#kpi_target_value-"+i).val()) && $("#kpi_target_value-"+i).val() != '')
                {                                    
                    error = "Please enter only numbers in KPI Weightage field.";break;
                }
                else if($("#kpilistyii_"+i).val()!= '' && i>0 && (($("#kpi_target_value-"+i).val() != '' && $("#kpi_target_value-"+(i-1)).val() == '') || ($("#kpi_target_value-"+i).val() == '' && $("#kpi_target_value-"+(i-1)).val() != '')))
                {                    
                    error = "Please enter KPI Weightage for all KPI field.";break;
                }                
          }

          if(error == '')
            {          

                if (kpi_list_data <  $("#min_kpi").text()) 
                {                                
                    error = 'Please Fill minimum '+$("#min_kpi").text()+' KPI';                                   
                }
                else
                {
                  for (var i = 0; i < kra_num; i++) 
                  {

                    
                    if($("#mask_number-"+i).find(':selected').val() != 'Select' && $("#kpilistyii_"+i).val() != '')
                    {

                        var selected_value = $("#mask_number-"+i).find(':selected').val();
                        
                        tot_kpi_wt1++;
                              var chk1 = /[;]/;
                          if(chk1.test($("#kpilistyii_"+i).val()))
                          {
                                error = "The KPI description field should not contain ; special character.";break;
                          }
                          else
                          {
                                  error = '';
                                  if (kpi_list == '')
                                  {
                                      kpi_list = $("#kpilistyii_"+i).val();
                                      kpi_unit = $("#mask_number-"+i).find(':selected').val();  
                                  }
                                  else
                                  {
                                      kpi_list = kpi_list+';'+$("#kpilistyii_"+i).val();
                                      kpi_unit = kpi_unit+';'+$("#mask_number-"+i).find(':selected').val(); 
                                  }
                          }
                          

                          if(selected_value != 'Units' && selected_value != 'Weight' && selected_value != 'Value')
                          {

                              
                              if(selected_value == 'Days')
                              {

                                  if($("#target_need1").text() != 'undefined' && $(".target_value1"+i).val()=='')
                                            {
                                                        $(".target_value1"+i).css('border','1px solid red');
                                                        $(".target_value1"+i).focus();
                                                        error = 'Target 1 value is compulsory.';break;
                                              }
                                              else if(($("#target_need1").text() != 'undefined' || $("#target_need1").text() === undefined) && $(".target_value1"+i).val()!='' && !$.isNumeric($(".target_value1"+i).val()))
                                              {
                                                         error = 'Only numbers are allowed for Days/Percentage.';break;
                                              }

                                              else if($("#target_need2").text() != 'undefined' && $(".target_value2"+i).val()=='')
                                            {
                                                        $(".target_value2"+i).css('border','1px solid red');
                                                        $(".target_value2"+i).focus();
                                                        error = 'Target 2 value is compulsory.';break;
                                              }
                                              else if(($("#target_need2").text() != 'undefined' || $("#target_need2").text() === undefined) && $(".target_value2"+i).val()!='' && !$.isNumeric($(".target_value2"+i).val()))
                                              {
                                                         error = 'Only numbers are allowed for Days/Percentage.';break;
                                              }

                                              else if($("#target_need3").text() != 'undefined' && $(".target_value3"+i).val()=='')
                                            {
                                                        $(".target_value3"+i).css('border','1px solid red');
                                                        $(".target_value3"+i).focus();
                                                        error = 'Target 3 value is compulsory.';break;
                                              }
                                              else if(($("#target_need3").text() != 'undefined' || $("#target_need3").text() === undefined) && $(".target_value1"+i).val()!='' && !$.isNumeric($(".target_value1"+i).val()))
                                              {
                                                         error = 'Only numbers are allowed for Days/Percentage.';break;
                                              }

                                              else if($("#target_need4").text() != 'undefined' && $(".target_value4"+i).val()=='')
                                            {
                                                        $(".target_value4"+i).css('border','1px solid red');
                                                        $(".target_value4"+i).focus();
                                                        error = 'Target 4 value is compulsory.';break;
                                              }
                                              else if(($("#target_need4").text() != 'undefined' || $("#target_need4").text() === undefined) && $(".target_value4"+i).val()!='' && !$.isNumeric($(".target_value4"+i).val()))
                                              {
                                                         error = 'Only numbers are allowed for Days/Percentage.';break;
                                              }
                                              else if($("#target_need5").text() != 'undefined' && $(".target_value5"+i).val()=='')
                                              {
                                                        $(".target_value5"+i).css('border','1px solid red');
                                                        $(".target_value5"+i).focus(); 
                                                        error = 'Target 5 value is compulsory.';break;
                                              }
                                              else if(($("#target_need5").text() != 'undefined' || $("#target_need5").text() === undefined) && $(".target_value5"+i).val()!='' && !$.isNumeric($(".target_value5"+i).val()))
                                              {
                                                         error = 'Only numbers are allowed for Days/Percentage.';break;
                                              }
                                              else
                                              {

                                                  for(var ch = 5;ch>0;ch--)
                                                      {
                                                        
                                                          var d= parseInt(ch)-parseInt(1);
                                                          if(d>0)
                                                          {
                                                            //alert(parseInt($(".target_value"+ch+i).val())<parseInt($(".target_value"+d+i).val()));
                                                              if((parseInt($(".target_value"+ch+i).val())>parseInt($(".target_value"+d+i).val())) || (parseInt($(".target_value"+ch+i).val())==parseInt($(".target_value"+d+i).val())))
                                                              {
                                                                 
                                                                 $(".target_value1"+i).css('border','1px solid red');
                                                                 $(".target_value2"+i).css('border','1px solid red');
                                                                 $(".target_value3"+i).css('border','1px solid red');
                                                                 $(".target_value4"+i).css('border','1px solid red');
                                                                 $(".target_value5"+i).css('border','1px solid red');
                                                                 $(".target_value1"+i).focus();
                                                                 error = 'Days should be in descending order and repetition is not allowed';
                                                                 break;
                                                                // alert(parseInt($(".target_value"+ch+i).val()));alert(parseInt($(".target_value"+d+i).val()));
                                                              }
                                                              //alert($(".target_value"+ch+i).val());alert(parseInt($(".target_value"+d+i).val()));
                                                          }
                                                      }

                                                      if (kpi_value == '')
                                                      {
                                                            kpi_value = $(".target_value1"+i).val()+'-'+$(".target_value2"+i).val()+'-'+$(".target_value3"+i).val()+'-'+$(".target_value4"+i).val()+'-'+$(".target_value5"+i).val();
                                                      }
                                                      else
                                                      {                                    
                                                                kpi_value = kpi_value+';'+$(".target_value1"+i).val()+'-'+$(".target_value2"+i).val()+'-'+$(".target_value3"+i).val()+'-'+$(".target_value4"+i).val()+'-'+$(".target_value5"+i).val();                                   
                                                      }

                                              }

                              }else if(selected_value == 'Percentage' ){
                                  if($("#target_need1").text() != 'undefined' && $(".target_value1"+i).val()=='')
                                                {
                                                      $(".target_value1"+i).css('border','1px solid red');
                                                      $(".target_value1"+i).focus();
                                                      error = 'Target 1 value is compulsory.';break;
                                                }
                                                else if($(".target_value1"+i).val()=='0')
                                                {
                                                      $(".target_value1"+i).css('border','1px solid red');
                                                      $(".target_value1"+i).focus();
                                                      error = '0 value is not allowed';break;
                                                }
                                                else if(($("#target_need1").text() != 'undefined' || $("#target_need1").text() === undefined) && $(".target_value1"+i).val()!='' && !$.isNumeric($(".target_value1"+i).val()))
                                                {
                                                       error = 'Only numbers are allowed for Days/Percentage.';break;
                                                }
                                                else if($("#target_need2").text() != 'undefined' && $(".target_value2"+i).val()=='')
                                                {
                                                       $(".target_value2"+i).css('border','1px solid red');
                                                       $(".target_value2"+i).focus();
                                                       error = 'Target 2 value is compulsory.';break; 
                                                }
                                                else if($(".target_value2"+i).val()=='0')
                                                {
                                                       $(".target_value2"+i).css('border','1px solid red');
                                                       $(".target_value2"+i).focus();
                                                        error = '0 value is not allowed';break;
                                                }
                                                else if(($("#target_need2").text() != 'undefined' || $("#target_need2").text() === undefined) && $(".target_value2"+i).val()!='' && !$.isNumeric($(".target_value2"+i).val()))
                                                {
                                                       error = 'Only numbers are allowed for Days/Percentage.';break;
                                                }
                                                else if($("#target_need3").text() != 'undefined' && $(".target_value3"+i).val()=='')
                                                {
                                                      $(".target_value3"+i).css('border','1px solid red');
                                                      $(".target_value3"+i).focus();
                                                      error = 'Target 3 value is compulsory.';break;
                                                }
                                                else if($(".target_value3"+i).val()=='0')
                                                {
                                                      $(".target_value3"+i).css('border','1px solid red');
                                                      $(".target_value3"+i).focus();
                                                      error = 'Target 3 value is compulsory.';break;
                                                }
                                                else if(($("#target_need3").text() != 'undefined' || $("#target_need3").text() === undefined) && $(".target_value3"+i).val()!='' && !$.isNumeric($(".target_value3"+i).val()))
                                                {
                                                       $(".target_value3"+i).css('border','1px solid red');
                                                       $(".target_value3"+i).focus();
                                                       error = 'Only numbers are allowed for Days/Percentage.';break;
                                                }
                                                else if($("#target_need4").text() != 'undefined' && $(".target_value4"+i).val()=='')
                                                {
                                                      $(".target_value4"+i).css('border','1px solid red');
                                                      $(".target_value4"+i).focus(); 
                                                      error = 'Target 4 value is compulsory.';break;
                                                }
                                                else if($(".target_value4"+i).val()=='0')
                                                {
                                                      $(".target_value4"+i).css('border','1px solid red');
                                                      $(".target_value4"+i).focus(); 
                                                      error = 'Target 4 value is compulsory.';break;
                                                }
                                                else if(($("#target_need4").text() != 'undefined' || $("#target_need4").text() === undefined) && $(".target_value4"+i).val()!='' && !$.isNumeric($(".target_value4"+i).val()))
                                                {
                                                       $(".target_value4"+i).css('border','1px solid red');
                                                       $(".target_value4"+i).focus(); 
                                                       error = 'Only numbers are allowed for Days/Percentage.';break;
                                                }
                                                else if($("#target_need5").text() != 'undefined' && $(".target_value5"+i).val()=='')
                                                {
                                                       $(".target_value5"+i).css('border','1px solid red');
                                                      $(".target_value5"+i).focus(); 
                                                      error = 'Target 5 value is compulsory.';break;
                                                }
                                                else if($(".target_value5"+i).val()=='0')
                                                {
                                                       $(".target_value5"+i).css('border','1px solid red');
                                                      $(".target_value5"+i).focus(); 
                                                      error = 'Target 5 value is compulsory.';break;
                                                }
                                                else if(($("#target_need5").text() != 'undefined' || $("#target_need5").text() === undefined) && $(".target_value5"+i).val()!='' && !$.isNumeric($(".target_value5"+i).val()))
                                                {
                                                       error = 'Only numbers are allowed for Days/Percentage.';break;
                                                }
                                                else{

                                                  for(var ch = 5;ch>0;ch--)
                                                    {
                                                      //alert($(".target_value"+ch+i).val());alert($(".target_value"+d+i).val());
                                                          //var d= parseInt(ch)-parseInt(1);
                                                          for(var d = ch-1;d>0;d--)
                                                          {
                                                            if($(".target_value"+ch+i).val()==$(".target_value"+d+i).val())
                                                            {
                                                               er = "Repetition is not allowed";
                                                            }
                                                          }
                                                    }
                                                    if (kpi_value == '')
                                                    {
                                                          kpi_value = $(".target_value1"+i).val()+'-'+$(".target_value2"+i).val()+'-'+$(".target_value3"+i).val()+'-'+$(".target_value4"+i).val()+'-'+$(".target_value5"+i).val();
                                                    }
                                                    else
                                                    {                                    
                                                              kpi_value = kpi_value+';'+$(".target_value1"+i).val()+'-'+$(".target_value2"+i).val()+'-'+$(".target_value3"+i).val()+'-'+$(".target_value4"+i).val()+'-'+$(".target_value5"+i).val();                                   
                                                    }
                                                }

                              }else if(selected_value == 'Date'){

                                  var asc = 0;var desc = 0;
                                                if($("#target_need1").text() != 'undefined' && $(".target_value1"+i).val()=='')
                                                {
                                                      $(".target_value1"+i).css('border','1px solid red');
                                                      $(".target_value1"+i).focus();
                                                      error = 'Target 1 value is compulsory.';break;
                                                }                                               
                                                else if($("#target_need2").text() != 'undefined' && $(".target_value2"+i).val()=='')
                                                {
                                                       $(".target_value2"+i).css('border','1px solid red');
                                                      $(".target_value2"+i).focus();
                                                       error = 'Target 2 value is compulsory.';break; 
                                                }                                                
                                                else if($("#target_need3").text() != 'undefined' && $(".target_value3"+i).val()=='')
                                                {
                                                      $(".target_value3"+i).css('border','1px solid red');
                                                      $(".target_value3"+i).focus();
                                                      error = 'Target 3 value is compulsory.';break;
                                                }                                                
                                                else if($("#target_need4").text() != 'undefined' && $(".target_value4"+i).val()=='')
                                                {
                                                      $(".target_value4"+i).css('border','1px solid red');
                                                      $(".target_value4"+i).focus(); 
                                                      error = 'Target 4 value is compulsory.';break;
                                                }                                                
                                                  else if($("#target_need5").text() != 'undefined' && $(".target_value5"+i).val()=='')
                                                {
                                                      $(".target_value5"+i).css('border','1px solid red');
                                                      $(".target_value5"+i).focus(); 
                                                      error = 'Target 5 value is compulsory.';break;
                                                }                                                
                                                else
                                                {
                                                    var asc = 0;var desc = 0;
                                                    for(var ch = 5;ch>0;ch--)
                                                    {   
                                                        var date1 =  $(".target_value"+ch+i).val().split("/");
                                                        var date_pos = '';
                                                        if(date1[1] == "Jan")
                                                        {
                                                           date_pos = '01';
                                                        }
                                                        else if(date1[1] == "Feb")
                                                        {
                                                           date_pos = '02';
                                                        }
                                                        else if(date1[1] == "Mar")
                                                        {
                                                           date_pos = '03';
                                                        }
                                                        else if(date1[1] == "Apr")
                                                        {
                                                           date_pos = '04';
                                                        }
                                                        else if(date1[1] == "May")
                                                        {
                                                           date_pos = '05';
                                                        }
                                                        else if(date1[1] == "Jun")
                                                        {
                                                           date_pos = '06';
                                                        }
                                                        else if(date1[1] == "Jul")
                                                        {
                                                           date_pos = '07';
                                                        }
                                                        else if(date1[1] == "Aug")
                                                        {
                                                           date_pos = '08';
                                                        }
                                                        else if(date1[1] == "Sep")
                                                        {
                                                           date_pos = '09';
                                                        }
                                                        else if(date1[1] == "Oct")
                                                        {
                                                           date_pos = '10';
                                                        }
                                                        else if(date1[1] == "Nov")
                                                        {
                                                           date_pos = '11';
                                                        }
                                                        else if(date1[1] == "Dec")
                                                        {
                                                           date_pos = '12';
                                                        }
                                                          var date11 = date1[0]+'/'+date_pos+'/'+date1[2];
                                                            var d= parseInt(ch)-parseInt(1);
                                                        if(d != 0)
                                                        {
                                                            var date2 =  $(".target_value"+d+i).val().split("/");
                                                            var date_pos = '';
                                                            if(date2[1] == "Jan")
                                                            {
                                                               date_pos = '01';
                                                            }
                                                              else if(date2[1] == "Feb")
                                                              {
                                                               date_pos = '02';
                                                              }
                                                              else if(date2[1] == "Mar")
                                                              {
                                                               date_pos = '03';
                                                              }
                                                              else if(date2[1] == "Apr")
                                                              {
                                                               date_pos = '04';
                                                              }
                                                              else if(date2[1] == "May")
                                                              {
                                                               date_pos = '05';
                                                              }
                                                              else if(date2[1] == "Jun")
                                                              {
                                                               date_pos = '06';
                                                              }
                                                              else if(date2[1] == "Jul")
                                                              {
                                                               date_pos = '07';
                                                              }
                                                              else if(date2[1] == "Aug")
                                                              {
                                                               date_pos = '08';
                                                              }
                                                              else if(date2[1] == "Sep")
                                                              {
                                                               date_pos = '09';
                                                              }
                                                              else if(date2[1] == "Oct")
                                                              {
                                                               date_pos = '10';
                                                              }
                                                              else if(date2[1] == "Nov")
                                                              {
                                                               date_pos = '11';
                                                              }
                                                              else if(date2[1] == "Dec")
                                                              {
                                                               date_pos = '12';
                                                              }
                                                              var date12 = date2[0]+'/'+date_pos+'/'+date2[2];

                                                              // alert(process(date11));
                                                              // alert(process(date12));
                                                                  if(process(date11) < process(date12))
                                                                  { 
                                                                    asc = parseInt(asc)+parseInt(1);
                                                                  }
                                                                  if(process(date11) > process(date12))
                                                                  { 
                                                                    desc = parseInt(desc)+parseInt(1);
                                                                  }
                                                                 //alert(desc);
                                                          }
                                                       
                                                      }
                                                     // alert(asc);alert(desc);
                                                        if(desc!=4 && asc !=4)
                                                        { 
                                                           er = "Date should be either in ascending or descending order and repetition is not allowed.";
                                                            $(".target_value1"+i).css('border','1px solid red');
                                                            $(".target_value1"+i).focus();
                                                            $(".target_value2"+i).css('border','1px solid red');
                                                            $(".target_value3"+i).css('border','1px solid red');
                                                            $(".target_value4"+i).css('border','1px solid red');
                                                            $(".target_value5"+i).css('border','1px solid red');
                                                            break;
                                                        }
                                                        if (kpi_value == '')
                                                        {
                                                            kpi_value = $(".target_value1"+i).val()+'-'+$(".target_value2"+i).val()+'-'+$(".target_value3"+i).val()+'-'+$(".target_value4"+i).val()+'-'+$(".target_value5"+i).val();
                                                        }
                                                        else
                                                        {                                    
                                                                kpi_value = kpi_value+';'+$(".target_value1"+i).val()+'-'+$(".target_value2"+i).val()+'-'+$(".target_value3"+i).val()+'-'+$(".target_value4"+i).val()+'-'+$(".target_value5"+i).val();                                   
                                                        }
                                                }
                                                 //alert(er); 

                              }else if(selected_value == 'Text'){

                                   var chk = /[;-]/;
                                                  if($("#target_need1").text() != 'undefined' && $(".target_value1"+i).val()=='')
                                                  {
                                                      $(".target_value1"+i).css('border','1px solid red');
                                                      $(".target_value1"+i).focus();
                                                      error = 'Target 1 value is compulsory.';break;
                                                  }
                                                  else if(($(".target_value1"+i).val()!='' && chk.test($(".target_value1"+i).val())) || ($(".target_value1"+i).val()!='' && $(".target_value1"+i).val().length>2000))
                                                  {
                                                       error = 'For the free text field ;- special characters are not allowed and maximum characters allowed are 2000.';break;
                                                  }
                                                  else if($("#target_need2").text() != 'undefined' && $(".target_value2"+i).val()=='')
                                                  {
                                                       $(".target_value2"+i).css('border','1px solid red');
                                                       $(".target_value2"+i).focus();
                                                       error = 'Target 2 value is compulsory.';break; 
                                                  }
                                                 else if(($(".target_value2"+i).val()!='' && chk.test($(".target_value2"+i).val())) || ($(".target_value2"+i).val()!='' && $(".target_value2"+i).val().length>2000))
                                                  {
                                                       error = 'For the free text field ;- special characters are not allowed and maximum characters allowed are 2000.';break;
                                                  }
                                                  else if($("#target_need3").text() != 'undefined' && $(".target_value3"+i).val()=='')
                                                  {
                                                       $(".target_value3"+i).css('border','1px solid red');
                                                      $(".target_value3"+i).focus();
                                                      error = 'Target 3 value is compulsory.';break;
                                                  }
                                                  else if(($(".target_value3"+i).val()!='' && chk.test($("#target_need3").text())) || ($(".target_value3"+i).val()!='' && $("#target_need3").text().length>2000))
                                                  {
                                                       error = 'For the free text field ;- special characters are not allowed and maximum characters allowed are 2000.';break;
                                                  }
                                                  else if($("#target_need4").text() != 'undefined' && $(".target_value4"+i).val()=='')
                                                  {
                                                       $(".target_value4"+i).css('border','1px solid red');
                                                      $(".target_value4"+i).focus(); 
                                                      error = 'Target 4 value is compulsory.';break;
                                                  }
                                                  else if(($(".target_value4"+i).val()!='' && chk.test($(".target_value4"+i).val())) || ($(".target_value4"+i).val()!='' && $(".target_value4"+i).val().length>2000))
                                                  {
                                                       error = 'For the free text field ;- special characters are not allowed and maximum characters allowed are 2000.';break;
                                                  }
                                                  else if($("#target_need5").text() != 'undefined' && $(".target_value5"+i).val()=='')
                                                  {
                                                         $(".target_value5"+i).css('border','1px solid red');
                                                      $(".target_value5"+i).focus(); 
                                                      error = 'Target 5 value is compulsory.';break;
                                                  }
                                                 else if(($(".target_value4"+i).val()!='' && chk.test($(".target_value5"+i).val())) || ($(".target_value4"+i).val()!='' && $(".target_value5"+i).val().length>2000))
                                                  {
                                                       error = 'For the free text field ;- special characters are not allowed and maximum characters allowed are 2000.';break;
                                                  }
                                                  else
                                                  {
                                                      error = '';var chk1 = /[;]/;
                                                      if (kpi_value == '')
                                                          {
                                                              kpi_value = $(".target_value1"+i).val()+'-'+$(".target_value2"+i).val()+'-'+$(".target_value3"+i).val()+'-'+$(".target_value4"+i).val()+'-'+$(".target_value5"+i).val();
                                                          }
                                                          else
                                                          {                                    
                                                                  kpi_value = kpi_value+';'+$(".target_value1"+i).val()+'-'+$(".target_value2"+i).val()+'-'+$(".target_value3"+i).val()+'-'+$(".target_value4"+i).val()+'-'+$(".target_value5"+i).val();                                   
                                                          }
                                                      
                                                  }

                              }else if(selected_value == 'Ratio'){
                                  var ratio_chk = /^([0-9]{1,5}[:]{1}[0-9]{1,5})$/;
                                                  if($("#target_need1").text() != 'undefined' && $(".target_value1"+i).val()=='')
                                                  {
                                                     $(".target_value1"+i).css('border','1px solid red');
                                                      $(".target_value1"+i).focus();
                                                      error = 'Target 1 value is compulsory.';break;
                                                  }
                                                  else if(($("#target_need1").text() != 'undefined' || $("#target_need1").text() === undefined) && $(".target_value1"+i).val()!='' && !ratio_chk.test($(".target_value1"+i).val()))
                                                  {
                                                       error = 'Please enter valid value in ratio field.';break;
                                                  }
                                                  else if($("#target_need2").text() != 'undefined' && $(".target_value2"+i).val()=='')
                                                  {
                                                      $(".target_value2"+i).css('border','1px solid red');
                                                      $(".target_value2"+i).focus();
                                                      error = 'Target 2 value is compulsory.';break; 
                                                  }
                                                  else if(($("#target_need2").text() != 'undefined' || $("#target_need2").text() === undefined) && $(".target_value2"+i).val()!='' && !ratio_chk.test($(".target_value2"+i).val()))
                                                  {
                                                      error = 'Please enter valid value in ratio field.';break;
                                                  }
                                                  else if($("#target_need3").text() != 'undefined' && $(".target_value3"+i).val()=='')
                                                  {
                                                      $(".target_value3"+i).css('border','1px solid red');
                                                      $(".target_value3"+i).focus();
                                                      error = 'Target 3 value is compulsory.';break;
                                                  }
                                                  else if(($("#target_need3").text() != 'undefined' || $("#target_need3").text() === undefined) && $(".target_value3"+i).val()!='' && !ratio_chk.test($(".target_value3"+i).val()))
                                                  {
                                                       error = 'Please enter valid value in ratio field.';break;
                                                  }
                                                  else if($("#target_need4").text() != 'undefined' && $(".target_value4"+i).val()=='')
                                                  {
                                                      $(".target_value4"+i).css('border','1px solid red');
                                                      $(".target_value4"+i).focus(); 
                                                      error = 'Target 4 value is compulsory.';break;
                                                  }
                                                  else if(($("#target_need4").text() != 'undefined' || $("#target_need4").text() === undefined) && $(".target_value4"+i).val()!='' && !ratio_chk.test($(".target_value4"+i).val()))
                                                  {
                                                       error = 'Please enter valid value in ratio field.';break;
                                                  }
                                                  else if($("#target_need5").text() != 'undefined' && $(".target_value5"+i).val()=='')
                                                  {
                                                      $(".target_value5"+i).css('border','1px solid red');
                                                      $(".target_value5"+i).focus(); 
                                                      error = 'Target 5 value is compulsory.';break;
                                                  }
                                                  else if(($("#target_need5").text() != 'undefined' || $("#target_need5").text() === undefined) && $(".target_value5"+i).val()!='' && !ratio_chk.test($(".target_value5"+i).val()))
                                                  {
                                                       error = 'Please enter valid value in ratio field.';break;
                                                  }
                                                  else
                                                  {
                                                     
                                                      for(var ch = 5;ch>0;ch--)
                                                      {
                                                      //alert($(".target_value"+ch+i).val());alert($(".target_value"+d+i).val());
                                                          //var d= parseInt(ch)-parseInt(1);
                                                          for(var d = ch-1;d>0;d--)
                                                          {
                                                            if($(".target_value"+ch+i).val()==$(".target_value"+d+i).val())
                                                            {
                                                               er = "Repetition is not allowed";
                                                            }
                                                          }
                                                      }
                                                      if (kpi_value == '')
                                                      {
                                                          kpi_value = $(".target_value1"+i).val()+'-'+$(".target_value2"+i).val()+'-'+$(".target_value3"+i).val()+'-'+$(".target_value4"+i).val()+'-'+$(".target_value5"+i).val();
                                                      }
                                                      else
                                                      {                                    
                                                              kpi_value = kpi_value+';'+$(".target_value1"+i).val()+'-'+$(".target_value2"+i).val()+'-'+$(".target_value3"+i).val()+'-'+$(".target_value4"+i).val()+'-'+$(".target_value5"+i).val();                                   
                                                      }

                                                  }

                              }
                          }
                          else if(selected_value == 'Units' || selected_value == 'Weight' || selected_value == 'Value')
                                {
                                              
                                            if ($("#unit_value-"+i).val()==''  || $("#unit_value-"+i).val() === undefined) 
                                            {
                                                  error = 'Please Fill unit value';break;
                                            }
                                            else if ($("#unit_value-"+i).val() == 0 || $("#unit_value-"+i).val().length>6)
                                            {
                                                  error = 'Minimum 1 number and maximum 6 digits are allowed.';break;
                                            }                       
                                            else if (!$.isNumeric($("#unit_value-"+i).val())) 
                                            {
                                                  error = 'Only numbers are allowed for Units/Weight/Value field.';break;
                                            }
                                            else
                                            {
                                                error = '';
                                                if (kpi_value == '')
                                                {
                                                      kpi_value = $("#unit_value-"+i).val();
                                                }
                                                else
                                                {
                                                      kpi_value = kpi_value+';'+$("#unit_value-"+i).val();
                                                }
                                                  
                                            }
                                }

                                // alert(error);
                                // alert(final_kpi_total);
                                if (final_kpi_total != '' && final_kpi_total != 100) 
                                {
                                        error = 'The Total for kpi score should be 100';break;
                                }
                                else
                                {
                                        error = '';


                                        
                                }



                    }else{

                        
                      error = '';
                                          // if ($(".mask_number-"+i).find(':selected').val() == 'Select' && ($("#kpilistyii_"+i).val() != '' || $("#unit_value-"+i).val() != '')) 
                                          // {
                                          //     // alert($(".mask_number-"+i).find(':selected').val());
                                          //      error = 'Please Fill Correct KPI Details';
                                          // }
                                          // else  if ($("#mask_number-"+i).find(':selected').val() != 'Select' && ($("#kpilistyii_"+i).val() == '' || $("#unit_value-"+i).val() == '')) 
                                          // {
                                          //     error = 'Please Fill Correct KPI Details';break;
                                          // }
                                          // else if(($("#mask_number-"+i).find(':selected').val() == 'Select' && ($("#kpilistyii_"+i).val() != '' || $("#unit_value-"+i).val() != '')) || ($("#kpilistyii_"+i).val() == '' && $("#mask_number-"+i).find(':selected').val() != 'Select'))
                                          // {
                                          //     error = 'Please Fill Correct KPI Details';break;
                                          // }
                                          if(er != '')
                                          {
                                               error = er;break;
                                          }
                                          else if(tot_kpi_wt !=0 && tot_kpi_wt1 != tot_kpi_wt)
                                          {
                                              error = "Please enter KPI Weightage for all KPI field.";break;
                                          }
                                          else
                                          {
                                              error = '';
                                              // if (final_kpi_total != 100) 
                                              // {
                                              //     error = 'The Total for kpi score should be 100';break;
                                              // }
                                              // else
                                              // {                                                    
                                              //    error = '';
                                              // }
                                          }                 
                    }
                  }
                   // for closing
                  // alert(error);
                  if(er != '')
                    {
                        error = er;
                    }
                    else
                    {
                        er = '';
                    }
                }
                // else
            }
            // if closing
           
        
        // first(if error == '')

            if (updated_kpi_value != '') 
            {
              kpi_id_value = updated_kpi_value;
            }
            var extra_id = kpi_list.split(";");
            var extra_kpi_id = '';

            for($i=0;$i<extra_id.length;$i++){

                if(extra_kpi_id==''){

                  extra_kpi_id= Math.random().toString(16).slice(2);
                }else{
                  extra_kpi_id=extra_kpi_id+';'+Math.random().toString(16).slice(2);
                }
            }
           

            

                    //console.log(data);
                        var j = jQuery.noConflict();
                        var base_url = window.location.origin;
                        if(error != '')
                        {
                             $("#err").show();  
                             $("#err").fadeOut(6000);
                             $("#error_value").text(error);
                            $("#err").addClass("alert-danger");
                        }
                        else
                         { 

                            var dual_report=$.trim($('#dual_report').text());

                             if(dual_report.length=='0'){


                                      var valuee=$.trim($("#new_apr").text());

                                                                          var data = {
                                      'KRA_category' : $("#target_value").find(':selected').val(),
                                      'KRA_description' : $("#KRA_description").val(),
                                      'target' : $(".Weightage").find(':selected').val(),
                                      'target_unit' : kpi_unit,
                                      'target_value1' : kpi_value,
                                      'kpi_list' : kpi_list,
                                      'KPI_target_value' : final_kpi_wt,
                                      'kpi_id_value' : kpi_id_value,
                                      'submit_kra_click' : 'yes',
                                      'reoprting_to' : valuee,
                                      'new_goalsheet_state' : $("#gaolsheet_type").text(),
                                      'extra_kpi_id' : extra_kpi_id
                                    };
                                    console.log(data);

                                    
                                      $("#err").hide(); 
                                      $.ajax({
                                          type : 'post',
                                          datatype : 'html',
                                          data : data,
                                          url : base_url+'/pms/index.php?r=goalsheet/savekpi',
                                          success : function(data)
                                          {
                                              //location.reload();
                                              //alert(data);
                                              if (data == "Success")
                                              {
                                                  //           location.reload(true);
                                                  window.location.reload();
                                                 updated_kpi_value = kpi_id_value;
                                                 $(".output_div1").load(location.href + " .output_div1");
                                                   window.location.reload();

                                                  location.reload();
                                                 
                                              }
                                              
                                              
                                          }
                                      });







                             }else{

                                   var element = document.getElementById("report_mang");
                                          element.classList.add("in");
                                  $('#report_mang').modal('show');

                                  $('#continue_mang').click(function(){

                                      var checked_gender = document.querySelector('input[name = "manager"]:checked');

                                      if(checked_gender != null){  //Test if something was checked
                                        var valuee= checked_gender.value; //Alert the value of the checked.
                                      } else {

                                        var valuee='empty';
                                         
                                      }



                                      if(valuee=='empty'){

                                    

                                    $("#err").css('display','block');  
                                    $("#err").fadeOut(6000);
                                    $("#error_value").text('Please select one manager');
                                    $("#err").addClass("alert-danger");

                                 }else{

                                        
                                        var data = {
                                          'KRA_category' : $("#target_value").find(':selected').val(),
                                          'KRA_description' : $("#KRA_description").val(),
                                          'target' : $(".Weightage").find(':selected').val(),
                                          'target_unit' : kpi_unit,
                                          'target_value1' : kpi_value,
                                          'kpi_list' : kpi_list,
                                          'KPI_target_value' : final_kpi_wt,
                                          'kpi_id_value' : kpi_id_value,
                                          'submit_kra_click' : 'yes',
                                          'reoprting_to' : valuee,
                                          'new_goalsheet_state' : $("#gaolsheet_type").text(),
                                          'extra_kpi_id' : extra_kpi_id
                                        };
                                        console.log(data);

                                        
                                          $("#err").hide(); 
                                          $.ajax({
                                              type : 'post',
                                              datatype : 'html',
                                              data : data,
                                              url : base_url+'/pms/index.php?r=goalsheet/savekpi',
                                              success : function(data)
                                              {
                                                  //location.reload();
                                                  //alert(data);
                                                  if (data == "Success")
                                                  {
                                                      //           location.reload(true);
                                                      window.location.reload();
                                                     updated_kpi_value = kpi_id_value;
                                                     $(".output_div1").load(location.href + " .output_div1");
                                                       window.location.reload();

                                                      location.reload();
                                                     
                                                  }
                                                  
                                                  
                                              }
                                          });
                                      }
                                  });
























                             }

                            






                        }
        }else{
            //$("#err").show();
            $("#err").css('display','block');  
            $("#err").fadeOut(6000);
            $("#error_value").text(error);
            $("#err").addClass("alert-danger");
          }
       
          

  };
</script>
<script type="text/javascript">
  $(function(){
                $("#kpi_update_data").click(function(){   

                     var single_kpi_id = $('#single_kpi_id').text();                 
                    var kra_des = $("#KRA_description").val();
                    var string = /^(0[1-9]|[0-3][0-3])([/]{1})(0[1-9]|1[0-2])([/]{1})((19|20)[0-9]{2})$/;
                    var string_num = /^([0-9])*$/;
                     var data_length = kra_des.length;var tot_kpi_wt1 = 0;var tot_kpi_wt = 0;var tot_kpi_wt_final = 0;var final_kpi_wt = '';
                     //alert(data_length);
                    if (data_length==0)
                    {
                        error = 'Please enter KRA description';
                    }
                    else if(data_length>2000)
                    {
                        error = 'Maximum 2000 characters are allowed in KRA description';
                    }
                    else
                    {
                        error = '';
                    }
                    //alert("in");
                        if(error == '')
                    {
                        //alert("proceed");
                        var kra_num = $("#kpi_list_number").text();var kpi_list = '';var kpi_unit = '';var kpi_value = '';var kpi_total = 0;var kpi_target_total = '';
                        var selected_unit = $(".format_list").find(':selected').val();
                        var wtg_value = $("#Weightage").find(':selected').val();
                        var catergory = $("#target_value").find(':selected').val();

                        //alert(kra_num);
                        if(catergory == '--Select--')
                        {
                            error = 'Please select KRA Category.';
                        }
                        else if(wtg_value == '0')
                        {
                        }
                        else
                        {

                            var kpi_list_data = 0;var add_value = 0;final_kpi_total = 0;var final_kpi_wt = '';var er = '';
                            for (var i = 0; i < kra_num; i++) {
                            
                                if ($("#kpilistyii_"+i).val()!= '' && $("#mask_number-"+i).find(':selected').val()!='Select') 
                                {tot_kpi_wt1++;
                                    kpi_list_data = parseInt(kpi_list_data)+parseInt(1);
                                }
                                 
                                
                               if ($("#kpi_target_value-"+i).val() != 0 && $("#kpi_target_value-"+i).val() != '' && $.isNumeric($("#kpi_target_value-"+i).val())) 
                                {tot_kpi_wt++;
                                    if(parseInt($("#kpi_target_value-"+i).val()) < parseInt($("#min_kpiwt").text()))
                                    {                      
                                        error = "Minimum KPI Weightage allowed is "+$("#min_kpiwt").text();break;
                                    }
                                    else
                                    {
                                            if (final_kpi_wt == '') 
                                            {
                                                final_kpi_wt = $("#kpi_target_value-"+i).val();
                                                final_kpi_total = $("#kpi_target_value-"+i).val();
                                            }
                                            else
                                            {
                                               final_kpi_wt = final_kpi_wt+';'+$("#kpi_target_value-"+i).val();
                                                final_kpi_total = parseFloat(final_kpi_total)+parseFloat($("#kpi_target_value-"+i).val());
                                            }
                                    }
                                }
                                else if(!$.isNumeric($("#kpi_target_value-"+i).val()) && $("#kpi_target_value-"+i).val() != '')
                                {                                     
                                    error = "Please enter only numbers in KPI Weightage field.";break;
                                }
                                else if($("#kpilistyii_"+i).val()!= '' && i>0 && (($("#kpi_target_value-"+i).val() != '' && $("#kpi_target_value-"+(i-1)).val() == '') || ($("#kpi_target_value-"+i).val() == '' && $("#kpi_target_value-"+(i-1)).val() != '')))
                                {                      
                                    error = "Please enter KPI Weightage for all KPI field.";break;
                                }
                                
                            }
                           
                            if(error == '')
                            {                                
                                if (kpi_list_data <  $("#min_kpi").text()) 
                                {                                
                                    error = 'Please Fill minimum '+$("#min_kpi").text()+' KPI';                                   
                                }
                                else
                                {                             
                                    for (var i = 0; i < kra_num; i++) {
                                    
                                       if ($("#mask_number-"+i).find(':selected').val() != 'Select' && $("#kpilistyii_"+i).val() != '') 
                                        {
                                            
                                            var selected_value = $("#mask_number-"+i).find(':selected').val();
                                             var chk1 = /[;]/;
                                            if(chk1.test($("#kpilistyii_"+i).val()))
                                            {
                                                error = "The KPI description field should not contain ; special character.";break;
                                            }
                                            else
                                            {
                                                      error = '';
                                                      if (kpi_list == '')
                                                      {
                                                          kpi_list = $("#kpilistyii_"+i).val();
                                                          kpi_unit = $("#mask_number-"+i).find(':selected').val();
                                                          
                                                      }
                                                      else
                                                      {
                                                          kpi_list = kpi_list+';'+$("#kpilistyii_"+i).val();
                                                          kpi_unit = kpi_unit+';'+$("#mask_number-"+i).find(':selected').val();
                                                          
                                                          
                                                      }
                                              
                                            }
                                            if (selected_value != 'Units' && selected_value != 'Weight' && selected_value != 'Value') 
                                            {
                                                if(selected_value == 'Days')
                                                {
                                                    if($("#target_need1").text() != 'undefined' && $(".target_value1"+i).val()=='')
                                                    {
                                                       $(".target_value1"+i).css('border','1px solid red');
                                                        $(".target_value1"+i).focus();
                                                        error = 'Target 1 value is compulsory.';break;
                                                    }
                                                    else if(($("#target_need1").text() != 'undefined' || $("#target_need1").text() === undefined) && $(".target_value1"+i).val()!='' && !$.isNumeric($(".target_value1"+i).val()))
                                                    {
                                                         error = 'Only numbers are allowed for Days/Percentage.';break;
                                                    }
                                                    else if($("#target_need2").text() != 'undefined' && $(".target_value2"+i).val()=='')
                                                    {
                                                         $(".target_value2"+i).css('border','1px solid red');
                                                        $(".target_value2"+i).focus();
                                                        error = 'Target 2 value is compulsory.';break; 
                                                    }
                                                    else if(($("#target_need2").text() != 'undefined' || $("#target_need2").text() === undefined) && $(".target_value2"+i).val()!='' && !$.isNumeric($(".target_value2"+i).val()))
                                                    {
                                                         error = 'Only numbers are allowed for Days/Percentage.';break;
                                                    }
                                                    else if($("#target_need3").text() != 'undefined' && $(".target_value3"+i).val()=='')
                                                    {
                                                        $(".target_value3"+i).css('border','1px solid red');
                                                        $(".target_value3"+i).focus();
                                                        error = 'Target 3 value is compulsory.';break;
                                                    }
                                                    else if(($("#target_need3").text() != 'undefined' || $("#target_need3").text() === undefined) && $(".target_value3"+i).val()!='' && !$.isNumeric($(".target_value3"+i).val()))
                                                    {
                                                         error = 'Only numbers are allowed for Days/Percentage.';break;
                                                    }
                                                    else if($("#target_need4").text() != 'undefined' && $(".target_value4"+i).val()=='')
                                                    {
                                                        $(".target_value4"+i).css('border','1px solid red');
                                                        $(".target_value4"+i).focus(); 
                                                        error = 'Target 4 value is compulsory.';break;
                                                    }
                                                    else if(($("#target_need4").text() != 'undefined' || $("#target_need4").text() === undefined) && $(".target_value4"+i).val()!='' && !$.isNumeric($(".target_value4"+i).val()))
                                                    {
                                                         error = 'Only numbers are allowed for Days/Percentage.';break;
                                                    }
                                                    else if($("#target_need5").text() != 'undefined' && $(".target_value5"+i).val()=='')
                                                    {
                                                         $(".target_value5"+i).css('border','1px solid red');
                                                        $(".target_value5"+i).focus(); 
                                                        error = 'Target 5 value is compulsory.';break;
                                                    }
                                                    else if(($("#target_need5").text() != 'undefined' || $("#target_need5").text() === undefined) && $(".target_value5"+i).val()!='' && !$.isNumeric($(".target_value5"+i).val()))
                                                    {
                                                         error = 'Only numbers are allowed for Days/Percentage.';break;
                                                    }
                                                    else
                                                    {
                                                         for(var ch = 5;ch>0;ch--)
                                                        {
                                                        
                                                            var d= parseInt(ch)-parseInt(1);
                                                            if(d>0)
                                                            {
                                                            //alert(parseInt($(".target_value"+ch+i).val())<parseInt($(".target_value"+d+i).val()));
                                                            if((parseInt($(".target_value"+ch+i).val())>parseInt($(".target_value"+d+i).val())) || (parseInt($(".target_value"+ch+i).val())==parseInt($(".target_value"+d+i).val())))
                                                              {
                                                                 er = "Days should be in descending order and repetition is not allowed";
                                                                 $(".target_value1"+i).css('border','1px solid red');
                                                                 $(".target_value2"+i).css('border','1px solid red');
                                                                 $(".target_value3"+i).css('border','1px solid red');
                                                                 $(".target_value4"+i).css('border','1px solid red');
                                                                 $(".target_value5"+i).css('border','1px solid red');
                                                                 $(".target_value1"+i).focus();
                                                                 break;
                                                                // alert(parseInt($(".target_value"+ch+i).val()));alert(parseInt($(".target_value"+d+i).val()));
                                                              }
                                                              //alert($(".target_value"+ch+i).val());alert(parseInt($(".target_value"+d+i).val()));
                                                            }
                                                        }
                                                       
                                                        if (kpi_value == '')
                                                        {
                                                            kpi_value = $(".target_value1"+i).val()+'-'+$(".target_value2"+i).val()+'-'+$(".target_value3"+i).val()+'-'+$(".target_value4"+i).val()+'-'+$(".target_value5"+i).val();
                                                        }
                                                        else
                                                        {                                    
                                                                kpi_value = kpi_value+';'+$(".target_value1"+i).val()+'-'+$(".target_value2"+i).val()+'-'+$(".target_value3"+i).val()+'-'+$(".target_value4"+i).val()+'-'+$(".target_value5"+i).val();                                   
                                                        }

                                                    }
                                                    //alert(er);
                                                }
                                                else if(selected_value == 'Percentage')
                                                {
                                                    if($("#target_need1").text() != 'undefined' && $(".target_value1"+i).val()=='')
                                                    {
                                                       $(".target_value1"+i).css('border','1px solid red');
                                                        $(".target_value1"+i).focus();
                                                        error = 'Target 1 value is compulsory.';break;
                                                    }
                                                    else if(($("#target_need1").text() != 'undefined' || $("#target_need1").text() === undefined) && $(".target_value1"+i).val()!='' && !$.isNumeric($(".target_value1"+i).val()))
                                                    {
                                                         error = 'Only numbers are allowed for Days/Percentage.';break;
                                                    }
                                                    else if($("#target_need2").text() != 'undefined' && $(".target_value2"+i).val()=='')
                                                    {
                                                        $(".target_value2"+i).css('border','1px solid red');
                                                        $(".target_value2"+i).focus();
                                                        error = 'Target 2 value is compulsory.';break; 
                                                    }
                                                    else if(($("#target_need2").text() != 'undefined' || $("#target_need2").text() === undefined) && $(".target_value2"+i).val()!='' && !$.isNumeric($(".target_value2"+i).val()))
                                                    {
                                                         error = 'Only numbers are allowed for Days/Percentage.';break;
                                                    }
                                                    else if($("#target_need3").text() != 'undefined' && $(".target_value3"+i).val()=='')
                                                    {
                                                         $(".target_value3"+i).css('border','1px solid red');
                                                        $(".target_value3"+i).focus();
                                                        error = 'Target 3 value is compulsory.';break;
                                                    }
                                                    else if(($("#target_need3").text() != 'undefined' || $("#target_need3").text() === undefined) && $(".target_value3"+i).val()!='' && !$.isNumeric($(".target_value3"+i).val()))
                                                    {
                                                         error = 'Only numbers are allowed for Days/Percentage.';break;
                                                    }
                                                    else if($("#target_need4").text() != 'undefined' && $(".target_value4"+i).val()=='')
                                                    {
                                                         $(".target_value4"+i).css('border','1px solid red');
                                                        $(".target_value4"+i).focus(); 
                                                        error = 'Target 4 value is compulsory.';break;
                                                    }
                                                    else if(($("#target_need4").text() != 'undefined' || $("#target_need4").text() === undefined) && $(".target_value4"+i).val()!='' && !$.isNumeric($(".target_value4"+i).val()))
                                                    {
                                                         error = 'Only numbers are allowed for Days/Percentage.';break;
                                                    }
                                                    else if($("#target_need5").text() != 'undefined' && $(".target_value5"+i).val()=='')
                                                    {
                                                         $(".target_value5"+i).css('border','1px solid red');
                                                        $(".target_value5"+i).focus(); 
                                                        error = 'Target 5 value is compulsory.';break;
                                                    }
                                                    else if(($("#target_need5").text() != 'undefined' || $("#target_need5").text() === undefined) && $(".target_value5"+i).val()!='' && !$.isNumeric($(".target_value5"+i).val()))
                                                    {
                                                         error = 'Only numbers are allowed for Days/Percentage.';break;
                                                    }
                                                    else
                                                    {
                                                        var er = '';
                                                        for(var ch = 5;ch>0;ch--)
                                                        {
                                                        //alert($(".target_value"+ch+i).val());alert($(".target_value"+d+i).val());
                                                            //var d= parseInt(ch)-parseInt(1);
                                                            for(var d = ch-1;d>0;d--)
                                                            {
                                                              if($(".target_value"+ch+i).val()==$(".target_value"+d+i).val())
                                                              {
                                                                 er = "Repetition is not allowed";
                                                              }
                                                            }
                                                        }
                                                        if (kpi_value == '')
                                                        {
                                                            kpi_value = $(".target_value1"+i).val()+'-'+$(".target_value2"+i).val()+'-'+$(".target_value3"+i).val()+'-'+$(".target_value4"+i).val()+'-'+$(".target_value5"+i).val();
                                                        }
                                                        else
                                                        {                                    
                                                                kpi_value = kpi_value+';'+$(".target_value1"+i).val()+'-'+$(".target_value2"+i).val()+'-'+$(".target_value3"+i).val()+'-'+$(".target_value4"+i).val()+'-'+$(".target_value5"+i).val();                                   
                                                        }

                                                    }
                                                }
                                                else if(selected_value == 'Date')
                                                {
                                                    if($("#target_need1").text() != 'undefined' && $(".target_value1"+i).val()=='')
                                                    {
                                                       $(".target_value1"+i).css('border','1px solid red');
                                                        $(".target_value1"+i).focus();
                                                        error = 'Target 1 value is compulsory.';break;
                                                    }                                               
                                                    else if($("#target_need2").text() != 'undefined' && $(".target_value2"+i).val()=='')
                                                    {
                                                        $(".target_value2"+i).css('border','1px solid red');
                                                        $(".target_value2"+i).focus();
                                                        error = 'Target 2 value is compulsory.';break; 
                                                    }                                                
                                                    else if($("#target_need3").text() != 'undefined' && $(".target_value3"+i).val()=='')
                                                    {
                                                        $(".target_value3"+i).css('border','1px solid red');
                                                        $(".target_value3"+i).focus();
                                                        error = 'Target 3 value is compulsory.';break;
                                                    }                                                
                                                    else if($("#target_need4").text() != 'undefined' && $(".target_value4"+i).val()=='')
                                                    {
                                                        $(".target_value4"+i).css('border','1px solid red');
                                                        $(".target_value4"+i).focus(); 
                                                        error = 'Target 4 value is compulsory.';break;
                                                    }                                                
                                                    else if($("#target_need5").text() != 'undefined' && $(".target_value5"+i).val()=='')
                                                    {
                                                         $(".target_value5"+i).css('border','1px solid red');
                                                        $(".target_value5"+i).focus(); 
                                                        error = 'Target 5 value is compulsory.';break;
                                                    }                                                
                                                    else
                                                    {
                                                        var er = '';var asc = 0;var desc = 0;
                                                        for(var ch = 5;ch>0;ch--)
                                                        {   
                                                            var date1 =  $(".target_value"+ch+i).val().split("/");
                                                            var date_pos = '';
                                                            if(date1[1] == "Jan")
                                                            {
                                                             date_pos = '01';
                                                            }
                                                            else if(date1[1] == "Feb")
                                                            {
                                                             date_pos = '02';
                                                            }
                                                            else if(date1[1] == "Mar")
                                                            {
                                                             date_pos = '03';
                                                            }
                                                            else if(date1[1] == "Apr")
                                                            {
                                                             date_pos = '04';
                                                            }
                                                            else if(date1[1] == "May")
                                                            {
                                                             date_pos = '05';
                                                            }
                                                            else if(date1[1] == "Jun")
                                                            {
                                                             date_pos = '06';
                                                            }
                                                            else if(date1[1] == "Jul")
                                                            {
                                                             date_pos = '07';
                                                            }
                                                            else if(date1[1] == "Aug")
                                                            {
                                                             date_pos = '08';
                                                            }
                                                            else if(date1[1] == "Sep")
                                                            {
                                                             date_pos = '09';
                                                            }
                                                            else if(date1[1] == "Oct")
                                                            {
                                                             date_pos = '10';
                                                            }
                                                            else if(date1[1] == "Nov")
                                                            {
                                                             date_pos = '11';
                                                            }
                                                            else if(date1[1] == "Dec")
                                                            {
                                                             date_pos = '12';
                                                            }
                                                            var date11 = date1[0]+'/'+date_pos+'/'+date1[2];
                                                            var d= parseInt(ch)-parseInt(1);
                                                            if(d != 0)
                                                            {
                                                               var date2 =  $(".target_value"+d+i).val().split("/");
                                                                var date_pos = '';
                                                            if(date2[1] == "Jan")
                                                            {
                                                             date_pos = '01';
                                                            }
                                                            else if(date2[1] == "Feb")
                                                            {
                                                             date_pos = '02';
                                                            }
                                                            else if(date2[1] == "Mar")
                                                            {
                                                             date_pos = '03';
                                                            }
                                                            else if(date2[1] == "Apr")
                                                            {
                                                             date_pos = '04';
                                                            }
                                                            else if(date2[1] == "May")
                                                            {
                                                             date_pos = '05';
                                                            }
                                                            else if(date2[1] == "Jun")
                                                            {
                                                             date_pos = '06';
                                                            }
                                                            else if(date2[1] == "Jul")
                                                            {
                                                             date_pos = '07';
                                                            }
                                                            else if(date2[1] == "Aug")
                                                            {
                                                             date_pos = '08';
                                                            }
                                                            else if(date2[1] == "Sep")
                                                            {
                                                             date_pos = '09';
                                                            }
                                                            else if(date2[1] == "Oct")
                                                            {
                                                             date_pos = '10';
                                                            }
                                                            else if(date2[1] == "Nov")
                                                            {
                                                             date_pos = '11';
                                                            }
                                                            else if(date2[1] == "Dec")
                                                            {
                                                             date_pos = '12';
                                                            }
                                                            var date12 = date2[0]+'/'+date_pos+'/'+date2[2];
                                                            if(process(date11) < process(date12))
                                                                { 
                                                                  asc = parseInt(asc)+parseInt(1);
                                                                }
                                                                if(process(date11) > process(date12))
                                                                { 
                                                                  desc = parseInt(desc)+parseInt(1);
                                                                }
                                                            }
                                                        }
                                                        //alert(asc);alert(desc);
                                                        if(desc!=4 && asc !=4)
                                                        { 
                                                          er = "Date should be either in ascending or descending order and repetition is not allowed.";
                                                          $(".target_value1"+i).css('border','1px solid red');
                                                              $(".target_value1"+i).focus();
                                                              $(".target_value2"+i).css('border','1px solid red');
                                                              $(".target_value3"+i).css('border','1px solid red');
                                                              $(".target_value4"+i).css('border','1px solid red');
                                                              $(".target_value5"+i).css('border','1px solid red');
                                                              break;
                                                        }
                                                        if (kpi_value == '')
                                                        {
                                                            kpi_value = $(".target_value1"+i).val()+'-'+$(".target_value2"+i).val()+'-'+$(".target_value3"+i).val()+'-'+$(".target_value4"+i).val()+'-'+$(".target_value5"+i).val();
                                                        }
                                                        else
                                                        {                                    
                                                            kpi_value = kpi_value+';'+$(".target_value1"+i).val()+'-'+$(".target_value2"+i).val()+'-'+$(".target_value3"+i).val()+'-'+$(".target_value4"+i).val()+'-'+$(".target_value5"+i).val();                                   
                                                        }
                                                            //alert(er); 
                                                    }
                                                }
                                                else if(selected_value == 'Text')
                                                {
                                                    
                                                    var chk = /[;-]/;
                                                    if($("#target_need1").text() != 'undefined' && $(".target_value1"+i).val()=='')
                                                    {
                                                        $(".target_value1"+i).css('border','1px solid red');
                                                        $(".target_value1"+i).focus();
                                                        error = 'Target 1 value is compulsory.';break;
                                                    }
                                                    else if(($(".target_value1"+i).val()!='' && chk.test($(".target_value1"+i).val())) || ($(".target_value1"+i).val()!='' && $(".target_value1"+i).val().length>2000))
                                                    {
                                                         error = 'For the free text field ;- special characters are not allowed and maximum characters allowed are 2000.';break;
                                                    }
                                                    else if($("#target_need2").text() != 'undefined' && $(".target_value2"+i).val()=='')
                                                    {
                                                         $(".target_value2"+i).css('border','1px solid red');
                                                        $(".target_value2"+i).focus();
                                                         error = 'Target 2 value is compulsory.';break;
                                                    }
                                                   else if(($(".target_value2"+i).val()!='' && chk.test($(".target_value2"+i).val())) || ($(".target_value2"+i).val()!='' && $(".target_value2"+i).val().length>2000))
                                                    {
                                                         error = 'For the free text field ;- special characters are not allowed and maximum characters allowed are 2000.';break;
                                                    }
                                                    else if($("#target_need3").text() != 'undefined' && $(".target_value3"+i).val()=='')
                                                    {
                                                        $(".target_value3"+i).css('border','1px solid red');
                                                        $(".target_value3"+i).focus();
                                                        error = 'Target 3 value is compulsory.';break;
                                                    }
                                                    else if(($(".target_value3"+i).val()!='' && chk.test($("#target_need3").text())) || ($(".target_value3"+i).val()!='' && $("#target_need3").text().length>2000))
                                                    {
                                                         error = 'For the free text field ;- special characters are not allowed and maximum characters allowed are 2000.';break;
                                                    }
                                                    else if($("#target_need4").text() != 'undefined' && $(".target_value4"+i).val()=='')
                                                    {
                                                         $(".target_value4"+i).css('border','1px solid red');
                                                        $(".target_value4"+i).focus(); 
                                                        error = 'Target 4 value is compulsory.';break;
                                                    }
                                                    else if(($(".target_value4"+i).val()!='' && chk.test($(".target_value4"+i).val())) || ($(".target_value4"+i).val()!='' && $(".target_value4"+i).val().length>2000))
                                                    {
                                                         error = 'For the free text field ;- special characters are not allowed and maximum characters allowed are 2000.';break;
                                                    }
                                                    else if($("#target_need5").text() != 'undefined' && $(".target_value5"+i).val()=='')
                                                    {
                                                         $(".target_value5"+i).css('border','1px solid red');
                                                        $(".target_value5"+i).focus(); 
                                                        error = 'Target 5 value is compulsory.';break;
                                                    }
                                                   else if(($(".target_value4"+i).val()!='' && chk.test($(".target_value5"+i).val())) || ($(".target_value4"+i).val()!='' && $(".target_value5"+i).val().length>2000))
                                                    {
                                                         error = 'For the free text field ;- special characters are not allowed and maximum characters allowed are 2000.';break;
                                                    }
                                                    else
                                                    {
                                                        error = '';var chk1 = /[;]/;
                                                       if (kpi_value == '')
                                                            {
                                                                kpi_value = $(".target_value1"+i).val()+'-'+$(".target_value2"+i).val()+'-'+$(".target_value3"+i).val()+'-'+$(".target_value4"+i).val()+'-'+$(".target_value5"+i).val();
                                                            }
                                                            else
                                                            {                                    
                                                                    kpi_value = kpi_value+';'+$(".target_value1"+i).val()+'-'+$(".target_value2"+i).val()+'-'+$(".target_value3"+i).val()+'-'+$(".target_value4"+i).val()+'-'+$(".target_value5"+i).val();                                   
                                                            }
                                                    }
                                                }
                                                else if(selected_value == 'Ratio')
                                                {
                                                    var ratio_chk = /^([0-9]{1,5}[:]{1}[0-9]{1,5})$/;
                                                    if($("#target_need1").text() != 'undefined' && $(".target_value1"+i).val()=='')
                                                    {
                                                      $(".target_value1"+i).css('border','1px solid red');
                                                        $(".target_value1"+i).focus();
                                                        error = 'Target 1 value is compulsory.';break;
                                                    }
                                                    else if(($("#target_need1").text() != 'undefined' || $("#target_need1").text() === undefined) && $(".target_value1"+i).val()!='' && !ratio_chk.test($(".target_value1"+i).val()))
                                                    {
                                                         error = 'Please enter valid value in ratio field.';break;
                                                    }
                                                    else if($("#target_need2").text() != 'undefined' && $(".target_value2"+i).val()=='')
                                                    {
                                                        $(".target_value2"+i).css('border','1px solid red');
                                                        $(".target_value2"+i).focus();
                                                         error = 'Target 2 value is compulsory.';break;
                                                    }
                                                    else if(($("#target_need2").text() != 'undefined' || $("#target_need2").text() === undefined) && $(".target_value2"+i).val()!='' && !ratio_chk.test($(".target_value2"+i).val()))
                                                    {
                                                        error = 'Please enter valid value in ratio field.';break;
                                                    }
                                                    else if($("#target_need3").text() != 'undefined' && $(".target_value3"+i).val()=='')
                                                    {
                                                        $(".target_value3"+i).css('border','1px solid red');
                                                        $(".target_value3"+i).focus();
                                                        error = 'Target 3 value is compulsory.';break;
                                                    }
                                                    else if(($("#target_need3").text() != 'undefined' || $("#target_need3").text() === undefined) && $(".target_value3"+i).val()!='' && !ratio_chk.test($(".target_value3"+i).val()))
                                                    {
                                                         error = 'Please enter valid value in ratio field.';break;
                                                    }
                                                    else if($("#target_need4").text() != 'undefined' && $(".target_value4"+i).val()=='')
                                                    {
                                                         $(".target_value4"+i).css('border','1px solid red');
                                                        $(".target_value4"+i).focus(); 
                                                        error = 'Target 4 value is compulsory.';break;
                                                    }
                                                    else if(($("#target_need4").text() != 'undefined' || $("#target_need4").text() === undefined) && $(".target_value4"+i).val()!='' && !ratio_chk.test($(".target_value4"+i).val()))
                                                    {
                                                         error = 'Please enter valid value in ratio field.';break;
                                                    }
                                                    else if($("#target_need5").text() != 'undefined' && $(".target_value5"+i).val()=='')
                                                    {
                                                         $(".target_value5"+i).css('border','1px solid red');
                                                        $(".target_value5"+i).focus(); 
                                                        error = 'Target 5 value is compulsory.';break;
                                                    }
                                                    else if(($("#target_need5").text() != 'undefined' || $("#target_need5").text() === undefined) && $(".target_value5"+i).val()!='' && !ratio_chk.test($(".target_value5"+i).val()))
                                                    {
                                                         error = 'Please enter valid value in ratio field.';break;
                                                    }
                                                    else
                                                    {
                                                        var er = '';
                                                        for(var ch = 5;ch>0;ch--)
                                                        {
                                                        //alert($(".target_value"+ch+i).val());alert($(".target_value"+d+i).val());
                                                            //var d= parseInt(ch)-parseInt(1);
                                                            for(var d = ch-1;d>0;d--)
                                                            {
                                                              if($(".target_value"+ch+i).val()==$(".target_value"+d+i).val())
                                                              {
                                                                 er = "Repetition is not allowed";
                                                              }
                                                            }
                                                        }
                                                        if (kpi_value == '')
                                                        {
                                                            kpi_value = $(".target_value1"+i).val()+'-'+$(".target_value2"+i).val()+'-'+$(".target_value3"+i).val()+'-'+$(".target_value4"+i).val()+'-'+$(".target_value5"+i).val();
                                                        }
                                                        else
                                                        {                                    
                                                                kpi_value = kpi_value+';'+$(".target_value1"+i).val()+'-'+$(".target_value2"+i).val()+'-'+$(".target_value3"+i).val()+'-'+$(".target_value4"+i).val()+'-'+$(".target_value5"+i).val();                                   
                                                        }

                                                    }
                                                }
                                                
                                            }
                                            else if(selected_value == 'Units' || selected_value == 'Weight' || selected_value == 'Value')
                                            {
                                                
                                                if ($("#unit_value-"+i).val()==''  || $("#unit_value-"+i).val() === undefined) 
                                                {
                                                    error = 'Please Fill unit value';break;
                                                }
                                                else if ($("#unit_value-"+i).val() == 0 || $("#unit_value-"+i).val().length>6)
                                                {
                                                    error = 'Minimum 1 and maximum 6 digits are allowed.';break;
                                                }                       
                                                else if (!$.isNumeric($("#unit_value-"+i).val())) 
                                                {
                                                    error = 'Only numbers are allowed for Units/Weight/Value field.';break;
                                                }
                                                else
                                                {
                                                    error = '';
                                                    if (kpi_value == '')
                                                    {
                                                        kpi_value = $("#unit_value-"+i).val();
                                                    }
                                                    else
                                                    {
                                                        kpi_value = kpi_value+';'+$("#unit_value-"+i).val();
                                                    }
                                                    
                                                }
                                            }
                                            if (final_kpi_total != '' && final_kpi_total != 100) 
                                            {
                                                error = 'The Total for KPI score should be 100';break;
                                            }
                                            else
                                            {                                                    
                                               error = '';
                                            }

                                        }                                   
                                        else
                                        { 
                                            //error = '';
                                            if ($("#mask_number-"+i).find(':selected').val() == 'Select' && ($("#kpilistyii_"+i).val() != '' || $("#unit_value-"+i).val() != '')) 
                                            {
                                                 error = 'Please Fill Correct KPI Details';break;
                                            }
                                            else  if ($("#mask_number-"+i).find(':selected').val() != 'Select' && ($("#kpilistyii_"+i).val() == '' || $("#unit_value-"+i).val() == '')) 
                                            {
                                                error = 'Please Fill Correct KPI Details';break;
                                            }
                                            else if(($("#mask_number-"+i).find(':selected').val() == 'Select' && ($("#kpilistyii_"+i).val() != '' || $("#unit_value-"+i).val() != '')) || ($("#kpilistyii_"+i).val() == '' && $("#mask_number-"+i).find(':selected').val() != 'Select'))
                                                {
                                                    error = 'Please Fill Correct KPI Details';break;
                                                }
                                                else if(er != '')
                                                {
                                                     error = er;break;
                                                }
                                                else
                                                {
                                                    error = '';er = '';
                                                    // if (final_kpi_total != 100) 
                                                    // {
                                                    //     error = 'The Total for kpi score should be 100';break;
                                                    // }
                                                    // else
                                                    // {                                                    
                                                    //    error = '';
                                                    // }
                                                }                                         
                                        } 
                                        if(er != '')
                                        {
                                             error = er;break;
                                        }
                                        else if(tot_kpi_wt !=0 && tot_kpi_wt1 != tot_kpi_wt)
                                        {
                                            error = "Please enter KPI Weightage for all KPI field.";break;
                                        }
                                        else
                                        {
                                            error = '';er = '';
                                        }
                                    
                                    }
                                                              
                                } 
                            }
                            
                        }
                        $(window).scroll(function()
                        {
                            $('#err').animate({top:$(window).scrollTop()+"px" },{queue: false, duration: 350});  
                        });  
                         var extra_single_id=Math.random().toString(16).slice(2);
                        var single_kpi_id1 =single_kpi_id+';'+extra_single_id;
                        
                        var data = {
                            'KRA_category' : $("#target_value").find(':selected').val(),
                            'KRA_description' : $("#KRA_description").val(),
                            'target' : $("#Weightage").find(':selected').val(),
                            'target_unit' : kpi_unit,
                            'target_value1' : kpi_value,
                            'kpi_list' : kpi_list,
                            'KPI_target_value' : final_kpi_wt,
                            'KPI_id' : $("#kpi_edit_id").text(),
                            'single_kpi_id1':single_kpi_id1
                        };
                        //console.log(data);
                        var j = jQuery.noConflict();
                        var base_url = window.location.origin;
                        //alert(error);
                        if(error != '')
                        {
                             $("#err").show();  
                             //$("#err").fadeOut(6000);
                             $("#error_value").text(error);
                            $("#err").addClass("alert-danger");
                        }
                        else
                        {
                            $.ajax({
                                type : 'post',
                                datatype : 'html',
                                data : data,
                                url : base_url+$("#basepath").attr('value')+'/index.php?r=Goalsheet/update_kpi',
                                success : function(data)
                                {      
                                   // alert(data);
                                    if (data = 'success')
                                    {
                                        //alert(data);
                                        //get_notify("KRA Updated successfully");
                                        
                                        // $("#err").show();  
                                        // $("#err").fadeOut(6000);
                                        // $("#error_value").text("Successfully updated");
                                        // $("#err").removeClass("alert-danger");
                                        // $("#err").addClass("alert-success");

                                         $("#success_delete").show();  
                                        $("#success_delete").fadeOut(6000);
                                        $("#success_del_msg").text("Successfully updated");


                                        window.location.href = base_url+$("#basepath").attr('value')+'/index.php?r=Goalsheet';
                                        //location.reload();
                                    }
                                    
                                }
                            });
                        }
                        
                        console.log(data);
                    }
                    else
                    {
                        $("#err").show();  
                        //$("#err").fadeOut(6000);
                        $("#err").text(error);
                        $("#err").addClass("alert-danger");
                    }
                });
                //alert($("#new_apr").text());
               });
</script>

<script>

  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {

    
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
      
      
      $('#goal_title').css('display','block');
      
    } else {
      $('#goal_title').css('display','none');
    }
  }

</script>
<script type="text/javascript">
      function process(date){
           var parts = date.split("/");
           return new Date(parts[2], parts[1] - 1, parts[0]);
        }
        function addDays(myDate,days) {
        return new Date(myDate.getTime() + days*24*60*60*1000);
        }
        function convert(str) {
            var date = new Date(str),
                mnth = ("0" + (date.getMonth()+1)).slice(-2),
                day  = ("0" + date.getDate()).slice(-2);
            return [day,mnth,date.getFullYear()].join("-");
        }
           $(function(){
            for (var v = 0; v <= 3; v++) {
                    $(".target_value1"+v).removeAttr('id');
                    $(".target_value2"+v).removeAttr('id');
                    $(".target_value3"+v).removeAttr('id');
                    $(".target_value4"+v).removeAttr('id');
                    $(".target_value5"+v).removeAttr('id');
                }
           });
       </script>
<script type="text/javascript">
    $(function(){
         $("body").on('change','#financial_year',function(){
              //alert($(this).val());
              var data = {
                  getyear : $(this).val()
              };
              var base_url = window.location.origin;
               $.ajax({
                    type : 'post',
                    datatype : 'html',
                    data : data,
                    url : base_url+'/pms/index.php/New_login/set_new',
                    success : function(data)
                    { 
                        //alert(data);
                        location.reload();
                    }
               });
          });
        $('#employee_table').DataTable();
    });
</script>  


 <script>
function exportTableToExcel(tableID, filename = ''){

    // alert("fsdfsdf");
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
</script>


<script type="text/javascript">
  $('.cascade_submit').click(function(){

    

    $id=$(this).attr('id');
   
   
      $kpi_no ='';

      $("."+$id+":checked").each(function () {
              
              if($kpi_no==''){
                 $idd=$(this).attr("id").split("_");
                $kpi_no=$idd[0];
              }else{

                $idd=$(this).attr("id").split("_");
              $kpi_no = $kpi_no+';'+$idd[0];
              } 
          });
      

     var kpi_cnt=$kpi_no.split(";");
     var kpii_cntt=kpi_cnt.length;



      if($kpi_no==''){

            $("#err").show();  
            $("#err").fadeOut(6000);
            $("#error_value").text("Please select the KPI");
            $("#err").addClass("alert-danger");
             

      }else{



                    var kra_des = $("#KRA_description").val();
                    var string = /^(0[1-9]|[0-3][0-3])([/]{1})(0[1-9]|1[0-2])([/]{1})((19|20)[0-9]{2})$/;
                    var string_num = /^([0-9])*$/;
                     var data_length = kra_des.length;var tot_kpi_wt1 = 0;var tot_kpi_wt = 0;var tot_kpi_wt_final = 0;var final_kpi_wt = '';
                     //alert(data_length);
                    if (data_length==0)
                    {
                        error = 'Please enter KRA description';
                    }
                    else if(data_length>2000)
                    {
                        error = 'Maximum 2000 characters are allowed in KRA description';
                    }
                    else
                    {
                        error = '';
                    }
                    //alert("in");
                        if(error == '')
                    {


                        var kra_num = $("#kpi_list_number").text();var kpi_list = '';var kpi_unit = '';var kpi_value = '';var kpi_total = 0;var kpi_target_total = '';
                        var selected_unit = $(".format_list").find(':selected').val();
                        var wtg_value = $("#Weightage").find(':selected').val();
                        var catergory = $("#target_value").find(':selected').val();

                        //alert(kra_num);
                        if(catergory == '--Select--')
                        {
                            error = 'Please select KRA Category.';
                        }
                        else if(wtg_value == '0')
                        {
                        }
                        else
                        {

                             var kpi_list_data = 0;var add_value = 0;final_kpi_total = 0;var final_kpi_wt = '';var er = '';
                            
                            for($k=0;$k<kpii_cntt;$k++){
                              

                              i=kpi_cnt[$k];

                                if ($("#kpilistyii_"+i).val()!='' && $("#mask_number-"+i).find(':selected').val()!='Select') 
                                {tot_kpi_wt1++;
                                    kpi_list_data = parseInt(kpi_list_data)+parseInt(1);
                                }
                                 
                                
                               if ($("#kpi_target_value-"+i).val() != 0 && $("#kpi_target_value-"+i).val() != '' && $.isNumeric($("#kpi_target_value-"+i).val())) 
                                {tot_kpi_wt++;
                                    if(parseInt($("#kpi_target_value-"+i).val()) < parseInt($("#min_kpiwt").text()))
                                    {                      
                                        error = "Minimum KPI Weightage allowed is "+$("#min_kpiwt").text();break;
                                    }
                                    else
                                    {
                                            if (final_kpi_wt == '') 
                                            {
                                                final_kpi_wt = $("#kpi_target_value-"+i).val();
                                                final_kpi_total = $("#kpi_target_value-"+i).val();
                                            }
                                            else
                                            {
                                               final_kpi_wt = final_kpi_wt+';'+$("#kpi_target_value-"+i).val();
                                                final_kpi_total = parseFloat(final_kpi_total)+parseFloat($("#kpi_target_value-"+i).val());
                                            }
                                    }
                                }
                                else if(!$.isNumeric($("#kpi_target_value-"+i).val()) && $("#kpi_target_value-"+i).val() != '')
                                {                                     
                                    error = "Please enter only numbers in KPI Weightage field.";break;
                                }
                                else if($("#kpilistyii_"+i).val()!= '' && i>0 && (($("#kpi_target_value-"+i).val() != '' && $("#kpi_target_value-"+(i-1)).val() == '') || ($("#kpi_target_value-"+i).val() == '' && $("#kpi_target_value-"+(i-1)).val() != '')))
                                {                      
                                    error = "Please enter KPI Weightage for all KPI field.";break;
                                }


                            }

                            if(error == '')
                            {                                
                                    for($k=0;$k<kpii_cntt;$k++){
                                      
                                    
                                      i=kpi_cnt[$k];

                                       if ($("#mask_number-"+i).find(':selected').val() != 'Select' && $("#kpilistyii_"+i).val() != '') 
                                        {
                                            
                                            var selected_value = $("#mask_number-"+i).find(':selected').val();
                                             var chk1 = /[;]/;
                                            if(chk1.test($("#kpilistyii_"+i).val()))
                                            {
                                                error = "The KPI description field should not contain ; special character.";break;
                                            }
                                            else
                                            {
                                                      error = '';
                                                      if (kpi_list == '')
                                                      {
                                                          kpi_list = $("#kpilistyii_"+i).val();
                                                          kpi_unit = $("#mask_number-"+i).find(':selected').val();
                                                          
                                                      }
                                                      else
                                                      {
                                                          kpi_list = kpi_list+';'+$("#kpilistyii_"+i).val();
                                                          kpi_unit = kpi_unit+';'+$("#mask_number-"+i).find(':selected').val();
                                                          
                                                          
                                                      }
                                              
                                            }
                                            if (selected_value != 'Units' && selected_value != 'Weight' && selected_value != 'Value') 
                                            {
                                                if(selected_value == 'Days')
                                                {
                                                    if($("#target_need1").text() != 'undefined' && $(".target_value1"+i).val()=='')
                                                    {
                                                       $(".target_value1"+i).css('border','1px solid red');
                                                        $(".target_value1"+i).focus();
                                                        error = 'Target 1 value is compulsory.';break;
                                                    }
                                                    else if(($("#target_need1").text() != 'undefined' || $("#target_need1").text() === undefined) && $(".target_value1"+i).val()!='' && !$.isNumeric($(".target_value1"+i).val()))
                                                    {
                                                         error = 'Only numbers are allowed for Days/Percentage.';break;
                                                    }
                                                    else if($("#target_need2").text() != 'undefined' && $(".target_value2"+i).val()=='')
                                                    {
                                                         $(".target_value2"+i).css('border','1px solid red');
                                                        $(".target_value2"+i).focus();
                                                        error = 'Target 2 value is compulsory.';break; 
                                                    }
                                                    else if(($("#target_need2").text() != 'undefined' || $("#target_need2").text() === undefined) && $(".target_value2"+i).val()!='' && !$.isNumeric($(".target_value2"+i).val()))
                                                    {
                                                         error = 'Only numbers are allowed for Days/Percentage.';break;
                                                    }
                                                    else if($("#target_need3").text() != 'undefined' && $(".target_value3"+i).val()=='')
                                                    {
                                                        $(".target_value3"+i).css('border','1px solid red');
                                                        $(".target_value3"+i).focus();
                                                        error = 'Target 3 value is compulsory.';break;
                                                    }
                                                    else if(($("#target_need3").text() != 'undefined' || $("#target_need3").text() === undefined) && $(".target_value3"+i).val()!='' && !$.isNumeric($(".target_value3"+i).val()))
                                                    {
                                                         error = 'Only numbers are allowed for Days/Percentage.';break;
                                                    }
                                                    else if($("#target_need4").text() != 'undefined' && $(".target_value4"+i).val()=='')
                                                    {
                                                        $(".target_value4"+i).css('border','1px solid red');
                                                        $(".target_value4"+i).focus(); 
                                                        error = 'Target 4 value is compulsory.';break;
                                                    }
                                                    else if(($("#target_need4").text() != 'undefined' || $("#target_need4").text() === undefined) && $(".target_value4"+i).val()!='' && !$.isNumeric($(".target_value4"+i).val()))
                                                    {
                                                         error = 'Only numbers are allowed for Days/Percentage.';break;
                                                    }
                                                    else if($("#target_need5").text() != 'undefined' && $(".target_value5"+i).val()=='')
                                                    {
                                                         $(".target_value5"+i).css('border','1px solid red');
                                                        $(".target_value5"+i).focus(); 
                                                        error = 'Target 5 value is compulsory.';break;
                                                    }
                                                    else if(($("#target_need5").text() != 'undefined' || $("#target_need5").text() === undefined) && $(".target_value5"+i).val()!='' && !$.isNumeric($(".target_value5"+i).val()))
                                                    {
                                                         error = 'Only numbers are allowed for Days/Percentage.';break;
                                                    }
                                                    else
                                                    {
                                                         for(var ch = 5;ch>0;ch--)
                                                        {
                                                        
                                                            var d= parseInt(ch)-parseInt(1);
                                                            if(d>0)
                                                            {
                                                            //alert(parseInt($(".target_value"+ch+i).val())<parseInt($(".target_value"+d+i).val()));
                                                            if((parseInt($(".target_value"+ch+i).val())>parseInt($(".target_value"+d+i).val())) || (parseInt($(".target_value"+ch+i).val())==parseInt($(".target_value"+d+i).val())))
                                                              {
                                                                 er = "Days should be in descending order and repetition is not allowed";
                                                                 $(".target_value1"+i).css('border','1px solid red');
                                                                 $(".target_value2"+i).css('border','1px solid red');
                                                                 $(".target_value3"+i).css('border','1px solid red');
                                                                 $(".target_value4"+i).css('border','1px solid red');
                                                                 $(".target_value5"+i).css('border','1px solid red');
                                                                 $(".target_value1"+i).focus();
                                                                 break;
                                                                // alert(parseInt($(".target_value"+ch+i).val()));alert(parseInt($(".target_value"+d+i).val()));
                                                              }
                                                              //alert($(".target_value"+ch+i).val());alert(parseInt($(".target_value"+d+i).val()));
                                                            }
                                                        }
                                                       
                                                        if (kpi_value == '')
                                                        {
                                                            kpi_value = $(".target_value1"+i).val()+'-'+$(".target_value2"+i).val()+'-'+$(".target_value3"+i).val()+'-'+$(".target_value4"+i).val()+'-'+$(".target_value5"+i).val();
                                                        }
                                                        else
                                                        {                                    
                                                                kpi_value = kpi_value+';'+$(".target_value1"+i).val()+'-'+$(".target_value2"+i).val()+'-'+$(".target_value3"+i).val()+'-'+$(".target_value4"+i).val()+'-'+$(".target_value5"+i).val();                                   
                                                        }

                                                    }
                                                    //alert(er);
                                                }
                                                else if(selected_value == 'Percentage')
                                                {
                                                    if($("#target_need1").text() != 'undefined' && $(".target_value1"+i).val()=='')
                                                    {
                                                       $(".target_value1"+i).css('border','1px solid red');
                                                        $(".target_value1"+i).focus();
                                                        error = 'Target 1 value is compulsory.';break;
                                                    }
                                                    else if(($("#target_need1").text() != 'undefined' || $("#target_need1").text() === undefined) && $(".target_value1"+i).val()!='' && !$.isNumeric($(".target_value1"+i).val()))
                                                    {
                                                         error = 'Only numbers are allowed for Days/Percentage.';break;
                                                    }
                                                    else if($("#target_need2").text() != 'undefined' && $(".target_value2"+i).val()=='')
                                                    {
                                                        $(".target_value2"+i).css('border','1px solid red');
                                                        $(".target_value2"+i).focus();
                                                        error = 'Target 2 value is compulsory.';break; 
                                                    }
                                                    else if(($("#target_need2").text() != 'undefined' || $("#target_need2").text() === undefined) && $(".target_value2"+i).val()!='' && !$.isNumeric($(".target_value2"+i).val()))
                                                    {
                                                         error = 'Only numbers are allowed for Days/Percentage.';break;
                                                    }
                                                    else if($("#target_need3").text() != 'undefined' && $(".target_value3"+i).val()=='')
                                                    {
                                                         $(".target_value3"+i).css('border','1px solid red');
                                                        $(".target_value3"+i).focus();
                                                        error = 'Target 3 value is compulsory.';break;
                                                    }
                                                    else if(($("#target_need3").text() != 'undefined' || $("#target_need3").text() === undefined) && $(".target_value3"+i).val()!='' && !$.isNumeric($(".target_value3"+i).val()))
                                                    {
                                                         error = 'Only numbers are allowed for Days/Percentage.';break;
                                                    }
                                                    else if($("#target_need4").text() != 'undefined' && $(".target_value4"+i).val()=='')
                                                    {
                                                         $(".target_value4"+i).css('border','1px solid red');
                                                        $(".target_value4"+i).focus(); 
                                                        error = 'Target 4 value is compulsory.';break;
                                                    }
                                                    else if(($("#target_need4").text() != 'undefined' || $("#target_need4").text() === undefined) && $(".target_value4"+i).val()!='' && !$.isNumeric($(".target_value4"+i).val()))
                                                    {
                                                         error = 'Only numbers are allowed for Days/Percentage.';break;
                                                    }
                                                    else if($("#target_need5").text() != 'undefined' && $(".target_value5"+i).val()=='')
                                                    {
                                                         $(".target_value5"+i).css('border','1px solid red');
                                                        $(".target_value5"+i).focus(); 
                                                        error = 'Target 5 value is compulsory.';break;
                                                    }
                                                    else if(($("#target_need5").text() != 'undefined' || $("#target_need5").text() === undefined) && $(".target_value5"+i).val()!='' && !$.isNumeric($(".target_value5"+i).val()))
                                                    {
                                                         error = 'Only numbers are allowed for Days/Percentage.';break;
                                                    }
                                                    else
                                                    {
                                                        var er = '';
                                                        for(var ch = 5;ch>0;ch--)
                                                        {
                                                        //alert($(".target_value"+ch+i).val());alert($(".target_value"+d+i).val());
                                                            //var d= parseInt(ch)-parseInt(1);
                                                            for(var d = ch-1;d>0;d--)
                                                            {
                                                              if($(".target_value"+ch+i).val()==$(".target_value"+d+i).val())
                                                              {
                                                                 er = "Repetition is not allowed";
                                                              }
                                                            }
                                                        }
                                                        if (kpi_value == '')
                                                        {
                                                            kpi_value = $(".target_value1"+i).val()+'-'+$(".target_value2"+i).val()+'-'+$(".target_value3"+i).val()+'-'+$(".target_value4"+i).val()+'-'+$(".target_value5"+i).val();
                                                        }
                                                        else
                                                        {                                    
                                                                kpi_value = kpi_value+';'+$(".target_value1"+i).val()+'-'+$(".target_value2"+i).val()+'-'+$(".target_value3"+i).val()+'-'+$(".target_value4"+i).val()+'-'+$(".target_value5"+i).val();                                   
                                                        }

                                                    }
                                                }
                                                else if(selected_value == 'Date')
                                                {
                                                    if($("#target_need1").text() != 'undefined' && $(".target_value1"+i).val()=='')
                                                    {
                                                       $(".target_value1"+i).css('border','1px solid red');
                                                        $(".target_value1"+i).focus();
                                                        error = 'Target 1 value is compulsory.';break;
                                                    }                                               
                                                    else if($("#target_need2").text() != 'undefined' && $(".target_value2"+i).val()=='')
                                                    {
                                                        $(".target_value2"+i).css('border','1px solid red');
                                                        $(".target_value2"+i).focus();
                                                        error = 'Target 2 value is compulsory.';break; 
                                                    }                                                
                                                    else if($("#target_need3").text() != 'undefined' && $(".target_value3"+i).val()=='')
                                                    {
                                                        $(".target_value3"+i).css('border','1px solid red');
                                                        $(".target_value3"+i).focus();
                                                        error = 'Target 3 value is compulsory.';break;
                                                    }                                                
                                                    else if($("#target_need4").text() != 'undefined' && $(".target_value4"+i).val()=='')
                                                    {
                                                        $(".target_value4"+i).css('border','1px solid red');
                                                        $(".target_value4"+i).focus(); 
                                                        error = 'Target 4 value is compulsory.';break;
                                                    }                                                
                                                    else if($("#target_need5").text() != 'undefined' && $(".target_value5"+i).val()=='')
                                                    {
                                                         $(".target_value5"+i).css('border','1px solid red');
                                                        $(".target_value5"+i).focus(); 
                                                        error = 'Target 5 value is compulsory.';break;
                                                    }                                                
                                                    else
                                                    {
                                                        var er = '';var asc = 0;var desc = 0;
                                                        for(var ch = 5;ch>0;ch--)
                                                        {   
                                                            var date1 =  $(".target_value"+ch+i).val().split("/");
                                                            var date_pos = '';
                                                            if(date1[1] == "Jan")
                                                            {
                                                             date_pos = '01';
                                                            }
                                                            else if(date1[1] == "Feb")
                                                            {
                                                             date_pos = '02';
                                                            }
                                                            else if(date1[1] == "Mar")
                                                            {
                                                             date_pos = '03';
                                                            }
                                                            else if(date1[1] == "Apr")
                                                            {
                                                             date_pos = '04';
                                                            }
                                                            else if(date1[1] == "May")
                                                            {
                                                             date_pos = '05';
                                                            }
                                                            else if(date1[1] == "Jun")
                                                            {
                                                             date_pos = '06';
                                                            }
                                                            else if(date1[1] == "Jul")
                                                            {
                                                             date_pos = '07';
                                                            }
                                                            else if(date1[1] == "Aug")
                                                            {
                                                             date_pos = '08';
                                                            }
                                                            else if(date1[1] == "Sep")
                                                            {
                                                             date_pos = '09';
                                                            }
                                                            else if(date1[1] == "Oct")
                                                            {
                                                             date_pos = '10';
                                                            }
                                                            else if(date1[1] == "Nov")
                                                            {
                                                             date_pos = '11';
                                                            }
                                                            else if(date1[1] == "Dec")
                                                            {
                                                             date_pos = '12';
                                                            }
                                                            var date11 = date1[0]+'/'+date_pos+'/'+date1[2];
                                                            var d= parseInt(ch)-parseInt(1);
                                                            if(d != 0)
                                                            {
                                                               var date2 =  $(".target_value"+d+i).val().split("/");
                                                                var date_pos = '';
                                                            if(date2[1] == "Jan")
                                                            {
                                                             date_pos = '01';
                                                            }
                                                            else if(date2[1] == "Feb")
                                                            {
                                                             date_pos = '02';
                                                            }
                                                            else if(date2[1] == "Mar")
                                                            {
                                                             date_pos = '03';
                                                            }
                                                            else if(date2[1] == "Apr")
                                                            {
                                                             date_pos = '04';
                                                            }
                                                            else if(date2[1] == "May")
                                                            {
                                                             date_pos = '05';
                                                            }
                                                            else if(date2[1] == "Jun")
                                                            {
                                                             date_pos = '06';
                                                            }
                                                            else if(date2[1] == "Jul")
                                                            {
                                                             date_pos = '07';
                                                            }
                                                            else if(date2[1] == "Aug")
                                                            {
                                                             date_pos = '08';
                                                            }
                                                            else if(date2[1] == "Sep")
                                                            {
                                                             date_pos = '09';
                                                            }
                                                            else if(date2[1] == "Oct")
                                                            {
                                                             date_pos = '10';
                                                            }
                                                            else if(date2[1] == "Nov")
                                                            {
                                                             date_pos = '11';
                                                            }
                                                            else if(date2[1] == "Dec")
                                                            {
                                                             date_pos = '12';
                                                            }
                                                            var date12 = date2[0]+'/'+date_pos+'/'+date2[2];
                                                            if(process(date11) < process(date12))
                                                                { 
                                                                  asc = parseInt(asc)+parseInt(1);
                                                                }
                                                                if(process(date11) > process(date12))
                                                                { 
                                                                  desc = parseInt(desc)+parseInt(1);
                                                                }
                                                            }
                                                        }
                                                        //alert(asc);alert(desc);
                                                        if(desc!=4 && asc !=4)
                                                        { 
                                                          er = "Date should be either in ascending or descending order and repetition is not allowed.";
                                                          $(".target_value1"+i).css('border','1px solid red');
                                                              $(".target_value1"+i).focus();
                                                              $(".target_value2"+i).css('border','1px solid red');
                                                              $(".target_value3"+i).css('border','1px solid red');
                                                              $(".target_value4"+i).css('border','1px solid red');
                                                              $(".target_value5"+i).css('border','1px solid red');
                                                              break;
                                                        }
                                                        if (kpi_value == '')
                                                        {
                                                            kpi_value = $(".target_value1"+i).val()+'-'+$(".target_value2"+i).val()+'-'+$(".target_value3"+i).val()+'-'+$(".target_value4"+i).val()+'-'+$(".target_value5"+i).val();
                                                        }
                                                        else
                                                        {                                    
                                                            kpi_value = kpi_value+';'+$(".target_value1"+i).val()+'-'+$(".target_value2"+i).val()+'-'+$(".target_value3"+i).val()+'-'+$(".target_value4"+i).val()+'-'+$(".target_value5"+i).val();                                   
                                                        }
                                                            //alert(er); 
                                                    }
                                                }
                                                else if(selected_value == 'Text')
                                                {
                                                    
                                                    var chk = /[;-]/;
                                                    if($("#target_need1").text() != 'undefined' && $(".target_value1"+i).val()=='')
                                                    {
                                                        $(".target_value1"+i).css('border','1px solid red');
                                                        $(".target_value1"+i).focus();
                                                        error = 'Target 1 value is compulsory.';break;
                                                    }
                                                    else if(($(".target_value1"+i).val()!='' && chk.test($(".target_value1"+i).val())) || ($(".target_value1"+i).val()!='' && $(".target_value1"+i).val().length>2000))
                                                    {
                                                         error = 'For the free text field ;- special characters are not allowed and maximum characters allowed are 2000.';break;
                                                    }
                                                    else if($("#target_need2").text() != 'undefined' && $(".target_value2"+i).val()=='')
                                                    {
                                                         $(".target_value2"+i).css('border','1px solid red');
                                                        $(".target_value2"+i).focus();
                                                         error = 'Target 2 value is compulsory.';break;
                                                    }
                                                   else if(($(".target_value2"+i).val()!='' && chk.test($(".target_value2"+i).val())) || ($(".target_value2"+i).val()!='' && $(".target_value2"+i).val().length>2000))
                                                    {
                                                         error = 'For the free text field ;- special characters are not allowed and maximum characters allowed are 2000.';break;
                                                    }
                                                    else if($("#target_need3").text() != 'undefined' && $(".target_value3"+i).val()=='')
                                                    {
                                                        $(".target_value3"+i).css('border','1px solid red');
                                                        $(".target_value3"+i).focus();
                                                        error = 'Target 3 value is compulsory.';break;
                                                    }
                                                    else if(($(".target_value3"+i).val()!='' && chk.test($("#target_need3").text())) || ($(".target_value3"+i).val()!='' && $("#target_need3").text().length>2000))
                                                    {
                                                         error = 'For the free text field ;- special characters are not allowed and maximum characters allowed are 2000.';break;
                                                    }
                                                    else if($("#target_need4").text() != 'undefined' && $(".target_value4"+i).val()=='')
                                                    {
                                                         $(".target_value4"+i).css('border','1px solid red');
                                                        $(".target_value4"+i).focus(); 
                                                        error = 'Target 4 value is compulsory.';break;
                                                    }
                                                    else if(($(".target_value4"+i).val()!='' && chk.test($(".target_value4"+i).val())) || ($(".target_value4"+i).val()!='' && $(".target_value4"+i).val().length>2000))
                                                    {
                                                         error = 'For the free text field ;- special characters are not allowed and maximum characters allowed are 2000.';break;
                                                    }
                                                    else if($("#target_need5").text() != 'undefined' && $(".target_value5"+i).val()=='')
                                                    {
                                                         $(".target_value5"+i).css('border','1px solid red');
                                                        $(".target_value5"+i).focus(); 
                                                        error = 'Target 5 value is compulsory.';break;
                                                    }
                                                   else if(($(".target_value4"+i).val()!='' && chk.test($(".target_value5"+i).val())) || ($(".target_value4"+i).val()!='' && $(".target_value5"+i).val().length>2000))
                                                    {
                                                         error = 'For the free text field ;- special characters are not allowed and maximum characters allowed are 2000.';break;
                                                    }
                                                    else
                                                    {
                                                        error = '';var chk1 = /[;]/;
                                                       if (kpi_value == '')
                                                            {
                                                                kpi_value = $(".target_value1"+i).val()+'-'+$(".target_value2"+i).val()+'-'+$(".target_value3"+i).val()+'-'+$(".target_value4"+i).val()+'-'+$(".target_value5"+i).val();
                                                            }
                                                            else
                                                            {                                    
                                                                    kpi_value = kpi_value+';'+$(".target_value1"+i).val()+'-'+$(".target_value2"+i).val()+'-'+$(".target_value3"+i).val()+'-'+$(".target_value4"+i).val()+'-'+$(".target_value5"+i).val();                                   
                                                            }
                                                    }
                                                }
                                                else if(selected_value == 'Ratio')
                                                {
                                                    var ratio_chk = /^([0-9]{1,5}[:]{1}[0-9]{1,5})$/;
                                                    if($("#target_need1").text() != 'undefined' && $(".target_value1"+i).val()=='')
                                                    {
                                                      $(".target_value1"+i).css('border','1px solid red');
                                                        $(".target_value1"+i).focus();
                                                        error = 'Target 1 value is compulsory.';break;
                                                    }
                                                    else if(($("#target_need1").text() != 'undefined' || $("#target_need1").text() === undefined) && $(".target_value1"+i).val()!='' && !ratio_chk.test($(".target_value1"+i).val()))
                                                    {
                                                         error = 'Please enter valid value in ratio field.';break;
                                                    }
                                                    else if($("#target_need2").text() != 'undefined' && $(".target_value2"+i).val()=='')
                                                    {
                                                        $(".target_value2"+i).css('border','1px solid red');
                                                        $(".target_value2"+i).focus();
                                                         error = 'Target 2 value is compulsory.';break;
                                                    }
                                                    else if(($("#target_need2").text() != 'undefined' || $("#target_need2").text() === undefined) && $(".target_value2"+i).val()!='' && !ratio_chk.test($(".target_value2"+i).val()))
                                                    {
                                                        error = 'Please enter valid value in ratio field.';break;
                                                    }
                                                    else if($("#target_need3").text() != 'undefined' && $(".target_value3"+i).val()=='')
                                                    {
                                                        $(".target_value3"+i).css('border','1px solid red');
                                                        $(".target_value3"+i).focus();
                                                        error = 'Target 3 value is compulsory.';break;
                                                    }
                                                    else if(($("#target_need3").text() != 'undefined' || $("#target_need3").text() === undefined) && $(".target_value3"+i).val()!='' && !ratio_chk.test($(".target_value3"+i).val()))
                                                    {
                                                         error = 'Please enter valid value in ratio field.';break;
                                                    }
                                                    else if($("#target_need4").text() != 'undefined' && $(".target_value4"+i).val()=='')
                                                    {
                                                         $(".target_value4"+i).css('border','1px solid red');
                                                        $(".target_value4"+i).focus(); 
                                                        error = 'Target 4 value is compulsory.';break;
                                                    }
                                                    else if(($("#target_need4").text() != 'undefined' || $("#target_need4").text() === undefined) && $(".target_value4"+i).val()!='' && !ratio_chk.test($(".target_value4"+i).val()))
                                                    {
                                                         error = 'Please enter valid value in ratio field.';break;
                                                    }
                                                    else if($("#target_need5").text() != 'undefined' && $(".target_value5"+i).val()=='')
                                                    {
                                                         $(".target_value5"+i).css('border','1px solid red');
                                                        $(".target_value5"+i).focus(); 
                                                        error = 'Target 5 value is compulsory.';break;
                                                    }
                                                    else if(($("#target_need5").text() != 'undefined' || $("#target_need5").text() === undefined) && $(".target_value5"+i).val()!='' && !ratio_chk.test($(".target_value5"+i).val()))
                                                    {
                                                         error = 'Please enter valid value in ratio field.';break;
                                                    }
                                                    else
                                                    {
                                                        var er = '';
                                                        for(var ch = 5;ch>0;ch--)
                                                        {
                                                        //alert($(".target_value"+ch+i).val());alert($(".target_value"+d+i).val());
                                                            //var d= parseInt(ch)-parseInt(1);
                                                            for(var d = ch-1;d>0;d--)
                                                            {
                                                              if($(".target_value"+ch+i).val()==$(".target_value"+d+i).val())
                                                              {
                                                                 er = "Repetition is not allowed";
                                                              }
                                                            }
                                                        }
                                                        if (kpi_value == '')
                                                        {
                                                            kpi_value = $(".target_value1"+i).val()+'-'+$(".target_value2"+i).val()+'-'+$(".target_value3"+i).val()+'-'+$(".target_value4"+i).val()+'-'+$(".target_value5"+i).val();
                                                        }
                                                        else
                                                        {                                    
                                                                kpi_value = kpi_value+';'+$(".target_value1"+i).val()+'-'+$(".target_value2"+i).val()+'-'+$(".target_value3"+i).val()+'-'+$(".target_value4"+i).val()+'-'+$(".target_value5"+i).val();                                   
                                                        }

                                                    }
                                                }
                                                
                                            }
                                            else if(selected_value == 'Units' || selected_value == 'Weight' || selected_value == 'Value')
                                            {
                                                
                                                if ($("#unit_value-"+i).val()==''  || $("#unit_value-"+i).val() === undefined) 
                                                {
                                                    error = 'Please Fill unit value';break;
                                                }
                                                else if ($("#unit_value-"+i).val() == 0 || $("#unit_value-"+i).val().length>6)
                                                {
                                                    error = 'Minimum 1 and maximum 6 digits are allowed.';break;
                                                }                       
                                                else if (!$.isNumeric($("#unit_value-"+i).val())) 
                                                {
                                                    error = 'Only numbers are allowed for Units/Weight/Value field.';break;
                                                }
                                                else
                                                {
                                                    error = '';
                                                    if (kpi_value == '')
                                                    {
                                                        kpi_value = $("#unit_value-"+i).val();
                                                    }
                                                    else
                                                    {
                                                        kpi_value = kpi_value+';'+$("#unit_value-"+i).val();
                                                    }
                                                    
                                                }
                                            }
                                            // if (final_kpi_total != '' && final_kpi_total != 100) 
                                            // {
                                            //     error = 'The Total for KPI score should be 100';break;
                                            // }
                                            // else
                                            // {                                                    
                                            //    error = '';
                                            // }

                                        }                                   
                                        else
                                        { 
                                            //error = '';
                                            if ($("#mask_number-"+i).find(':selected').val() == 'Select' && ($("#kpilistyii_"+i).val() != '' || $("#unit_value-"+i).val() != '')) 
                                            {
                                                 error = 'Please Fill Correct KPI Details';break;
                                            }
                                            else  if ($("#mask_number-"+i).find(':selected').val() != 'Select' && ($("#kpilistyii_"+i).val() == '' || $("#unit_value-"+i).val() == '')) 
                                            {
                                                error = 'Please Fill Correct KPI Details';break;
                                            }
                                            else if(($("#mask_number-"+i).find(':selected').val() == 'Select' && ($("#kpilistyii_"+i).val() != '' || $("#unit_value-"+i).val() != '')) || ($("#kpilistyii_"+i).val() == '' && $("#mask_number-"+i).find(':selected').val() != 'Select'))
                                                {
                                                    error = 'Please Fill Correct KPI Details';break;
                                                }
                                                else if(er != '')
                                                {
                                                     error = er;break;
                                                }
                                                else
                                                {
                                                    error = '';er = '';
                                                    // if (final_kpi_total != 100) 
                                                    // {
                                                    //     error = 'The Total for kpi score should be 100';break;
                                                    // }
                                                    // else
                                                    // {                                                    
                                                    //    error = '';
                                                    // }
                                                }                                         
                                        } 
                                        if(er != '')
                                        {
                                             error = er;break;
                                        }
                                        else if(tot_kpi_wt !=0 && tot_kpi_wt1 != tot_kpi_wt)
                                        {
                                            error = "Please enter KPI Weightage for all KPI field.";break;
                                        }
                                        else
                                        {
                                            error = '';er = '';
                                        }
                                    
                                    }
                                                              
                                 
                            }
                            // 
                            
                             $(window).scroll(function()
                            {
                                $('#err').animate({top:$(window).scrollTop()+"px" },{queue: false, duration: 350});  
                            });  
                           // alert(final_kpi_wt);

                           if(error==''){


                            $("#cascade_modal").modal('show');
                            $(".continue_cascade").click(function(){

                               var emp_no ='';
                               $kpi_id_value ='';

                                 $(".cascade_to:checked").each(function (){
                
                                      if(emp_no==''){
                                          emp_no=$(this).attr("id");
                                           $kpi_id_value = Math.random().toString(16).slice(2);
                                        
                                      }else{
                                          emp_no = emp_no+';'+$(this).attr("id");
                                          $kpi_id_value = $kpi_id_value+';'+Math.random().toString(16).slice(2);
                                      } 
                                  });
                                  if(emp_no==''){

                                         $("#err").show();  
                                          $("#err").fadeOut(6000);
                                          $("#error_value").text("Please select the Employee");
                                          $("#err").addClass("alert-danger");
                                  }
                                  else{
                                            var acc_cnt = emp_no.split(";");

                                            var value='';



                                            for($j=0;$j<acc_cnt.length;$j++){

                                                var id =acc_cnt[$j]+'_'+'2';

                                               
                                                    if(value==''){
                                                        var isChecked = $("#"+id).is(":checked");
                                                       if (isChecked) {
                                                            value='2';
                                                        } else {
                                                            value='1';
                                                        }


                                                      }else{

                                                           var isChecked = $("#"+id).is(":checked");
                                                           if (isChecked) {
                                                               value=value+';'+'2';
                                                            } else {
                                                                value=value+';'+'1';
                                                            }
                                                          
                                                      }

                                            }

                                           

                                                var data = {
                                                    'KRA_category' : $("#target_value").find(':selected').val(),
                                                    'KRA_description' : $("#KRA_description").val(),
                                                    'target' : $("#Weightage").find(':selected').val(),
                                                    'target_unit' : kpi_unit,
                                                    'target_value1' : kpi_value,
                                                    'kpi_list' : kpi_list,
                                                    'KPI_target_value' : final_kpi_wt,
                                                    'KPI_id' : $("#kpi_edit_id").text(),
                                                    'acc_value':value,
                                                    'emp_no':emp_no,
                                                    'unique_kpi_id':$kpi_id_value,
                                                    'kpi_no':$kpi_no
                                                };
                                                console.log(data);

                                                 
                                                $.ajax({
                                                      type : 'post',
                                                      datatype : 'html',
                                                      data : data,
                                                      url : base_url+'/pms/index.php/Goalsheet/cascade',
                                                      success : function(data)

                                                      {  

                                                              $("#err").show();  
                                                              $("#err").fadeOut(6000);
                                                              $("#error_value").text("Successfully Cascaded");
                                                              $("#err").css('background-color','#3c763d');
                                                              $("#err").css('border','1px solid #3c763d');

                                                              setTimeout(function () { 

                                                                 window.location.href = base_url+$("#basepath").attr('value')+'/index.php?r=Goalsheet';

                                                              }, 6000);
                                                          

                                                      }
                                                 });

                                            
                                  }

                                 
                            });




                           }else{
                                  $("#err").css('display','block');  
                                  $("#err").fadeOut(6000);
                                  $("#error_value").text(error);
                                  $("#err").addClass("alert-danger");
                           }
                          
                        }
                        // 

                    }
          
      }
      
  });

</script>


<script type="text/javascript">
  
      $('.cancel_cascade').click(function(){

            $("#cascade_modal").modal('hide');
            location.reload();

      });
      $('.close_cass').click(function(){

            $("#cascade_modal").modal('hide');
            location.reload();

      });

</script>
<script>

        $(".cascaded_down").click(function(){
          var idd=$(this).attr('id');
          var id= idd.split('_');

          //$("#cascade_list").css("display","block");

          $('#cascade_list2_'+id[2]).modal('show');
      
           
        });

</script>
                            


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master_home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\zywiepms\resources\views/user/goalsheet/self.blade.php ENDPATH**/ ?>