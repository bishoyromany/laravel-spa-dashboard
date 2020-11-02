@servers(['localhost' => '127.0.0.1'])

@task('git')
    git pull origin {{ $branch }}
@endtask

@task('composer')
    composer install
@endtask

@task('npm')
    npm install
@endtask

@task('migrate')
    php artisan migrate --seed
@endtask


@story('deploy', ['on' => 'localhost'])
    git
    composer
    npm
    migrate
@endstory