<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$pageTitle = Html::encode('Risks Of Bypassing IT');

$this->title = Html::encode(Yii::$app->name . ' - ' . $pageTitle);
$this->params['breadcrumbs'][] = ['label' => 'Useful Reading', 'url' => ['site/reading']];
$this->params['breadcrumbs'][] = $pageTitle;
?>

<h1><?= Html::encode('Data Snapshot: Security, Privacy, and the Shadowy Risks of Bypassing IT'); ?></h1>

<address>Originally posted by <?= Html::a(Html::img('@web/images/reading/peter-tsai.jpg', ['alt'=>'Peter Tsai']), 'https://community.spiceworks.com/people/petertsai') ?>
    on: 
    <?=
    Html::a('Spiceworks', 'https://community.spiceworks.com/networking/articles/2516-data-snapshot-security-privacy-and-the-shadowy-risks-of-bypassing-it', [
        'title' => "Link To: Original Article",
        'target' => '_new',
        'class' => 'noicon'
    ]);
    ?> (Oct 12, 2016)</address>
<hr />

<div class="blog-entry-wrapper hentry">

    <div class="blog-entry-body sui-opt-in">
        <div class="blog-entry-text entry-content wysiwyg-made-content">
            <p>IT departments are responsible for ensuring an organization's 
                technology works properly, maintaining access to business 
                applications and services, and keeping data safe. However, 
                their jobs become more difficult when the rest of their 
                company doesn't prioritize security or when workers go rogue 
                and bypass IT altogether, setting up their own cloud services 
                in a phenomenon known as "shadow IT."</p>

            <p>In addition to loss of control and oversight, when users go 
                behind IT's back, failure to properly evaluate or implement a 
                cloud service's security features (or lack thereof) puts 
                companies at risk. Just how big of a problem is shadow IT, and 
                how many organizations prioritize data privacy and security in 
                the cloud? Spiceworks surveyed 338 IT pros in North America and 
                Europe, the Middle East, and Africa (EMEA) to get to the bottom 
                of these issues.</p>

            <h2><b>Shadow IT is common in most organizations</b></h2>

            <p>IT departments want to protect and control data, but end users 
                just want to get their jobs done as quickly as possible. As a 
                result, many office workers adopt familiar tools without 
                thinking through data security concerns.</p>

            <p>For example, cloud storage makes it easy for everyone to share 
                files instantly, but what happens when confidential documents 
                go public on an unauthorized account? And what happens when 
                sensitive information travels through insecure, un-encrypted 
                channels? These are real risks when end users utilize 
                applications that aren't approved by IT.</p>

            <p>In fact, 92% of the IT pros we surveyed believe it’s important to 
                assess the security features of cloud services before they’re 
                adopted in order to protect organizations from threats. However, 
                more than <b>80% of IT pros said their end users have gone 
                    behind their back</b> to set up unapproved cloud services, 
                with a whopping 40% reporting their users "going rouge" five or 
                more times. </p>

            <p>On top of this, nearly 40% of IT pros say their organization’s 
                data is more vulnerable now than five years ago due to users 
                adopting cloud services without IT approval. When breaking the 
                survey results down by company size, it’s evident that larger 
                companies are even more at risk due to shadow IT, with 47% of 
                IT pros at companies with 500+ employees saying their data is 
                more vulnerable now. One possible explanation: As a company 
                grows, it can become more difficult to track a greater number 
                of users and all of the cloud services they’re potentially 
                using.</p>

            <p><?=
    Html::img("@web/images/reading/cloud_services_behind_back_IT.png", [
        'title' => "Image: Cloud Services Behind Back IT",
        'class' => 'img-responsive'
    ]);
    ?></p>

            <p>As to which cloud services IT pros are most worried about, 35% 
                said cloud storage services are most vulnerable to being hacked.
                Next on the list are web-based mail services with 27% saying 
                they are most vulnerable, followed by messaging services at 9% 
                and online financial apps at 8%.  Of the options in the survey,
                CRM applications like Salesforce.com and productivity apps were 
                of least concern to IT pros.</p>

            <p><?=
                Html::img("@web/images/reading/most_vulnerable_cloud_applications.png", [
                    'title' => "Image:  Most Vulnerable Cloud Applications",
                    'class' => 'img-responsive'
                ]);
    ?></p>

            <h2><b>Is data privacy a top business priority?</b></h2>

            <p>These shadow IT numbers reveal one piece of the entire data 
                security puzzle, but are companies taking the necessary steps 
                to safeguard data overall?</p>

            <p>When we asked IT pros working in larger organizations about 
                their data privacy practices, most said their company 
                adequately invests in keeping data secure (72%) and makes data 
                privacy a top priority (68%). However, we found that small 
                business are less likely to prioritize or spend on security, 
                and medium-sized businesses are even less likely to do so. In 
                fact, according to IT pros, only 50% of medium-sized businesses 
                prioritize data security and only 56% adequately invest in 
                keeping their data secure, perhaps because some medium-sized 
                companies don’t adequately staff their IT departments. The 
                result is IT pros getting stretched thin while having to 
                support and secure more users and devices than at smaller 
                businesses.</p>

            <p>Even more troubling, less than half (47%) of IT pros across 
                businesses of all sizes say their company regularly conduct 
                security audits and less than one-third (28%) are working to 
                improve their data privacy practices in the wake of major, 
                well-publicized security breaches.</p>

            <p><?=
                Html::img("@web/images/reading/priortization_of_data_privacy.png", [
                    'title' => "Image:  IT pros who agree with data privacy statements",
                    'class' => 'img-responsive'
                ]);
    ?></p>

            <p><?=
                Html::img("@web/images/reading/priortization_of_data_privacy.png", [
                    'title' => "Image:  Priortization of Data Privacy",
                    'class' => 'img-responsive'
                ]);
    ?></p>

            <h2><b>Keeping data safe in the cloud</b></h2>

            <p>Now that we better understand potential challenges of cloud 
                security and shadow IT, what can be done to make the cloud 
                services you use more secure? </p>

            <p>When we asked IT pros which security measures are necessary to 
                keep data safe in the cloud, a majority said could services 
                should include features such as end-to-end data encryption 
                (68%), multi-factor authentication (67%), and adequate user 
                access controls (67%). Additionally, 51% of IT pros said 
                evaluating a cloud vendor’s security policies should be a 
                priority. Also useful in protecting corporate networks but 
                lower on the list are running penetration tests, using VPN 
                connections, and implementing cloud-based firewalls.</p>

            <p><?=
                Html::img("@web/images/reading/security_measures_in_the_cloud.png", [
                    'title' => "Image:  Security Measures In The Cloud",
                    'class' => 'img-responsive'
                ]);
    ?></p>

            <h2><b>How organizations can defend against shadow IT</b></h2>

            <p>In closing, maintaining security and data privacy is one of the 
                biggest challenges in IT today, and user adoption of cloud 
                services behind IT’s back is only making it harder. One of the 
                best ways IT pros can better prevent shadow IT is by helping 
                users understand why using cloud services without approval is 
                putting corporate data at risk.</p>

            <p>For additional layers of protection, IT pros can also 
                proactively restrict sites users are allowed to visit and what 
                software they can install. IT departments should also strive to 
                provide approved services users want to use so employees won't 
                be tempted to go around IT in the first place. Finally, IT 
                policies that clearly state what cloud services are permitted 
                can go a long way to stopping rogue usage, or at least making 
                users think twice before they act.</p>

            <p>By understanding the risks and knowing 
                <?=
                Html::a("how to protect against shadow IT", "https://community.spiceworks.com/topic/1429495-how-do-you-handle-shadow-it", [
                    'target' => '_new',
                    'title' => "Link To: How Do You Handle Shadow IT",
                ]);
                ?>, companies can keep sensitive data more secure.</p>
        </div>
    </div>
</div>