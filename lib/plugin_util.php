<?php
class Plugins_Util{
	private static $dbconnection=false;
	function plugins_util(){
	}
	public static function connect_OC_DB(){
		$connect=OC_DB::connect();
		if($connect){
			$dbconnection=true;
			return true;
		}
		else{
			return false;
		}
		
	}
	
	public static function construct_unite_tables(){
			$query="create table unite1
			(oc_username varchar(20),
			 unite_service_name varchar(20),
			 unite_service_user varchar(20),
			 sync numeric(2),
			 fetch_at timestamp,
			 cron_pattern varchar(5)
		 )";
		 $prepared=OC_DB::prepare($query);
		 $execute=$prepared->execute();
		 if($execute){
			 return true;
		 }
		 else{
			 return false;
		 }
    }
	
	public static function query($query){
		$query_prep=OC_DB::prepare($query);
		$result=$query_prep->execute();
		return $result;
	}
	public static function disconnect_OC_DB(){
		if($dbconnection){
			$dbconnection=OC_DB::disconnect;
		}
		return $dbconnection;
	}
	public static function check_unite_tables_setup(){
		$query=("show tables like 'unite1' ");
		$exists=OC_DB::query($query);
		return $exists;
		/*if($exists){
			return true;
		}
		else{
			return false;
		}*/
	}
}
?>
