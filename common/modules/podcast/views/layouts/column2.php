<?php $this->beginContent(__DIR__ . '/main.php'); ?>
        <div class="container">
          <div class="row">

            <div id="content" class="col-sm-9">
                    <?php echo $content; ?>
            </div><!-- content -->

            <div class="col-sm-3">
                <div class="panel panel-adxc">
                    <div class="panel-heading">Archives</div>
                    <div class="panel-body">
                        <ul class="list-unstyled list-striped">
                            <li>March 2017 <span class="badge">25</span></li>
                            <li>February 2017 <span class="badge">22</span></li>
                            <li>January 2017 <span class="badge">15</span></li>
                        </ul>
                    </div>
                </div>
            </div>
          </div>
        </div>
<?php $this->endContent();