<?php

class SiteController extends Controller {

        /**
         * Declares class-based actions.
         */
        public function actions() {
                return array(
// captcha action renders the CAPTCHA image displayed on the contact page
                    'captcha' => array(
                        'class' => 'CCaptchaAction',
                        'backColor' => 0xFFFFFF,
                    ),
                    // page action renders "static" pages stored under 'protected/views/site/pages'
// They can be accessed via: index.php?r=site/page&view=FileName
                    'page' => array(
                        'class' => 'CViewAction',
                    ),
                );
        }

        /**
         * This is the default 'index' action that is invoked
         * when an action is not explicitly requested by users.
         */
        public function actionIndex() {

                $slider = Slider::model()->findAllByAttributes(array('status' => 1));

                $pop = Products::model()->findAll(array('condition' => 'popular_product=1 and status=1'), array('condition' => 'limit 5'));
                $fet = Products::model()->findAll(array('condition' => 'featured_product=1 and status=1'), array('condition' => 'limit 5'));
                $pcat1 = Products::model()->findAll(array('condition' => 'status=1 and FIND_IN_SET(2, category_id)'), array('condition' => 'limit 5'));
                $pcat2 = Products::model()->findAll(array('condition' => 'status=1 and FIND_IN_SET(3, category_id)'), array('condition' => 'limit 5'));
                $cat1 = ProductCategory::model()->findByPk(2);
                $cat2 = ProductCategory::model()->findByPk(3);
                $model = Pages::model()->findAll(array('condition' => 'menu_id=15 and status=1'));
                $pdtbanner = Products::model()->findAll(array('condition' => 'special_product_image!="" and status=1'), array('condition' => 'limit 2'));
                $this->render('index', array('slider' => $slider, 'model' => $model, 'pdtbanner' => $pdtbanner, 'pop' => $pop, 'fet' => $fet, 'pcat1' => $pcat1, 'pcat2' => $pcat2, 'cat1' => $cat1, 'cat2' => $cat2));
        }

        public function actionSetLocation() {

                if (isset($_GET['city'])) {
                        $city = $_GET['city'];
                        Yii::app()->session['location'] = strtoupper($city);
                        echo Yii::app()->session['location'];
                }
        }

        public function actionError() {
                $error = Yii::app()->errorHandler->error;
                if ($error)
                        $this->render('error', array('error' => $error));
                else
                        throw new CHttpException(404, 'Page not found.');
        }

        public function actionMywishlists() {

                if (!isset(Yii::app()->session['user'])) {
                        Yii::app()->session['wishlist_user'] = 1;
                        $this->redirect(Yii::app()->request->baseUrl . '/index.php/site/login');
                }
        }

        public function actionForgotpassword() {

                if (isset($_POST['Submit'])) {

                        $email = $_POST['email'];
                        $user = UserDetails::model()->findByAttributes(array('email' => $email));
                        if ($user != '') {

                                $details = UserDetails::model()->findByPk($user->id);
                                $forgot = new ForgotPassword;
                                $forgot->user_id = $details->id;
                                $forgot->code = rand(10000, 1000000);
                                $token = base64_encode($forgot->user_id . ':' . $forgot->code);
                                $forgot->status = 1;
                                $forgot->DOC = date('Y-m-d');
                                if ($forgot->save(FALSE)) {
                                        $this->ForSuccessMail($forgot, $token, $details);
                                        $this->render('mail/mail');
                                } else {
                                        $this->render('mail/sorry');
                                }exit;
                        } else {

                                $this->render('mail/sorry');
                                exit;
                        }
                }
                $this->render('forgot');
        }

        public function ForSuccessMail($forgot, $token, $details) {

                $user = $details->email;
                //$user = 'shahana@intersmart.in';
                $user_subject = 'Please Reset Your Password';
                $user_message = 'Hi..! You can use the following link within the next day to reset your password:'
                        . '<a href="http://localhost/deal_supermarket/site/Changepassword/token/' . $token . '">Click Here to Reset Password</a><br><br>'
                        . 'Thanks';

                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                // More headers
                $headers .= 'From: <no-reply@deal_supermarket.com/>' . "\r\n";
                // Dhanya  mail($user, $user_subject, $user_message, $headers);
        }

        public function actionChangepassword($token) {

                $var = base64_decode($token);
                $arr = explode(':', $var);

                $id = $arr[0];
                $token2 = $arr[1];
                $token_test = ForgotPassword::model()->findByAttributes(array('code' => $token2, 'user_id' => $id));
                $pass1 = UserDetails::model()->findByPk($id);
                if ($token_test != '') {
                        Yii::app()->session['frgt_usrid'] = $id;
                        $token_test->delete();
                        $this->render('changepassword');
                } else {

                        echo'...Invalid user..';
                }
        }

        /**
         * Displays the login page
         */
        public function actionRegister() {
                if (isset(Yii::app()->session['user'])) {
                        $this->redirect($this->createUrl('index'));
                } else {
                        $model = new UserDetails('create');
                        if (isset($_POST['UserDetails'])) {
                                $model->attributes = $_POST['UserDetails'];

                                $newDate = date("Y-m-d", strtotime($date1));
                                $model->dob = $newDate;
                                $model->gender = $_POST['UserDetails']['gender'];
                                $model->phone_no_1 = $_POST['UserDetails']['phone_no_1'];
                                $model->phone_no_2 = $_POST['UserDetails']['phone_no_2'];
                                $model->country = $_POST['UserDetails']['country'];
                                $model->password = md5($_POST['UserDetails']['password']);
                                $model->confirm = md5($_POST['UserDetails']['password']);
                                //$model->email_verification = 0;
                                if ($model->validate()) {
                                        $model->status = 1;
                                        $model->CB = 1;
                                        $model->UB = 1;
                                        $model->DOC = date('Y-m-d');
                                        // $model->verify_code = rand(1000, 9999);
                                        if ($model->password == $model->confirm) {
                                                if ($model->save()) {
                                                        Yii::app()->session['user'] = $model;
                                                        Yii::app()->user->setFlash('register_success', "You have successfully registered with Deal Supermarket");

                                                        $this->redirect($this->createUrl('/myaccount/'));
                                                        //$this->siteNavigator($model);
                                                }
                                        } else {
                                                $model->addError('confirm', 'password mismatch');
                                        }
                                }
                        }

                        $this->render('register', array('model' => $model));
                }
        }

        /**
         * Displays the login page
         */
        public function actionLogin() {

                if (isset(Yii::app()->session['user'])) {

                        $this->redirect(Yii::app()->request->baseUrl);
                } else {

                        $model = new UserDetails();

                        if (isset($_REQUEST['UserDetails'])) {

                                $modell = UserDetails::model()->findByAttributes(array('email' => $_REQUEST['UserDetails']['email'], 'password' => md5($_REQUEST['UserDetails']['password'])));
                                if (!empty($modell)) {

                                        if ($modell->status == 0) {
                                                Yii::app()->user->setFlash('login_list', "Access Denied.Contact Site Administrator");
                                        } else if ($modell->status == 1) {

                                                Yii::app()->session['user'] = $modell;
                                                /* $newDate = date("Y-m-d H:i:s");
                                                  $modell->last_login = $newDate;
                                                  $modell->save(); */
                                                $this->redirect(Yii::app()->request->baseUrl . '/index.php/Myaccount');
                                        }
                                } else {

                                        Yii::app()->user->setFlash('login_list', "Username or Password Invalid");
                                }
                        }
                        $this->render('login', array('model' => $model));
                }
        }

        public function siteNavigator($model) {

                if ($model->email_verification == 1) {


                        Yii::app()->session['user'] = $model;

                        if (Yii::app()->session['gift_card_option'] != "") {
                                $this->redirect($this->createUrl('/giftcard/index', array('card_id' => Yii::app()->session['gift_card_option'])));
                        } else if (isset(Yii::app()->session['temp_user'])) {
                                Cart::model()->updateAll(array("user_id" => $model->id, 'session_id' => ''), 'session_id=' . Yii::app()->session['temp_user']);
                                UserWishlist::model()->updateAll(array("user_id" => $model->id, 'session_id' => ''), 'session_id=' . Yii::app()->session['temp_user']);
                                ProductViewed::model()->updateAll(array("user_id" => $model->id, 'session_id' => ''), 'session_id=' . Yii::app()->session['temp_user']);

                                unset(Yii::app()->session['temp_user']);
                        } else if (Yii::app()->session['measure_details'] != '') {
                                $this->redirect($this->createUrl('/Myaccount/SizeChartType?m=' . Yii::app()->session['measure_details']));
                        } else if (Yii::app()->session['make_paid'] != '') {
                                $this->redirect($this->createUrl('/Myaccount/Makepayment?p=' . Yii::app()->session['make_paid']));
                        } else if (Yii::app()->session['login_flag'] != '' && Yii::app()->session['login_flag'] == 1) {
                                unset(Yii::app()->session['login_flag']);

                                $this->redirect($this->createUrl('/Cart/Proceed'));
                        } else {

                                unset(Yii::app()->session['wishlist_user']);

                                $this->redirect(Yii::app()->request->baseUrl . '/index.php/Myaccount');
                        }
                        if (isset(Yii::app()->session['wishlist_user'])) {

                                Yii::app()->user->setFlash('wishlist_user', "Dear, You must login to see Wishlist Items");
                        }
                        $this->redirect(Yii::app()->request->baseUrl . '/index.php/Myaccount');
                }
        }

        /* mail to user and admin */

        public function RegisterMail($model) {
                $user = $model->email;

                $user_subject = 'Welcome to Deal Supermarket!';
                $user_message = $this->renderPartial('_register_user_mail', array('model' => $model), true);
                $admin = AdminUser::model()->findByPk(4)->email;

                $admin_subject = $model->first_name . ' registered with deal supermarker';
                $admin_message = $this->renderPartial('_register_admin_mail', array('model' => $model), true);
// Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
                $headers .= 'From: <no-reply@intersmarthosting.in>' . "\r\n";
//$headers .= 'Cc: reply@foldingbooks.com' . "\r\n";


                mail($user, $user_subject, $user_message, $headers);
                mail($admin, $admin_subject, $admin_message, $headers);
        }

        /* mail to user and admin */

        public function VerificationMail($model) {
                $user = $model->email;

                $user_subject = 'Deal Supermarket Account - ' . $model->verify_code . ' is your verification code for secure access!';
                $user_message = $this->renderPartial('_verify_user_mail', array('model' => $model), true);


// Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
                $headers .= 'From: <no-reply@intersmarthosting.in>' . "\r\n";
//$headers .= 'Cc: reply@foldingbooks.com' . "\r\n";


                mail($user, $user_subject, $user_message, $headers);
        }

        /**
         * Logs out the current user and redirect to homepage.
         */
        public function actionLogout() {
// Cart::model()->deleteAllByAttributes(array('user_id' => Yii::app()->session['user']['id']));
                unset(Yii::app()->session['user']);
                unset($_SESSION);

                Yii::app()->user->logout();

                $this->redirect(Yii::app()->homeUrl);
        }

        public function actioncontactUs() {
                $banner = Banner::model()->find(array('condition' => 'page_id=5'));
                $address = Pages::model()->find(array('condition' => 'id=8 and status=1'));
                $telephone = Pages::model()->find(array('condition' => 'id=9 and status=1'));
                $fax = Pages::model()->find(array('condition' => 'id=10 and status=1'));
                $emails = Pages::model()->find(array('condition' => 'id=11 and status=1'));
                $model = new ContactUs;
                if (isset($_POST['ContactUs'])) {

                        $model->attributes = $_POST['ContactUs'];
                        $model->name = $_POST['ContactUs']['name'];
                        $model->email = $_POST['ContactUs']['email'];
                        $model->phone = $_POST['ContactUs']['phone'];
                        $model->comment = $_POST['ContactUs']['comment'];
                        $model->date = date("Y-m-d");

                        if ($model->validate()) {
                                if ($model->save()) {
                                        $this->contactmail($model);
                                        Yii::app()->user->setFlash('success', " Your email sent successfully");
                                } else {
                                        Yii::app()->user->setFlash('error', "Error Occured");
                                }

                                $this->redirect(array('site/contactUs'));
                        }
                }
                $this->render('contact_us', array('model' => $model, 'banner' => $banner, 'address' => $address, 'telephone' => $telephone, 'fax' => $fax, 'emails' => $emails));
        }

        public function contactmail($model) {
//                $admin = 'shahana@intersmart.in';
                $admin = AdminUser::model()->findByPk(4)->email;

                $admin_subject = 'Deal Supermarket:New Enquiry Recieved';
                $admin_message = $this->renderPartial('mail/_admin_contact_email', array('model' => $model), true);

                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                // More headers
                $headers .= 'From: <no-reply@intersmarthosting.in>' . "\r\n";

                //  mail($admin, $admin_subject, $admin_message, $headers);
        }

        public function actionNewsLetter() {
                $model = new Newsletter;
                if (isset($_POST['submit'])) {
                        $model->attributes = $_POST['submit'];
                        $model->first_name = $_POST['Newsletter']['first_name'];
                        $model->email = $_POST['Newsletter']['email'];
                        $model->status = 1;
                        $model->date = date('Y-m-d');
                        if ($model->validate()) {
                                if ($model->save($model)) {
                                        $this->SuccessMail($model);
                                        Yii::app()->user->setFlash('newsletter', " Your email sent successfully");
                                } else {
                                        Yii::app()->user->setFlash('error_newsletter', "Error Occured");
                                }
                        } else {
                                if ($model->first_name != '' || $model->email != '') {
                                        Yii::app()->user->setFlash('newslettererror', "Please Fill the Feilds in correct format");
                                } else {
                                        Yii::app()->user->setFlash('newslettererror1', "Please Fill the  Feilds");
                                }
                        }
                        $this->redirect('Index');
                }
        }

        public function actionCurrencyChange($id) {
                $data = Currency::model()->findByPk($id);
                Yii::app()->session['currency'] = $data;
                $this->redirect(Yii::app()->request->urlReferrer);
        }

        public function actionGiftcard() {
                $model = GiftCard::model()->findAll();
                $this->render('giftcard', array('model' => $model));
        }

        public function SuccessMail($model) {

                $user = $model->email;
                //$user = 'shahana@intersmart.in';
                $user_subject = 'Your Email has been successfully added in our News Letter!';
                $user_message = $this->renderPartial('mail/_user_newsletter_email', array('model' => $model), true);

                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                // More headers
                $headers .= 'From: <no-reply@intersmarthosting.in>' . "\r\n";

                mail($user, $user_subject, $user_message, $headers);
        }

        public function actionAboutUs() {
                $model = Pages::model()->findAll(array('condition' => 'menu_id=1 and status=1'));
                $banner = Banner::model()->find(array('condition' => 'page_id=1'));
                $this->render('about_us', array('model' => $model, 'banner' => $banner));
        }

        public function actionMarketFresh($details = '') {
                $model = Pages::model()->findAll(array('condition' => 'menu_id=2 and status=1'));
                if ($details == '') {
                        $content = Pages::model()->find(array('condition' => 'menu_id=2 and status=1'));
                } else {
                        $content = Pages::model()->find(array('condition' => 'canonical_name="' . $details . '" and status=1'));
                }
                $banner = Banner::model()->find(array('condition' => 'page_id=2'));
                $this->render('market_fresh', array('model' => $model, 'banner' => $banner, 'content' => $content));
        }

        public function actionGallery($category = '') {
                $model = MasterGallery::model()->findAll(array('condition' => 'status=1'));
                if ($category == '') {
                        $content = Gallery::model()->find(array('condition' => 'status=1'));
                } else {
                        $content = Gallery::model()->find(array('condition' => 'canonical_name="' . $content . '" and status=1'));
                }
                $banner = Banner::model()->find(array('condition' => 'page_id=2'));
                $this->render('gallery', array('model' => $model, 'banner' => $banner, 'content' => $content));
        }

        public function siteURL() {
                $protocol = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
                $domainName = $_SERVER['HTTP_HOST'];
                return $protocol . $domainName;
        }

}
