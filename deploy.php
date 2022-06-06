<?php

namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'hajusrakendused');
set('remote_user', 'virt100795'); //virt...
set('http_user', 'virt100795');
set('keep_releases', 2);

// Hosts
host('nimi.itmajakas.ee')
    ->setHostname('ta20pajuniit.itmajakas.ee')
    ->set('http_user', 'virt100795')
    ->set('deploy_path', '~/domeenid/www.ta20pajuniit.itmajakas.ee/hajusrakendused')
    ->set('branch', 'master');

// Tasks
set('repository', 'git@github.com:Metsaline/hajusrakendused.git');
//Restart opcache
task('opcache:clear', function () {
    run('killall php80-cgi || true');
})->desc('Clear opcache');

task('build:node', function () {
    cd('{{release_path}}');
    run('npm i');
    run('npx vite build');
    run('rm -rf node_modules');
});
task('deploy', [
    'deploy:prepare',
    'deploy:vendors',
    'artisan:storage:link',
    'artisan:view:cache',
    'artisan:config:cache',
    'build:node',
    'deploy:publish',
    'opcache:clear',
    'artisan:cache:clear'
]);
after('deploy:failed', 'deploy:unlock');
