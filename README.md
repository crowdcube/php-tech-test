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

Start Laravel Sail, a simple command-line interface for interacting with Laravel's default Docker configuration:

> ./vendor/bin/sail up

The first time you run the Sail up command, Sail's application containers will be built on your machine. This could take several minutes.

The app will re-populate the database with a set of test movies each time the app restarts and will also reset the database.

### Database

The database is a simple in memory sqlite database, run the following to create the table and seed it:

>php artisan migrate

>php artisan db:seed

Then to check the contents:

>php artisan tinker

>DB::table('movies')->get();
