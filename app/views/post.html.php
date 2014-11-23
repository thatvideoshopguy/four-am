<div class="row entry">

    <div class="text-center col-md-6 col-sm-6 entry-title">
        <h1><?php echo $p->title ?></h1>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-10 col-md-push-6 col-sm-push-6 col-xs-push-1 entry-content">
        <h1><?php echo $p->title ?></h1>
        <h6><?php echo date('d F Y', $p->date)?></h6>
        <?php echo $p->body?>
    </div>

</div>