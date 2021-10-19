# CCMDB

### Background
A new startup CCMDB need your help in producing a prototype for a movie information portal to rival IMDB which they can pitch to investors on Crowdcube.

They have opted to use PHP and Laravel to build it and have brought you in as a consultant to answer some questions regarding the design and build.

### Interview format
The interview is a 45min pair programming exercise where you will work with another developer through a set of tasks.

The interview will start with a basic introduction to the application and there will be the opportunity to ask questions.

You will be the driver and are responsible for directing the overall solution design but we encourage you to vocalise your thoughts with your partner and ask questions.

And yes you can Google commands and documentation as needed.

Good luck!

### How to run
If you're on Windows or macOS you'll need [Docker Desktop](https://www.docker.com/products/docker-desktop) installed, on Linux you'll need [Docker](https://www.docker.com/). 

Before we start, you will first need to install Laravel's dependencies.

```
docker run --rm --interactive --tty --volume $PWD:/app composer install
```

Next, you'll need to make a copy of the `.env` file:

```
cp .env.example .env
```

Be sure to set the `APP_PORT` variable to an available port on your local machine. Default is `8080`.

Start Laravel Sail, a simple command-line interface for interacting with Laravel's default Docker configuration:

> ./vendor/bin/sail up -d

The first time you run the Sail up command, Sail's application containers will be built on your machine. This could take several minutes.

Navigate to http://localhost, adding your port, and follow the instructions. You will be asked to set an APP_KEY.

After following all Laravel configuration steps via the browser, the root domain should display `Greetings from CC Movie Database!`.

### Database

Run the following to create the database, tables and seed data:

> docker-compose exec laravel.test php artisan migrate

> docker-compose exec laravel.test php artisan db:seed

Then to check the contents:

> docker-compose exec laravel.test php artisan tinker

> DB::table('movies')->get();

### Running Tests

If you want to run a test you've created, you can use this command:

> docker-compose exec laravel.test vendor/bin/phpunit tests/
