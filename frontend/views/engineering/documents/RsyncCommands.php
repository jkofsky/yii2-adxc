<?php
/* @var $this yii\web\View */

use kartik\helpers\Html;

$pageTitle = Html::encode("Importance of Documentation");

$this->title = Html::encode(Yii::$app->name . ' - ' . $pageTitle);
$this->params['breadcrumbs'][] = ['label' => 'Engineering Reading', 'url' => ['engineering/reading']];
$this->params['breadcrumbs'][] = $pageTitle;
?>

<h1><?= Html::encode("15 Useful rsync Command Examples"); ?></h1>

<address>Originally posted by Sasikala on: 
    <?=
    Html::a(
            'The Geek Stuff', 'https://www.thegeekstuff.com/2010/09/rsync-command-examples', array('target' => '_new')
    );
    ?> September 9, 2010</address>

<hr />
<!-- Page specific CSS -->
<style>
    .img-left {width: 350px; margin: 0px 10px 10px 0px; float: left;}
    .img-right{width: 350px; margin: 0px 10px 10px 0px; float: right;}
</style>

<article>

<div class="section post-body">
    <p><img style="width: 400px; height: 300px;" title="rsync command" class="img-right img-responsive" alt="" src="images/engineering/rsync-command.png">
        rsync stands for remote sync. </p>
    <p>rsync is used to perform the backup operation in UNIX / Linux.</p>
    <p>rsync utility is used to synchronize the files and directories from one 
        location to another in an effective way.  Backup location could be on 
        local server or on remote server.<br>
        <span id="more-5848"></span></p>
    <h3>Important features of rsync</h3>
    <ul>
        <li><strong>Speed</strong>: First time, rsync replicates the whole 
            content between the source and destination directories. Next time, 
            rsync transfers only the changed blocks or bytes to the destination 
            location, which makes the transfer really fast.</li>
        <li><strong>Security</strong>: rsync allows encryption of data using 
            ssh protocol during transfer.</li>
        <li><strong>Less Bandwidth</strong>: rsync uses compression and 
            decompression of data block by block at the sending and receiving 
            end respectively. So the bandwidth used by rsync will be always 
            less compared to other file transfer protocols.</li>
        <li><strong>Privileges</strong>: No special privileges are required to 
            install and execute rsync</li>
    </ul>
    <h3>Syntax</h3>
    <pre>$ rsync options source destination
    </pre>
    <p>Source and destination could be either local or remote. In case of 
        remote, specify the login name, remote server name and location.</p>
    <h3>Example 1. Synchronize Two Directories in a Local Server</h3>
    <p>To sync two directories in a local computer, use the following 
        rsync -zvr command.</p>
    <pre>$ rsync -zvr /var/opt/installation/inventory/ /root/temp
building file list ... done
sva.xml
svB.xml
.
sent 26385 bytes  received 1098 bytes  54966.00 bytes/sec
total size is 44867  speedup is 1.63
$
    </pre>
    <p>In the above rsync example:</p>
    <ul>
        <li> -z is to enable compression</li>
        <li> -v verbose</li>
        <li> -r indicates recursive</li>
    </ul>
    <p>Now let us see the timestamp on one of the files that was copied from 
        source to destination. As you see below, rsync didn't preserve 
        timestamps during sync.</p>

    <pre>$ ls -l /var/opt/installation/inventory/sva.xml /root/temp/sva.xml
-r--r--r-- 1 bin  bin  949 Jun 18  2009 /var/opt/installation/inventory/sva.xml
-r--r--r-- 1 root bin  949 Sep  2  2009 /root/temp/sva.xml
    </pre>
    <h3>Example 2. Preserve timestamps during Sync using rsync -a</h3>
    <p>rsync option -a indicates archive mode. -a option does the following,</p>
    <ul>
        <li>Recursive mode</li>
        <li>Preserves symbolic links</li>
        <li>Preserves permissions</li>
        <li>Preserves timestamp</li>
        <li>Preserves owner and group</li>
    </ul>
    <p>Now, executing the same command provided in example 1 (But with the 
        rsync option -a) as shown below:</p>
    <pre>$ rsync -azv /var/opt/installation/inventory/ /root/temp/
building file list ... done
./
sva.xml
svB.xml
.
sent 26499 bytes  received 1104 bytes  55206.00 bytes/sec
total size is 44867  speedup is 1.63
$
    </pre>
    <p>As you see below, rsync preserved timestamps during sync.</p>
    <pre>$ ls -l /var/opt/installation/inventory/sva.xml /root/temp/sva.xml
-r--r--r-- 1 root  bin  949 Jun 18  2009 /var/opt/installation/inventory/sva.xml
-r--r--r-- 1 root  bin  949 Jun 18  2009 /root/temp/sva.xml
    </pre>
    <h3>Example 3. Synchronize Only One File</h3>
    <p>To copy only one file, specify the file name to rsync command, as shown 
        below.</p>
    <pre>$ rsync -v /var/lib/rpm/Pubkeys /root/temp/
Pubkeys

sent 42 bytes  received 12380 bytes  3549.14 bytes/sec
total size is 12288  speedup is 0.99
    </pre>
    <h3>Example 4. Synchronize Files From Local to Remote</h3>
    <p>rsync allows you to synchronize files/directories between the local and 
        remote system.</p>
    <pre>$ rsync -avz /root/temp/ thegeekstuff@192.168.200.10:/home/thegeekstuff/temp/
Password:
building file list ... done
./
rpm/
rpm/Basenames
rpm/Conflictname

sent 15810261 bytes  received 412 bytes  2432411.23 bytes/sec
total size is 45305958  speedup is 2.87
    </pre>
    <p>While doing synchronization with the remote server, you need to specify 
        username and ip-address of the remote server. You should also specify 
        the destination directory on the remote server. The format is 
        username@machinename:path</p>
    <p>As you see above, it asks for password while doing rsync from local to 
        remote server.</p>
    <p>Sometimes you don’t want to enter the password while backing up files 
        from local to remote server. For example, If you have a backup shell 
        script, that copies files from local to remote server using rsync, you 
        need the ability to rsync without having to enter the password.</p>
    <p>To do that, setup 
        <a href="https://www.thegeekstuff.com/2008/11/3-steps-to-perform-ssh-login-without-password-using-ssh-keygen-ssh-copy-id/" target="_blank">ssh password less login</a> 
        as we explained earlier.</p>
    <h3>Example 5. Synchronize Files From Remote to Local</h3>
    <p>When you want to synchronize files from remote to local, specify remote 
        path in source and local path in target as shown below.</p>
    <pre>$ rsync -avz thegeekstuff@192.168.200.10:/var/lib/rpm /root/temp
Password:
receiving file list ... done
rpm/
rpm/Basenames
.
sent 406 bytes  received 15810230 bytes  2432405.54 bytes/sec
total size is 45305958  speedup is 2.87
    </pre>
    <h3>Example 6. Remote shell for Synchronization</h3>
    <p>rsync allows you to specify the remote shell which you want to use. You 
        can use rsync ssh to enable the secured remote connection.</p>
    <p>Use rsync -e ssh to specify which remote shell to use. In this case, 
        rsync will use ssh.</p>
    <pre>$ rsync -avz -e ssh thegeekstuff@192.168.200.10:/var/lib/rpm /root/temp
Password:
receiving file list ... done
rpm/
rpm/Basenames

sent 406 bytes  received 15810230 bytes  2432405.54 bytes/sec
total size is 45305958  speedup is 2.87
    </pre>
    <h3>Example 7. Do Not Overwrite the Modified Files at the Destination</h3>
    <p>In a typical sync situation, if a file is modified at the destination, 
        we might not want to overwrite the file with the old file from the 
        source.</p>
    <p>Use rsync -u option to do exactly that. (i.e do not overwrite a file at 
        the destination, if it is modified). In the following example, the file 
        called Basenames is already modified at the destination. So, it will 
        not be overwritten with rsync -u.</p>
    <pre>$ ls -l /root/temp/Basenames
total 39088
-rwxr-xr-x 1 root root        4096 Sep  2 11:35 Basenames

$ rsync -avzu thegeekstuff@192.168.200.10:/var/lib/rpm /root/temp
Password:
receiving file list ... done
rpm/

sent 122 bytes  received 505 bytes  114.00 bytes/sec
total size is 45305958  speedup is 72258.31

$ ls -lrt
total 39088
-rwxr-xr-x 1 root root        4096 Sep  2 11:35 Basenames
    </pre>
    <h3>Example 8. Synchronize only the Directory Tree Structure (not the files)</h3>
    <p>Use rsync -d option to synchronize only directory tree from source to 
        the destination. The below example, synchronize only directory tree in 
        recursive manner, not the files in the directories.</p>
    <pre>$ rsync -v -d thegeekstuff@192.168.200.10:/var/lib/ .
Password:
receiving file list ... done
logrotate.status
CAM/
YaST2/
acpi/

sent 240 bytes  received 1830 bytes  318.46 bytes/sec
total size is 956  speedup is 0.46
    </pre>
    <h3>Example 9. View the rsync Progress during Transfer</h3>
    <p>When you use rsync for backup, you might want to know the progress of 
        the backup. i.e how many files are copies, at what rate it is copying 
        the file, etc.</p>
    <p>rsync –progress option displays detailed progress of rsync execution 
        as shown below.</p>
    <pre>$ rsync -avz --progress thegeekstuff@192.168.200.10:/var/lib/rpm/ /root/temp/
Password:
receiving file list ...
19 files to consider
./
Basenames
     5357568 100%   14.98MB/s    0:00:00 (xfer#1, to-check=17/19)
Conflictname
       12288 100%   35.09kB/s    0:00:00 (xfer#2, to-check=16/19)
.
.
.
sent 406 bytes  received 15810211 bytes  2108082.27 bytes/sec
total size is 45305958  speedup is 2.87
    </pre>
    <p>You can also use rsnapshot utility (that uses rsync) to 
        <a href="https://www.thegeekstuff.com/2009/08/tutorial-backup-linux-using-rsnapshot-rsync-utility/" target="_blank">backup local linux server</a>, 
        or <a href="https://www.thegeekstuff.com/2009/09/linux-remote-backup-using-rsnapshot-rsync-utility/" target="_blank">backup remote linux server</a>.</p>
    <h3>Example 10. Delete the Files Created at the Target</h3>
    <p>If a file is not present at the source, but present at the target, you 
        might want to delete the file at the target during rsync.</p>
    <p>In that case, use –delete option as shown below. rsync delete option 
        deletes files that are not there in source directory.</p>
    <pre># Source and target are in sync. Now creating new file at the target.
$ &gt; new-file.txt

$ rsync -avz --delete thegeekstuff@192.168.200.10:/var/lib/rpm/ .
Password:
receiving file list ... done
deleting new-file.txt
./

sent 26 bytes  received 390 bytes  48.94 bytes/sec
total size is 45305958  speedup is 108908.55
    </pre>
    <p>Target has the new file called new-file.txt, when synchronize with the 
        source with –delete option, it removed the file new-file.txt</p>
    <h3>Example 11. Do not Create New File at the Target</h3>
    <p>If you like, you can update (Sync) only the existing files at the target. 
        In case source has new files, which is not there at the target, you can 
        avoid creating these new files at the target. If you want this feature, 
        use --existing option with rsync command.</p>
    <p>First, add a new-file.txt at the source.</p>
    <pre>[/var/lib/rpm ]$ &gt; new-file.txt</pre>
    <p>Next, execute the rsync from the target.</p>
    <pre>$ rsync -avz --existing root@192.168.1.2:/var/lib/rpm/ .
root@192.168.1.2's password:
receiving file list ... done
./

sent 26 bytes  received 419 bytes  46.84 bytes/sec
total size is 88551424  speedup is 198991.96
    </pre>
    <p>If you see the above output, it didn't receive the new file new-file.txt</p>
    <h3>Example 12. View the Changes Between Source and Destination</h3>
    <p>This option is useful to view the difference in the files or directories 
        between source and destination.</p>
    <p>At the source:</p>
    <pre>$ ls -l /var/lib/rpm
-rw-r--r-- 1 root root  5357568 2010-06-24 08:57 Basenames
-rw-r--r-- 1 root root    12288 2008-05-28 22:03 Conflictname
-rw-r--r-- 1 root root  1179648 2010-06-24 08:57 Dirnames
    </pre>
    <p>At the destination:</p>
    <pre>$ ls -l /root/temp
-rw-r--r-- 1 root root    12288 May 28  2008 Conflictname
-rw-r--r-- 1 bin  bin   1179648 Jun 24 05:27 Dirnames
-rw-r--r-- 1 root root        0 Sep  3 06:39 Basenames
    </pre>
    <p>In the above example, between the source and destination, there are two 
        differences. First, owner and group of the file Dirname differs. Next, 
        size differs for the file Basenames.</p>
    <p>Now let us see how rsync displays this difference. -i option displays 
        the item changes.</p>
    <pre>$ rsync -avzi thegeekstuff@192.168.200.10:/var/lib/rpm/ /root/temp/
Password:
receiving file list ... done
&gt;f.st.... Basenames
.f....og. Dirnames

sent 48 bytes  received 2182544 bytes  291012.27 bytes/sec
total size is 45305958  speedup is 20.76
    </pre>
    <p>In the output it displays some 9 letters in front of the file name or 
        directory name indicating the changes.</p>
    <p>In our example, the letters in front of the Basenames (and Dirnames) 
        says the following:</p>
    <pre>&gt; specifies that a file is being transferred to the local host.
f represents that it is a file.
s represents size changes are there.
t represents timestamp changes are there.
o owner changed
g group changed.
    </pre>
    <h3>Example 13. Include and Exclude Pattern during File Transfer</h3>
    <p>rsync allows you to give the pattern you want to include and exclude 
        files or directories while doing synchronization.</p>
    <pre>$ rsync -avz --include 'P*' --exclude '*' thegeekstuff@192.168.200.10:/var/lib/rpm/ /root/temp/
Password:
receiving file list ... done
./
Packages
Providename
Provideversion
Pubkeys

sent 129 bytes  received 10286798 bytes  2285983.78 bytes/sec
total size is 32768000  speedup is 3.19
    </pre>
    <p>In the above example, it includes only the files or directories starting 
        with "P" (using rsync include) and excludes all other files. 
        (using rsync exclude "*" )</p>
    <h3>Example 14. Do Not Transfer Large Files</h3>
    <p>You can tell rsync not to transfer files that are greater than a specific 
        size using rsync –max-size option.</p>
    <pre>$ rsync -avz --max-size='100K' thegeekstuff@192.168.200.10:/var/lib/rpm/ /root/temp/
Password:
receiving file list ... done
./
Conflictname
Group
Installtid
Name
Sha1header
Sigmd5
Triggername

sent 252 bytes  received 123081 bytes  18974.31 bytes/sec
total size is 45305958  speedup is 367.35
    </pre>
    <p>max-size=100K makes rsync to transfer only the files that are less than 
        or equal to 100K. You can indicate M for megabytes and G for gigabytes.</p>
    <h3>Example 15. Transfer the Whole File</h3>
    <p>One of the main feature of rsync is that it transfers only the changed 
        block to the destination, instead of sending the whole file.</p>
    <p>If network bandwidth is not an issue for you (but CPU is), you can 
        transfer the whole file, using rsync -W option. This will speed-up the 
        rsync process, as it doesn't have to perform the checksum at the source 
        and destination.</p>
    <pre>#  rsync -avzW  thegeekstuff@192.168.200.10:/var/lib/rpm/ /root/temp
Password:
receiving file list ... done
./
Basenames
Conflictname
Dirnames
Filemd5s
Group
Installtid
Name

sent 406 bytes  received 15810211 bytes  2874657.64 bytes/sec
total size is 45305958  speedup is 2.87
    </pre>
    <h3>Additional rsync Tutorials</h3>
    <ul>
        <li><a href="https://www.thegeekstuff.com/2011/07/rsync-over-ssh-without-password/" target="_blank">How to Setup Rsync with SSH on UNIX / Linux (rsync without password)</a></li>
        <li><a href="https://www.thegeekstuff.com/2011/01/rsync-exclude-files-and-folders/" target="_blank">6 rsync Examples to Exclude Multiple Files and Directories using exclude-from</a></li>
    </ul>
    <h3>If you enjoyed this article, you might also like..</h3>
    <table>
        <tbody>
            <tr>
                <td valign="top">
                    <ol>
                        <li><a href="https://www.thegeekstuff.com/2010/12/50-unix-linux-sysadmin-tutorials/" target="_blank">50 Linux Sysadmin Tutorials</a></li>
                        <li><a href="https://www.thegeekstuff.com/2010/11/50-linux-commands/" target="_blank">50 Most Frequently Used Linux Commands (With Examples)</a></li>
                        <li><a href="https://www.thegeekstuff.com/2011/12/linux-performance-monitoring-tools/" target="_blank">Top 25 Best Linux Performance Monitoring and Debugging Tools</a></li>
                        <li><a href="https://www.thegeekstuff.com/2009/03/15-practical-linux-find-command-examples/" target="_blank">Mommy, I found it! – 15 Practical Linux Find Command Examples</a></li>
                        <li><a href="https://www.thegeekstuff.com/linux-101-hacks-ebook/" target="_blank">Linux 101 Hacks 2nd Edition eBook</a> <?= Html::bsLabel('Free', 'danger'); ?></li>
                    </ol>
                </td>
                <td>
                    <ul>
                        <li><a href="https://www.thegeekstuff.com/2010/01/awk-introduction-tutorial-7-awk-print-examples/" target="_blank">Awk Introduction – 7 Awk Print Examples</a></li>
                        <li><a href="https://www.thegeekstuff.com/2009/10/unix-sed-tutorial-advanced-sed-substitution-examples/" target="_blank">Advanced Sed Substitution Examples</a></li>
                        <li><a href="https://www.thegeekstuff.com/2009/03/8-essential-vim-editor-navigation-fundamentals/" target="_blank">8 Essential Vim Editor Navigation Fundamentals</a></li>
                        <li><a href="https://www.thegeekstuff.com/2011/06/iptables-rules-examples/" target="_blank">25 Most Frequently Used Linux IPTables Rules Examples</a></li>
                        <li><a href="https://www.thegeekstuff.com/2008/08/turbocharge-putty-with-12-powerful-add-ons-software-for-geeks-3/" target="_blank">Turbocharge PuTTY with 12 Powerful Add-Ons</a></li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
</div>