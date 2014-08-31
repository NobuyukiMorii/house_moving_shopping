<?php

class ItemsController extends AppController {

	public $components = array('DebugKit.Toolbar','Yahoo');

	public function main() {
		$this->autoLayout = false;
		//カテゴリーIDを取得するurlを作成する
		$category_url = $this->Yahoo->get_category_id_url();
		//テレビのアクセスurl
		$access_url = $this->Yahoo->get_access_url();
		foreach ($access_url as $key => $value){
		  	//データを配列で取得する
		  	$array[$key] = $this->Yahoo->get_item_data($value);
			//利用するデータを抽出する
			$data[$key] = $this->Yahoo->extract_utilize_data($array[$key]);
			//カテゴリー名を追加する
			$data = $this->Yahoo->add_category_name($data);
		}
		//Viewに渡す
		$this->set(compact('data','access_url'));
	}


}
