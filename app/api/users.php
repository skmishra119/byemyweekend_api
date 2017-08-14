<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$app->get('/api/users', function(){
	$qry="select * from bm_users";
	try{

		$db = new db();
		$db = $db->connect();
		$stmt = $db->query($qry);
		$data = $stmt->fetchAll(PDO::FETCH_OBJ);
		$db = null;
		echo json_encode($data);
	} catch(PDOException $e){
		echo '{"message" : {type": "Error", "msg": "'.$e->getMessage().'"}}';
	}
});

$app->get('/api/users/{id}', function($request){
	$uid = $request->getAttribute('id');
	$qry="select * from bm_users where id='".$uid."'";
	try{

		$db = new db();
		$db = $db->connect();
		$stmt = $db->query($qry);
		$data['data'] = $stmt->fetchAll(PDO::FETCH_OBJ);
		$db = null;
		if(sizeof($data['data'])>0){
			$data['message'] = array('type'=>'success', 'msg'=>'Success');
		} else {
			$data['data'] = array(array('token'=>null));
			$data['message'] = array('type'=>'Error', 'msg'=>'No data found.');	
		}
		echo json_encode(array_reverse($data));
	} catch(PDOException $e){
		echo '{"message" : {type": "Error", "msg": "'.$e->getMessage().'"}}';
	}
});

$app->post('/api/users/auth', function($request, $response, $args){
	$uid = $request->getParsedBody()['user'];
	$pass =  $request->getParsedBody()['password'];
	$qry="select id as token from bm_users where (emailid='".$uid."' or phone='".$uid."') and password='".md5($pass)."'";
	try{

		$db = new db();
		$db = $db->connect();
		$stmt = $db->query($qry);
		$data['data'] = $stmt->fetchAll(PDO::FETCH_OBJ);
		$db = null;
		if(sizeof($data['data'])>0){
			$data['message'] = array('type'=>'success', 'msg'=>'Success');	
			echo json_encode(array_reverse($data));
		} else {
			$data['data'] = array(array('token'=>null));
			$data['message'] = array('type'=>'Error', 'msg'=>'Authentication failed.');	
			echo json_encode(array_reverse($data));
		}	
	} catch(PDOException $e){
		echo '{"message" : {type": "Error", "msg": "'.$e->getMessage().'"}}';
	}
	
});

$app->post('/api/users', function($request, $response, $args){
	$title = $request->getParam('title');
	$ctype = $request->getParam('type');
	$fname = $request->getParam('first_name');
	$lname = $request->getParam('last_name');
	$email = $request->getParam('email');
	$phone = $request->getParam('phone');
	$paswd = $request->getParam('password');
	$caddr = $request->getParam('addr');
	$ccity = $request->getParam('city');
	$state = $request->getParam('state');
	$cntry = $request->getParam('country');
	$zipcd = $request->getParam('zip');

	$qry="insert into bm_users (id, type, title, firstname, lastname, emailid, phone, password, address, city, state, country, zipcode) values (uuid(), :type, :title, :firstname, :lastname, :emailid, :phone, md5(:password), :address, :city, :state, :country, :zipcode)";
	try{

		$db = new db();
		$db = $db->connect();
		$stmt = $db->prepare($qry);
		$stmt->bindParam(':type', $ctype, PDO::PARAM_STR);
		$stmt->bindParam(':title', $title, PDO::PARAM_STR);
		$stmt->bindParam(':firstname', $fname, PDO::PARAM_STR);
		$stmt->bindParam(':lastname', $lname, PDO::PARAM_STR);
		$stmt->bindParam(':emailid', $email, PDO::PARAM_STR);
		$stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
		$stmt->bindParam(':password', $paswd, PDO::PARAM_STR);
		$stmt->bindParam(':address', $caddr, PDO::PARAM_STR);
		$stmt->bindParam(':city', $ccity, PDO::PARAM_STR);
		$stmt->bindParam(':state', $state, PDO::PARAM_STR);
		$stmt->bindParam(':country', $cntry, PDO::PARAM_STR);
		$stmt->bindParam(':zipcode', $zipcd, PDO::PARAM_STR);
		$stmt->execute();
		$data['data'] = array(array('token'=>null));
		$data['message'] = array('type'=>'success', 'msg'=>'Registered Successfully.');	
		echo json_encode(array_reverse($data));	
	} catch(PDOException $e){
		echo '{"message" : {type": "Error", "msg": "'.$e->getMessage().'"}}';
	}
	
});

$app->put('/api/users/{id}', function($request, $response, $args){
	$usrid = $request->getAttribute('id');
	$title = $request->getParam('title');
	$ctype = $request->getParam('type');
	$fname = $request->getParam('first_name');
	$lname = $request->getParam('last_name');
	$email = $request->getParam('email');
	$phone = $request->getParam('phone');
	$paswd = $request->getParam('password');
	$caddr = $request->getParam('addr');
	$ccity = $request->getParam('city');
	$state = $request->getParam('state');
	$cntry = $request->getParam('country');
	$zipcd = $request->getParam('zip');

	$qry="insert into bm_users set type = :type, title = :title, firstname = :firstname, lastname = :lastname, emailid = :emailid, phone = :phone, password = :password, address = :address, city = :city, state = :state, country = :country, zipcode = :zipcode where id='".$usrid."'";
	try{

		$db = new db();
		$db = $db->connect();
		$stmt = $db->prepare($qry);
		$stmt->bindParam(':type', $ctype, PDO::PARAM_STR);
		$stmt->bindParam(':title', $title, PDO::PARAM_STR);
		$stmt->bindParam(':firstname', $fname, PDO::PARAM_STR);
		$stmt->bindParam(':lastname', $lname, PDO::PARAM_STR);
		$stmt->bindParam(':emailid', $email, PDO::PARAM_STR);
		$stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
		$stmt->bindParam(':password', $paswd, PDO::PARAM_STR);
		$stmt->bindParam(':address', $caddr, PDO::PARAM_STR);
		$stmt->bindParam(':city', $ccity, PDO::PARAM_STR);
		$stmt->bindParam(':state', $state, PDO::PARAM_STR);
		$stmt->bindParam(':country', $cntry, PDO::PARAM_STR);
		$stmt->bindParam(':zipcode', $zipcd, PDO::PARAM_STR);
		$stmt->execute();
		$data['data'] = array(array('token'=>null));
		$data['message'] = array('type'=>'success', 'msg'=>'Updated successfully');	
		echo json_encode(array_reverse($data));	
	} catch(PDOException $e){
		echo '{"message" : {type": "Error", "msg": "'.$e->getMessage().'"}}';
	}
	
});

$app->delete('/api/users/{id}', function($request){
	$uid = $request->getAttribute('id');
	$qry="delete from bm_users where id='".$uid."'";
	try{

		$db = new db();
		$db = $db->connect();
		$stmt = $db->prepare($qry);
		$stmt->execute();
		$data['message'] = array('type'=>'success', 'msg'=>'Deleted successfully');	
		echo json_encode(array_reverse($data));
	} catch(PDOException $e){
		echo '{"message" : {type": "Error", "msg": "'.$e->getMessage().'"}}';
	}
});
