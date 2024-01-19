<?php

namespace copoka\RssFeed;

/**
 * This is just an example.
 *
 * @version  0.0.2 Iterated to use with Google Alert RSS feed
 */
class RssReader extends \yii\base\Widget {

    public $channel;
    public $itemView  = 'item';
    public $pageSize  = 20;
    public $category = 'Информация об отключениях';
    public $wrapClass = 'rss-wrap';
    public $wrapTag   = 'div';

    public function run() {
        try {
            $items = [];

            $ch = curl_init();  
            curl_setopt($ch,CURLOPT_URL, $this->channel);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            $output = curl_exec($ch);
            curl_close($ch);
            
            $xml = simplexml_load_string($output);

            if ($xml === false) {
                return 'Error parsing feed source: ' . $this->channel;
            }
            foreach ($xml->channel->item as $item) {
                $item->category=(string)$xml->channel->item->category;
                if (strcasecmp($item->category, $this->category) == 0) {
                    $items[] = $item;
                }
            }
            // return data to VW as dataProvider
            return $this->render(
                'wrap',
                [
                    'dataProvider' => new \yii\data\ArrayDataProvider([
                        'allModels'  => $items,
                        'pagination' => [
                            'pageSize' => $this->pageSize,
                        ],
                    ])
                ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
 