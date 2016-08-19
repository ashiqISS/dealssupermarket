
<div class="container">
        <div class="row">
                <div class="col-md-12">
                        <div class="breadcrumbs">

                                <a href="<?php echo Yii::app()->baseUrl; ?>">HOME</a>
                                <span>/</span>Forgot password
                        </div>
                </div>
        </div>

</div>

<section class="login">
        <div class="container">
                <div class="row">
                        <div class="col-md-12">
                                <h1><span class="newgen">Forgot Password </span></h1>

                                <div class="new_form">

                                        <form action="<?= Yii::app()->baseUrl; ?>/index.php/site/Forgotpassword" method="post" id="form1" name="form1">

                                                <div class="form-group">
                                                        <input type="email" class="form-new" id="email" name="email" placeholder="Enter your email" autocomplete="off" required="required">
                                                </div>
                                                <input type="Submit" name="Submit" class="btn new-btn btn-default" value="Submit">
                                        </form>
                                </div>
                        </div>
                </div>
        </div>
</section>



