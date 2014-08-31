<?php

class YahooComponent extends Component {

    //カテゴリーIDを取得するURLを作成する（後で削除する）
    public function get_category_id_url() {
        $category_id_url = "http://shopping.yahooapis.jp/ShoppingWebService/V1/categorySearch?appid=dj0zaiZpPXdENWwzazJwWDVhcSZzPWNvbnN1bWVyc2VjcmV0Jng9Mzc-&category_id=1";
        return $category_id_url; 
    }

    //アクセスするurlを１つの変数の配列にまとめる
    public function get_access_url() {
        //テレビのアクセスurlを取得
        $access_url['tv'] = $this->make_tv_url();
        //洗濯機のアクセスurlを取得
        $access_url['washer'] = $this->make_washer_url();
        //冷蔵庫のアクセスurlを取得
        $access_url['fridge'] = $this->make_fridge_url();
        //電子レンジのアクセスurlを取得
        $access_url['microwave_oven'] = $this->make_microwave_oven_url();
        //電気ケトルのアクセスurlを取得
        $access_url['kettle'] = $this->make_kettle_url();
        //電気ケトルのアクセスurlを取得
        $access_url['rice_cooker'] = $this->make_rice_cooker_url();
        //本棚のアクセスurlを取得
        $access_url['bookshelf'] = $this->make_bookshelf_url();
        //ソファーのアクセスurlを取得
        $access_url['sofa'] = $this->make_sofa_url();
        //机のアクセスurlを取得
        $access_url['desk'] = $this->make_desk_url();
        //椅子のアクセスurlを取得
        $access_url['chair'] = $this->make_chair_url();
        //ベッドのアクセスurlを取得
        $access_url['bed'] = $this->make_bed_url();
        //マットレスのアクセスurlを取得
        $access_url['mattress'] = $this->make_mattress_url();
        //布団のアクセスurlを取得
        $access_url['coverlet'] = $this->make_coverlet_url();
        //枕のアクセスurlを取得
        $access_url['pillow'] = $this->make_pillow_url();
        //フライパンのアクセスurlを取得
        $access_url['frying_pan'] = $this->make_frying_pan_url();
        //皿のアクセスurlを取得
        $access_url['plate'] = $this->make_plate_url();
        //包丁のアクセスurlを取得
        $access_url['knife'] = $this->make_knife_url();
        //橋のアクセスurlを取得
        $access_url['chopsticks'] = $this->make_chopsticks_url();

        return $access_url;
    }
    //ベースURLを定義する
    public function make_base_url() {
        //スタンダードurlの指定
        $standerd_url = 'http://shopping.yahooapis.jp/ShoppingWebService/V1/json/itemSearch?';
        //IDの指定
        $appid = 'dj0zaiZpPXdENWwzazJwWDVhcSZzPWNvbnN1bWVyc2VjcmV0Jng9Mzc-';
        //画像サイズの指定
        $image_size = '300';
        //並び順の指定
        $sort = '%2Bprice';
        //在庫（有）の指定
        $availability = '1';
        //最大件数の設定
        $hits = '2';
        //不変のurlを作成
        $base_url = $standerd_url.'appid='.$appid.'&image_size='.$image_size.'&sort='.$sort.'&availability='.$availability.'&hits='.$hits;

        return $base_url;
    }
    //テレビ情報を取得するURLを定義する
    public function make_tv_url() {
        $base_url = $this->make_base_url();
        //キーワード
        $query = '液晶テレビ 20地上・BS';
        //カテゴリーID
        $category_id = '2504';
        //最低価格
        $price_from = '19800';   
        //アクセスするurl
        $access_url = $base_url.'&query='.$query.'&category_id='.$category_id.'&price_from='.$price_from;
        return $access_url;
    }
    //洗濯機の情報を取得するURLを定義する
    public function make_washer_url() {
        $base_url = $this->make_base_url();
        //キーワード
        $query = '全自動洗濯機';
        //カテゴリーID
        $category_id = '2505';
        //最低価格
        $price_from = '15000';  
        //アクセスするurl
        $access_url = $base_url.'&query='.$query.'&category_id='.$category_id.'&price_from='.$price_from;
        return $access_url;
    }
    //冷蔵庫の情報を取得するURLを定義する
    public function make_fridge_url() {
        $base_url = $this->make_base_url();
        //キーワード
        $query = '冷蔵庫';
        //カテゴリーID
        $category_id = '2505';
        //最低価格
        $price_from = '20000';  
        //アクセスするurl
        $access_url = $base_url.'&query='.$query.'&category_id='.$category_id.'&price_from='.$price_from;
        return $access_url;
    }
    //電子レンジの情報を取得するURLを定義する
    public function make_microwave_oven_url() {
        $base_url = $this->make_base_url();
        //キーワード
        $query = '電子レンジ';
        //カテゴリーID
        $category_id = '2505';
        //最低価格
        $price_from = '10000';  
        //アクセスするurl
        $access_url = $base_url.'&query='.$query.'&category_id='.$category_id.'&price_from='.$price_from;
        return $access_url;
    }
    //ケトルの情報を取得するURLを定義する
    public function make_kettle_url() {
        $base_url = $this->make_base_url();
        //キーワード
        $query = '電気ケトル';
        //カテゴリーID
        $category_id = '2505';
        //最低価格
        $price_from = '3000';  
        //アクセスするurl
        $access_url = $base_url.'&query='.$query.'&category_id='.$category_id.'&price_from='.$price_from;
        return $access_url;
    }
    //炊飯器の情報を取得するURLを定義する
    public function make_rice_cooker_url() {
        $base_url = $this->make_base_url();
        //キーワード
        $query = '炊飯器';
        //カテゴリーID
        $category_id = '2505';
        //最低価格
        $price_from = '5000';  
        //アクセスするurl
        $access_url = $base_url.'&query='.$query.'&category_id='.$category_id.'&price_from='.$price_from;
        return $access_url;
    }
    //本棚の情報を取得する
     public function make_bookshelf_url() {
        $base_url = $this->make_base_url();
        //キーワード
        $query = '本棚';
        //カテゴリーID
        $category_id = '2506';
        //最低価格
        $price_from = '4000';   
        //アクセスするurl
        $access_url = $base_url.'&query='.$query.'&category_id='.$category_id.'&price_from='.$price_from;
        return $access_url;
    }   
    //ソファーの情報を取得する
     public function make_sofa_url() {
        $base_url = $this->make_base_url();
        //キーワード
        $query = 'ソファー';
        //カテゴリーID
        $category_id = '2506';
        //最低価格
        $price_from = '10000';   
        //アクセスするurl
        $access_url = $base_url.'&query='.$query.'&category_id='.$category_id.'&price_from='.$price_from;
        return $access_url;
    }
    //デスクの情報を取得する
     public function make_desk_url() {
        $base_url = $this->make_base_url();
        //キーワード
        $query = '机';
        //カテゴリーID
        $category_id = '2506';
        //最低価格
        $price_from = '7000';   
        //アクセスするurl
        $access_url = $base_url.'&query='.$query.'&category_id='.$category_id.'&price_from='.$price_from;
        return $access_url;
    }
    //椅子の情報を取得する
     public function make_chair_url() {
        $base_url = $this->make_base_url();
        //キーワード
        $query = 'チェア';
        //カテゴリーID
        $category_id = '2506';
        //最低価格
        $price_from = '5000';   
        //アクセスするurl
        $access_url = $base_url.'&query='.$query.'&category_id='.$category_id.'&price_from='.$price_from;
        return $access_url;
    }
    //ベッドの情報を取得する
     public function make_bed_url() {
        $base_url = $this->make_base_url();
        //キーワード
        $query = 'ベッド';
        //カテゴリーID
        $category_id = '2506';
        //最低価格
        $price_from = '10000';   
        //アクセスするurl
        $access_url = $base_url.'&query='.$query.'&category_id='.$category_id.'&price_from='.$price_from;
        return $access_url;
    }
    //マットレスの情報を取得する
     public function make_mattress_url() {
        $base_url = $this->make_base_url();
        //キーワード
        $query = 'マットレス';
        //カテゴリーID
        $category_id = '2506';
        //最低価格
        $price_from = '10000';   
        //アクセスするurl
        $access_url = $base_url.'&query='.$query.'&category_id='.$category_id.'&price_from='.$price_from;
        return $access_url;
    }
    //布団の情報を取得する
     public function make_coverlet_url() {
        $base_url = $this->make_base_url();
        //キーワード
        $query = '布団';
        //カテゴリーID
        $category_id = '2506';
        //最低価格
        $price_from = '5000';   
        //アクセスするurl
        $access_url = $base_url.'&query='.$query.'&category_id='.$category_id.'&price_from='.$price_from;
        return $access_url;
    }
    //マクラの情報を取得する
     public function make_pillow_url() {
        $base_url = $this->make_base_url();
        //キーワード
        $query = '枕';
        //カテゴリーID
        $category_id = '2506';
        //最低価格
        $price_from = '3000';   
        //アクセスするurl
        $access_url = $base_url.'&query='.$query.'&category_id='.$category_id.'&price_from='.$price_from;
        return $access_url;
    }
    //フライパンの情報を取得する
     public function make_frying_pan_url() {
        $base_url = $this->make_base_url();
        //キーワード
        $query = 'フライパン';
        //カテゴリーID
        $category_id = '2508';
        //最低価格
        $price_from = '1000';   
        //アクセスするurl
        $access_url = $base_url.'&query='.$query.'&category_id='.$category_id.'&price_from='.$price_from;
        return $access_url;
    }
    //食器の情報を取得する
     public function make_plate_url() {
        $base_url = $this->make_base_url();
        //キーワード
        $query = '皿';
        //カテゴリーID
        $category_id = '2508';
        //最低価格
        $price_from = '100';   
        //アクセスするurl
        $access_url = $base_url.'&query='.$query.'&category_id='.$category_id.'&price_from='.$price_from;
        return $access_url;
    }
    //包丁の情報を取得する
     public function make_knife_url() {
        $base_url = $this->make_base_url();
        //キーワード
        $query = '包丁';
        //カテゴリーID
        $category_id = '2508';
        //最低価格
        $price_from = '1000';
        //アクセスするurl
        $access_url = $base_url.'&query='.$query.'&category_id='.$category_id.'&price_from='.$price_from;
        return $access_url;
    }
    //箸の情報を取得する
     public function make_chopsticks_url() {
        $base_url = $this->make_base_url();
        //キーワード
        $query = '箸';
        //カテゴリーID
        $category_id = '2508';
        //最低価格
        $price_from = '100';
        //アクセスするurl
        $access_url = $base_url.'&query='.$query.'&category_id='.$category_id.'&price_from='.$price_from;
        return $access_url;
    }
    //XMLデータを配列形式で取得する
    public function get_item_data($access_url) {
        //jsonファイルを取得する
        $json = file_get_contents($access_url,true);
        //jsonファイルをデコードして連想配列に変換する
        $array = json_decode($json,true);
        return $array;
    }
    //配列の中で必要なデータだけ取り出す
    public function extract_utilize_data($array) {
        //ループに不都合な配列を削除する
        unset($array['ResultSet']['0']['Result']['Request']);
        unset($array['ResultSet']['0']['Result']['Modules']);
        unset($array['ResultSet']['0']['Result']['_container']);
        //必要なデータのみをデータに格納する
        foreach($array['ResultSet']['0']['Result'] as $key => $value) {
            //名称
            $data[$key]['Name'] = $value['Name'];
            //画像
            $data[$key]['ImageUrl'] = $value['ExImage']['Url'];
            //価格
            $data[$key]['Price'] = $value['Price']['_value'];
        }
        return $data;
    }

    //カテゴリー名を追加する
    public function add_category_name($data) {
        foreach ($data as $key => $value) {
            for($i = 0; $i<count($value); $i++) {
                //カテゴリー名
                switch($key) {
                    case 'tv';
                    $data[$key][$i]['Category'] = 'テレビ';
                    break;
                    case 'rice_cooker';
                    $data[$key][$i]['Category'] = '炊飯器';
                    break;
                    case 'chair';
                    $data[$key][$i]['Category'] = 'チェア';
                    break;
                    case 'pillow';
                    $data[$key][$i]['Category'] = '枕';
                    break;
                    case 'washer';
                    $data[$key][$i]['Category'] = '洗濯機';
                    break;
                    case 'bookshelf';
                    $data[$key][$i]['Category'] = '本棚';
                    break;
                    case 'bed';
                    $data[$key][$i]['Category'] = 'ベッド';
                    break;
                    case 'frying_pan';
                    $data[$key][$i]['Category'] = 'フライパン';
                    break;
                    case 'fridge';
                    $data[$key][$i]['Category'] = '冷蔵庫';
                    break;
                    case 'sofa';
                    $data[$key][$i]['Category'] = 'ソファ';
                    break;
                    case 'mattress';
                    $data[$key][$i]['Category'] = 'マットレス';
                    break;
                    case 'plate';
                    $data[$key][$i]['Category'] = '皿';
                    break;
                    case 'microwave_oven';
                    $data[$key][$i]['Category'] = '電子レンジ';
                    break;
                    case 'desk';
                    $data[$key][$i]['Category'] = 'デスク';
                    break;
                    case 'coverlet';
                    $data[$key][$i]['Category'] = '布団';
                    break;
                    case 'knife';
                    $data[$key][$i]['Category'] = '包丁';
                    break;
                    case 'kettle';
                    $data[$key][$i]['Category'] = '電気ケトル';
                    break;
                    case 'chopsticks';
                    $data[$key][$i]['Category'] = '箸';
                    break;
                }
            }
        }
        return $data;
    }

}