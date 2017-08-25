<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$pageTitle = Html::encode("Importance of Documentation");

$this->title = Html::encode(Yii::$app->name . ' - ' . $pageTitle);
$this->params['breadcrumbs'][] = ['label' => 'Engineering Reading', 'url' => ['engineering/reading']];
$this->params['breadcrumbs'][] = $pageTitle;
?>

<h1><?= Html::encode("Jake's Take: The Importance of Documentation and Backups"); ?></h1>

<address>Originally posted by Jake Alderman on: 
    <?=
    Html::a(
            'The Telos Alliance Blog Central', '//blogs.telosalliance.com/jakes-take-the-importance-of-documentation-and-backups', array('target' => '_new')
    );
    ?> (Aug 23, 2017)</address>

<hr />
<!-- Page specific CSS -->
<style>
    .img-left {width: 350px; margin: 0px 10px 10px 0px; float: left;}
    .img-right{width: 350px; margin: 0px 10px 10px 0px; float: right;}
</style>

<article>
    <div class="section post-body">
        <p><img src="images/engineering/Jake-TechTip.jpg" alt="Telos Alliance Support Engineer Jake Alderman" class="img-left" title="Telos Alliance Support Engineer Jake Alderman" caption="false">
            When new gear arrives it can get any engineer excited. Whether you 
            are building a facility from the ground up or adding more Telos 
            Alliance equipment to the rack, here are some helpful tips keep your 
            facility in order.</p>

        <h3>Documentation is your friend</h3>
        <p>We all like to think our memories are exceptional, but creating and 
            keeping accurate notes is critical. When it comes to documentation 
            remember the two As: <strong>Accuracy and Accessibility.</strong></p>
        <p>Let’s begin with accuracy since inaccurate documents will lead you 
            astray. Any type of data management software such as Google Sheets 
            or Microsoft Excel is great for tracking facility information. Some 
            fields we recommend including are Device Type, Physical Location, 
            Serial Number, Wire Number, Password, License Information, IP 
            address, and Livewire Channel Number.</p>
        <p>Also, you should audit your data annually. Every fiscal year your 
            accountant has to go through and make sure the books are accurate, 
            and we should do the same with our documents.</p>
        <p>While developing and maintaining your documentation takes time, it 
            pays major dividends when the 2:00 AM phone call happens. You can 
            confidently know where everything is while you work to resolve an 
            issue because you invested the time ahead of the emergency.</p>

        <h3>Back, Back, Back It Up…
            <img src="images/engineering/GoogleDrive.png" alt="Google Drive" class="img-right" title="Google Drive" caption="false"></h3>
        <p>Many products now offer the ability to backup configuration files. 
            While it is natural to make up a backup after the initial 
            configuration you should keep backing up regularly, preferably after 
            every time you make changes. This way in the event you do have a 
            piece of gear fail you can quickly restore operation by porting 
            settings to a replacement, or your repaired unit.</p>
        <p>For products that do not offer a backup, record your adjustments as 
            part of your documentation process. This way you have a record of 
            how the product was configured and can quickly restore normal 
            operation if it has to be swapped out, or set to factory defaults 
            as part of the troubleshooting process.</p>
        <p>The Telos Alliance does offer a handy tool to help you with both 
            backing up your Livewire System and creating documentation, called 
            <a href="https://www.telosalliance.com/Axia/Axia-iProbe" target="_blank">iProbe</a>. 
            It has the ability to reach out, find your devices, and collect a 
            lot of the information listed above.</p>

        <h3>Invest in a label maker</h3>
        <p>Behind the soldering iron and 11-in-1 screwdriver, the label maker 
            makes a compelling argument as one of the most important tools in 
            the tool box. Any time a piece of gear is installed, the label maker 
            is probably around. Besides the basic wire labels, there are a few 
            more tricks you can use it for.</p>
        <p>The one that is the most helpful is License Information. If a device 
            fails and is unrecoverable, your license information may be gone 
            with it. When installing gear, take a couple seconds to make a label 
            with the license information and stick it on the case out of plain 
            view. Now if a device fails you have the license handy to transfer 
            to a spare or replacement unit.</p>
        <p>In a similar vein, whenever a piece of gear goes into service, print 
            a simple label with the date it was installed. This can help in 
            estimating if it is still in warranty. On the reverse, if you take 
            something out of service, label it with the removal date and reason. 
            It saves you the questions “Why did I pull this out?” and “Am I 
            saving it for a reason?,” when cleaning out the shop.</p>

        <h3>Where do I put it all?</h3>
        <p><img src="images/engineering/FlashDrives.jpg" class="img-left" title="Flash Drives" caption="false">
            Keep in mind that great documentation and backups aren’t worth the 
            drive space they occupy if you can’t get to them. This is where the 
            second A of facility management comes in to play: Accessibility. 
            Fortunately, accessibility to data is easier than ever. Portable 
            storage solutions are cheap, and there are plenty of free or 
            low-cost cloud solutions available.</p>
        <p>A simple thumb drive with your backups can save you significant time 
            when you’re trying to load a configuration file into a spare unit, 
            while having your documentation on a cloud storage provider means 
            you can look up documents, and update them while you are out at the 
            transmitter site. Many cloud storage providers also have apps for 
            your smartphone. This lets you carry the station's information with 
            you anywhere you have a cellular connection.</p>
        <p>Still, with all this technology it never hurts to print out a paper 
            copy of documents. We all have lost data, and after all the time 
            invested it’s worth it to have a set of physical documents sitting 
            in the desk drawer.</p>

        <h3>Further Reading</h3>
        <p>Interested in more facility management tips tricks? Check out these blog posts:</p>
        <p><a href="https://blogs.telosalliance.com/make-a-proper-ip-address-scheme-for-entire-livewire-facility" target="_blank">Make a Proper IP Address Scheme for Your Livewire Facility</a></p>
        <p><a href="https://blogs.telosalliance.com/the-bisset-brief-planning-your-aoip-installation" target="_blank">The Bisset Brief: Planning Your AoIP Installation</a></p>
        <p><a href="https://blogs.telosalliance.com/the-bisset-brief-cutting-the-cord" target="_blank">The Bisset Brief: Cutting the Cord</a></p></span>
    </div>
</article>
