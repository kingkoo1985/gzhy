<?php
$this->title = 'Admin 系统信息';
?>
<div class="row">
    <div class="col-xs-12 col-sm-12">
        <h4 class="blue">
            <span class="middle"><i class="ace-icon glyphicon glyphicon-user light-blue bigger-110"></i></span>
             系统信息
        </h4>
        <div class="hr hr16 dotted"></div>
        <div class="profile-user-info">
            <div class="profile-info-row">
                <div class="profile-info-name"> Yii版本 </div>
                <div class="profile-info-value">
                    <span><?=$yii?></span>
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> 上传文件 </div>
                <div class="profile-info-value">
                    <span><?=$upload?></span>
                </div>
            </div>
        </div>
        <div class="hr hr16 dotted"></div>
    </div>
</div>