<?
require_once __DIR__ . "/dropdownlist.php";
require_once __DIR__ . "/../../sql/sqlstaticvalues.php";

class MinutesField extends DropDownList 
{
        function __construct($param1 = NULL)
        {
                parent::__construct($param1);
		$this->datasource = new SqlStaticValues(  "0=00"
                                                       . ",1=01"
                                                       . ",2=02"
                                                       . ",3=03"
                                                       . ",4=04"
                                                       . ",5=05"
                                                       . ",6=06"
                                                       . ",7=07"
                                                       . ",8=08"
                                                       . ",9=09"
                                                       . ",10=10"
                                                       . ",11=11"
                                                       . ",12=12"
                                                       . ",13=13"
                                                       . ",14=14"
                                                       . ",15=15"
                                                       . ",16=16"
                                                       . ",17=17"
                                                       . ",18=18"
                                                       . ",19=19"
                                                       . ",20=20"
                                                       . ",20=20"
                                                       . ",21=21"
                                                       . ",22=22"
                                                       . ",23=23"
						       );

        }

}


?>
