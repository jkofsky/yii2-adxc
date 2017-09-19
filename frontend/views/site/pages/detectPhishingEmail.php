<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$pageTitle = Html::encode('Detecting A Phishing Email');

$this->title = Html::encode(Yii::$app->name . ' - ' . $pageTitle);
$this->params['breadcrumbs'][] = ['label' => 'Useful Reading', 'url' => ['site/reading']];
$this->params['breadcrumbs'][] = $pageTitle;
?>

<h1><?= Html::encode("Five ways to detect a malicious 'phishing' email"); ?></h1>

<address>Originally posted by Mark Brunelli, SeniorWriter at: 
    <?=
    Html::a(
            'Carbonite', 'https://www.carbonite.com/en/cloud-backup/business/resources/carbonite-blog/five-ways-to-detect-a-malicious-phishing-email/', array('target' => '_new')
    );
    ?> (July 19, 2017)</address>

<div class="rich-text blog-article" itemprop='articleBody'>
    <p>
        <img class="pull-right" title="Phishing" alt="Phishing" src="images/phishing.png" height="222" width="300" />
        For as long as there’s been email, there’s been email scams. At least 
        since the time email first started gaining widespread popularity in 
        the 1990s, phishing scams have been showing up in email accounts. 
        They're called &#039;phishing&#039; emails because the cybercriminals 
        who send them are <i>fishing </i>for victims.</p>
    <p>These fraudulent emails, which may appear to come from a legitimate 
        company or even a personal acquaintance, are designed to trick people 
        into giving up personal information, such as credit card and social 
        security numbers. They may also be designed to scam unwitting victims 
        into opening a harmful attachment or clicking a link that unleashes 
        <a href="https://www.carbonite.com/en/cloud-backup/business/resources/carbonite-blog/ask-a-carbonista-what-is-ransomware/" target="_blank">ransomware</a>
        or some other type of malicious computer virus.</p>
    <p>Back in the early days of the Internet, phishing emails were full of 
        typos, and laden with obvious clues—appeals from faraway princes or 
        rich relatives you never knew you had. &nbsp;These were very easy to 
        spot. But cybercriminals have upped their game since then. For example, 
        some cybercriminals go to great lengths to match the branding, color 
        schemes and logos associated with the companies they are trying to 
        impersonate.</p>
    <p>Phishing email scams generally fall into one of these categories:</p>
    <ul>
        <li><b>Traditional phishing attack</b><br />The traditional 
            <a href="http://searchsecurity.techtarget.com/definition/phishing" target="_blank">phishing</a> 
            attack casts a wide net and attempts to trick as many people as 
            possible. A classic example of this is the Nigerian prince 
            <a href="https://en.wikipedia.org/wiki/Advance-fee_scam" target="_blank">advance-fee</a>
            scam.<br /><br /></li>
        <li><b>Spear phishing<br /></b>
            <a href="http://us.norton.com/spear-phishing-scam-not-sport/article" target="_blank">Spear phishing</a>
            attacks are designed to target a specific individual or small group 
            of individuals. For example, a spear phishing attack may use 
            information about a particular restaurant or small business to 
            target one or more employees at that business. Or it could look 
            like an email from a friend.<br /><br /></li>
        <li><b>Whaling<br /></b>
            <a href="http://searchsecurity.techtarget.com/definition/whaling" target="_blank">Whaling</a>
            attacks, which have become increasingly popular in recent years, 
            are targeted at high-profile victims like C-level executives and 
            their teams. A typical whaling email may look like it was sent from 
            the CEO of your company. But it's really a fake designed to get you 
            to share valuable information about the company.<br /><br /></li>
    </ul>

    <p><b>Protect yourself from phishing scams<br /></b>Phishing emails may be 
        more difficult to identify these days, but there are some important 
        steps you can take to avoid becoming a victim. If you answer &#039;yes&#039;
        to any of the questions below, there's a very good chance that you're 
        looking at a phishing email.</p>
    <ol>
        <li><b>Does the message ask for personal information?<br /></b>
            Always remember that reputable businesses do not ask for personal 
            information – such as social security and credit card numbers – via email.</li>
        <li><b>Does the offer seem too good to be real?<br /></b>
            If it seems too good to be true, it's a fake. Beware of emails offering 
            big rewards – vacations, cash prizes, etc. – for little effort.</lt>
        <li><b>Does the salutation look odd?<br /></b>
            Reputable companies will use your name in the salutation – as opposed 
            to "valued customer" or "to whom it may concern."</li>
        <li><b>Does the email have mismatched URLs?<br /></b>
            If you receive an email from an organization that includes an HTML link 
            in it, hover your mouse over the link without clicking and you should 
            see the full URL appear. If the URL does not include the organization's 
            exact name, or if it looks suspicious in any other way, delete it 
            because it's probably a phishing email. Also, you should only visit 
            websites that begin with 'https' because the &#039;s&#039; at the 
            end indicates advanced security measures. Websites that begin with 
            "http" are not as secure.</li>
        <li><b>Does it give you a suspicious feeling?<br /></b>
            Trust your instincts when it comes to email. If you catch yourself 
            wondering whether it's legitimate, and your instinct is to ignore and 
            delete it—then pay attention to that gut check.</li>
    </ol>
    <p>Get more tips on 
        <a href="https://www.carbonite.com/en/cloud-backup/business/resources/carbonite-blog/five-ways-to-avoid-or-defeat-a-ransonware-infection/" target="_blank">
            how to protect yourself from phishing and ransomware</a> scams today.</p>
</div>            


