<?php 
    // htmlファイルの置いてあるディレクトリのファイル一覧を取得
    $html_list = glob('html/*');

    // htmlファイルの更新時間を】入れる配列
    $html_time_list = array();

    // すべてのファイルの更新時間を取得
    foreach ($html_list as $html) {
        $html_time_list[$html] = date("Y/m/d H:i:s",filemtime($html));
    }

    // 更新時間が最新のファイルを取得
    $max = array_keys($html_time_list, max($html_time_list));
    $latest_html = $max[0];

    // urlと連結
    $url = 'http://localhost/html_read/'. $latest_html;
    
    // リダイレクト処理
    header('Location: '. $url, true);

    exit;
?>