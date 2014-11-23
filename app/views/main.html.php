<?php $i=0; foreach($posts as $p): ?>

<div class="row entry" id="div<?php echo $i; ?>">

    <div class="text-center col-md-6 col-sm-6 entry-title">
        <h1><?php echo $p->title ?></h1>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-10 col-md-push-6 col-sm-push-6 col-xs-push-1 entry-content">
        <h1><?php echo $p->title ?></h1>
        <h6><?php echo date('d F Y', $p->date)?></h6>
        <?php echo $p->body?>
    </div>
</div>

<?php $i++; endforeach;?>

</div>

<div class="container-fluid">
    <div class="row" id="footer">

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center col-lg-push-6 col-md-push-6 col-sm-push-6" id="page-btn">

            <?php if ($has_pagination[ 'prev']):?>
            <a class="btn btn-default" type="button" href="?page=<?php echo $page-1?>" id="link"><span class="glyphicon glyphicon-chevron-left"></span> Newer</a>
            <?php endif;?>

            <?php if ($has_pagination[ 'next']):?>
            <a class="btn btn-default older" type="button" href="?page=<?php echo $page+1?>" id="link">Older <span class="glyphicon glyphicon-chevron-right"></span></a>
            <?php endif;?>

        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center col-lg-pull-6 col-md-pull-6 col-sm-pull-6" id="description">
            <h4><?php echo config('blog.description')?></h4>
        </div>

    </div>
</div>



