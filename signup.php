<?php
	require 'includes/config.php';
?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<title><?php echo $config['title']; ?></title>

		 <!-- Bootstrap Core CSS -->
		<link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="/vendor/angular-toastr.css">
		 <!-- Theme CSS -->
		<link href="css/blog.css"  rel="stylesheet">

	</head>
	<body>
		 <!-- Header -->
		 <?php include 'includes/header.php' ?>
		<!--comments-add-form-->
		<div class='container'>	
			<div class='bgcolor '>		
											
					<!-- SIGNUP FORM --> 
				<form ng-submit="submitSignupForm()" id="sign-up-form" class="form-signin" name="signup">
				  <h2 class="form-signin-heading">Реєстрація</h2>
				  <div class="row">

					<!-- N A M E -->

					<!-- checking whether the form "signup" with the "name" property is both $invalid AND $dirty.  If it is
					insert the "has-error" class on the input field (i.e. insert a red border around the input field)
					-->
					<div class="control-group form-group col-md-12"
					ng-class="{'has-error':signup.name.$invalid &&
										  signup.name.$dirty}">
					  <label>Ваше повне ім'я</label>

					  <!-- For this input field make it required, and have a max length of 25 -->
					  <input type="text" class="form-control" placeholder="Микла Тесла" name="name" ng-model="signupForm.name" ng-maxlength="50" required>

					  <!-- Also, if signup.name.$dirty is true, show the message depending upon the particular properties truthiness (e.g. required
					  and/or maxlength) -->
					  <span class="help-block has-error" ng-if="signup.name.$dirty">
						<span ng-show="signup.name.$error.required">Ім'я обов'язкове поле.</span>
						<span ng-show="signup.name.$error.maxlength">Не може перевищувати 50 символів</span>
					  </span>
					</div>

						<!-- E M A I L -->

					<div class="control-group form-group col-md-12"
					ng-class="{'has-error':signup.email.$invalid &&
										  signup.email.$dirty}">
					  <label>Ваш email</label>
					  <input type="email" class="form-control" placeholder="nikola@tesla.com" name="email" ng-model="signupForm.email" required >
					  <span class="help-block has-error" ng-if="signup.email.$dirty">
						<span ng-show="signup.email.$error.required">Email обов'язкове поле.</span>
						<span ng-show="signup.email.$error.email"></span>
					  </span>
					</div>

					<!-- P A S S W O R D -->

					<div class="control-group form-group col-md-6"
					ng-class="{'has-error':signup.password.$invalid &&
										  signup.password.$dirty}">
					  <label>Введіть пароль</label>
					  <!-- Added the compareTo directive that compares the passowrds -->
					  <input type="password" class="form-control" placeholder="Пароль" name="password" ng-model="signupForm.password" id="password" required ng-minlength="6" compare-to="signupForm.confirmPassword" >
					  <span class="help-block has-error" ng-if="signup.password.$dirty">
						<span ng-show="signup.password.$error.required">Пароль обов'язкове поле.</span>
						<span ng-show="signup.password.$error.minlength"></span>
					  </span>
					</div>

					<!-- C O N F I R M  P A S S W O R D -->

					<div class="control-group form-group col-md-6">
					  <label>Повторіть ваш пароль</label>
					  <input type="password" class="form-control" placeholder="Пароль" name="confirmation" ng-model="signupForm.confirmPassword" required>
					  <span class="help-block has-error" ng-if="signup.confirmation.$dirty">
						<span ng-show="signup.password.$error.compareTo"></span>
						<span ng-show="signup.confirmation.$error.required"></span>
					  </span>
					</div>
				  </div>

				  <br/>

				  <!-- Disable signup button until the form has no errors -->
				  <button class="btn btn-primary btn-lg btn-block" type="submit" ng-disabled="signup.$invalid">
					<span ng-show="!signupForm.loading">Зареєструватися</span>
					<span class="overlord-loading-spinner fa fa-spinner" ng-show="signupForm.loading" ></span>
					<span ng-show="signupForm.loading"></span>
				  </button>

				  <input type="hidden" name="_csrf" value="<%= _csrf %>" />
				</form>	
		
			</div>
		</div>
		<script src="/vendor/angular.1.3.js"></script>
		<script src="/vendor/compareTo.module.js"></script>
		<script src="/vendor/angular-toastr.js"></script>
	</body>


</html>
