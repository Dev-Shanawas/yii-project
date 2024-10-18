<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	public function actiontestForm(){
		$model = new testForm;
		$dataArray = null;
		
		if(isset($_POST['testForm'])){
			$model->attributes = $_POST['testForm'];
			if($model->validate()){
				$connection=Yii::app()->db; 
				$email = $_POST['testForm']['email'] ;
				$amount = $_POST['testForm']['amount'];
				$months = $_POST['testForm']['months'];
				$interest = $_POST['testForm']['interest'];
				$totalRate = $this->calculateMonthlyPayment($amount, $interest, $months);
				$sql="INSERT INTO `testing` (`email`,`amount`,`interest`,`month`,`total_pay_amount` ) VALUES(:email,:amount,:interest,:months,:totalPayAmount)";
				$command=$connection->createCommand($sql);
				// replace the placeholder ":username" with the actual username value
				$command->bindParam(":email",$email,PDO::PARAM_STR);
				// replace the placeholder ":email" with the actual email value
				$command->bindParam(":amount",$amount,PDO::PARAM_STR);
				$command->bindParam(":months",$months,PDO::PARAM_STR);
				$command->bindParam(":interest",$interest,PDO::PARAM_STR);
				$command->bindParam(":totalPayAmount",$totalRate,PDO::PARAM_STR);
				$command->execute(); 	
				$dataArray = array('email'=>$email ,'amount'=> $amount ,'months'=> $months,'interest'=> $interest,'totalRate'=> $totalRate);

				echo $totalRate;
				
			}
		}

		$this->render('test',array('model'=>$model , 'dataArray'=>$dataArray));
	}

	// public function actionshowall(){
	// 	$connection = Yii::app()->db;
	// 	if($connection){
	// 		$sql = "SELECT * FROM `testing`";
	// 		$command = $connection->createCommand($sql);
	// 		$value = $command->queryAll();
	// 		$this->render('showall' , array('value'=>$value));
	// 	}
		
	// }



	public function actionShowAll() {
		$count = Yii::app()->db->createCommand()
			->select('COUNT(*)')
			->from('testing') 
			->queryScalar();
	
		// Set up pagination
		$pages = new CPagination($count);
		$pages->pageSize = 10; // Set the number of items per page
	
		// Fetch all users with pagination
		$users = Yii::app()->db->createCommand()
			->select('*')
			->from('testing') // Change this to your actual table name
			->order('id ASC') // Optional: specify the order
			->limit($pages->pageSize,$pages->currentPage * $pages->pageSize) // Apply pagination
			->queryAll();
	 
		// Render the view
		$this->render('showall', array(
			'users' => $users,
			'pages' => $pages,
		));
	}
	

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();	
		$this->redirect(Yii::app()->homeUrl);
	}
	
	public function calculateMonthlyPayment($amount, $annualInterestRate, $months) {
		// Convert annual interest rate to monthly and percentage to decimal
		$monthlyInterestRate = $annualInterestRate / 100 / 12;
	
		// Calculate the monthly payment using the formula
		if ($monthlyInterestRate == 0) { // If interest rate is 0%
			return $amount / $months;
		} else {
			$monthlyPayment = $amount * ($monthlyInterestRate * pow(1 + $monthlyInterestRate, $months)) / (pow(1 + $monthlyInterestRate, $months) - 1);
			return $monthlyPayment;
		}
	}
}