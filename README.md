Yii2 RSS Reader
===============
RSS reader widget for Yii2.

Badges
-----

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/ee1d3eaa-531a-45c6-9ba9-d6b6dda61d6e/mini.png)](https://insight.sensiolabs.com/projects/ee1d3eaa-531a-45c6-9ba9-d6b6dda61d6e)
[![Latest Stable Version](https://poser.pugx.org/copoka/yii2-rss-reader/v/stable?format=flat-square)](https://packagist.org/packages/copoka/yii2-rss-reader)
[![Latest Unstable Version](https://poser.pugx.org/copoka/yii2-rss-reader/v/unstable?format=flat-square)](https://packagist.org/packages/copoka/yii2-rss-reader)
[![License](https://poser.pugx.org/copoka/yii2-rss-reader/license?format=flat-square)](https://packagist.org/packages/copoka/yii2-rss-reader)
[![Total Downloads](https://poser.pugx.org/copoka/yii2-rss-reader/downloads?format=flat-square)](https://packagist.org/packages/copoka/yii2-rss-reader)
[![Monthly Downloads](https://poser.pugx.org/copoka/yii2-rss-reader/d/monthly?format=flat-square)](https://packagist.org/packages/copoka/yii2-rss-reader)
[![Daily Downloads](https://poser.pugx.org/copoka/yii2-rss-reader/d/daily?format=flat-square)](https://packagist.org/packages/copoka/yii2-rss-reader)


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

    php composer.phar require --prefer-dist copoka/yii2-rss-reader "*"

or add

    "copoka/yii2-rss-reader": "*"

to the require section of your `composer.json` file.

Usage
-----

Once the widget is installed, add it to a view script:

    echo \copoka\RssFeed\RssReader::widget([
        'channel'   => '{source_url}/feed.xml',
        'itemView'  => 'item',
        'pageSize'  => 5,
        'wrapClass' => 'rss-wrap',
        'wrapTag'   => 'div',
    ]);
