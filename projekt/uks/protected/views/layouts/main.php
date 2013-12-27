<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/menu.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        <?php
        Yii::app()->clientScript->registerCoreScript('jquery');
        Yii::app()->bootstrap->register();
        ?>

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>


    </head>

    <body>

        <div class="container" id="page">

            <div id="header">
                <div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
            </div><!-- header -->
            <div id="navigationmenu">
                <?php
                //generowanie menu
                $menuarray = array();
                $i = 0;
                foreach (Category::model()->findAll(array('order' => 'weight')) as $category) {
                    $menucategorylabel = $category->getAttribute('title');
                    $criteria = new CDbCriteria();
                    $criteria->addSearchCondition('id_category', $category->getAttribute('id'));
                    $menucontent = "";
                    foreach (Subcategory::model()->findAll($criteria) as $subcategory) {
                        $menucontent .= "<li id={$subcategory->getAttribute('title')}>{$subcategory->getAttribute('title')}</li>";
                    }
                    if ($i == 0) {
                        array_push($menuarray, array('label' => $menucategorylabel, 'content' => $menucontent, 'active' => true));
                    } else {
                        array_push($menuarray, array('label' => $menucategorylabel, 'content' => $menucontent));
                    }
                    $i++;
                }





                $this->widget('bootstrap.widgets.TbTabs', array(
                    'type' => 'tabs',
                    'placement' => 'above', // 'above', 'right', 'below' or 'left'
                    'tabs' => TemporaryData::getNavItems(),
                ));
                ?>
            </div>

            <div id="news_posts">
                <?php
                $this->widget('bootstrap.widgets.TbCarousel', array(
                    'items' => TemporaryData::getLatestFiveNews()
                ));
                ?>
            </div>

            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>

            <?php echo $content; ?>

            <div class="clear"></div>

            <div id="footer">
                Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
                All Rights Reserved.<br/>
                <?php echo Yii::powered(); ?>
            </div><!-- footer -->

        </div><!-- page -->
        <script>
            $('.nav-tabs > li > a').hover(function() {
                $(this).tab('show');
            });
        </script>
    </body>
</html>
