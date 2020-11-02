@servers(['localhost' => '127.0.0.1', 'remote' => 'root@nginx.mob-voip.net -p 7268'])

{{-- Deploy On All Servers --}}
@story('deploy', ['on' => ['localhost', 'remote']])
    cd
    git
    composer
    npm
    migrate
@endstory

@story('deploy-localhost', ['on' => 'localhost'])
    cd
    git
    composer
    npm
    migrate
@endstory

@story('deploy-remote', ['on' => 'remote'])
    cd
    git
    composer
    npm
    migrate
@endstory

@task('cd')
    cd {{$path}}
@endtask

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