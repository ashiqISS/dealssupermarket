<?php
$method = $this->action->id;
switch($method) {

        case "Profile":
                $pactive = "sidebaractive";
                break;
        case "UpdateProfile":
                $eactive = "sidebaractive";
                break;
        case "Changepassword":
                $cactive = "sidebaractive";
                break;
        case "Addressbook":
                $aactive = "sidebaractive";
                break;
        case "EditAddress":
                $aactive = "sidebaractive";
                break;
        case "Newaddress":
                $aactive = "sidebaractive";
                break;
        case "Mywishlists":
                $wactive = "sidebaractive";
                break;
        case "Myorders":
                $oactive = "sidebaractive";
                break;
        case "Newsletter":
                $nactive = "sidebaractive";
                break;
        case "index":
                $pactive = "sidebaractive";
                break;
        default:
}
?>


<div class="col-md-4 sidebar hidden-xs">

    <ul>
        <li class="<?php
        if(isset($pactive))
                echo $pactive;
        ?>"><?php
                echo CHtml::link('My Profile', array('Myaccount/Profile'));
                ?>
        </li>
        <li class="<?php
        if(isset($eactive))
                echo $eactive;
        ?>"><?php echo CHtml::link('Update Profile', array('Myaccount/UpdateProfile'));
        ?></li>
        <li class="<?php
        if(isset($cactive))
                echo $cactive;
        ?>"  ><?php echo CHtml::link('Change Password', array('Myaccount/Changepassword')); ?></li>
        <li  class="<?php
        if(isset($aactive))
                echo $aactive;
        ?>"><?php echo CHtml::link('Address Book', array('Myaccount/Addressbook')); ?></li>
        <li  class="<?php
        if(isset($wactive))
                echo $wactive;
        ?>"><?php echo CHtml::link('My Wishlist', array('Myaccount/Mywishlists')); ?></li>
        <li  class="<?php
        if(isset($oactive))
                echo $oactive;
        ?>"><?php echo CHtml::link('My Orders', array('Myaccount/Myorders')); ?></li>
        <li  class="<?php
        if(isset($nactive))
                echo $nactive;
        ?>"><?php echo CHtml::link('Newsletter', array('Myaccount/Newsletter')); ?></li>
        <li><?php echo CHtml::link('Logout', array('site/Logout')); ?></li>

    </ul>

</div>