Lightbox2 widget for Yii2
=========================
The Lightbox2 widget is a customized lightbox script based on [Lightbox](https://lokeshdhakar.com/projects/lightbox2/). and 
This widget used to overlay images on top of the current page. 

![alt text](https://github.com/coderius/github-images/blob/master/pic1.png "Description goes here")

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require coderius/yii2-lightbox2-widget "@dev"
```

or add

```json
"coderius/yii2-lightbox2-widget" : "@dev"
```

to the require section of your application's `composer.json` file.

Usage
-----
* In view:

```php
use coderius\lightbox2\Lightbox2;

<?= coderius\lightbox2\Lightbox2::widget([
    'clientOptions' => [
        'resizeDuration' => 200,
        'wrapAround' => true,
        
    ]
]); ?>

<a href="<?= Yii::getAlias("@img-web-blog-posts/1/middle/pic.jpg"); ?>" data-lightbox="roadtrip" data-title="some title" data-alt="some alt">
    <!-- Thumbnail picture -->
    <?= Html::img("@img-web-blog-posts/pic.jpg"); ?>
</a>

<a href="<?= Yii::getAlias("@img-web-blog-posts/10/middle/pic2.jpg"); ?>" data-lightbox="roadtrip">
    <!-- Thumbnail picture -->
    <?= Html::img("@img-web-blog-posts/pic2.jpg"); ?>
</a>

<a href="<?= Yii::getAlias("@img-web-blog-posts/11/middle/pic3.jpg"); ?>" data-lightbox="roadtrip">
    <!-- Thumbnail picture -->
    <?= Html::img("@img-web-blog-posts/pic3.jpg"); ?>
</a>

```
You need set data-lightbox attribute to link and path to image in href attribute. If you wanna 
to set group images, then put identic names to data-lightbox attribute for each needed link. 

*Thumbnail picture, by clicking on which opens the widget is wrapped with a link
 


Reference to plugin [github](https://github.com/lokesh/lightbox2/) repository that is used in this widget.