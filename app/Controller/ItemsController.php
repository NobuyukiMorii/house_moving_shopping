<?php

class ItemsController extends AppController {
	//yahooコンポーネントとリクエストハンドラーを使う
	public $components = array('Yahoo','RequestHandler');

	//ランディングページ
	public function index() {
		//レイアウトファイルは使わない
		$this->autoLayout = false;
        //スマートフォン判定
		if($this->RequestHandler->isMobile()) {
    		$this->theme = 'Mobile';
		}
	}

	//メインページ
	public function main() {
		//レイアウトファイルは使わない
		$this->autoLayout = false;
        //スマートフォン判定
		if($this->RequestHandler->isMobile()) {
    		$this->theme = 'Mobile';
		}
		//最初のビューで表示する時に使うurlを取得する（１件取得）
		$single_hit = '1';
		$access_url = $this->Yahoo->get_url($single_hit);
		//データを取得し、カテゴリーを追加する
		foreach ($access_url as $key => $value){
		  	//データを配列で取得する
		  	$array[$key] = $this->Yahoo->get_item_data($value);
			//利用するデータを抽出する
			$data[$key] = $this->Yahoo->extract_utilize_data($array[$key]);
			//カテゴリー名を追加する
			$data = $this->Yahoo->add_category_name($data);
		}
		//jsで利用するurlを取得する（20件取得）
		$twenty_hit = '20';
		$js_url = $this->Yahoo->get_url($twenty_hit);
		//Viewに渡す
		$this->set(compact('data','access_url','js_url'));
	}

}
