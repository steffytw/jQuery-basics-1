<?php


if($_SERVER['REQUEST_METHOD'] == 'POST') {
	if(isset($_POST['staffID']) && $_POST['staffID']!=''){

	    $staffdetails = array(
	    	'0'=>array('StaffID' => '101', 'Name' => 'Tiger Nixon', 'Position' => 'System Architect', 'Office' => 'Edinburgh', 'Age' => '61', 'Start_date' => '2011/04/25', 'Salary' => '$320,800'),
	    	'1'=>array('StaffID' => '102', 'Name' => 'Garrett Winters', 'Position' => 'Accountant', 'Office' => 'Tokyo', 'Age' => '63', 'Start_date' => '2011/07/25', 'Salary' => '$170,750'),
	    	'2'=>array('StaffID' => '103', 'Name' => 'Ashton Cox', 'Position' => 'Junior Technical Author', 'Office' => 'San Francisco', 'Age' => '66', 'Start_date' => '2009/01/12', 'Salary' => '$86,000'),
	    	'3'=>array('StaffID' => '104', 'Name' => 'Cedric Kelly', 'Position' => 'Senior Javascript Developer', 'Office' => 'Edinburgh', 'Age' => '22', 'Start_date' => '2012/03/29', 'Salary' => '$433,060'),
	    	'4'=>array('StaffID' => '105', 'Name' => 'Airi Satou', 'Position' => 'Accountant', 'Office' => 'Tokyo', 'Age' => '33', 'Start_date' => '2008/11/28', 'Salary' => '$162,700'),
	    	'5'=>array('StaffID' => '106', 'Name' => 'Brielle Williamson', 'Position' => 'Integration Specialist', 'Office' => 'New York', 'Age' => '61', 'Start_date' => '2012/12/02', 'Salary' => '$372,000'),
	    	'6'=>array('StaffID' => '107', 'Name' => 'Herrod Chandler', 'Position' => 'Sales Assistant', 'Office' => 'San Francisco', 'Age' => '59', 'Start_date' => '2012/08/06', 'Salary' => '$137,500'),
	    	'7'=>array('StaffID' => '108', 'Name' => 'Rhona Davidson', 'Position' => 'Integration Specialist', 'Office' => 'Tokyo', 'Age' => '55', 'Start_date' => '2010/10/14', 'Salary' => '$327,900'),
	    	'8'=>array('StaffID' => '109', 'Name' => 'Colleen Hurst', 'Position' => 'Javascript Developer', 'Office' => 'San Francisco', 'Age' => '39', 'Start_date' => '2009/09/15', 'Salary' => '$205,500'),
	    	'9'=>array('StaffID' => '110', 'Name' => 'Sonya Frost', 'Position' => 'Software Engineer', 'Office' => 'Edinburgh', 'Age' => '23', 'Start_date' => '2008/12/13', 'Salary' => '$103,600'),
	    );

	    for($i=0; $i<=9; $i++){

	    	if((int)$staffdetails[$i]['StaffID'] == (int)$_POST['staffID']){
			    $data = array(
			        'status'    => 200,
			        'data'      => $staffdetails[$i],
			    );
			    break;
	    	} else {
			    $details = array(
			        'message'   => sprintf('Staff ID %s not found. Please enter valid Staff ID', $_POST['staffID']),
			    );

			    $data = array(
			        'status'    => 404,
			        'data'      => $details,
			    );
	    	}
	    }

	} else {
	    $details = array(
	        'message'   => 'Invalid POST data',
	    );

	    $data = array(
	        'status'    => 500,
	        'data'      => $details,
	    );
	}
} else {
    $details = array(
        'message'   => 'Request method is not POST',
    );

    $data = array(
        'status'    => 500,
        'data'      => $details,
    );
}


header('Content-Type: application/json');
header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
header('Access-Control-Allow-Credentials: true');
echo json_encode($data);

?>
