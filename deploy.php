<?php

namespace Deployer;

require 'constants.php';

require 'recipe/laravel.php';

set('repository', SSH_GIT);

// Laravel shared dirs
set('shared_dirs', SHARED_DIRS);

// Laravel 5 shared file
set('shared_files', SHARED_FILES);

// Laravel writable dirs
set('writable_dirs', WRITABLE_DIRS);

// Servers
server('production', IP_SERVER)
    ->user(USER)
    ->password(PASSWORD)
    ->set('deploy_path', PATH);

desc('Deploy your project');
task('deploy', [
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:vendors',
    'deploy:clear_paths',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
    'success',
]);

after('deploy:failed', 'deploy:unlock');