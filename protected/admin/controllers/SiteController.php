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
                // renders the view file 'protected/views/site/index.php'
                // using the default layout 'protected/views/layouts/main.php'

                $this->layout = "login";
                $model = new AdminUser('signin');
                if(isset($_POST['AdminUser'])) {
                        $model->attributes = $_POST['AdminUser'];
                        if($model->validate()) {
                                $admin = AdminUser::model()->findByAttributes(array('username' => $model->username, 'password' => $model->password));
                                if($admin == '') {
                                        $model->addError(password, 'invalid username or password');
                                } else {



                                        $id = $admin->admin_post_id;
                                        $post = AdminPost::model()->findByPk($id);
                                        Yii::app()->session['post'] = $post;

                                        Yii::app()->session['admin'] = $admin;
                                        $_SESSION['KCFINDER'] = array(
                                            'disabled' => false,
                                            'uploadURL' => "../admin/filemanager/" . Yii::app()->session['admin']['id'],
                                            'uploadDir' => ""
                                        );
                                        $this->redirect(array('site/home'));
                                }
                        }
                }



                $this->render('login', array(
                    'model' => $model,
                ));
        }

        public function actionHome() {
                $model = Order::model()->findAll();
                $count = count($model);
                $out_stock = Products::model()->findByAttributes(array('quantity' => 0));
                $count_stock = count($out_stock);
                if(!isset(Yii::app()->session['admin'])) {
                        $this->redirect('logOut');
                }
                $this->render('index', array('count' => $count, 'count_stock' => $count_stock));
        }

        public function actionOrderNotification() {
                $model = Order::model()->findAll();
                $this->render('orderNotification', array('model' => $model));
        }

        /**
         * This is the action to handle external exceptions.
         */
        public function actionError() {
                if($error = Yii::app()->errorHandler->error) {
                        if(Yii::app()->request->isAjaxRequest)
                                echo $error['message'];
                        else
                                $this->render('error', $error);
                }
        }

        public function actionCategoryTagAdd() {

                if(Yii::app()->request->isAjaxRequest) {

                        if(isset($_REQUEST['tag'])) {
                                $model = new MasterCategoryTags;
                                $model->category_tag = $_REQUEST['tag'];
                                $model->CB = Yii::app()->session['admin']['id'];
                                $model->UB = Yii::app()->session['admin']['id'];
                                $model->DOC = date('Y-m-d');
                                $model->save(false);
                        }
                }
        }

        public function actionCategoryTag() {

                if(Yii::app()->request->isAjaxRequest) {

                        $criteria = new CDbCriteria();
                        $criteria->addSearchCondition('category_tag', $_REQUEST['tag'], 'AND');

//$criteria->compare('category_id',$_REQUEST['category'],true,'AND');
                        if($_REQUEST['taged'] != '') {

                                $arrs = explode(',', $_REQUEST['taged']);
                                $criteria->addNotInCondition('category_tag', $arrs, 'AND');
                        }
                        $tags = MasterCategoryTags::model()->findAll($criteria);
                        foreach($tags as $tag) {
                                if($_REQUEST['type'] == 'category') {

                                }
                                echo '<div class="' . $_REQUEST['type'] . '_tag-sub">' . $tag->category_tag . '</div>';
                        }
                }
        }

        public function actionProductTagAdd() {

                if(Yii::app()->request->isAjaxRequest) {

                        if(isset($_REQUEST['tag'])) {
                                $model = new MasterCategoryTags;
                                $model->category_tag = $_REQUEST['tag'];
                                $model->CB = Yii::app()->session['admin']['id'];
                                $model->UB = Yii::app()->session['admin']['id'];
                                $model->DOC = date('Y-m-d');
                                $model->save(false);
                        }
                }
        }

        public function actionProductTag() {

                if(Yii::app()->request->isAjaxRequest) {

                        $criteria = new CDbCriteria();
                        $criteria->addSearchCondition('category_tag', $_REQUEST['tag'], 'AND');

//$criteria->compare('category_id',$_REQUEST['category'],true,'AND');
                        if($_REQUEST['taged'] != '') {

                                $arrs = explode(',', $_REQUEST['taged']);
                                $criteria->addNotInCondition('category_tag', $arrs, 'AND');
                        }
                        $tags = MasterCategoryTags::model()->findAll($criteria);
                        foreach($tags as $tag) {
                                if($_REQUEST['type'] == 'category') {

                                }
                                echo '<div class="' . $_REQUEST['type'] . '_tag-sub">' . $tag->category_tag . '</div>';
                        }
                }
        }

        public function actionCategoryCat() {

                if(Yii::app()->request->isAjaxRequest) {

                        $criteria = new CDbCriteria();
                        $criteria->addSearchCondition('category_name', $_REQUEST['tag'], 'AND');

//$criteria->compare('category_id',$_REQUEST['category'],true,'AND');
                        if($_REQUEST['taged'] != '') {

                                $arrs = explode(',', $_REQUEST['taged']);
                                $criteria->addNotInCondition('category_name', $arrs, 'AND');
                        }
                        $tags = ProductCategory::model()->findAll($criteria);
                        $options = array();
                        $_SESSION['category'][0] = '';
                        foreach($tags as $tag) {
                                unset($_SESSION['category']);
                                $cat_parent = $this->findParent(ProductCategory::model()->findByPk($tag->id));
//echo $cat_parent;

                                if($_REQUEST['type'] == 'category') {

                                }
                                echo '<div class="' . $_REQUEST['type'] . '_tag-sub" id="' . $tag->id . '">' . $cat_parent . '</div>';
                        }
                }
        }

        public function findParent($data) {
//                $master = ProductCategory::model()->findByPk($parent);
//                if ($master != '') {
//                        if ($master->id == $master->parent) {
//                                return $master->category_name;
//                        }
//                        else {
//                                return $this->findParent($master->parent);
//                        }
//                }
//                else {
//                        return $parent;
//                }

                $index = count($_SESSION['category']);
                if($data->id == $data->parent) {
                        $_SESSION['category'][$index + 1] = $data->category_name;
                } else {
                        $results = ProductCategory::model()->findByPk($data->parent);
                        $_SESSION['category'][$index + 1] = $data->category_name;
                        return $this->findParent($results);
                }
                $return = '';
                $category_arr = array_reverse($_SESSION['category']);
                foreach($category_arr as $cat) {
                        $return .=$cat . '>';
                }
                return rtrim($return, '>');
        }

        /**
         * Logs out the current user and redirect to homepage.
         */
        public function actionLogout() {
                Yii::app()->user->logout();
                unset(Yii::app()->session['admin']);
                unset(Yii::app()->session['post']);
                $_SESSION['KCFINDER'] = '';
                unset($_SESSION['KCFINDER']);
                $this->redirect(Yii::app()->homeUrl);
        }

}
