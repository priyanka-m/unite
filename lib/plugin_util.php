<?php

class Plugins_Util{
	function plugins_util(){
	}
	
	public static function construct_unite_tables(){
		$query = "create table unite
			(oc_username varchar(20),
			 service_name varchar(20),
			 service_user varchar(20),
			 resource varchar(100),
			 sync numeric(2),
			 fetch_at time,
			 cron_pattern varchar(5)
		    )";
		 $prepared = OC_DB::prepare($query);
		 $execute = $prepared->execute();
		 if($execute){
			 return true;
		 }
		 else{
			 return false;
		 }
    }
	
	public static function query($query){
		$query_prep = OC_DB::prepare($query);
		$result = $query_prep->execute();
		return $result;
	}
	
	public static function query_and_fetchall($query){
		$query_prep = OC_DB::prepare($query);
		$result = $query_prep->execute()->fetchAll();
		return $result;
	}
	
	public static function check_unite_tables_setup(){
		$query = ("show tables like 'unite' ");
		$exists = OC_DB::query($query);
		return $exists;
	}
	
}
?>
