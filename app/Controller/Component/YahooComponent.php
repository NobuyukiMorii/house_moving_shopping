<?php

class YahooComponent extends Component {

    //各カテゴリー共通のurl（common_url）の配列。$hitは取得する件数。
    public function define_common_url_array($hit) {
        $url['base'] = 'http://shopping.yahooapis.jp/ShoppingWebService/V1/json/itemSearch?';
        $url['appid'] = 'dj0zaiZpPXdENWwzazJwWDVhcSZzPWNvbnN1bWVyc2VjcmV0Jng9Mzc-';
        $url['image_size'] = '300';
        $url['sort'] = '%2Bsold';
        $url['availability'] = '1';
        $url['hits'] = $hit;
        return $url;
    }

    //カテゴリーごとに設定するパラメータ。
    public function define_parameter_array() {

        $info['tv']['category_id'] = '2504';
        $info['tv']['price_from'] = '19800';
        $info['tv']['query'] = '液晶テレビ 20地上・BS';

        $info['washer']['category_id'] = '2505';
        $info['washer']['price_from'] = '15000';
        $info['washer']['query'] = 'ドラム式洗濯機';

        $info['fridge']['category_id'] = '2505';
        $info['fridge']['price_from'] = '20000';
        $info['fridge']['query'] = '冷蔵庫';
        

        $info['microwave_oven']['category_id'] = '2505';
        $info['microwave_oven']['price_from'] = '10000';
        $info['microwave_oven']['query'] = '電子レンジ';

        $info['kettle']['category_id'] = '2505';
        $info['kettle']['price_from'] = '3000';
        $info['kettle']['query'] = '電気ケトル';

        $info['cleaner']['category_id'] = '2505';
        $info['cleaner']['price_from'] = '3000';
        $info['cleaner']['query'] = '掃除機';

        $info['rice_cooker']['category_id'] = '2505';
        $info['rice_cooker']['price_from'] = '5000';
        $info['rice_cooker']['query'] = '炊飯器';

        $info['dryer']['category_id'] = '2505';
        $info['dryer']['price_from'] = '3000';
        $info['dryer']['query'] = 'ドライヤー';

        $info['bookshelf']['category_id'] = '2506';
        $info['bookshelf']['price_from'] = '4000';
        $info['bookshelf']['query'] = '本棚';

        $info['sofa']['category_id'] = '2506';
        $info['sofa']['price_from'] = '10000';
        $info['sofa']['query'] = 'ソファ';

        $info['desk']['category_id'] = '2506';
        $info['desk']['price_from'] = '7000';
        $info['desk']['query'] = '机';

        $info['chair']['category_id'] = '2506';
        $info['chair']['price_from'] = '5000';
        $info['chair']['query'] = 'チェア';

        $info['bed']['category_id'] = '2506';
        $info['bed']['price_from'] = '10000';
        $info['bed']['query'] = 'ベッド';

        $info['mattress']['category_id'] = '2506';
        $info['mattress']['price_from'] = '10000';
        $info['mattress']['query'] = 'マットレス';

        $info['coverlet']['category_id'] = '2506';
        $info['coverlet']['price_from'] = '5000';
        $info['coverlet']['query'] = '布団';

        $info['pillow']['category_id'] = '2506';
        $info['pillow']['price_from'] = '3000';
        $info['pillow']['query'] = '枕';


        $info['frying_pan']['category_id'] = '2508';
        $info['frying_pan']['price_from'] = '1000';
        $info['frying_pan']['query'] = 'フライパン';

        $info['plate']['category_id'] = '2508';
        $info['plate']['price_from'] = '100';
        $info['plate']['query'] = '皿';

        $info['knife']['category_id'] = '2508';
        $info['knife']['price_from'] = '1000';
        $info['knife']['query'] = '包丁';

        $info['chopsticks']['category_id'] = '2508';
        $info['chopsticks']['price_from'] = '100';
        $info['chopsticks']['query'] = '箸';

        $info['water']['category_id'] = '2498';
        $info['water']['price_from'] = '1000';
        $info['water']['query'] = '水';

        $info['ramen']['category_id'] = '2498';
        $info['ramen']['price_from'] = '1000';
        $info['ramen']['query'] = 'カップラーメン';

        $info['rice']['category_id'] = '2498';
        $info['rice']['price_from'] = '1000';
        $info['rice']['query'] = '米';

        $info['pasta']['category_id'] = '2498';
        $info['pasta']['price_from'] = '100';
        $info['pasta']['query'] = 'パスタ スパゲティ';

        $info['juice']['category_id'] = '2498';
        $info['juice']['price_from'] = '100';
        $info['juice']['query'] = 'レトルトカレー';

        $info['toothbrush']['category_id'] = '2508';
        $info['toothbrush']['price_from'] = '100';
        $info['toothbrush']['query'] = '歯ブラシ';

        $info['shampoo']['category_id'] = '2508';
        $info['shampoo']['price_from'] = '100';
        $info['shampoo']['query'] = 'シャンプー';

        $info['rinse']['category_id'] = '2508';
        $info['rinse']['price_from'] = '100';
        $info['rinse']['query'] = 'リンス';

        return $info;

    }

    //アクセスするurlを取得する
    public function get_url($hit) {
        //扱う配列を定義
        $common_url_array = $this->define_common_url_array($hit);
        $parameter_url_array = $this->define_parameter_array();
        //カテゴリー共通のurlを作成
        $common_url = '';
        foreach ($common_url_array as $key => $value) {
            if($value === reset($common_url_array)) {
                $common_url = $value;
                continue;
            } 
            $common_url = $common_url.'&'.$key.'='.$value;
        }
        //カテゴリーごとにパラメータを設定する箇所のurlを作成する
        $parameter_url = array();
        foreach ($parameter_url_array as $key => $value) {
            $parameter_url[$key] = '';
            foreach ($value as $key2 => $value2) {
                if($value2 === reset($value)) {
                    $parameter_url[$key] = '&'.$key2.'='.$value2;
                    continue;
                }
                $parameter_url[$key] = $parameter_url[$key].'&'.$key2.'='.$value2;
            }
        }
        //共通部分のurlと、カテゴリーごとにパラメータを設定したurlを結合する
        $url = array();
        foreach ($parameter_url as $key => $value) {
            $url[$key] = $common_url.$value;
        }
        return $url;
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
            //商品URL
            $data[$key]['Url'] = $value['Url'];
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
                    case 'dryer';
                    $data[$key][$i]['Category'] = 'ドライヤー';
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
                    case 'water';
                    $data[$key][$i]['Category'] = '水';
                    break;
                    case 'ramen';
                    $data[$key][$i]['Category'] = 'カップ麺';
                    break;
                    case 'rice';
                    $data[$key][$i]['Category'] = 'お米';
                    break;
                    case 'pasta';
                    $data[$key][$i]['Category'] = 'パスタ';
                    break;
                    case 'juice';
                    $data[$key][$i]['Category'] = 'カレー';
                    break;
                    case 'cleaner';
                    $data[$key][$i]['Category'] = '掃除機';
                    break;
                    case 'toothbrush';
                    $data[$key][$i]['Category'] = '歯ブラシ';
                    break;
                    case 'shampoo';
                    $data[$key][$i]['Category'] = 'シャンプー';
                    break;
                    case 'rinse';
                    $data[$key][$i]['Category'] = 'リンス';
                    break;
                }
            }
        }
        return $data;
    }


}