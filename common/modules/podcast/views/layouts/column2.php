<?php $this->beginContent(__DIR__ . '/main.php'); ?>
<div class="container">

    <div id="content" class="col-md-9">
        <?php echo $content; ?>
    </div><!-- content -->

    <div class="col-md-3">
        <div class="panel panel-primary">
            <div class="panel-heading">Archives</div>
            <div class="panel-body">
                <ul class="list-unstyled list-striped">
                    <li>March 2017 <span class="badge pull-right">25</span></li>
                    <li>February 2017 <span class="badge pull-right">22</span></li>
                    <li>January 2017 <span class="badge pull-right">15</span></li>
                </ul>
            </div>
        </div><!-- .panel -->
    </div>
</div><!-- .row -->
<?php
$this->endContent();
