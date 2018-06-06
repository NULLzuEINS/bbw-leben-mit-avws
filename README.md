# bbw

[![Waffle.io - Columns and their card count](https://badge.waffle.io/NULLzuEINS/bbw-leben-mit-avws.svg?columns=all)](https://waffle.io/NULLzuEINS/bbw-leben-mit-avws)

## Usage

```
cp .env.sample .env
```

**Development**

```
docker-compose -f docker-compose.yml -f docker-compose.development.yml up -d
```

**Production**

```
docker network create webproxy
docker-compose -f docker-compose.yml -f docker-compose.production.yml up -d

```

**Both**

```
docker-compose -f docker-compose.yml -f docker-compose.development.yml -f docker-compose.production.yml up -d

```

## Deployment

```
scp -r . nze:/var/docker/bbw
ssh nze "cd /var/docker/bbw/ && docker-compose up -d"
```
