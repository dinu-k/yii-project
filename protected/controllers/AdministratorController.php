<?php

class AdministratorController extends Controller
{
	
	public $layout='//layouts/admin';
	
        /**
         * @return array action filters
         */
        public function filters()
        {
                return array(
                        'accessControl', // perform access control for CRUD operations
                );
        }

        /**
         * Specifies the access control rules.
         * This method is used by the 'accessControl' filter.
         * @return array access control rules
         */
        public function accessRules()
        {
                return array(
			      array('allow',
			        'users' => array('@'),
			      ),
			      array('deny',
			        'users' => array('?'),
			      ),
			    );
        }
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$posts = Posts::model()->count();
		 $users = Users::model()->count();

		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index',array(
            'users'=>$users,
            'posts'=>$posts,
        ));
	}
	/**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $model=$this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Users']))
        {
            $model->attributes=$_POST['Users'];
            $model->password = md5($model['password']);

            if($model->save())
                $this->redirect(Yii::app()->homeUrl.'/administrator/index');
        }

        $this->render('update',array(
            'model'=>$model,
        ));
    }
    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Users the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model=Users::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

    /**
     * Users function
     *
     * @return void
     * @author 
     **/
    public function actionUsers()
    {
    	 $data = Users::model()->findAll();
    	  $this->render('users',array(
            'data'=>$data,
        ));

    }
	/**
     *Delete user function
     *
     * @return void
     * @author 
     **/
    public function actionDelete($id)
    {
    	$model=$this->loadModel($id);
    	//$model->delete();
    	if ($model->delete()) {
    		$this->redirect(Yii::app()->homeUrl.'/administrator/users');
    	}


    }
    /**
     * Posts function
     *
     * @return void
     * @author 
     **/
    public function actionPosts()
    {
    	 $data = Posts::model()->findAll();
    	  $this->render('posts',array(
            'data'=>$data,
        ));

    }
    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Users the loaded model
     * @throws CHttpException
     */
    public function loadPostsModel($id)
    {
        $model = Posts::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }
    /**
     *Delete user function
     *
     * @return void
     * @author 
     **/
    public function actionCreatepost()
    {
    	$model=new Posts;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='posts-createpost-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
		//print_r($_POST);
		// collect user input data
		if(isset($_POST['Posts']))
		{
			$model->attributes=$_POST['Posts'];
			
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->save())
				 Yii::app()->user->setFlash('success', "Data saved!");
				 $this->redirect(Yii::app()->homeUrl.'/administrator/posts');
            } else {

                Yii::app()->user->setFlash('error', "Error,Cannot Save Data!");
            }
		// display the login form
		$this->render('createpost',array('model'=>$model));


    }
    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdatepost($id)
    {
        $model=$this->loadPostsModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Posts']))
        {
            $model->attributes=$_POST['Posts'];
           // $model->password = md5($model['password']);

            if($model->save())
                $this->redirect(Yii::app()->homeUrl.'/administrator/posts');
        }

        $this->render('updatepost',array(
            'model'=>$model,
        ));
    }
    /**
     *Delete user function
     *
     * @return void
     * @author 
     **/
    public function actionDeletepost($id)
    {
    	$model=$this->loadPostsModel($id);
    	//$model->delete();
    	if ($model->delete()) {
    		$this->redirect(Yii::app()->homeUrl.'/administrator/posts');
    	}


    }
}