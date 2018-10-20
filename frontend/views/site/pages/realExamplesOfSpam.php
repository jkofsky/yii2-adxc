<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$pageTitle = Html::encode('Examples of Spam');

$this->title = Html::encode(Yii::$app->name . ' - ' . $pageTitle);
$this->params['breadcrumbs'][] = ['label' => 'Useful Reading', 'url' => ['site/reading']];
$this->params['breadcrumbs'][] = $pageTitle;
?>

<h1><?= Html::encode('18 Real Examples of Spam, Scams and Phishing Attempts To Watch Out For'); ?></h1>

<address><?= Html::img('@web/images/reading/peter-tsai.jpg', ['alt' => 'Peter Tsai']) ?>
    Originally posted by Peter Tsai on: 
    <?=
    Html::a('Spiceworks', 'https://community.spiceworks.com/security/articles/3101-18-real-examples-of-spam-scams-and-phishing-attempts-to-watch-out-for/', [
        'title' => "Link To: Original Article",
        'target' => '_new',
        'class' => 'noicon'
    ]);
    ?> (Aug 07, 2018)</address>
<hr />

<div class="blog-entry-wrapper">
    <div class="blog-entry-body sui-opt-in">

        <p>You know the saying, "There's a sucker born every minute." And that's 
            exactly what hackers are counting on in order to reel in 
            unsuspecting victims. All it takes is one person to fall for social 
            engineering, or click on a malicious link embedded in spam for the 
            bad guys to gain a foothold on your network.&nbsp;</p><p>And even 
            if your users are vigilant, it just takes one momentary lapse in 
            judgement to put your company at risk, and cause your IT department 
            world of pain. To keep your network safe from cyberthreats everyone 
            needs to be trained to look out for spam scams and phishing emails.</p>
        <p>After all, email filters don't catch everything, and people are often 
            the weakest link in the security chain. Below is a list of real-life 
            spam reported by members of the Spiceworks Community. Check out the 
            links so you can familiarize yourself with examples of tricks 
            scammers use, so that the next time a suspicious email lands in your 
            inbox, your users won't become yet another victim.</p>
        <p><i>NOTE: If the links below contain an actual email address, don't 
                contact them!</i></p>
        <hr>

        <h3>Online hackers' lonely hearts club scams</h3>
        <p>It's one of the oldest tricks in the book: Scammers posing as a 
            potential boyfriend or girlfriend in order to manipulate victims. 
            Whether looking to steal your company's secrets or get into your 
            wallet, you can bet the bad guys aren't in it for love.</p>
        <ul>
            <li>
                <a title="Link: https://community.spiceworks.com/topic/2021944-a-male-to-whom-i-can-give-all-my-love" 
                   href="https://community.spiceworks.com/topic/2021944-a-male-to-whom-i-can-give-all-my-love" 
                   target="_blank">
                    "Tanya" wants to give you all of her love ... yeah right!&nbsp;</a></li>
            <li>
                <a title="Link: https://community.spiceworks.com/topic/2137510-if-you-re-lonely-there-is-hope" 
                   href="https://community.spiceworks.com/topic/2137510-if-you-re-lonely-there-is-hope" 
                   target="_blank">
                    If you're lonely, I will steal your data</a></li>
            <li>
                <a title="Link: https://community.spiceworks.com/topic/1469930-funny-spam-message-of-the-day" 
                   href="https://community.spiceworks.com/topic/1469930-funny-spam-message-of-the-day" 
                   target="_blank">
                    Goodness! This internet person wants to be friends</a></li>
        </ul>
        <hr>

        <h3>Fake documents with nasty payloads</h3>
        <p>Perhaps one of the most common scams out there involves hackers 
            pretending to be someone you know. Often, they'll send you an 
            innocent-looking file for you to open. Even if this person is a 
            friend or family member, or a client you work with ... If there's 
            even a hint of suspicious behavior, don't fall for it. The link you 
            click might contain malware.</p>
        <ul>
            <li>
                <a title="Link: https://community.spiceworks.com/topic/2128822-hardcore-phishing-at-it-s-finest" 
                   href="https://community.spiceworks.com/topic/2128822-hardcore-phishing-at-it-s-finest" 
                   target="_blank">
                    Hardcore phishing at its finest using a PDF viewer</a></li>
            <li>
                <a title="Link: https://community.spiceworks.com/topic/2125442-phishing-increase" 
                   href="https://community.spiceworks.com/topic/2125442-phishing-increase" 
                   target="_blank">
                    OneDrive PDF phishing attempt</a></li>
            <li>
                <a title="Link: https://community.spiceworks.com/topic/2129491-really-good-phishing-attack-email-finally-landing-on-sharepoint" 
                   href="https://community.spiceworks.com/topic/2129491-really-good-phishing-attack-email-finally-landing-on-sharepoint" 
                   target="_blank">
                    SharePoint phishing attempt</a></li>
        </ul>
        <hr>

        <h3>Offers too good to be true</h3>
        <p>If something sounds too good to be true, it probably is. When a 
            stranger wants to give you money for nothing via the Internet or 
            phone, know that there's going to be a catch (there's always going 
            to be a catch)!&nbsp;</p>
        <p>That link you click on to collect your prize might be malware, or the 
            scammers might disappear with the money or information you give them 
            before they can deliver your (fake) million-dollar payday. These 
            scams take many different forms: If someone calls offering you a 
            loan, a free holiday, to lower your electricity bill, or sell you a 
            product at an incredibly low rate (or free), beware. Learn from 
            these real-life scams below:</p>
        <ul>
            <li>
                <a title="Link: https://community.spiceworks.com/topic/226605-todays-most-topical-spam-i-think-it-is-pretty-funny" 
                   href="https://community.spiceworks.com/topic/226605-todays-most-topical-spam-i-think-it-is-pretty-funny"                   
                   target="_blank">
                    Free iPhones from the CEO of Facebook!</a></li>
            <li>
                <a title="Link: https://community.spiceworks.com/topic/2135409-the-new-nigerian-prince-scheme-spam-of-the-day" 
                   href="https://community.spiceworks.com/topic/2135409-the-new-nigerian-prince-scheme-spam-of-the-day" 
                   target="_blank">
                    Free Bitcoin for you!</a></li>
            <li>
                <a title="Link: https://community.spiceworks.com/topic/2104748-at-last-the-nigerian-prince-scam-has-a-fresh-new-approach" 
                   href="https://community.spiceworks.com/topic/2104748-at-last-the-nigerian-prince-scam-has-a-fresh-new-approach" 
                   target="_blank">
                    The Nigerian prince refund</a></li>
            <li>
                <a title="Link: https://community.spiceworks.com/topic/1895692-scammers-not-just-for-nigerian-princes" 
                   href="https://community.spiceworks.com/topic/1895692-scammers-not-just-for-nigerian-princes" 
                   target="_blank">
                    A real life Robin Hood wants to share the wealth with you</a></li>
        </ul>
        <hr> 

        <h3>Hollow threats&nbsp;</h3>
        <p>If you suddenly get a threatening call from an unknown party 
            urging you to take immediate action ... OR ELSE, it's likely 
            100 percent fake. In actuality, no one wants to kill you (unless 
            you did something really bad), the government isn't going to 
            arrest you for unpaid bills, and no one has incriminating 
            pictures of you stored on their computer.</p>
        <p>If someone claims to be calling from an agency such as the IRS, 
            you can also make sure they are who they say they are, by 
            calling the organization directly. The examples below are all 
            scams, so watch out for similar instances in the wild.</p>
        <ul>
            <li>
                <a title="Link: https://community.spiceworks.com/topic/2096481-anyone-seen-this-little-gem-for-spam" 
                   href="https://community.spiceworks.com/topic/2096481-anyone-seen-this-little-gem-for-spam" 
                   target="_blank">
                    Hitmen are spammers too?</a></li>
            <li>
                <a title="Link: https://community.spiceworks.com/topic/2136915-nigerian-prince-doesn-t-have-anything-on-this-guy-lol" 
                   href="https://community.spiceworks.com/topic/2136915-nigerian-prince-doesn-t-have-anything-on-this-guy-lol" 
                   target="_blank">
                    I have video of you doing naughty things</a></li>
            <li><a title="Link: https://community.spiceworks.com/topic/1987357-tax-scam-voicemail" 
                   href="https://community.spiceworks.com/topic/1987357-tax-scam-voicemail" 
                   target="_blank">
                    IRS will send you to jail ... not really</a></li>
            <li><a title="Link: https://community.spiceworks.com/topic/2143431-wannacry-email" 
                   href="https://community.spiceworks.com/topic/2143431-wannacry-email" 
                   target="_blank">
                    WannaCry is back unless you pay up (don't fall for this lie)</a></li>
        </ul>


        <hr>

        <h3>Fake bossy coworkers</h3>
        <p>Sometimes hackers aren't trying to infect your system with a 
            virus, but they want to get something out of you ... whether 
            that's information, money, or elevated permissions. These next 
            two examples show how the bad guys can pretend to be someone 
            with authority within your company in order to trick people 
            into doing their bidding.</p>

        <ul>
            <li>
                <a title="Link: https://community.spiceworks.com/topic/2133205-new-favorite-scam-email" 
                   href="https://community.spiceworks.com/topic/2133205-new-favorite-scam-email" 
                   target="_blank">
                    The CEO needs 19 GameStop gift cards ... right now!</a></li>
            <li>
                <a title="Link: https://community.spiceworks.com/topic/1133258-new-scam-email-to-me-at-least" 
                   href="https://community.spiceworks.com/topic/1133258-new-scam-email-to-me-at-least" 
                   target="_blank">
                    HR wants you to give a random guy admin privileges</a></li>
        </ul>
        <hr>

        <h3>Just plain weird</h3>
        <p>If there's a silver lining to all of this, it's that some of 
            these spam scams are so lame that they end up being 
            unintentionally funny. Here are a couple of ridiculous requests 
            that probably didn't work on anyone.</p>
        <ul>
            <li>
                <a title="Link: https://community.spiceworks.com/topic/2058765-woohoo-first-legit-scam-email-at-work" 
                   href="https://community.spiceworks.com/topic/2058765-woohoo-first-legit-scam-email-at-work" 
                   target="_blank">
                    Please take this phony survey ... for the good of science!</a></li>
            <li>
                <a title="Link: https://community.spiceworks.com/topic/1727836-spam-sometimes-it-s-just-funny" 
                   href="https://community.spiceworks.com/topic/1727836-spam-sometimes-it-s-just-funny" 
                   target="_blank">
                    Move over Jon Snow. "Dee Dee" Targaryen is looking to form new alliances over email!</a></li>
        </ul>
        <hr>

        <p>As you can see, there are plenty spam scams in the world, and 
            there's no end in sight. And as long as someone continues to 
            fall for these tricks, the bad guys are going to keep doing 
            their thing.&nbsp;But if you and your users are aware of these 
            scams, you can rest a little easier at night, knowing that 
            you're not going to fall victim to these attempts at deception.</p>

    </div>
</div>
