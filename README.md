# DaWaPack Playground
The DaWaPack Playground is a Docker Compose environment that puts together the necessary pieces to let you play with DaWaPack in a demo environment.

## Install

```
bash-5.1$ git clone git@github.com:dawapack/playground.git
bash-5.1$ cd playground
bash-5.1$ ./bin/playground install
```

## Start playground

```
bash-5.1$ ./bin/playground up
```

## Stop playground

```
bash-5.1$ ./bin/playground down
```

## Containers

- **RabbitMQ**
- **Redis** - act as database for authors and posts microservices
- **Infrastructure** - this container will setup queues, exchanges and bindings
- **Authors** - see playground/api/authors.http for api calls
- **Posts** - see playground/api/posts.http for api calls

```
bash-5.1$ docker exec -it (infrastructure|authors|posts)_dms bash
```

## RabbitMq Management

Just `http://localhost:15672/` (**user**: guest & **password**: guest)

## Redis GUI Tool

Just connect with your favorite redis tool to `localhost:6379`