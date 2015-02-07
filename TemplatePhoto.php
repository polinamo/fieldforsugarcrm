require_once('modules/DynamicFields/templates/Fields/TemplateText.php');
class TemplatePhoto extends TemplateText{
	var $type = 'photo';	
		
	function get_field_def(){
		$def = parent::get_field_def();
		$def['studio'] = 'visible';		
		$def['type'] = 'photo';
		$def['dbType'] = 'varchar';
		$def['len']= 255;
		
	}
		}
?>