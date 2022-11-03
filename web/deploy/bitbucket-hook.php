<?php

if ($_GET['id'] === 'sdkG2FF.34gl$d2-3') {

    // Узнаём из под какого пользователя запускается скрипт
    $userinfo = posix_getpwuid(posix_getuid());
    // echo $userinfo['name']; // выведет имя пользователя, от которого работает PHP

    $repo_dir = '/var/www/www-root/data/www/pravilnaya-mebel.ru/';
    $web_root_dir = '/var/www/www-root/data/www/pravilnaya-mebel.ru';

    // Full path to git binary is required if git is not in your PHP user's path. Otherwise just use 'git'.
    // To find where your git binary is located, run this shell command: "which git"
    $git_bin_path = 'git';

    $update = false;

    // Parse data from Bitbucket hook payload
    $payload = json_decode($_POST['payload']);

    if (empty($payload->commits)) {
        // When merging and pushing to bitbucket, the commits array will be empty.
        // In this case there is no way to know what branch was pushed to, so we will do an update.
        $update = true;
    } else {
        foreach ($payload->commits as $commit) {
            $branch = $commit->branch;
            if ($branch === 'master' || isset($commit->branches) && in_array('master', $commit->branches)) {
                $update = true;
                break;
            }
        }
    }

    if ($update) {
        // Do a git checkout to the web root
        exec('cd ' . $repo_dir . ' && ' . $git_bin_path . ' pull');
        exec('cd ' . $repo_dir . ' && GIT_WORK_TREE=' . $web_root_dir . ' ' . $git_bin_path . ' checkout -f master');

        // Log the deployment
        $commit_hash = shell_exec('cd ' . $repo_dir . ' && ' . $git_bin_path . ' rev-parse --short HEAD');
        file_put_contents('deploy.log', date('m/d/Y h:i:s a') . " Deployed branch: " . $branch . " Commit: " . $commit_hash . "\n", FILE_APPEND);
    }
}
