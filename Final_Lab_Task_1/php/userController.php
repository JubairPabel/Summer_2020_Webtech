<?php 
	//session_start();
	require_once('../php/session_header.php');
	require_once('../service/userService.php');


	//add user
	if(isset($_POST['create'])){
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];

		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/register.php?error=null_value');
		}else{

			$user = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email
			];

			$status = insert($user);

			if($status){
				header('location: ../views/all_users.php?success=done');
			}else{
				header('location: ../views/create.php?error=db_error');
			}
		}
	}

    //Company Insertion
	if(isset($_POST['create_c'])){
		$comp_name	= $_POST['cname'];
		$comp_des	= $_POST['cdes'];
		$comp_indus = $_POST['industry'];
		$comp_web	= $_POST['cweb'];
		$comp_logo	= $_POST['clogo'];
		$comp_id	= $_POST['uid'];

		if(empty($comp_name) || empty($comp_des) || empty($comp_indus) || empty($comp_web) || empty($comp_logo) || empty($comp_id)  ){
			header('location: ../views/create_company.php?error=null_value');
		}else{

			$comp = [
				'company_name'=> $comp_name,
				'profile_description'=> $comp_des,
				'industry'=> $comp_indus,
				'company_website'=> $comp_web,
				'company_logo'=> $comp_logo,
				'user_account_id'=> $comp_id
			];

			$status = insert_c($comp);

			if($status){
				header('location: ../views/create_company.php?success=done');
			}else{
				header('location: ../views/create_company.php?error=db_error');
			}
		}
	}

   	//Update Company
	if(isset($_POST['edit_c'])){
        $comp_name	= $_POST['cname'];
		$comp_des	= $_POST['cdes'];
		$comp_indus = $_POST['industry'];
		$comp_web	= $_POST['cweb'];
		$comp_logo	= $_POST['clogo'];
		$comp_id	= $_POST['uid'];

	if(empty($comp_name) || empty($comp_des) || empty($comp_indus) || empty($comp_web) || empty($comp_logo) || empty($comp_id)  ){
			header('location: ../views/create_company.php?error=null_value');
		}else{

			$comp = [
				'company_name'=> $comp_name,
				'profile_description'=> $comp_des,
				'industry'=> $comp_indus,
				'company_website'=> $comp_web,
				'company_logo'=> $comp_logo,
				'user_account_id'=> $comp_id
			];

			$status = update_c($user);

			if($status){
				header('location: ../views/all_users.php?success=done');
			}else{
				header('location: ../views/edit.php?id={$id}');
			}
		}
	}




	//update user
	if(isset($_POST['edit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
		$id 		= $_POST['id'];

		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/edit.php?id={$id}');
		}else{

			$user = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email,
				'id'=> $id
			];

			$status = update($user);

			if($status){
				header('location: ../views/all_users.php?success=done');
			}else{
				header('location: ../views/edit.php?id={$id}');
			}
		}
	}

	//delete User

	if(isset($_POST['delete']))
	{
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
		$id 		= $_POST['id'];

		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/edit.php?id={$id}');
		}else{

			$user = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email,
				'id'=> $id
			];

			$status = delete($user);

			if($status){
				header('location: ../views/all_users.php?success=done');
			}else{
				header('location: ../views/delete.php?id={$id}');
			}
		}
	}
        
	

?>