<html>
        <head>
                <title>Product Enquiry (Celib Style) - <?php echo Products::model()->findByPk($model->product_id)->product_name; ?></title>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        </head>
        <style>

        </style>
        <body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
                <!-- Save for Web Slices (emailer.psd) -->
                <div style="margin:auto; width:776px; border:solid 2px #404241; margin-top:40px; margin-bottom:40px;">
                        <table id="Table_01" width="776" border="0" cellpadding="0" cellspacing="0" align="center" style=" font-family: 'Open Sans',arial, sans-serif;">
                                <tr>
                                        <td><a href="http://laksyah.com"><img src="<?php echo $this->siteURL(); ?>/images/emailer_01.jpg" width="776" height="102" alt=""></a></td>
                                </tr>
                                <tr><td>

                                        </td></tr>
                                <tr><td>
                                                <h4 style="padding: 5px 9px 6px 9px;">Dear Admin,</h4>
                                                <h5 style="padding: 5px 9px 6px 9px;">Your Received a  New Product Enquiry.</h5>
                                        </td></tr>
                                <tr>
                                        <td>
                                                <table cellspacing="0" cellpadding="0" border="0" width="776" style="    font-family: 'Open Sans',arial, sans-serif;font-size: 13px;">
                                                        <thead>
                                                                <tr>
                                                                        <th align="left" width="325" bgcolor="#EAEAEA" style="    font-family: 'Open Sans',arial, sans-serif;font-size:13px;padding:5px 9px 6px 9px;line-height:1em">Coustomor Details:</th>
                                                                        <th width="10"></th>
                                                                        <th align="left" width="325" bgcolor="#EAEAEA" style="font-family:'Open Sans',arial, sans-serif;font-size:13px;padding:5px 9px 6px 9px;line-height:1em">Product: <?php echo Products::model()->findByPk($model->product_id)->product_name; ?> - <?php echo Products::model()->findByPk($model->product_id)->product_code; ?></th>
                                                                </tr>
                                                        </thead>
                                                        <tbody>


                                                                <tr>
                                                                        <td valign="top" style="font-size:13px;padding:7px 9px 9px 9px;border-left:1px solid #eaeaea;border-bottom:1px solid #eaeaea;border-right:1px solid #eaeaea">

                                                                                Name


                                                                        </td>

                                                                        <td>
                                                                                &nbsp;
                                                                        </td>
                                                                        <td valign="top" style="font-size:13px;padding:7px 9px 9px 9px;border-left:1px solid #eaeaea;border-bottom:1px solid #eaeaea;border-right:1px solid #eaeaea">

                                                                                <?php echo $model->name; ?>


                                                                        </td>

                                                                </tr>
                                                                <tr>
                                                                        <td valign="top" style="font-size:13px;padding:7px 9px 9px 9px;border-left:1px solid #eaeaea;border-bottom:1px solid #eaeaea;border-right:1px solid #eaeaea">

                                                                                Email


                                                                        </td>
                                                                        <td>
                                                                                &nbsp;
                                                                        </td>
                                                                        <td valign="top" style="font-size:13px;padding:7px 9px 9px 9px;border-left:1px solid #eaeaea;border-bottom:1px solid #eaeaea;border-right:1px solid #eaeaea">

                                                                                <?php echo $model->email; ?>


                                                                        </td>

                                                                </tr>
                                                                <tr>
                                                                        <td valign="top" style="font-size:13px;padding:7px 9px 9px 9px;border-left:1px solid #eaeaea;border-bottom:1px solid #eaeaea;border-right:1px solid #eaeaea">

                                                                                Phone Number


                                                                        </td>
                                                                        <td>
                                                                                &nbsp;
                                                                        </td>
                                                                        <td valign="top" style="font-size:13px;padding:7px 9px 9px 9px;border-left:1px solid #eaeaea;border-bottom:1px solid #eaeaea;border-right:1px solid #eaeaea">

                                                                                <?php echo $model->phone; ?>


                                                                        </td>

                                                                </tr>
                                                                <tr>
                                                                        <td valign="top" style="font-size:13px;padding:7px 9px 9px 9px;border-left:1px solid #eaeaea;border-bottom:1px solid #eaeaea;border-right:1px solid #eaeaea">

                                                                                Country


                                                                        </td>
                                                                        <td>
                                                                                &nbsp;
                                                                        </td>
                                                                        <td valign="top" style="font-size:13px;padding:7px 9px 9px 9px;border-left:1px solid #eaeaea;border-bottom:1px solid #eaeaea;border-right:1px solid #eaeaea">
                                                                                <?php echo Countries::model()->findByPk($model->country)->country_name; ?>



                                                                        </td>

                                                                </tr>
                                                                <tr>
                                                                        <td valign="top" style="font-size:13px;padding:7px 9px 9px 9px;border-left:1px solid #eaeaea;border-bottom:1px solid #eaeaea;border-right:1px solid #eaeaea">

                                                                                Requirement


                                                                        </td>
                                                                        <td>
                                                                                &nbsp;
                                                                        </td>
                                                                        <td valign="top" style="font-size:13px;padding:7px 9px 9px 9px;border-left:1px solid #eaeaea;border-bottom:1px solid #eaeaea;border-right:1px solid #eaeaea">

                                                                                <?php echo $model->requirement; ?>


                                                                        </td>

                                                                </tr>


                                                        </tbody>
                                                </table>
                                                <br>


                                                <br>

                                                <br>
                                                <p style="font-size:12px;margin:0 0 10px 0"></p>
                                        </td>
                                </tr>


<!--                                <tr>

                                        <td>
                                                <h4 style="padding: 5px 9px 6px 9px;">Measurement Link,</h4>
                                                <h6 style="padding: 5px 9px 6px 9px;"><a href="<?= Yii::app()->request->baseUrl; ?>/index.php/Measurement"><?php echo Yii::app()->request->baseUrl; ?>/index.php/Measurement</a></h6>
                                        </td>

                                </tr>-->
                                <tr>
                                        <td>
                                                <img src="<?php echo $this->siteURL(); ?>/images/emailer_03.jpg" width="776" height="47" alt=""></td>
                                </tr>
                                <tr>
                                        <td style="background-color:#f7f4f1"><table width="100%" border="0" cellspacing="0" cellpadding="0" style="    font-family: 'Open Sans',arial, sans-serif;font-size: 13px;">
                                                        <tbody>
                                                                <tr>
                                                                        <td width="250" align="center" style="border-right:solid 1px #d7d7d7;"><img src="<?php echo $this->siteURL(); ?>/images/emailer-footer.jpg" width="116" height="162" alt=""/></td>
                                                                        <td align="center" style="border-right:solid 1px #d7d7d7;">
                                                                                <h4 style=" font-family:'Open Sans',arial, sans-serif; font-size:16px; color:#414042; margin-bottom:10px;">Contact Us </h4>
                                                                                <p style="font-family:'Open Sans',arial, sans-serif; font-size:13px;">Tel: +91 914 220 2222Â <br>
                                                                                        <a href="mailto:support@laksyah.com" style="border:none; color:#414042;">support@laksyah.com</a>Â <br>
                                                                                        Mon to Sat 9.30am to 6.30pm IST</p></td>
                                                                        <td width="250" align="center"><h4 style=" font-family:'Open Sans',arial, sans-serif; font-size:16px; color:#414042; margin-bottom:10px;">Visit Us</h4>
                                                                                <p style="font-family:'Open Sans',arial, sans-serif; font-size:13px;">The Design House,  C-3,<br>
                                                                                        GCDA House, Mavelipuram,<br>
                                                                                        Kakkanad, kochi </p></td>
                                                                </tr>
                                                        </tbody>
                                                </table></td>
                                </tr>
                        </table></div>
                <!-- End Save for Web Slices -->
        </body>
</html>
