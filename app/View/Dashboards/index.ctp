<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$menuArray = array();
$title     =array();
$slug      = $this->Session->read('slug');

//My Profile

$menuArray[] = '<li>
                  <a href="'.$this->Html->url(array('controller'=>'users','action'=>'myProfile')).'">
                    <div>
                      <p>'.$this->Html->image('../images/dashborad/profile.png').'</p>
                	  My Profile
                    </div>
                  </a>

                </li>';
$menuArray[] = '<li>
                  <a href="'.$this->Html->url(array('controller'=>'roles','action'=>'index')).'">
                  <span class="color4">4</span>
                    <div>
                      <p>'.$this->Html->image('../images/dashborad/user_group.png').'</p>
                	  View Roles
                    </div>
                  </a>

                </li>';

$menuArray[] = '<li>
                  <a href="'.$this->Html->url(array('controller'=>'users','action'=>'index')).'">
                    <div>
                      <p>'.$this->Html->image('../images/dashborad/user.png').'</p>
                	  View Users
                    </div>
                  </a>

                </li>';



?>

<!--RIGHT-1 PART START-->
<div class="content_main_part">
    <!--Iicon part start-->
    <div class="icon_dashboard">
        <ul>
            <?php
                if($menuArray)
                {

                    foreach($menuArray as $key=>$value ){
                        echo $value;

                    }
                }
            ?>

        </ul>
    </div>
    <!--icon part end-->
    <!--Non Conformances START-->
    <div class="non_conformances">
        <h1>Non Conformances</h1>
        <div class="non_chart"><img src="images/non_chart.jpg" width="620" height="240" alt="" style="margin:14px 23px;" /></div>
    </div>
    <!--Non Conformances END-->
    <!--metting audit START-->
    <div class="meeting_audit">
        <h1>Meetings and Audits</h1>
        <div class="metting_details">xcvxcv</div>
    </div>
    <!--metting audit END-->
</div>
<!--RIGHT-1 PART END-->

<!--RIGHT-2 PART START-->
<!--update chart start-->
<div class="update_chart">
    <div class="update_part">

        <div class="demo" >
            <input class="knob" data-width="100" data-min="-100" data-displayPrevious=true value="44">
            <input class="knob" data-width="100" data-min="-100" data-displayPrevious=true data-fgColor="#66EE66" value="35">
            <input class="knob" data-width="100" data-min="-100" data-displayPrevious=true data-fgColor="red" value="44">
            <input class="knob" data-width="100" data-min="-100" data-displayPrevious=true data-fgColor="black" value="35">
        </div>

        <div style="clear:both"></div>
    </div>
    <div class="things_need">
        <h2>Things you need To Do</h2>
        <ul>
            <li>
                <h1>724</h1>
                <h6>Apply for Corrective Action</h6>
                <input type="button" value="Go" name="GO">
            </li>

            <li>
                <h1>99</h1>
                <h6>Check Non-Conformance</h6>
                <span><input type="button" value="Go" name="GO"></span>
            </li>

            <li>
                <h1>78</h1>
                <h6>Apply for Document Change Request</h6>
                <span><input type="button" value="Go" name="GO"></span>
            </li>

            <li>
                <h1>214</h1>
                <h6>Apply for Preventive Action Reques</h6>
                <span><input type="button" value="Go" name="GO"></span>
            </li>

            <li>
                <h1>12</h1>
                <h6>Check Non-Conformance</h6>
                <span><input type="button" value="Go" name="GO"></span>
            </li>

            <li>
                <h1>23</h1>
                <h6>Check Non-Conformance</h6>
                <span><input type="button" value="Go" name="GO"></span>
            </li>

            <li>
                <h1>236</h1>
                <h6>Apply for Document Change Request</h6>
                <span><input type="button" value="Go" name="GO"></span>
            </li>

            <li style="border-bottom:0px;"><!--BORDER BOTTOM 0PX FOR BOTTOM LI-->
                <h1>44</h1>
                <h6>Apply for Corrective Action</h6>
                <span><input type="button" value="Go" name="GO"></span>
            </li>

        </ul>
    </div>
</div>
<!--update chart end-->
<!--RIGHT-2 PART END-->
