<?php
/* @var $this yii\web\View */

use yii\bootstrap4\Html;
use common\components\PodcastFeedParser;

$this->title = 'Podcasts';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>Podcast Sites Status</h1>

<p>Local updating of the Podcast sites has not been implemented yet.
    You will need to go the the main sites.</p>

<div class="row">
    <div class="col-md-12">
        <?php
        $wnrpContent = $wyctContent = '';

        $feedItems = PodcastFeedParser::parse("http://podcast.newsradio1620.com/rss.xml.html");
        foreach ($feedItems as $node) {
            $wnrpContent .= $this->render('_podcastItem', ['node' => $node]);
        }

        $feedItems = PodcastFeedParser::parse("http://podcast.catcountry987.com/rss.xml.html");
        foreach ($feedItems as $node) {
            $wyctContent .= $this->render('_podcastItem', ['node' => $node]);
        }
        ?>

        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed text-left w-100" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Recent Newsradio 92.3FM/AM1620 (WNRP) Podcasts
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <p><a href='http://podcast.newsradio1620.com/site/login.html' class="btn btn-danger text-light" target="_new">Logon to Podcast site.</a></p>
                        <?= $wnrpContent; ?>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed text-left w-100" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Recent Catcountry 98&bullet;7FM (WYCT) Podcasts
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <p><a href='http://podcast.catcountry987.com/site/login.html' class="btn btn-danger text-light" target="_new">Logon to Podcast site.</a></p>
                        <?= $wyctContent; ?>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link btn-block collapsed text-left" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Recent ESPN Pensacola (WEBY) Podcasts
                        </button>
                    </h5>
                </div>
                <div id = "collapseThree" class = "collapse" aria-labelledby = "headingThree" data-parent = "#accordion">
                    <div class = "card-body">
                        <p><a href='http://podcast.espnpensacola.com/site/login.html' class="btn btn-danger text-light" target="_new">Logon to Podcast site.</a></p>
                        Anim pariatur cliche reprehenderit, enim eiusmod high life
                        accusamus terry richardson ad squid. 3 wolf moon officia
                        aute, non cupidatat skateboard dolor brunch. Food truck
                        quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                        sunt aliqua put a bird on it squid single-origin coffee nulla
                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                        beer labore wes anderson cred nesciunt sapiente ea proident.
                        Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                        beer farm-to-table, raw denim aesthetic synth nesciunt you
                        probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>