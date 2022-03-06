<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->library('Dbload');
	}
	function update_profile_non_mandatory()
	{
		header('Content-Type: application/json');
		$param = json_decode(file_get_contents("php://input"));

		$arraydata = [];

		if (isset($param->positive_chars) && $param->positive_chars != '') {
			$arraydata["positive_chars"] = $param->positive_chars;
		}
		if (isset($param->negative_chars) && $param->negative_chars != '') {
			$arraydata["negative_chars"] = $param->negative_chars;
		}

		if (isset($param->most_liked) && $param->most_liked != '') {

			$arraydata["most_liked"] = $param->most_liked;
		}
		if (isset($param->most_disliked) && $param->most_disliked != '') {

			$arraydata["most_disliked"] = $param->most_disliked;
		}
		if (isset($param->anger_habit) && $param->anger_habit != '') {

			$arraydata["anger_habit"] = $param->anger_habit;
		}
		if (isset($param->spare_time) && $param->spare_time != '') {

			$arraydata["spare_time"] = $param->spare_time;
		}
		if (isset($param->other_personal_info) && $param->other_personal_info != '') {

			$arraydata["other_personal_info"] = $param->other_personal_info;
		}
		if (isset($param->physical) && $param->physical != '') {

			$arraydata["physical"] = $param->physical;
		}
		if (isset($param->skin) && $param->skin != '') {

			$arraydata["skin"] = $param->skin;
		}
		if (isset($param->height) && $param->height != '') {

			$arraydata["height"] = $param->height;
		}
		if (isset($param->weight) && $param->weight != '') {

			$arraydata["weight"] = $param->weight;
		}
		if (isset($param->hair) && $param->hair != '') {

			$arraydata["hair"] = $param->hair;
		}
		if (isset($param->hair_color) && $param->hair_color != '') {

			$arraydata["hair_color"] = $param->hair_color;
		}
		if (isset($param->other_physical_info) && $param->other_physical_info != '') {

			$arraydata["other_physical_info"] = $param->other_physical_info;
		}
		if (isset($param->father_age) && $param->father_age != '') {

			$arraydata["father_age"] = $param->father_age;
		}
		if (isset($param->father_ethnicity) && $param->father_ethnicity != '') {

			$arraydata["father_ethnicity"] = $param->father_ethnicity;
		}
		if (isset($param->father_religion) && $param->father_religion != '') {

			$arraydata["father_religion"] = $param->father_religion;
		}
		if (isset($param->father_nationality) && $param->father_nationality != '') {

			$arraydata["father_nationality"] = $param->father_nationality;
		}
		if (isset($param->mother_age) && $param->mother_age != '') {

			$arraydata["mother_age"] = $param->mother_age;
		}
		if (isset($param->mother_ethnicity) && $param->mother_ethnicity != '') {

			$arraydata["mother_ethnicity"] = $param->mother_ethnicity;
		}
		if (isset($param->mother_religion) && $param->mother_religion != '') {

			$arraydata["mother_religion"] = $param->mother_religion;
		}
		if (isset($param->mother_nationality) && $param->mother_nationality != '') {

			$arraydata["mother_nationality"] = $param->mother_nationality;
		}
		if (isset($param->order_in_family) && $param->order_in_family != '') {

			$arraydata["order_in_family"] = $param->order_in_family;
		}
		if (isset($param->total_siblings) && $param->total_siblings != '') {

			$arraydata["total_siblings"] = $param->total_siblings;
		}
		if (isset($param->family_domicile) && $param->family_domicile != '') {

			$arraydata["family_domicile"] = $param->family_domicile;
		}
		if (isset($param->other_family_info) && $param->other_family_info != '') {

			$arraydata["other_family_info"] = $param->other_family_info;
		}
		if (isset($param->home_status) && $param->home_status != '') {

			$arraydata["home_status"] = $param->home_status;
		}
		if (isset($param->vehicle) && $param->vehicle != '') {

			$arraydata["vehicle"] = $param->vehicle;
		}
		if (isset($param->own_saving) && $param->own_saving != '') {

			$arraydata["own_saving"] = $param->own_saving;
		}
		if (isset($param->assets) && $param->assets != '') {

			$arraydata["assets"] = $param->assets;
		}
		if (isset($param->business) && $param->business != '') {

			$arraydata["business"] = $param->business;
		}
		if (isset($param->other_financial_info) && $param->other_financial_info != '') {

			$arraydata["other_financial_info"] = $param->other_financial_info;
		}
		if (isset($param->married_target) && $param->married_target != '') {

			$arraydata["married_target"] = $param->married_target;
		}
		if (isset($param->children_own_target) && $param->children_own_target != '') {

			$arraydata["children_own_target"] = $param->children_own_target;
		}
		if (isset($param->marriage_knowledge) && $param->marriage_knowledge != '') {

			$arraydata["marriage_knowledge"] = $param->marriage_knowledge;
		}
		if (isset($param->wedding_plan) && $param->wedding_plan != '') {

			$arraydata["wedding_plan"] = $param->wedding_plan;
		}
		if (isset($param->marriage_certificate) && $param->marriage_certificate != '') {

			$arraydata["marriage_certificate"] = $param->marriage_certificate;
		}
		if (isset($param->couple_criteria) && $param->couple_criteria != '') {

			$arraydata["couple_criteria"] = $param->couple_criteria;
		}

		if (isset($param->polygamy) && $param->polygamy != '') {

			$arraydata["polygamy"] = $param->polygamy;
		}




		if (!isset($param->user_id) || $param->user_id == '') {
			$result = array(
				'status' => false,
				'status_message' => "user_id is empty"
			);

			echo json_encode($result);
			die();
		} else {
			$CEK_USER = $this->inc->GetResultData('fooddelivery_users', ["id" => $param->user_id]);
			if (count($CEK_USER) == 0) {
				$result = array(
					'status' => false,
					'status_message' => "User Tidak terdaftar"
				);

				echo json_encode($result);
				die();
			} else {
				$CEK_USER_PROFILE = $this->inc->GetResultData('user_profile', ["user_id" => $param->user_id]);
				if (count($CEK_USER_PROFILE) > 0) {

					$update_profile  = $this->inc->IncUpdate_Data('user_profile', ["user_id" => $param->user_id], $arraydata);
					if ($update_profile) {
						$result = array(
							'status' => true,
							'status_message' => "success"
						);

						echo json_encode($result);
						die();
					} else {
						$result = array(
							'status' => false,
							'status_message' => "error database update"
						);

						echo json_encode($result);
						die();
					}
				} else {
					$result = array(
						'status' => false,
						'status_message' => "User Belum Terdaftar Taaruf"
					);

					echo json_encode($result);
					die();
				}
			}
		}
	}
	function get_user_detail()
	{
		header('Content-Type: application/json');
		$param = json_decode(file_get_contents("php://input"));


		if (!isset($param->user_id)  && !isset($param->firebase_uid)) {

			$result = array(
				'status' => false,
				'status_message' => "user_id or firebase_uid is empty"
			);

			echo json_encode($result);
			die();
		} elseif (!isset($param->id)) {

			$result = array(
				'status' => false,
				'status_message' => "id  is empty"
			);

			echo json_encode($result);
			die();
		} else {

			$id = $param->id;
			if (isset($param->user_id)) {
				$sql = "SELECT b.* ,CONCAT( '" . substr_replace($this->config->item("base_url_https"), "", -1) . "', b.image ) as image,a.fullname as fullname ,
				a.firebase_uid, c.certificate_no, d.name as ustadz_name, d.photo as ustadz_photo
				FROM fooddelivery_users  a
				INNER JOIN user_profile b ON a.id = b.user_id 
				LEFT JOIN fooddelivery_restaurant d ON b.ustadz_id = d.id
				LEFT JOIN pranikah_certificate c ON a.id = c.user_id WHERE a.id = " . $param->id;
			} else {
				$sql = "SELECT b.* ,CONCAT( '" . substr_replace($this->config->item("base_url_https"), "", -1) . "', b.image ) as image,a.fullname as fullname ,
				a.firebase_uid, c.certificate_no, d.name as ustadz_name, d.photo as ustadz_photo		
				FROM fooddelivery_users  a
				INNER JOIN user_profile b ON a.id = b.user_id 
				LEFT JOIN fooddelivery_restaurant d ON b.ustadz_id = d.id
				LEFT JOIN pranikah_certificate c ON a.id = c.user_id WHERE a.firebase_uid = '$param->firebase_uid'";
			}

			$get_data = $this->dbload->resulSqlQuery($sql);



			if (count($get_data) > 0) {

				$taaruf_req_status_sql = "select status as taaruf_req_status from `taaruf_request` where user_id=" . $param->user_id . " and request_to=" . $id;
				$taaruf_req_status  = $this->dbload->resulSqlQuery($taaruf_req_status_sql);

				$taaruf_res_status_sql = "select status as taaruf_res_status from `taaruf_request` where user_id=" . $param->id . " and request_to=" . $param->user_id;
				$taaruf_res_status  = $this->dbload->resulSqlQuery($taaruf_res_status_sql);



				if (count($taaruf_req_status) == 0) {
					$obj = (object) ["taaruf_req_status" => ""];
					$taaruf_req_status = [$obj];
				}

				if (count($taaruf_res_status) == 0) {
					$obj = (object) ["taaruf_res_status" => ""];
					$taaruf_res_status = [$obj];
				}

				$detail = (object) array_merge((array) $get_data[0], (array) $taaruf_res_status[0], (array) $taaruf_req_status[0]);

				$result = array(
					'status' => true,
					'status_message' => "success",
					'detail' => $detail,
					'firebase_uid' => $get_data[0]->firebase_uid
				);

				echo json_encode($result);
				die();
			} else {
				$result = array(
					'status' => false,
					'status_message' => "User Not Found"
				);

				echo json_encode($result);
				die();
			}
		}
	}


	function get_user_list()
	{
		header('Content-Type: application/json');
		$param = json_decode(file_get_contents("php://input"));


		if (!isset($param->pageno) || $param->pageno == '') {
			$result = array(
				'status' => false,
				'status_message' => "pageno is empty"
			);

			echo json_encode($result);
			die();
		} elseif (!isset($param->limit) || $param->limit == '') {
			$result = array(
				'status' => false,
				'status_message' => "limit is empty"
			);

			echo json_encode($result);
			die();
		} elseif ($param->pageno == 0 || $param->pageno == '0') {
			$result = array(
				'status' => false,
				'status_message' => "pageno can't be 0 "
			);

			echo json_encode($result);
			die();
		} elseif (!isset($param->sex) || $param->sex == '') {
			$result = array(
				'status' => false,
				'status_message' => "sex is empty"
			);

			echo json_encode($result);
			die();
		} elseif (!isset($param->lat) || $param->lat == '') {
			$result = array(
				'status' => false,
				'status_message' => "lat is empty"
			);

			echo json_encode($result);
			die();
		} elseif (!isset($param->lon) || $param->lon == '') {
			$result = array(
				'status' => false,
				'status_message' => "lon is empty"
			);

			echo json_encode($result);
			die();
		} else {

			$pageno = (int)$param->pageno - 1;
			$sql = "SELECT a.*, CONCAT( '" . substr_replace($this->config->item("base_url_https"), "", -1) . "', a.image ) as image , b.fullname, b.firebase_uid,
			( 3959 * ACOS( COS( RADIANS( " . $param->lat . " ) ) * COS( RADIANS( a.`lat` ) ) *	COS( RADIANS( a.`lon` ) - RADIANS( " . $param->lon . " ) ) + SIN( RADIANS( " . $param->lat . " ) ) * SIN( RADIANS( a.`lat` ) ) ) ) AS distance, 
			c.certificate_no as certificate_no
			FROM user_profile a	
			JOIN fooddelivery_users b ON a.user_id = b.id 
			LEFT JOIN pranikah_certificate c on a.user_id = c.user_id			
			WHERE	 a.sex = " . "'" . $param->sex . "'" . " ORDER BY distance	LIMIT " . $param->limit . " OFFSET " . $pageno;
			$get_data = $this->dbload->resulSqlQuery($sql);

			$sql_semua = "SELECT a.*, b.fullname, b.firebase_uid,
			( 3959 * ACOS( COS( RADIANS( " . $param->lat . " ) ) * COS( RADIANS( a.`lat` ) ) *	COS( RADIANS( a.`lon` ) - RADIANS( " . $param->lon . " ) ) + SIN( RADIANS( " . $param->lat . " ) ) * SIN( RADIANS( a.`lat` ) ) ) ) AS distance,c.*
			 FROM user_profile a	
			 JOIN fooddelivery_users b ON a.user_id = b.id  
			 LEFT JOIN pranikah_certificate c on a.user_id = c.user_id
			 WHERE	 a.sex = " . "'" . $param->sex . "'" . " ORDER BY distance	";
			$get_data_semua = $this->dbload->resulSqlQuery($sql_semua);

			// print_r($get_data[0]->id);
			if (count($get_data) > 0) {
				$result = array(
					'status' => true,
					'status_message' => "success",
					'count' => count($get_data_semua),
					'detail' => $get_data,
					// 'details'=>$get_data_semua
				);

				echo json_encode($result);
				die();
			} else {
				$result = array(
					'status' => false,
					'status_message' => "User Not Found"
				);

				echo json_encode($result);
				die();
			}
		}
	}

	function update_profile_mandatory()
	{
		header('Content-Type: application/json');
		// $param = json_decode(file_get_contents("php://input"));
		$param = (object) @$_POST;
		// $IMAGE = @$_FILES['image']["name"];

		// print_r($param);
		// die();
		if (
			isset($param->user_id) &&
			// isset($IMAGE) &&
			isset($param->fullname) &&
			isset($param->birthdate) &&
			isset($param->nickname) &&
			isset($param->sex) &&
			isset($param->address) &&
			isset($param->country) &&
			isset($param->province) &&
			isset($param->city) &&
			isset($param->district) &&
			isset($param->village) &&
			isset($param->lat) &&
			isset($param->lon) &&
			isset($param->ethnicity) &&
			isset($param->religion) &&
			isset($param->hobby) &&
			isset($param->marital_status) &&
			isset($param->biography) &&
			isset($param->education) &&
			isset($param->religious_education) &&
			isset($param->job) &&
			isset($param->job_desc) &&
			isset($param->job_level) &&
			isset($param->vision) &&
			isset($param->mission) &&
			isset($param->marriage_purpose) &&
			isset($param->ten_year_plan) &&
			isset($param->couple_physical) &&
			isset($param->couple_skin) &&
			isset($param->couple_height) &&
			isset($param->couple_weight) &&
			isset($param->couple_ethnicity) &&
			isset($param->couple_education) &&
			// isset($param->couple_domicile) && 
			isset($param->couple_province) &&
			isset($param->couple_city) &&
			isset($param->couple_criteria) &&


			isset($param->five_time_pray) &&
			isset($param->sunnah_fasting) &&
			isset($param->quran_reading) &&
			isset($param->quran_routinity) &&
			isset($param->charity_routinity) &&
			isset($param->study_routinity) &&
			isset($param->blurred_image) &&

			$param->user_id != '' &&
			// $IMAGE != ''		&&
			$param->fullname != '' &&
			$param->nickname != '' &&
			$param->birthdate != '' &&
			$param->sex != '' &&
			$param->address != '' &&
			$param->country != '' &&
			$param->province != '' &&
			$param->city != '' &&
			$param->district != '' &&
			$param->village != '' &&
			$param->lat != '' &&
			$param->lon != '' &&
			$param->ethnicity != '' &&
			$param->religion != '' &&
			$param->hobby != '' &&
			$param->marital_status != '' &&
			$param->biography != '' &&
			$param->education != '' &&
			$param->religious_education != '' &&
			$param->job != '' &&
			$param->job_desc != '' &&
			$param->job_level != '' &&
			$param->vision != '' &&
			$param->mission != '' &&
			$param->marriage_purpose != '' &&
			$param->ten_year_plan != '' &&
			$param->couple_physical != '' &&
			$param->couple_skin != '' &&
			$param->couple_height != '' &&
			$param->couple_weight != '' &&
			$param->couple_ethnicity != '' &&
			$param->couple_education != '' &&
			// $param->couple_domicile != '' && 
			$param->couple_province != '' &&
			$param->couple_city != '' &&
			$param->couple_criteria != '' &&

			$param->five_time_pray != '' &&
			$param->sunnah_fasting != '' &&
			$param->quran_reading != '' &&
			$param->quran_routinity != '' &&
			$param->charity_routinity != '' &&
			$param->study_routinity != '' &&
			$param->blurred_image != ''
		) {

			$CEK_USER = $this->inc->GetResultData('fooddelivery_users', ["id" => $param->user_id]);
			if (count($CEK_USER) == 0) {
				$result = array(
					'status' => false,
					'status_message' => "User Tidak terdaftar"
				);

				echo json_encode($result);
				die();
			}
			$CEK_USER_PROFILE = $this->inc->GetResultData('user_profile', ["user_id" => $param->user_id]);

			if (count($CEK_USER_PROFILE) == 0) {
				$result = array(
					'status' => false,
					'status_message' => "Belum Terdaftar Taaruf"
				);

				echo json_encode($result);
				die();
			} else {

				$today        = new DateTime();
				$date = new DateTime($param->birthdate);
				$umur = $date->diff($today);

				if ($umur->y >= 18) {
					// print_r($_FILES);
					// die();
					if (count($_FILES) > 0) {
						if ($_FILES['image']['error'] == 0) {
							$path = str_replace("syaria", "PHPScript", $_SERVER['DOCUMENT_ROOT']);

							$idprofile = $this->input->post("user_id");

							$created_at = $idprofile . time();

							$profile = "APIprofile_" . str_replace(" ", "_", $param->fullname) . '_' . $created_at;

							$fileFoto = (object) @$_FILES['image'];



							$target_dir = "./asset/upload/";

							$namaSementara = $_FILES['image']['tmp_name'];
							$target_file = $target_dir . basename($_FILES["image"]["name"]);
							$type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
							$namaFile = $profile . '.' . $type;
							// tentukan lokasi file akan dipindahkan
							$dirUpload = $target_dir;

							// pindahkan file
							$terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFile);

							// }

							// print_r($terupload);
							// print_r($type);
							// die();
						}
					}


					$update_fullname = $this->inc->IncUpdate_Data('fooddelivery_users', ["id" => $param->user_id], ["fullname" => $param->fullname]);

					if (count($_FILES) > 0) {
						if ($_FILES['image']['error'] == 0) {
							$data_insert = [
								"user_id" => $param->user_id,
								"image" => '/asset/upload/' . $namaFile,
								"nickname" => $param->nickname,
								"birthdate" => $param->birthdate,
								"sex" => $param->sex,
								"address" => $param->address,
								"country" => $param->country,
								"province" => $param->province,
								"city" => $param->city,
								"district" => $param->district,
								"village" => $param->village,
								"lat" => $param->lat,
								"lon" => $param->lon,
								"ethnicity" => $param->ethnicity,
								"religion" => $param->religion,
								"marital_status" => $param->marital_status,
								"hobby" => $param->hobby,
								"biography" => $param->biography,
								"education" => $param->education,
								"religious_education" => $param->religious_education,
								"job" => $param->job,
								"job_desc" => $param->job_desc,
								"job_level" => $param->job_level,
								"vision" => $param->vision,
								"mission" => $param->mission,
								"marriage_purpose" => $param->marriage_purpose,
								"ten_year_plan" => $param->ten_year_plan,
								"couple_physical" => $param->couple_physical,
								"couple_skin" => $param->couple_skin,
								"couple_height" => $param->couple_height,
								"couple_weight" => $param->couple_weight,
								"couple_ethnicity" => $param->couple_ethnicity,
								"couple_education" => $param->couple_education,
								// "couple_domicile"=>$param->couple_domicile, 
								"couple_province" => $param->couple_province,
								"couple_city" => $param->couple_city,
								"couple_criteria" => $param->couple_criteria,

								"five_time_pray" => $param->five_time_pray,
								"sunnah_fasting" => $param->sunnah_fasting,
								"quran_reading" => $param->quran_reading,
								"quran_routinity" => $param->quran_routinity,
								"charity_routinity" => $param->charity_routinity,
								"study_routinity" => $param->study_routinity,
								"blurred_image" => $param->blurred_image
							];
						} else {
							$data_insert = [
								"user_id" => $param->user_id,
								// "image" => '/asset/upload/' . $namaFile,
								"nickname" => $param->nickname,
								"birthdate" => $param->birthdate,
								"sex" => $param->sex,
								"address" => $param->address,
								"country" => $param->country,
								"province" => $param->province,
								"city" => $param->city,
								"district" => $param->district,
								"village" => $param->village,
								"lat" => $param->lat,
								"lon" => $param->lon,
								"ethnicity" => $param->ethnicity,
								"religion" => $param->religion,
								"marital_status" => $param->marital_status,
								"hobby" => $param->hobby,
								"biography" => $param->biography,
								"education" => $param->education,
								"religious_education" => $param->religious_education,
								"job" => $param->job,
								"job_desc" => $param->job_desc,
								"job_level" => $param->job_level,
								"vision" => $param->vision,
								"mission" => $param->mission,
								"marriage_purpose" => $param->marriage_purpose,
								"ten_year_plan" => $param->ten_year_plan,
								"couple_physical" => $param->couple_physical,
								"couple_skin" => $param->couple_skin,
								"couple_height" => $param->couple_height,
								"couple_weight" => $param->couple_weight,
								"couple_ethnicity" => $param->couple_ethnicity,
								"couple_education" => $param->couple_education,
								// "couple_domicile"=>$param->couple_domicile, 
								"couple_province" => $param->couple_province,
								"couple_city" => $param->couple_city,
								"couple_criteria" => $param->couple_criteria,

								"five_time_pray" => $param->five_time_pray,
								"sunnah_fasting" => $param->sunnah_fasting,
								"quran_reading" => $param->quran_reading,
								"quran_routinity" => $param->quran_routinity,
								"charity_routinity" => $param->charity_routinity,
								"study_routinity" => $param->study_routinity,
								"blurred_image" => $param->blurred_image
							];
						}
					} else {
						$data_insert = [
							"user_id" => $param->user_id,
							// "image" => '/asset/upload/' . $namaFile,
							"nickname" => $param->nickname,
							"birthdate" => $param->birthdate,
							"sex" => $param->sex,
							"address" => $param->address,
							"country" => $param->country,
							"province" => $param->province,
							"city" => $param->city,
							"district" => $param->district,
							"village" => $param->village,
							"lat" => $param->lat,
							"lon" => $param->lon,
							"ethnicity" => $param->ethnicity,
							"religion" => $param->religion,
							"marital_status" => $param->marital_status,
							"hobby" => $param->hobby,
							"biography" => $param->biography,
							"education" => $param->education,
							"religious_education" => $param->religious_education,
							"job" => $param->job,
							"job_desc" => $param->job_desc,
							"job_level" => $param->job_level,
							"vision" => $param->vision,
							"mission" => $param->mission,
							"marriage_purpose" => $param->marriage_purpose,
							"ten_year_plan" => $param->ten_year_plan,
							"couple_physical" => $param->couple_physical,
							"couple_skin" => $param->couple_skin,
							"couple_height" => $param->couple_height,
							"couple_weight" => $param->couple_weight,
							"couple_ethnicity" => $param->couple_ethnicity,
							"couple_education" => $param->couple_education,
							// "couple_domicile"=>$param->couple_domicile, 
							"couple_province" => $param->couple_province,
							"couple_city" => $param->couple_city,
							"couple_criteria" => $param->couple_criteria,

							"five_time_pray" => $param->five_time_pray,
							"sunnah_fasting" => $param->sunnah_fasting,
							"quran_reading" => $param->quran_reading,
							"quran_routinity" => $param->quran_routinity,
							"charity_routinity" => $param->charity_routinity,
							"study_routinity" => $param->study_routinity,
							"blurred_image" => $param->blurred_image
						];
					}
					$insert_profile  = $this->inc->IncUpdate_Data('user_profile', ["user_id" => $param->user_id], $data_insert);
					$sql = "SELECT * FROM user_profile WHERE user_id=" . $param->user_id;
					$get_data_user = $this->dbload->resulSqlQuery($sql);
					// print_r($get_data_user[0]);
					// die();
					$result = array(
						'status' => true,
						'status_message' => "success",
						'image' =>  $this->config->item("base_url_https") . '' . $get_data_user[0]->image
					);

					echo json_encode($result);
					die();
				} else {
					$result = array(
						'status' => false,
						'status_message' => "Usia kurang dari 18 tahun"
					);

					echo json_encode($result);
					die();
				}
			}
			// cekprofile

		} else {

			$message = "";

			if (!isset($param->user_id) || $param->user_id == '') {
				$message .= " user_id is empty, ";
			}

			// if (!isset($IMAGE) || $IMAGE == '') {
			// 	$message .= ' image is empty, ';
			// }


			if (!isset($param->fullname) || $param->fullname == '') {
				$message .= ' fullname is empty, ';
			}

			if (!isset($param->nickname) || $param->nickname == '') {
				$message .= ' nickname is empty, ';
			}

			if (!isset($param->birthdate) || $param->birthdate == '') {
				$message .= ' birthdate is empty, ';
			}

			if (!isset($param->sex) || $param->sex == '') {
				$message .= ' sex is empty, ';
			}

			if (!isset($param->address) || $param->address == '') {
				$message .= ' address is empty, ';
			}

			if (!isset($param->country) || $param->country == '') {
				$message .= ' country is empty, ';
			}

			if (!isset($param->province) || $param->province == '') {
				$message .= ' province is empty, ';
			}

			if (!isset($param->city) || $param->city == '') {
				$message .= ' city is empty, ';
			}

			if (!isset($param->district) || $param->district == '') {
				$message .= ' district is empty, ';
			}

			if (!isset($param->village) || $param->village == '') {
				$message .= ' village is empty, ';
			}

			if (!isset($param->lat) || $param->lat == '') {
				$message .= ' lat is empty, ';
			}

			if (!isset($param->lon) || $param->lon == '') {
				$message .= ' lon is empty, ';
			}

			if (!isset($param->ethnicity) || $param->ethnicity == '') {
				$message .= ' ethnicity is empty, ';
			}

			if (!isset($param->religion) || $param->religion == '') {
				$message .= ' religion is empty, ';
			}

			if (!isset($param->hobby) || $param->hobby == '') {
				$message .= ' hobby is empty, ';
			}

			if (!isset($param->marital_status) || $param->marital_status == '') {
				$message .= ' marital_status is empty, ';
			}

			if (!isset($param->biography) || $param->biography == '') {
				$message .= ' biography is empty, ';
			}

			if (!isset($param->education) || $param->education == '') {
				$message .= ' education is empty, ';
			}

			if (!isset($param->religious_education) || $param->religious_education == '') {
				$message .= ' religious_education is empty, ';
			}

			if (!isset($param->job) || $param->job == '') {
				$message .= ' job is empty, ';
			}

			if (!isset($param->job_desc) || $param->job_desc == '') {
				$message .= ' job_desc is empty, ';
			}

			if (!isset($param->job_level) || $param->job_level == '') {
				$message .= ' job_level is empty, ';
			}

			if (!isset($param->vision) || $param->vision == '') {
				$message .= ' vision is empty, ';
			}

			if (!isset($param->mission) || $param->mission == '') {
				$message .= ' mission is empty, ';
			}

			if (!isset($param->marriage_purpose) || $param->marriage_purpose == '') {
				$message .= ' marriage_purpose is empty, ';
			}

			if (!isset($param->ten_year_plan) || $param->ten_year_plan == '') {
				$message .= ' ten_year_plan is empty, ';
			}

			if (!isset($param->couple_physical) || $param->couple_physical == '') {
				$message .= ' couple_physical is empty, ';
			}

			if (!isset($param->couple_skin) || $param->couple_skin == '') {
				$message .= ' couple_skin is empty, ';
			}

			if (!isset($param->couple_height) || $param->couple_height == '') {
				$message .= ' couple_height is empty, ';
			}

			if (!isset($param->couple_weight) || $param->couple_weight == '') {
				$message .= ' couple_weight is empty, ';
			}

			if (!isset($param->couple_ethnicity) || $param->couple_ethnicity == '') {
				$message .= ' couple_ethnicity is empty, ';
			}

			if (!isset($param->couple_education) || $param->couple_education == '') {
				$message .= ' couple_education is empty, ';
			}

			// if (!isset($param->couple_domicile) || $param->couple_domicile == '') {
			// 	$message .= ' couple_domicile is empty, ';
			// }

			if (!isset($param->couple_province) || $param->couple_province == '') {
				$message .= ' couple_province is empty, ';
			}

			if (!isset($param->couple_city) || $param->couple_city == '') {
				$message .= ' couple_city is empty, ';
			}

			if (!isset($param->couple_criteria) || $param->couple_criteria == '') {
				$message .= ' couple_criteria is empty, ';
			}




			if (!isset($param->five_time_pray) || $param->five_time_pray == '') {
				$message .= ' five_time_pray is empty, ';
			}

			if (!isset($param->sunnah_fasting) || $param->sunnah_fasting == '') {
				$message .= ' sunnah_fasting is empty, ';
			}

			if (!isset($param->quran_reading) || $param->quran_reading == '') {
				$message .= ' quran_reading is empty, ';
			}

			if (!isset($param->quran_routinity) || $param->quran_routinity == '') {
				$message .= ' quran_routinity is empty, ';
			}
			if (!isset($param->charity_routinity) || $param->charity_routinity == '') {
				$message .= ' charity_routinity is empty, ';
			}

			if (!isset($param->study_routinity) || $param->study_routinity == '') {
				$message .= ' study_routinity is empty, ';
			}

			if (!isset($param->blurred_image) || $param->blurred_image == '') {
				$message .= ' blurred_image is empty, ';
			}

			$result = array(
				'status' => false,
				'status_message' => $message
			);

			echo json_encode($result);
			die();
		}
	}
	function registrasitaaruf()
	{
		header('Content-Type: application/json');
		// $param = json_decode(file_get_contents("php://input"));
		$param = (object) @$_POST;
		$IMAGE = @$_FILES['image'];
		// print_r(@$_FILES['file']);
		// print_r((object) @$_POST);
		// print_r($param->user_id);
		// print_r($IMAGE);
		// die();



		if (
			isset($param->user_id) &&
			isset($IMAGE) &&
			isset($param->fullname) &&
			isset($param->nickname) &&
			isset($param->birthdate) &&
			isset($param->sex) &&
			isset($param->address) &&
			isset($param->country) &&
			isset($param->province) &&
			isset($param->city) &&
			isset($param->district) &&
			isset($param->village) &&
			isset($param->lat) &&
			isset($param->lon) &&
			isset($param->ethnicity) &&
			isset($param->religion) &&
			isset($param->marital_status) &&
			isset($param->hobby) &&
			isset($param->biography) &&
			isset($param->education) &&
			isset($param->religious_education) &&
			isset($param->job) &&
			isset($param->job_desc) &&
			isset($param->job_level) &&
			isset($param->vision) &&
			isset($param->mission) &&
			isset($param->marriage_purpose) &&
			isset($param->ten_year_plan) &&
			isset($param->couple_physical) &&
			isset($param->couple_skin) &&
			isset($param->couple_height) &&
			isset($param->couple_weight) &&
			isset($param->couple_ethnicity) &&
			isset($param->couple_education) &&
			// isset($param->couple_domicile) && 
			isset($param->couple_province) &&
			isset($param->couple_city) &&
			isset($param->couple_criteria) &&

			isset($param->five_time_pray) &&
			isset($param->sunnah_fasting) &&
			isset($param->quran_reading) &&
			isset($param->quran_routinity) &&
			isset($param->charity_routinity) &&
			isset($param->study_routinity) &&
			isset($param->blurred_image) &&
			$param->user_id != '' &&
			$IMAGE != ''		&&
			$param->fullname != '' &&
			$param->nickname != '' &&
			$param->birthdate != '' &&
			$param->sex != '' &&
			$param->address != '' &&
			$param->country != '' &&
			$param->province != '' &&
			$param->city != '' &&
			$param->district != '' &&
			$param->village != '' &&
			$param->lat != '' &&
			$param->lon != '' &&
			$param->ethnicity != '' &&
			$param->religion != '' &&
			$param->marital_status != '' &&
			$param->hobby != '' &&
			$param->biography != '' &&
			$param->education != '' &&
			$param->religious_education != '' &&
			$param->job != '' &&
			$param->job_desc != '' &&
			$param->job_level != '' &&
			$param->vision != '' &&
			$param->mission != '' &&
			$param->marriage_purpose != '' &&
			$param->ten_year_plan != '' &&
			$param->couple_physical != '' &&
			$param->couple_skin != '' &&
			$param->couple_height != '' &&
			$param->couple_weight != '' &&
			$param->couple_ethnicity != '' &&
			$param->couple_education != '' &&
			// $param->couple_domicile != '' && 
			$param->couple_province != '' &&
			$param->couple_city != '' &&
			$param->couple_criteria  != '' &&

			$param->five_time_pray != '' &&
			$param->sunnah_fasting != '' &&
			$param->quran_reading != '' &&
			$param->quran_routinity != '' &&
			$param->charity_routinity != '' &&
			$param->study_routinity != '' &&
			$param->blurred_image != ''
		) {

			$CEK_USER = $this->inc->GetResultData('fooddelivery_users', ["id" => $param->user_id]);
			if (count($CEK_USER) == 0) {
				$result = array(
					'status' => false,
					'status_message' => "User Tidak terdaftar"
				);

				echo json_encode($result);
				die();
			}
			$CEK_USER_PROFILE = $this->inc->GetResultData('user_profile', ["user_id" => $param->user_id]);
			// print_r(count($CEK_USER_PROFILE));
			// die();
			if (count($CEK_USER_PROFILE) > 0) {
				$result = array(
					'status' => false,
					'status_message' => "Sudah Terdaftar Taaruf"
				);

				echo json_encode($result);
				die();
			} else {

				$today        = new DateTime();
				$date = new DateTime($param->birthdate);
				$umur = $date->diff($today);

				if ($umur->y >= 18) {


					$path = str_replace("syaria", "PHPScript", $_SERVER['DOCUMENT_ROOT']);

					$idprofile = $this->input->post("user_id");

					$created_at = $idprofile . time();

					$profile = "APIprofile_" . str_replace(" ", "_", $param->fullname) . '_' . $created_at;

					$fileFoto = (object) @$_FILES['image'];



					$target_dir = "./asset/upload/";

					$namaSementara = $_FILES['image']['tmp_name'];
					$target_file = $target_dir . basename($_FILES["image"]["name"]);
					$type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
					$namaFile = $profile . '.' . $type;
					// tentukan lokasi file akan dipindahkan
					$dirUpload = $target_dir;

					// pindahkan file
					$terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFile);

					// }

					// print_r($terupload);
					// print_r($type);
					// die(); 

					$sql_get_ustad = "SELECT * FROM taaruf_ustadz ORDER BY last_updated";
					$get_ustad = $this->dbload->resulSqlQuery($sql_get_ustad)[0];
					$qty = $get_ustad->quantity + 1;
					// print_r($get_ustad->quantity + 1 );
					// echo  $qty;

					$update_taaruf_ustadz  = $this->inc->IncUpdate_Data('taaruf_ustadz ', ["ustadz_id" => $get_ustad->ustadz_id], ["quantity" => $qty]);
					// echo $update_taaruf_ustadz;
					// die(); 
					$update_fullname = $this->inc->IncUpdate_Data('fooddelivery_users', ["id" => $param->user_id], ["fullname" => $param->fullname]);

					$data_insert = [
						"user_id" => $param->user_id,
						"image" => '/asset/upload/' . $namaFile,
						"nickname" => $param->nickname,
						"birthdate" => $param->birthdate,
						"sex" => $param->sex,
						"address" => $param->address,
						"country" => $param->country,
						"province" => $param->province,
						"city" => $param->city,
						"district" => $param->district,
						"village" => $param->village,
						"lat" => $param->lat,
						"lon" => $param->lon,
						"ethnicity" => $param->ethnicity,
						"religion" => $param->religion,
						"hobby" => $param->hobby,
						"marital_status" => $param->marital_status,
						"biography" => $param->biography,
						"education" => $param->education,
						"religious_education" => $param->religious_education,
						"job" => $param->job,
						"job_desc" => $param->job_desc,
						"job_level" => $param->job_level,
						"vision" => $param->vision,
						"mission" => $param->mission,
						"marriage_purpose" => $param->marriage_purpose,
						"ten_year_plan" => $param->ten_year_plan,
						"couple_physical" => $param->couple_physical,
						"couple_skin" => $param->couple_skin,
						"couple_height" => $param->couple_height,
						"couple_weight" => $param->couple_weight,
						"couple_ethnicity" => $param->couple_ethnicity,
						"couple_education" => $param->couple_education,
						// "couple_domicile"=>$param->couple_domicile, 
						"couple_province" => $param->couple_province,
						"couple_city" => $param->couple_city,
						"couple_criteria" => $param->couple_criteria,

						"five_time_pray" => $param->five_time_pray,
						"sunnah_fasting" => $param->sunnah_fasting,
						"quran_reading" => $param->quran_reading,
						"quran_routinity" => $param->quran_routinity,
						"charity_routinity" => $param->charity_routinity,
						"study_routinity" => $param->study_routinity,
						"blurred_image" => $param->blurred_image,
						"ustadz_id" => $get_ustad->ustadz_id
					];
					$insert_profile  = $this->inc->IncSave_Data('user_profile', $data_insert);

					$sql_promo = "SELECT produk.*,promo.*  FROM `promo` JOIN produk ON produk.id = promo.produk_id WHERE promo.categori_id IN ( 3 ) AND 
					NOW() BETWEEN  promo.start_period   AND promo.end_period";
					$cek_promo = $this->dbload->resulSqlQuery($sql_promo);

					if (count($cek_promo) > 0) {


						$CEK_USER = $this->inc->GetResultData('fooddelivery_users', ["id" => $param->user_id]);
						// print_r($CEK_USER);
						// die();
						$RANDOME = substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyz"), 0, 6);

						$startDate = time();
						$limit = $cek_promo[0]->limit;
						$batas_akhir = date('Y-m-d H:i:s', strtotime('+' . $limit . ' day', $startDate));


						$ipaddress = '';
						if (isset($_SERVER['HTTP_CLIENT_IP'])) {
							$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
						} elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
							$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
						} elseif (isset($_SERVER['HTTP_X_FORWARDED'])) {
							$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
						} elseif (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
							$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
						} elseif (isset($_SERVER['HTTP_FORWARDED'])) {
							$ipaddress = $_SERVER['HTTP_FORWARDED'];
						} elseif (isset($_SERVER['REMOTE_ADDR'])) {
							$ipaddress = $_SERVER['REMOTE_ADDR'];
						} else {
							$ipaddress = 'UNKNOWN';
						}
						// return $ipaddress;


						$data_insert = [
							"user_id" => $param->user_id,
							"nama" => $CEK_USER[0]->fullname,
							"email" => $CEK_USER[0]->email,
							"tlp" => $CEK_USER[0]->phone_no,
							"tgl_register" => date("Y-m-d H:i:s"),
							"orderno" =>	$RANDOME,
							"categori" => $cek_promo[0]->id_categori,
							"produk_id" => $cek_promo[0]->produk_id,
							"produk" => $cek_promo[0]->nama,
							"infaq" => 0,
							"unik" => 0,
							"infaq_sukarela" => 0,
							"payment_type" => "promo",
							"created" => date("Y-m-d H:i:s"),
							"status" => 200,
							"start_awal" => date("Y-m-d H:i:s"),
							"batas_akhir" => $batas_akhir,
							"ip" => $ipaddress,
							"cronjob" => 0

						];
						$insert_paket_register  = $this->inc->IncSave_Data('paket_register', $data_insert);

						$result = array(
							'status' => true,
							'promo_status' => true,
							'end_promo' => $batas_akhir,
							'status_message' => "success"
						);

						echo json_encode($result);
						die();
					} else {
						$result = array(
							'status' => true,
							'promo_status' => false,
							'status_message' => "success"
						);

						echo json_encode($result);
						die();
					}
				} else {
					$result = array(
						'status' => false,
						'status_message' => "Usia kurang dari 18 tahun"
					);

					echo json_encode($result);
					die();
				}
			}
		} else {

			$message = "";

			if (!isset($param->user_id) || $param->user_id == '') {
				$message .= " user_id is empty, ";
			}

			if (!isset($IMAGE) || $IMAGE == '') {
				$message .= ' image is empty, ';
			}


			if (!isset($param->fullname) || $param->fullname == '') {
				$message .= ' fullname is empty, ';
			}

			if (!isset($param->nickname) || $param->nickname == '') {
				$message .= ' nickname is empty, ';
			}


			if (!isset($param->birthdate) || $param->birthdate == '') {
				$message .= ' birthdate is empty, ';
			}

			if (!isset($param->sex) || $param->sex == '') {
				$message .= ' sex is empty, ';
			}

			if (!isset($param->address) || $param->address == '') {
				$message .= ' address is empty, ';
			}

			if (!isset($param->country) || $param->country == '') {
				$message .= ' country is empty, ';
			}

			if (!isset($param->province) || $param->province == '') {
				$message .= ' province is empty, ';
			}

			if (!isset($param->city) || $param->city == '') {
				$message .= ' city is empty, ';
			}

			if (!isset($param->district) || $param->district == '') {
				$message .= ' district is empty, ';
			}

			if (!isset($param->village) || $param->village == '') {
				$message .= ' village is empty, ';
			}

			if (!isset($param->lat) || $param->lat == '') {
				$message .= ' lat is empty, ';
			}

			if (!isset($param->lon) || $param->lon == '') {
				$message .= ' lon is empty, ';
			}

			if (!isset($param->ethnicity) || $param->ethnicity == '') {
				$message .= ' ethnicity is empty, ';
			}

			if (!isset($param->religion) || $param->religion == '') {
				$message .= ' religion is empty, ';
			}

			if (!isset($param->hobby) || $param->hobby == '') {
				$message .= ' hobby is empty, ';
			}

			if (!isset($param->marital_status) || $param->marital_status == '') {
				$message .= ' marital_status is empty, ';
			}

			if (!isset($param->biography) || $param->biography == '') {
				$message .= ' biography is empty, ';
			}

			if (!isset($param->education) || $param->education == '') {
				$message .= ' education is empty, ';
			}

			if (!isset($param->religious_education) || $param->religious_education == '') {
				$message .= ' religious_education is empty, ';
			}

			if (!isset($param->job) || $param->job == '') {
				$message .= ' job is empty, ';
			}

			if (!isset($param->job_desc) || $param->job_desc == '') {
				$message .= ' job_desc is empty, ';
			}

			if (!isset($param->job_level) || $param->job_level == '') {
				$message .= ' job_level is empty, ';
			}

			if (!isset($param->vision) || $param->vision == '') {
				$message .= ' vision is empty, ';
			}

			if (!isset($param->mission) || $param->mission == '') {
				$message .= ' mission is empty, ';
			}

			if (!isset($param->marriage_purpose) || $param->marriage_purpose == '') {
				$message .= ' marriage_purpose is empty, ';
			}

			if (!isset($param->ten_year_plan) || $param->ten_year_plan == '') {
				$message .= ' ten_year_plan is empty, ';
			}

			if (!isset($param->couple_physical) || $param->couple_physical == '') {
				$message .= ' couple_physical is empty, ';
			}

			if (!isset($param->couple_skin) || $param->couple_skin == '') {
				$message .= ' couple_skin is empty, ';
			}

			if (!isset($param->couple_height) || $param->couple_height == '') {
				$message .= ' couple_height is empty, ';
			}

			if (!isset($param->couple_weight) || $param->couple_weight == '') {
				$message .= ' couple_weight is empty, ';
			}

			if (!isset($param->couple_ethnicity) || $param->couple_ethnicity == '') {
				$message .= ' couple_ethnicity is empty, ';
			}

			if (!isset($param->couple_education) || $param->couple_education == '') {
				$message .= ' couple_education is empty, ';
			}

			// if (!isset($param->couple_domicile) || $param->couple_domicile == '') {
			// 	$message .= ' couple_domicile is empty, ';
			// }

			if (!isset($param->couple_province) || $param->couple_province == '') {
				$message .= ' couple_province is empty, ';
			}

			if (!isset($param->couple_city) || $param->couple_city == '') {
				$message .= ' couple_city is empty, ';
			}

			if (!isset($param->couple_criteria) || $param->couple_criteria  == '') {
				$message .= ' couple_criteria  is empty, ';
			}



			if (!isset($param->five_time_pray) || $param->five_time_pray == '') {
				$message .= ' five_time_pray is empty, ';
			}

			if (!isset($param->sunnah_fasting) || $param->sunnah_fasting == '') {
				$message .= ' sunnah_fasting is empty, ';
			}

			if (!isset($param->quran_reading) || $param->quran_reading == '') {
				$message .= ' quran_reading is empty, ';
			}

			if (!isset($param->quran_routinity) || $param->quran_routinity == '') {
				$message .= ' quran_routinity is empty, ';
			}
			if (!isset($param->charity_routinity) || $param->charity_routinity == '') {
				$message .= ' charity_routinity is empty, ';
			}

			if (!isset($param->study_routinity) || $param->study_routinity == '') {
				$message .= ' study_routinity is empty, ';
			}

			if (!isset($param->blurred_image) || $param->blurred_image == '') {
				$message .= ' blurred_image is empty, ';
			}

			$result = array(
				'status' => false,
				'status_message' => $message
			);

			echo json_encode($result);
			die();
		}
		// die();
	}
	function updatefirebaseuid()
	{
		header('Content-Type: application/json');
		$param = json_decode(file_get_contents("php://input"));
		// print_r($param);
		// die();


		if (isset($param->user_id) && isset($param->firebase_uid)) {

			$user_id = $param->user_id;
			$firebase_uid = $param->firebase_uid;

			$CEK_USER = $this->inc->GetResultData('fooddelivery_users', ["id" => $param->user_id]);
			if (count($CEK_USER) == 0) {
				$result = array(
					'status' => false,
					'status_message' => "User Tidak terdaftar"
				);

				echo json_encode($result);
				die();
			}

			$update = $this->inc->IncUpdate_Data('fooddelivery_users', ["id" => $user_id], ["firebase_uid" => $firebase_uid]);

			if ($update) {

				$result = array(
					'status' => true,
					'status_message' => 'success'
				);
			} else {

				$result = array(
					'status' => false,
					'status_message' => 'kesalahan input kedatabase'
				);
			}

			echo json_encode($result);
			die();
		} else {

			$alert_user_id = '';
			$alert_firebase_uid = '';

			if (!isset($user_id)) {
				$alert_user_id = 'user_id kosong';
			}

			if (!isset($firebase_uid)) {
				$alert_firebase_uid = 'firebase_uid kosong';
			}

			$result = array(
				'status' => false,
				'status_message' => $alert_user_id . ' , ' . $alert_firebase_uid
			);

			echo json_encode($result);
			die();
		}
	}
	function cekBatas()
	{

		$batas_awal = "2021-02-13 14:00:42"; //date("Y-m-d h:i:s");

		$batas_akhir = date("Y-m-d h:i:s", strtotime($batas_awal) + ((3600 * 24) * 30));
		echo $batas_akhir;
	}
	function GetRegisterPaket()
	{
		$in = json_decode(file_get_contents("php://input"));
		$data = array(
			'table' => 'produk',
			'where' => array('id' => $in->id)
		);
		$result = $this->dbload->GetResultData($data);
		header('Content-Type: application/json');
		echo json_encode($result);
	}

	function SaveData($data)
	{
		$CI = &get_instance();
		return $CI->db->insert($table, $data);
	}

	function HistoryPo()
	{
		header('Content-Type: application/json');
		$in = json_decode(file_get_contents("php://input"));
		$userid = $in->personid;
		$produkid = $in->prodakid;
		$count = $in->item_count;
		$page = ($in->page_no - 1) * $count;

		if ($in->token != "385ef7144b8ebc2d48aa915056e8cca5") {
			$result = array(
				'status' => 0,
				'errror' => "#errror-page : sory Token not valid"
			);
			echo json_encode($result);
			exit();
		}

		$sql = "select * from paket_register where user_id='$userid'  and (produk_id ='$produkid' or produk_id='4' or produk_id='5' )  ORDER BY id DESC  LIMIT $count OFFSET $page";

		$all = $this->dbload->CountRow("select * from paket_register where user_id='$userid'  and (produk_id ='$produkid' or produk_id='4' or produk_id='5' ) ");

		// $sql = "select * from paket_register where user_id='$userid'  ORDER BY id DESC  LIMIT $count OFFSET $page";

		// $all = $this->dbload->CountRow("select * from paket_register where user_id='$userid' ");

		$result = $this->dbload->resulSqlQuery($sql);

		$cons = encrypt_url($produkid . '&&' . $userid);
		$url = base_url() . "order-produk/" . $cons;

		$data = array(
			'total_count' => $all,
			'link' => $url,
			'data' => $result
		);
		echo json_encode($data);
	}

	function HistoryOrder()
	{
		header('Content-Type: application/json');
		$in = json_decode(file_get_contents("php://input"));
		$userid = $in->personid;
		$produkid = $in->prodakid;
		$count = $in->item_count;
		$page = ($in->page_no - 1) * $count;

		if ($in->token != "385ef7144b8ebc2d48aa915056e8cca5") {
			$result = array(
				'status' => 0,
				'errror' => "#errror-page : sory Token not valid"
			);
			echo json_encode($result);
			exit();
		}

		// $sql = "select * from paket_register where user_id='$userid'  and (produk_id ='$produkid' or produk_id='4' or produk_id='5' )  ORDER BY id DESC  LIMIT $count OFFSET $page";

		// $all = $this->dbload->CountRow("select * from paket_register where user_id='$userid'  and (produk_id ='$produkid' or produk_id='4' or produk_id='5' ) ");

		$sql = "select * from paket_register where user_id='$userid'  ORDER BY id DESC  LIMIT $count OFFSET $page";

		$all = $this->dbload->CountRow("select * from paket_register where user_id='$userid' ");

		$result = $this->dbload->resulSqlQuery($sql);

		$cons = encrypt_url($produkid . '&&' . $userid);
		$url = base_url() . "order-produk/" . $cons;

		$data = array(
			'total_count' => $all,
			'link' => $url,
			'data' => $result
		);
		echo json_encode($data);
	}

	function shift()
	{
		$sql = "SELECT nama AS shift,DATE_FORMAT(jam_awal,'%Y-%m-%d') AS jam_start,DATE_FORMAT(jam_akhir,'%Y-%m-%d') AS jam_end FROM `shift_jaga` ";
		$result = $this->dbload->resulSqlQuery($sql);
		$data = array("Data" => $result);
		echo json_encode($data);
	}

	function urlbitly()
	{
		/* encrypt_url() decrypt_url()
			Token  385ef7144b8ebc2d48aa915056e8cca5 [Syaria2021Toke01]
			0 = user tidak aktif (belum subscribe layanan chat)
			1 = user sudah aktif (sudah subscribed layanan chat)
			2 = user pending pembayaran (user sudah order layanan, tapi belum membayar)
		*/

		header('Content-Type: application/json');
		$in = json_decode(file_get_contents("php://input"));
		$userid = $in->personid;
		$produkid = $in->prodakid;
		$cons = encrypt_url($produkid . '&&' . $userid);
		$url = base_url() . "order-produk/" . $cons;
		$dateIN = date("Y-m-d");


		$cekgo = $this->inc->ResultAllby_ID("paket_register", array(
			"user_id" => $userid,
			// "produk_id"=>$produkid,
			"categori" => $produkid,
			"status" => '200',
			"batas_akhir BETWEEN DATE_FORMAT('$dateIN', '%Y-%m-%d') AND batas_akhir" => null
		));

		if (sizeof($cekgo) > 0) {
			$result = array(
				'status' => 1,
				'errror' => "errror-page : Maaf anda masih terdaftar aktif dilayanan ini",
				'link' => $url,
				'data' => $cekgo
			);
			echo json_encode($result);
			exit();
		}

		if ($in->token != "385ef7144b8ebc2d48aa915056e8cca5") {
			$result = array(
				'status' => 0,
				'errror' => "#errror-page : sory Token not valid"
			);
			echo json_encode($result);
			exit();
		}
		$result = [];
		$sql = "SELECT b.* FROM  `fooddelivery_users` AS a  LEFT JOIN `paket_register` AS b ON a.id=b.user_id WHERE a.id='$userid'  ORDER BY b.id DESC";
		$result = $this->dbload->resulSqlQuery($sql); // AND b.produk_id='$produkid'


		//"page=1&personid=2";
		$_status = array(
			"200" => "SETTLEMENT",
			"201" => "PENDING",
			"202" => "FAILURE"
		);

		if (sizeof($result) > 1) {
			$result = array(
				'status' => ($_status[$result[0]->status] == "201" ? '2' : '0'),
				'limit_chat' => $result[0]->batas_akhir,
				'link' => $url,
				'data' => $result[0]
			);
		} else {
			$result = array(
				'status' => 0,
				'link' => $url
			);
		}
		echo json_encode($result);
	}

	function BugResultUst()
	{
		$param = (object) $this->input->get(); //  json_decode(file_get_contents("php://input")); // 
		date_default_timezone_set($param->timezone);
		$time = date('H:i:s');
		$sql = "SELECT DATE_FORMAT(jam_awal,'%H:%i') as jam_a,DATE_FORMAT(jam_akhir,'%H:%i') as jam_b FROM  shift_jaga  WHERE  '$time' >= jam_awal AND '$time' <= jam_akhir";
		$shift = $this->dbload->resulSqlQuery($sql);
		$_shift = "";
		if (!empty($shift)) {
			$_shift = "Jadwal Konsultasi: " . $shift[0]->jam_a . '-' . $shift[0]->jam_b . " WIB";
		} else {
			$_shift = "Jadwal Konsultasi: 07:00-12:00:WIB";
		}

		header('Content-Type: application/json');
		if ($param->shift == "true") {
			$sql = "SELECT a.*,( 3959 * ACOS( COS( RADIANS( $param->lat ) ) * COS( RADIANS( `a`.`lat` ) ) * COS( RADIANS( `a`.`lon` ) - RADIANS( $param->lon ) ) + SIN( RADIANS( $param->lat ) ) * SIN( RADIANS( `a`.`lat` ) ) ) ) AS distance FROM fooddelivery_restaurant AS a INNER JOIN shift_jaga AS b ON a.shift=b.id
WHERE a.is_active='0'  AND TIME_FORMAT('$time','%H:%i:%s') BETWEEN b.jam_awal AND b.jam_akhir ORDER BY distance ASC LIMIT 0, $param->noofrecords";
		} else {
			$sql = "SELECT *,( 3959 * ACOS( COS( RADIANS( $param->lat ) ) * COS( RADIANS( `lat` ) ) * COS( RADIANS( `lon` ) - RADIANS( $param->lon ) ) + SIN( RADIANS( $param->lat ) ) * SIN( RADIANS( `lat` ) ) ) ) AS distance FROM fooddelivery_restaurant WHERE is_active=0 ORDER BY distance ASC LIMIT 0, $param->noofrecords";
		}
		$result = $this->dbload->resulSqlQuery($sql);
		foreach ($result as $data) {
			$categoryid = $this->getcategoryid($param->search);
			$is_display = $this->is_displayornot($categoryid, $data->id);
			$radiusdata = $data->distance * 1.609344;
			$km = round($radiusdata, 2);

			$dist = $data->distance;
			$currency = $data->currency;
			$dollar = explode('-', $currency);
			$val = $dollar[1];
			if ($is_display) {
				$ratting = ""; //$this->getratting($data->id);
				$category = $this->getrestaurantcategorybyid($data->id);
				$openclose = $this->res_openandclose($data->id, $data->open_time, $data->close_time);
				$array[] = array(
					"id" => $data->id,
					"name" => $data->name,
					"delivery_time" => $data->delivery_time,
					"currency" => "$val",
					"image" => $data->photo,
					"lat" => $data->lat,
					"lon" => $data->lon,
					"Category" => $category,
					"ratting" => $ratting,
					"res_status" => $openclose,
					"distance" => $dist,
					"distancekm" => $km,
					"open_time" => $data->open_time,
					"close_time" => $data->close_time,
					"education" => $data->pendidikan,
					"activity" => $data->actifitasOrPekerjaan,
					"gender" => $data->gender,
					"chat" => $data->chat
				);
			}
		}
		if (isset($array)) {


			$json = array("status" => "Success", "message" => $_shift, "Restaurant_list" => $array);
		} else {
			$json = array("status" => "Failed", "error" => "Ustadz Not Found In This Location");
		}
		echo json_encode($json);
	}

	function ResultUst()
	{
		$param = (object) $this->input->get();
		date_default_timezone_set($param->timezone);
		$time = date('H:i:s');
		$sql = "SELECT DATE_FORMAT(jam_awal,'%H:%i') as jam_a,DATE_FORMAT(jam_akhir,'%H:%i') as jam_b FROM  shift_jaga  WHERE  '$time' >= jam_awal AND '$time' <= jam_akhir";
		$shift = $this->dbload->resulSqlQuery($sql);

		if (!empty($shift)) {
			$_shift = "Jadwal Konsultasi: " . $shift[0]->jam_a . '-' . $shift[0]->jam_b . " WIB";
		} else {
			$_shift = "Jadwal Konsultasi: 07:00-12:00:WIB";
		}


		header('Content-Type: application/json');
		if ($param->shift == "true") {
			$sql = "SELECT a.*,( 3959 * ACOS( COS( RADIANS( $param->lat ) ) * COS( RADIANS( `a`.`lat` ) ) * COS( RADIANS( `a`.`lon` ) - RADIANS( $param->lon ) ) + SIN( RADIANS( $param->lat ) ) * SIN( RADIANS( `a`.`lat` ) ) ) ) AS distance FROM fooddelivery_restaurant AS a INNER JOIN shift_jaga AS b ON a.shift=b.id
WHERE a.is_active='0'  AND TIME_FORMAT('$time','%H:%i:%s') BETWEEN b.jam_awal AND b.jam_akhir ORDER BY distance ASC LIMIT 0, $param->noofrecords";
		} else {
			$sql = "SELECT *,( 3959 * ACOS( COS( RADIANS( $param->lat ) ) * COS( RADIANS( `lat` ) ) * COS( RADIANS( `lon` ) - RADIANS( $param->lon ) ) + SIN( RADIANS( $param->lat ) ) * SIN( RADIANS( `lat` ) ) ) ) AS distance FROM fooddelivery_restaurant WHERE is_active=0 ORDER BY distance ASC LIMIT 0, $param->noofrecords";
		}
		$result = $this->dbload->resulSqlQuery($sql);
		foreach ($result as $data) {
			$categoryid = $this->getcategoryid($param->search);
			$is_display = true;  // $this->is_displayornot($categoryid,$data->id); validasi categori di non activkan 20210325
			$radiusdata = $data->distance * 1.609344;
			$km = round($radiusdata, 2);

			$dist = $data->distance;
			$currency = $data->currency;
			$dollar = explode('-', $currency);
			$val = $dollar[1];
			if ($is_display) {
				$ratting = ""; //$this->getratting($data->id);
				$category = $this->getrestaurantcategorybyid($data->id);
				$openclose = $this->res_openandclose($data->id, $data->open_time, $data->close_time);
				$array[] = array(
					"id" => $data->id,
					"name" => $data->name,
					"delivery_time" => $data->delivery_time,
					"currency" => "$val",
					"image" => $data->photo,
					"lat" => $data->lat,
					"lon" => $data->lon,
					"Category" => $category,
					"ratting" => $ratting,
					"res_status" => $openclose,
					"distance" => $dist,
					"distancekm" => $km,
					"open_time" => $data->open_time,
					"close_time" => $data->close_time,
					"education" => $data->pendidikan,
					"activity" => $data->actifitasOrPekerjaan,
					"gender" => $data->gender,
					"chat" => $data->chat_status
				);
			}
		}
		if (isset($array)) {


			$json = array("status" => "Success", "message" => $_shift, "Restaurant_list" => $array);
		} else {
			$json = array("status" => "Failed", "error" => "Ustadz Not Found In This Location");
		}
		echo json_encode($json);
	}

	function res_openandclose($res_id, $time_open, $time_close)
	{
		$time = date('H:i:s');
		$sql = "SELECT * FROM  fooddelivery_restaurant  WHERE id='$res_id'  AND '" . $time . "' >= '$time_open' and '" . $time . "' <= '$time_close' ";
		$result = $this->dbload->resulSqlQuery($sql);

		if (sizeof($result) > 0) {
			return true;
		} else {
			return false;
		}
	}

	function getcategoryid($s)
	{
		$sql = "SELECT * FROM fooddelivery_subcategory WHERE name RLIKE '[[:<:]]" . $s . "[[:>:]]' ";
		return $this->dbload->resulSqlQuery($sql)[0]->id;
	}

	function is_displayornot($cat, $res)
	{
		$sql = "SELECT * FROM fooddelivery_category_res WHERE res_id='$res' AND cat_id='$cat' ";
		$result = $this->dbload->resulSqlQuery($sql);

		if (sizeof($result) > 0) {
			return true;
		} else {
			return false;
		}
	}

	function getrestaurantcategorybyid($id)
	{
		$sql = "Select * from fooddelivery_category_res where res_id=$id";
		$result = $this->dbload->resulSqlQuery($sql);
		if (sizeof($result) > 0) {
			foreach ($result as $data) {
				$category = $this->getcategoryname($data->cat_id);
				$array[] = $category;
			}

			return $array;
		} else {
			return false;
		}
	}

	function getcategoryname($id)
	{
		$sql = "Select `name` from `fooddelivery_subcategory` where id=$id";
		$result = $this->dbload->resulSqlQuery($sql);
		if (sizeof($result) > 0) {
			return $result[0]->name;
		} else {
			return false;
		}
	}


	function contentmanagement()
	{
		header('Content-Type: application/json');
		$url = base_url();

		$param = json_decode(file_get_contents("php://input"));

		$search = isset($param->search) ? $param->search : '';
		$page = ($param->pageno > 1) ? ($param->pageno * $param->limit) - $param->limit : 0; // $param->pageno-1;
		$countpage = $param->limit;
		$tipe = $param->tipe;

		$sql = "SELECT * FROM `content_status` where tipe='$tipe' and LOWER(judul) LIKE '%$search%' ORDER BY id DESC LIMIT $page,$countpage";

		$result = $this->dbload->resulSqlQuery($sql);

		$resultcount = $this->dbload->resulSqlQuery("SELECT * FROM `content_status` where tipe='$tipe' ");
		$_like = [];
		$like = [];



		if (count($result) > 0) {
			$data['msg'] = "000";
			$data['count'] = count($resultcount);
			foreach ($result as $flay) {

				$liked = false;
				$unliked = false;
				if (isset($param->iduser)) {
					$like = $this->inc->GetResultData("content_like", array("id_content" => $flay->id, "id_user" => $param->iduser));
				}

				if (count($like) > 0) {
					$like = $like[0];
					//$_like=array('like'=>$like->like,'unlike'=>$like->unlike);
					$liked = ($like->like == 1 ? true : false);
					$unliked = ($like->unlike == 1 ? true : false);
				}


				$data['data'][] = array(
					"id" => $flay->id,
					"title" => $flay->judul,
					"image" => $url . "asset/status/" . $flay->image,
					"page" => $url . "page-status/" . $flay->id,
					"content" => $flay->content,
					"like" => $flay->like,
					"unlike" => $flay->unlike,
					"liked" => $liked,
					"unliked" => $unliked
				);
			}
		} else {
			$data['msg'] = "401";
			$data['data'] = "";
		}

		echo json_encode($data);
	}

	function likeContentmanagement()
	{
		header('Content-Type: application/json');
		$param = json_decode(file_get_contents("php://input"));
		$id = $param->idcontent;

		$page = $this->inc->ResultAllby_ID("content_status", ["id" => $id])[0];
		$like = $page->like + 1;

		$this->inc->IncUpdate_Data('content_status', ["id" => $id], ["like" => $like]);

		$this->inc->IncSave_Data("content_like", ["id_content" => $param->idcontent, "id_user" => $param->iduser, "like" => 1, "unlike" => 0]);


		echo json_encode(["like" => $like]);
	}

	function UnlikeContentmanagement()
	{
		header('Content-Type: application/json');

		$param = json_decode(file_get_contents("php://input"));
		$id = $param->idcontent;

		$page = $this->inc->ResultAllby_ID("content_status", ["id" => $id])[0];
		$like = $page->unlike + 1;

		$this->inc->IncUpdate_Data('content_status', ["id" => $id], ["unlike" => $like]);

		$this->inc->IncSave_Data("content_like", ["id_content" => $param->idcontent, "id_user" => $param->iduser, "like" => 1, "unlike" => 0]);

		echo json_encode(["like" => $like]);
	}

	function updateprofileme()
	{
		// upload_PhotoData
		$path = str_replace("syaria", "PHPScript", $_SERVER['DOCUMENT_ROOT']);

		$idprofile = $this->input->post("id");
		$image = $this->inc->GetResultData("fooddelivery_users", array("id" => $idprofile));
		$oldimage = "";
		$profile = "";
		$images = "";
		$photo = [];
		$datas = [];

		if (count($image) > 0) {

			$image = $image[0];
			$oldimage = $image->image;

			$profile = $image->created_at;
			$created_at = $idprofile . time();
			// $profile=(empty($profile)?"APIprofile_".$created_at:$profile);
			$profile = "APIprofile_" . $created_at;

			$fileFoto = (object) @$_FILES['file'];

			if (!empty(@$fileFoto->name)) {
				$photo = $this->inc->upload_PhotoData(
					$profile,
					'file',
					'./asset/upload/',
					'png|gif|jpg',
					$oldimage
				);
				if ($photo['status'] == 0) {
					header('Content-Type: application/json');
					echo json_encode(array('errcode' => 201, 'errmsg' => 'Data Upload File Not Valid'));
					exit();
				} else {
					$images = $photo['upname'];
				}

				if ($photo['status'] == 1) {
					$datas['image'] = $images;
				}
			}



			if (!empty($this->input->post('nama'))) {
				$datas['fullname'] = trim($this->input->post('nama'));
			}

			if (!empty($this->input->post('telopon'))) {
				$datas['phone_no'] = trim($this->input->post('telopon'));
			}

			// $datas=array(
			// 	'fullname'=>trim($this->input->post('nama')),
			// 	'phone_no'=>trim($this->input->post('telopon')),
			// 	// 'password'=>trim($this->input->post('password')),
			// 	'created_at'=>$created_at
			// 	);

			if (sizeof($datas) > 0) {
				$datas['created_at'] = $created_at;
				$save = $this->inc->IncUpdate_Data('fooddelivery_users', array("id" => $idprofile), $datas);
			} else {
				$save = false;
			}


			if ($save) {
				$url = base_url();
				if (!empty($images)) {
					// $content = file_get_contents($url."asset/upload/".$images);
					// //simpan di server hosting baru.
					// $fp = fopen($path."/uploads", "w");

					// fwrite($fp, $content);
					// fclose($fp); 
				}
				$err = array(
					'errcode' => '000',
					'errmsg' => 'Data Berhasil Disimpan'
				);
				if (!empty(@$fileFoto->name)) {
					$url = str_replace('http', 'https', base_url());
					$err['avatar'] = $url . "asset/upload/" . $images;
				}
			} else {
				$err = array(
					'errcode' => '404',
					'errmsg' => 'Data tidak berhasil disimpan'
				);
			}

			header('Content-Type: application/json');
			echo json_encode($err);
		}
	}
	public function get_client_ip()
	{
		$ipaddress = '';
		if (isset($_SERVER['HTTP_CLIENT_IP']))
			$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		else if (isset($_SERVER['HTTP_X_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		else if (isset($_SERVER['HTTP_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_FORWARDED'];
		else if (isset($_SERVER['REMOTE_ADDR']))
			$ipaddress = $_SERVER['REMOTE_ADDR'];
		else
			$ipaddress = 'UNKNOWN';
		return $ipaddress;
	}
	function request_taaruf()
	{
		header('Content-Type: application/json');
		$url = base_url();

		$param = json_decode(file_get_contents("php://input"));


		if (!isset($param->user_id) || !isset($param->request_to)) {
			$status_message = '';

			if (!isset($param->user_id)) {

				$status_message .= ' user_id is not exist';
			}
			if (!isset($param->request_to)) {
				$status_message .= ' ,request_to is not exist';
			}



			$result = array(
				'status' => false,
				'status_message' => $status_message
			);

			echo json_encode($result);
			die();
		} else {

			// sebelumnya pernah mengajukan request ke id user 
			$sql = "SELECT * FROM taaruf_request WHERE user_id = $param->user_id AND request_to = $param->request_to ";
			$cek_request = $this->dbload->resulSqlQuery($sql);

			if (count($cek_request) > 0) {
				if ($cek_request[0]->status == 'open') {


					$sql2 = "SELECT * FROM user_profile WHERE user_id=" . $param->request_to;
					$to = $this->dbload->resulSqlQuery($sql2);


					$sql1 = "SELECT * FROM user_profile WHERE user_id=" . $param->user_id;
					$dari = $this->dbload->resulSqlQuery($sql1);


					$sql = "SELECT * FROM fooddelivery_tokendata WHERE user_id=" . $param->request_to;
					$token = $this->dbload->resulSqlQuery($sql);


					$dari = $dari[0]->nickname;
					$to = $to[0]->nickname;


					$data_insert_inbox_ke_user_id = [
						"user_id" => $param->user_id,
						"message" => "Mengirim ajakan taaruf ke " . $to,
						"type" => "taaruf_request",
						"trx_id" => $cek_request[0]->trx_id,
						"status" => "unread",
						"created_at" => date("Y-m-d H:i:s")

					];

					$insert_inbox_user_id  = $this->inc->IncSave_Data('inbox', $data_insert_inbox_ke_user_id);

					$data_insert_inbox = [
						"user_id" => $param->request_to,
						"message" => "Alhamdulillah, kaka " . $dari . " ingin mengajak taaruf dengan kaka " . $to,
						"type" => "taaruf_request",
						"trx_id" => $cek_request[0]->trx_id,
						"status" => "unread",
						"created_at" => date("Y-m-d H:i:s")

					];

					$insert_inbox  = $this->inc->IncSave_Data('inbox', $data_insert_inbox);


					$sql_user_id = "SELECT * FROM fooddelivery_tokendata WHERE user_id=" . $param->user_id;
					$token_user_id = $this->dbload->resulSqlQuery($sql_user_id);

					$body_user_id =	[
						"notification" => [
							"click_action" => ".Inbox",
							"title"	=> "Taaruf Request",
							"body"	=> "Mengirim ajakan taaruf ke " . $to,
							"sound" => "default"
						],
						"data" => ["message" => "Notifikasi baru"],
						"to" => $token_user_id[0]->token
					];
					$push_notif_user_id = $this->fcm_send($body_user_id);

					$body =	[
						"notification" => [
							"click_action" => ".Inbox",
							"title"	=> "Taaruf Request",
							"body"	=> "Alhamdulillah, kaka " . $dari . " ingin mengajak taaruf dengan kaka " . $to,
							"sound" => "default"
						],
						"data" => ["message" => "Notifikasi baru"],
						"to" => $token[0]->token
					];
					$push_notif = $this->fcm_send($body);
					$push_notif = json_decode($push_notif);
					// print_r($push_notif);
					// if ($push_notif->success == 1) {
					$result = array(
						'status' => true,
						'status_message' => "success"
					);

					echo json_encode($result);
					die();
				} else {
					$result = array(
						'status' => false,
						'status_message' => "sudah pernah request taaruf "
					);

					echo json_encode($result);
					die();
				}
			} else {

				$sql2 = "SELECT * FROM user_profile WHERE user_id=" . $param->request_to;
				$to = $this->dbload->resulSqlQuery($sql2);


				$sql1 = "SELECT * FROM user_profile WHERE user_id=" . $param->user_id;
				$dari = $this->dbload->resulSqlQuery($sql1);


				$sql = "SELECT * FROM fooddelivery_tokendata WHERE user_id=" . $param->request_to;
				$token = $this->dbload->resulSqlQuery($sql);

				// if (count($token) == 0) {
				// 	$result = array(
				// 		'status' => false,
				// 		'status_message' => "token tidak ditemukan"
				// 	);

				// 	echo json_encode($result);
				// 	die(); 
				// } else

				if (count($to) == 0) {
					$result = array(
						'status' => false,
						'status_message' => "nickename to tidak ditemukan"
					);

					echo json_encode($result);
					die();
				} elseif (count($dari) == 0) {
					$result = array(
						'status' => false,
						'status_message' => "nickename dari tidak ditemukan"
					);

					echo json_encode($result);
					die();
				} else {
					$dari = $dari[0]->nickname;
					$to = $to[0]->nickname;
					$trx_id = $param->user_id . $param->request_to . strtotime("now");

					$data_insert = [
						"user_id" => $param->user_id,
						"request_to" => $param->request_to,
						"trx_id" => $trx_id,
						"request_msg" =>  isset($param->message) ?  $param->message : '',
						"status" => "open",
						"created_at" => date("Y-m-d H:i:s")

					];

					$insert_taaruf_request  = $this->inc->IncSave_Data('taaruf_request', $data_insert);

					$data_insert_inbox_ke_user_id = [
						"user_id" => $param->user_id,
						"message" => "Mengirim ajakan taaruf ke " . $to,
						"type" => "taaruf_request",
						"trx_id" => $trx_id,
						"status" => "unread",
						"created_at" => date("Y-m-d H:i:s")

					];

					$insert_inbox_user_id  = $this->inc->IncSave_Data('inbox', $data_insert_inbox_ke_user_id);

					$data_insert_inbox = [
						"user_id" => $param->request_to,
						"message" => "Alhamdulillah, kaka " . $dari . " ingin mengajak taaruf dengan kaka " . $to,
						"type" => "taaruf_request",
						"trx_id" => $trx_id,
						"status" => "unread",
						"created_at" => date("Y-m-d H:i:s")

					];

					$insert_inbox  = $this->inc->IncSave_Data('inbox', $data_insert_inbox);



					$sql_user_id = "SELECT * FROM fooddelivery_tokendata WHERE user_id=" . $param->user_id;
					$token_user_id = $this->dbload->resulSqlQuery($sql_user_id);

					$body_user_id =	[
						"notification" => [
							"click_action" => ".Inbox",
							"title"	=> "Taaruf Request",
							"body"	=> "Mengirim ajakan taaruf ke " . $to,
							"sound" => "default"
						],
						"data" => ["message" => "Notifikasi baru"],
						"to" => $token_user_id[0]->token
					];
					$push_notif_user_id = $this->fcm_send($body_user_id);


					$body =	[
						"notification" => [
							"click_action" => ".Inbox",
							"title"	=> "Taaruf Request",
							"body"	=> "Alhamdulillah, kaka " . $dari . " ingin mengajak taaruf dengan kaka " . $to,
							"sound" => "default"
						],
						"data" => ["message" => "Notifikasi baru"],
						"to" => $token[0]->token
					];
					$push_notif = $this->fcm_send($body);
					$push_notif = json_decode($push_notif);
					// print_r($push_notif);
					// die();
					// if ($push_notif->success == 1) {
					$result = array(
						'status' => true,
						'status_message' => "success"
					);

					echo json_encode($result);
					die();
					// } else {

					// 	$where = ["trx_id" => $trx_id];
					// 	$delete_inbox  = $this->inc->DeleteDataALl($where, 'inbox');

					// 	$where = ["trx_id" => $trx_id];
					// 	$delete_taaruf_request  = $this->inc->DeleteDataALl($where, 'taaruf_request');


					// 	$result = array(
					// 		'status' => false,
					// 		'status_message' => "gagal push notification"
					// 	);

					// 	echo json_encode($result);
					// 	die();
					// }
				}
			}
		}
	}

	function list_inbox()
	{
		header('Content-Type: application/json');
		$url = base_url();

		$param = json_decode(file_get_contents("php://input"));

		if (!isset($param->pageno) || $param->pageno == '') {
			$result = array(
				'status' => false,
				'status_message' => "pageno is empty"
			);

			echo json_encode($result);
			die();
		} elseif (!isset($param->limit) || $param->limit == '') {
			$result = array(
				'status' => false,
				'status_message' => "limit is empty"
			);

			echo json_encode($result);
			die();
		} elseif ($param->pageno == 0 || $param->pageno == '0') {
			$result = array(
				'status' => false,
				'status_message' => "pageno can't be 0 "
			);

			echo json_encode($result);
			die();
		} elseif (!isset($param->user_id) || $param->user_id == '') {
			$result = array(
				'status' => false,
				'status_message' => "user_id is empty"
			);

			echo json_encode($result);
			die();
		} else {
			$pageno = (int)$param->pageno - 1;
			$sql = "SELECT * FROM inbox where user_id = " . $param->user_id . " ORDER BY created_at DESC	LIMIT " . $param->limit . " OFFSET " . $pageno . " ";
			$get_data = $this->dbload->resulSqlQuery($sql);

			$sql_semua = "SELECT * FROM inbox where user_id = " . $param->user_id;
			$get_data_semua = $this->dbload->resulSqlQuery($sql_semua);

			// print_r($get_data[0]->id);
			if (count($get_data) > 0) {
				$result = array(
					'status' => true,
					'status_message' => "success",
					'count' => count($get_data_semua),
					'detail' => $get_data,
					// 'details'=>$get_data_semua
				);

				echo json_encode($result);
				die();
			} else {
				$result = array(
					'status' => false,
					'status_message' => "List Inbox Is Empty"
				);

				echo json_encode($result);
				die();
			}
		}
	}

	function count_unread_inbox()
	{
		header('Content-Type: application/json');
		$url = base_url();

		$param = json_decode(file_get_contents("php://input"));

		if (!isset($param->user_id) || $param->user_id == '') {
			$result = array(
				'status' => false,
				'status_message' => "user_id is empty"
			);

			echo json_encode($result);
			die();
		} else {

			$sql = "SELECT * FROM inbox where user_id = " . $param->user_id . " AND status = 'unread' ";
			$get_data = $this->dbload->resulSqlQuery($sql);

			$sql_semua = "SELECT * FROM inbox where user_id = " . $param->user_id;
			$get_data_semua = $this->dbload->resulSqlQuery($sql_semua);

			$result = array(
				'status' => true,
				'status_message' => "success",
				'detail' => [
					'jumlah_total' => count($get_data_semua),
					'jumlah_unread' => count($get_data),
				]
			);

			echo json_encode($result);
			die();
		}
	}

	function mark_read_inbox()
	{
		header('Content-Type: application/json');
		$url = base_url();

		$param = json_decode(file_get_contents("php://input"));

		if (!isset($param->user_id) || $param->user_id == '') {
			$result = array(
				'status' => false,
				'status_message' => "user_id is empty"
			);

			echo json_encode($result);
			die();
		} elseif (!isset($param->message_id) || $param->message_id == '') {
			$result = array(
				'status' => false,
				'status_message' => "message_id is empty"
			);

			echo json_encode($result);
			die();
		} else {



			$sql = "SELECT * FROM  fooddelivery_users WHERE id=" . $param->user_id;
			$cek_User = $this->dbload->resulSqlQuery($sql);

			if (count($cek_User) > 0) {

				$sql = "SELECT * FROM inbox where  id = " . $param->message_id;
				$get_cek_inbox = $this->dbload->resulSqlQuery($sql);

				if (count($get_cek_inbox) > 0) {
					$sql = "SELECT * FROM inbox where user_id = " . $param->user_id . " AND id = " . $param->message_id . " AND status = 'unread' ";
					$get_data = $this->dbload->resulSqlQuery($sql);

					if (count($get_data) > 0) {
						$arraydata = ["status" => "read"];
						$update_profile  = $this->inc->IncUpdate_Data('inbox', ["user_id" => $param->user_id, "id" => $param->message_id], $arraydata);

						$result = array(
							'status' => true,
							'status_message' => "success",

						);

						echo json_encode($result);
						die();
					} else {
						$result = array(
							'status' => false,
							'status_message' => "message inbox sudah diread",

						);

						echo json_encode($result);
						die();
					}
				} else {
					$result = array(
						'status' => false,
						'status_message' => "message inbox tidak ditemukan",

					);

					echo json_encode($result);
					die();
				}
			} else {
				$result = array(
					'status' => false,
					'status_message' => "user tidak ditemukan",

				);

				echo json_encode($result);
				die();
			}
		}
	}

	function taaruf_detail()
	{
		header('Content-Type: application/json');
		$url = base_url();

		$param = json_decode(file_get_contents("php://input"));

		if (!isset($param->trx_id) || $param->trx_id == '') {
			$result = array(
				'status' => false,
				'status_message' => "trx_id is empty"
			);

			echo json_encode($result);
			die();
		} else {



			// $sql = "SELECT request.id AS id_request, request.request_msg AS request_msg ,request.response_msg AS response_msg ,
			// 			request.created_at AS date_request,trx_id,fcm_chat_id,request.created_at,

			// 			request_taaruf_from.fullname AS request_fullname,request_taaruf_from.phone_no AS request_phone_no,
			// 			request_taaruf_from.email AS request_email, CONCAT( '" . substr_replace($this->config->item("base_url_https"), "", -1) . "', request_taaruf_from.image)  AS request_image,
			// 			request_taaruf_from.firebase_uid AS request_firebase_uid,

			// 				request_taaruf_from.nickname AS request_nickname, request_taaruf_from.birthdate AS request_birthdate, request_taaruf_from.sex AS request_sex, request_taaruf_from.address AS request_address,  request_taaruf_from.country AS request_country, request_taaruf_from.province AS request_province,
			//                 request_taaruf_from.city AS request_city,request_taaruf_from.district AS request_district,request_taaruf_from.village AS request_village,request_taaruf_from.lat AS request_lat,request_taaruf_from.lon AS request_lon,request_taaruf_from.ethnicity AS request_ethnicity,request_taaruf_from.religion AS request_religion,request_taaruf_from.marital_status AS request_marital_status,request_taaruf_from.hobby AS request_hobby,request_taaruf_from.biography AS request_biography,
			//                 request_taaruf_from.education AS request_education,request_taaruf_from.religious_education AS request_religious_education,request_taaruf_from.job AS request_job,request_taaruf_from.job_desc AS request_job_desc,request_taaruf_from.job_level AS request_job_level,request_taaruf_from.vision AS request_vision,
			//                 request_taaruf_from.mission AS request_mission,request_taaruf_from.marriage_purpose AS request_marriage_purpose,request_taaruf_from.ten_year_plan AS request_ten_year_plan,request_taaruf_from.couple_physical AS request_couple_physical,request_taaruf_from.couple_skin AS request_couple_skin,
			// 				request_taaruf_from.couple_height AS request_couple_height,request_taaruf_from.couple_weight AS request_couple_weight,request_taaruf_from.couple_ethnicity AS request_couple_ethnicity,
			// 				request_taaruf_from.couple_education AS request_couple_education,request_taaruf_from.couple_province AS request_couple_province,request_taaruf_from.couple_city AS request_couple_city,request_taaruf_from.couple_criteria AS request_couple_criteria,request_taaruf_from.five_time_pray AS request_five_time_pray,request_taaruf_from.sunnah_fasting AS request_sunnah_fasting,
			// 				request_taaruf_from.quran_reading AS request_quran_reading,request_taaruf_from.quran_routinity AS request_quran_routinity,request_taaruf_from.charity_routinity AS request_charity_routinity,request_taaruf_from.study_routinity AS request_study_routinity,
			// 				request_taaruf_from.blurred_image AS request_blurred_image,

			//                 request_taaruf_to.fullname AS to_fullname,request_taaruf_to.phone_no AS to_phone_no,request_taaruf_to.email AS to_email,
			//                 CONCAT( '" . substr_replace($this->config->item("base_url_https"), "", -1) . "', request_taaruf_to.image) AS to_image,request_taaruf_to.firebase_uid AS to_firebase_uid,
			//                 request_taaruf_to.nickname AS to_nickname, request_taaruf_to.birthdate AS to_birthdate, request_taaruf_to.sex AS to_sex, request_taaruf_to.address AS to_address,
			//                 request_taaruf_to.country AS to_country, request_taaruf_to.province AS to_province,
			//                 request_taaruf_to.city AS to_city,request_taaruf_to.district AS to_district,request_taaruf_to.village AS to_village,
			//                 request_taaruf_to.lat AS to_lat,request_taaruf_to.lon AS to_lon,request_taaruf_to.ethnicity AS to_ethnicity,request_taaruf_to.religion AS to_religion,
			//                 request_taaruf_to.marital_status AS to_marital_status,request_taaruf_to.hobby AS to_hobby,request_taaruf_to.biography AS to_biography,
			//                 request_taaruf_to.education AS to_education,request_taaruf_to.religious_education AS to_religious_education,request_taaruf_to.job AS to_job,
			//                 request_taaruf_to.job_desc AS to_job_desc,request_taaruf_to.job_level AS to_job_level,request_taaruf_to.vision AS to_vision,
			//                 request_taaruf_to.mission AS to_mission,request_taaruf_to.marriage_purpose AS to_marriage_purpose,request_taaruf_to.ten_year_plan AS to_ten_year_plan,
			//                 request_taaruf_to.couple_physical AS to_couple_physical,request_taaruf_to.couple_skin AS to_couple_skin,
			// 				request_taaruf_to.couple_height AS to_couple_height,request_taaruf_to.couple_weight AS to_couple_weight,request_taaruf_to.couple_ethnicity AS to_couple_ethnicity,
			// 				request_taaruf_to.couple_education AS to_couple_education,request_taaruf_to.couple_province AS to_couple_province,request_taaruf_to.couple_city AS to_couple_city,
			//                 request_taaruf_to.couple_criteria AS to_couple_criteria,request_taaruf_to.five_time_pray AS to_five_time_pray,request_taaruf_to.sunnah_fasting AS to_sunnah_fasting,
			// 				request_taaruf_to.quran_reading AS to_quran_reading,request_taaruf_to.quran_routinity AS to_quran_routinity,request_taaruf_to.charity_routinity AS to_charity_routinity,
			//                 request_taaruf_to.study_routinity AS to_study_routinity,request_taaruf_to.blurred_image AS to_blurred_image

			// 		FROM taaruf_request request  
			// 		JOIN 

			// 		(SELECT x.id, x.fullname, x.phone_no, x.email, x.firebase_uid, y.image, y.nickname, y.birthdate, y.sex, y.address,  y.country, y.province,
			//                 y.city,y.district,y.village,y.lat,y.lon,y.ethnicity,y.religion,y.marital_status,y.hobby,y.biography,
			//                 y.education,y.religious_education,y.job,y.job_desc,y.job_level,y.vision,
			//                 y.mission,y.marriage_purpose,y.ten_year_plan,y.couple_physical,y.couple_skin,
			// 				y.couple_height,y.couple_weight,y.couple_ethnicity,
			// 				y.couple_education,y.couple_province,y.couple_city,y.couple_criteria,y.five_time_pray,y.sunnah_fasting,
			// 				y.quran_reading,y.quran_routinity,y.charity_routinity,y.study_routinity,
			// 				y.blurred_image  FROM  fooddelivery_users x JOIN user_profile y ON x.id=y.user_id) request_taaruf_from

			// 		ON request.user_id = request_taaruf_from.id

			// 		JOIN 

			// 		(SELECT x.id, x.fullname, x.phone_no, x.email, x.firebase_uid, y.image, y.nickname, y.birthdate, y.sex, y.address,  y.country, y.province,
			//                 y.city,y.district,y.village,y.lat,y.lon,y.ethnicity,y.religion,y.marital_status,y.hobby,y.biography,
			//                 y.education,y.religious_education,y.job,y.job_desc,y.job_level,y.vision,
			//                 y.mission,y.marriage_purpose,y.ten_year_plan,y.couple_physical,y.couple_skin,
			// 				y.couple_height,y.couple_weight,y.couple_ethnicity,
			// 				y.couple_education,y.couple_province,y.couple_city,y.couple_criteria,y.five_time_pray,y.sunnah_fasting,
			// 				y.quran_reading,y.quran_routinity,y.charity_routinity,y.study_routinity,
			// 				y.blurred_image  FROM  fooddelivery_users x JOIN user_profile y ON x.id=y.user_id) request_taaruf_to 

			// 		ON request.request_to = request_taaruf_to.id

			// 		WHERE request.trx_id=" . $param->trx_id;

			$sql = " SELECT taaruf_request.*,fooddelivery_users.fullname FROM taaruf_request JOIN fooddelivery_users ON taaruf_request.user_id = fooddelivery_users.id  WHERE taaruf_request.trx_id=" . $param->trx_id;
			$get_detail = $this->dbload->resulSqlQuery($sql);

			if (count($get_detail) > 0) {
				$result = array(
					'status' => true,
					'status_message' => "success",
					'detail' => $get_detail[0],

				);

				echo json_encode($result);
				die();
			} else {
				$result = array(
					'status' => false,
					'status_message' => "Detail Not Found",

				);

				echo json_encode($result);
				die();
			}
		}
	}

	function accept_or_reject_taaruf()
	{
		header('Content-Type: application/json');
		$url = base_url();

		$param = json_decode(file_get_contents("php://input"));

		$param->trx_id;
		if (!isset($param->trx_id) || $param->trx_id == '') {
			$result = array(
				'status' => false,
				'status_message' => "trx_id is empty"
			);

			echo json_encode($result);
			die();
		} elseif (!isset($param->status) || $param->status == '') {
			$result = array(
				'status' => false,
				'status_message' => "status is empty"
			);

			echo json_encode($result);
			die();
		} else {

			if ($param->status != 'accept' && $param->status != 'reject') {
				$result = array(
					'status' => false,
					'status_message' => "status harus berisi  'accept' atau 'reject' "
				);

				echo json_encode($result);
				die();
			} else {

				$sql = "SELECT * FROM taaruf_request where trx_id = " . $param->trx_id;
				$cek_taaruf = $this->dbload->resulSqlQuery($sql);


				if (count($cek_taaruf) > 0) {
					$arraydata = ["status" => $param->status, "response_msg" => $param->message,];
					$update_profile  = $this->inc->IncUpdate_Data('taaruf_request', ["trx_id" => $param->trx_id], $arraydata);

					$yang_mengajak = $cek_taaruf;

					$sql = "SELECT * FROM fooddelivery_tokendata WHERE user_id=" . $yang_mengajak[0]->user_id;
					$token = $this->dbload->resulSqlQuery($sql);

					$sql = "SELECT * FROM user_profile WHERE user_id=" . $yang_mengajak[0]->request_to;
					$to = $this->dbload->resulSqlQuery($sql);


					if ($param->status == 'accept') {
						$message = "Alhamdulillah, Kakak " . $to[0]->nickname . " telah bersedia diajak taaruf, yuk mengenal lebih dekat lewat chating";
					} else {
						$message = "Maaf, permintaan taaruf kamu dengan Kakak " . $to[0]->nickname . " ditolak dengan alasan : " . $param->message;
					}

					$data_insert_inbox = [
						"user_id" => $cek_taaruf[0]->user_id,
						"message" => $message,
						"type" => "taaruf_request",
						"trx_id" => $cek_taaruf[0]->trx_id,
						"status" => "unread",
						"created_at" => date("Y-m-d H:i:s")

					];

					$insert_inbox  = $this->inc->IncSave_Data('inbox', $data_insert_inbox);

					$body =	[
						"notification" => [
							"click_action" => ".Inbox",
							"title"	=> "Taaruf Request",
							"body"	=> $message,
							"sound" => "default"
						],
						"data" => ["message" => "Notifikasi baru"],
						"to" => $token[0]->token
					];
					$push_notif = $this->fcm_send($body);
					$push_notif = json_decode($push_notif);

					// if ($push_notif->success == 1) {
					$result = array(
						'status' => true,
						'status_message' => "success"
					);

					echo json_encode($result);
					die();
					// } else {
					// 	$result = array(
					// 		'status' => false,
					// 		'status_message' => "Gagal Push Notifcation"
					// 	);

					// 	echo json_encode($result);
					// 	die();
					// }
				} else {
					$result = array(
						'status' => false,
						'status_message' => "taaruf request not found"
					);

					echo json_encode($result);
					die();
				}
			}
		}
	}

	function subscription_check()
	{
		/* encrypt_url() decrypt_url()
			Token  385ef7144b8ebc2d48aa915056e8cca5 [Syaria2021Toke01]
			0 = user tidak aktif (belum subscribe layanan chat)
			1 = user sudah aktif (sudah subscribed layanan chat)
			2 = user pending pembayaran (user sudah order layanan, tapi belum membayar)
		*/

		header('Content-Type: application/json');
		$url = base_url();

		$param = json_decode(file_get_contents("php://input"));


		if (!isset($param->user_id) || $param->user_id == '') {
			$result = array(
				'status' => false,
				'status_message' => "user_id is empty"
			);

			echo json_encode($result);
			die();
		} else {

			// $cekgo = $this->inc->ResultAllby_ID("paket_register", array(
			// 	"user_id" => $param->user_id,

			// ));
			$sql = " select categori from paket_register where user_id = " . $param->user_id . " and status=200 and DATE(batas_akhir) >= DATE(NOW()) and batas_akhir is not null";
			$cekgo = $this->dbload->resulSqlQuery($sql);

			$paket = [];
			foreach ($cekgo as $key => $value) {
				// $paket 
				array_push($paket, $value->categori);
			}

			$result = array(
				'status' => true,
				'status_message' => "success",
				'detail' => $paket
			);

			echo json_encode($result);
			die();
		}
	}
	function user_list_by_ustad_id()
	{
		header('Content-Type: application/json');
		$param = json_decode(file_get_contents("php://input"));


		if (!isset($param->pageno) || $param->pageno == '') {
			$result = array(
				'status' => false,
				'status_message' => "pageno is empty"
			);

			echo json_encode($result);
			die();
		} elseif (!isset($param->limit) || $param->limit == '') {
			$result = array(
				'status' => false,
				'status_message' => "limit is empty"
			);

			echo json_encode($result);
			die();
		} elseif (!isset($param->ustadz_id) || $param->ustadz_id == '') {
			$result = array(
				'status' => false,
				'status_message' => "ustadz_id is empty"
			);

			echo json_encode($result);
			die();
		} elseif ($param->pageno == 0 || $param->pageno == '0') {
			$result = array(
				'status' => false,
				'status_message' => "pageno can't be 0 "
			);

			echo json_encode($result);
			die();
		} else {
			$pageno = (int)$param->pageno - 1;
			$sql = "select x.*,y.*,CONCAT( '" . substr_replace($this->config->item("base_url_https"), "", -1) . "', y.image ) AS image  FROM fooddelivery_users x  JOIN user_profile y ON  x.id=y.user_id WHERE y.ustadz_id=" . $param->ustadz_id . " ORDER BY x.fullname	LIMIT " . $param->limit . " OFFSET " . $pageno;
			$get_data = $this->dbload->resulSqlQuery($sql);

			$sql_semua = "select * FROM fooddelivery_users x  JOIN user_profile y ON  x.id=y.user_id WHERE y.ustadz_id=" . $param->ustadz_id . " ORDER BY x.fullname";
			$get_data_semua = $this->dbload->resulSqlQuery($sql_semua);

			if (count($get_data) > 0) {
				$result = array(
					'status' => true,
					'status_message' => "success",
					'count' => count($get_data_semua),
					'detail' => $get_data,
					// 'details'=>$get_data_semua
				);

				echo json_encode($result);
				die();
			} else {
				$result = array(
					'status' => false,
					'status_message' => "User Not Found"
				);

				echo json_encode($result);
				die();
			}
		}
	}

	function block_chat()
	{
		header('Content-Type: application/json');
		$param = json_decode(file_get_contents("php://input"));



		if (!isset($param->firebase_uid) || $param->firebase_uid == '') {
			$result = array(
				'status' => false,
				'status_message' => "firebase_uid is empty"
			);

			echo json_encode($result);
			die();
		} elseif (!isset($param->blocker_uid) || $param->blocker_uid == '') {
			$result = array(
				'status' => false,
				'status_message' => "blocker_uid is empty"
			);

			echo json_encode($result);
			die();
		} elseif (!isset($param->user_id) || $param->user_id == '') {
			$result = array(
				'status' => false,
				'status_message' => "user_id is empty"
			);

			echo json_encode($result);
			die();
		} else {

			$user_id = $param->user_id;
			$firebase_uid = $param->firebase_uid;
			$blocker_uid = $param->blocker_uid;

			$data_chat_block = [
				"user_id" => $user_id,
				"firebase_uid" => $firebase_uid,
				"blocker_uid" => $blocker_uid,
				"status" => 1,
				"created_at" => date("Y-m-d H:i:s")

			];

			$insert_chat_block  = $this->inc->IncSave_Data('chat_block', $data_chat_block);
			if ($insert_chat_block) {
				$result = array(
					'status' => true,
					'status_message' => "success"
				);

				echo json_encode($result);
				die();
			} else {
				$result = array(
					'status' => false,
					'status_message' => "gagal insert"
				);

				echo json_encode($result);
				die();
			}
		}
	}

	function unblock_chat()
	{
		header('Content-Type: application/json');
		$param = json_decode(file_get_contents("php://input"));

		$user_id = $param->user_id;
		$firebase_uid = $param->firebase_uid;

		if (!isset($firebase_uid) || $firebase_uid == '') {
			$result = array(
				'status' => false,
				'status_message' => "firebase_uid is empty"
			);

			echo json_encode($result);
			die();
		} elseif (!isset($user_id) || $user_id == '') {
			$result = array(
				'status' => false,
				'status_message' => "user_id is empty"
			);

			echo json_encode($result);
			die();
		} else {

			$sql_semua = "select * FROM chat_block where user_id=" . $user_id . " and firebase_uid=" . $firebase_uid;
			$check_chat_block = $this->dbload->resulSqlQuery($sql_semua);

			if (count($check_chat_block) > 0) {


				$arraydata = ["status" => 0, "updated_at" => date("Y-m-d H:i:s")];
				$update_unblock_chat  = $this->inc->IncUpdate_Data('chat_block', ["id" => $check_chat_block[0]->id], $arraydata);


				// $insert_chat_block  = $this->inc->IncSave_Data('chat_block', $data_chat_block);
				if ($update_unblock_chat) {
					$result = array(
						'status' => true,
						'status_message' => "success"
					);

					echo json_encode($result);
					die();
				} else {
					$result = array(
						'status' => false,
						'status_message' => "gagal update"
					);

					echo json_encode($result);
					die();
				}
			} else {
				$result = array(
					'status' => false,
					'status_message' => "chat_block not found"
				);

				echo json_encode($result);
				die();
			}
		}
	}

	function chat_block_list()
	{
		header('Content-Type: application/json');
		$param = json_decode(file_get_contents("php://input"));

		$user_id = $param->user_id;
		// $firebase_uid = $param->firebase_uid;

		if (!isset($user_id) || $user_id == '') {
			$result = array(
				'status' => false,
				'status_message' => "user_id is empty"
			);

			echo json_encode($result);
			die();
		} else {

			$sql_semua = "select * FROM chat_block where user_id=" . $user_id;
			$check_chat_block = $this->dbload->resulSqlQuery($sql_semua);


			$result = array(
				'status' => true,
				'status_message' => "success",
				'detail' => $check_chat_block
			);

			echo json_encode($result);
			die();
		}
	}

	function check_block()
	{
		header('Content-Type: application/json');
		$param = json_decode(file_get_contents("php://input"));

		if (!isset($param->firebase_uid) || $param->firebase_uid == '') {
			$result = array(
				'status' => false,
				'status_message' => "firebase_uid is empty"
			);

			echo json_encode($result);
			die();
		} elseif (!isset($param->blocker_uid) || $param->blocker_uid == '') {
			$result = array(
				'status' => false,
				'status_message' => "blocker_uid is empty"
			);

			echo json_encode($result);
			die();
		} else {

			$firebase_uid = $param->firebase_uid;
			$blocker_uid = $param->blocker_uid;

			$sql_semua = "select * FROM chat_block where firebase_uid='" . $firebase_uid . "' AND blocker_uid='" . $blocker_uid . "'";
			$check_chat = $this->dbload->resulSqlQuery($sql_semua);

			if (count($check_chat) > 0) {
				$result = array(
					'status' => true,
					'status_message' => "success",
					'detail' => $check_chat
				);

				echo json_encode($result);
				die();
			} else {
				$result = array(
					'status' => false,
					'status_message' => "Not Found"
				);

				echo json_encode($result);
				die();
			}
		}
	}

	function fcm_send($body)
	{
		$body = $body;

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://fcm.googleapis.com/fcm/send',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => json_encode($body),
			CURLOPT_HTTPHEADER => array(
				'Content-Type: application/json',
				'Authorization: key=AAAARIK9ayc:APA91bHtj_IDPEK3x-en_RHtsu6swMiHLeKa45aZ2zL5oVxbKOXlR4Rq9d6ANI5cfHY6iwbl5Rq7yGpqMVUu7sA68UERx4FHRys6vA_8fKxGkwzpRY-2KFiAzcO9O_Tv_fq2b0IT7ZHN'
			),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		return $response;
	}
}
