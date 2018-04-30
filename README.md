# bbw

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

## Deployment

```
scp -r . nze:/var/docker/bbw
ssh nze "cd /var/docker/bbw/ && docker-compose up -d"
```
