APP_NAME=make-app
PROJECT_NAME=makeit-kpu/makeit-home
VIRTUAL_HOST=make-app.ga
ADMIN_EMAIL=jin@make-it.co.kr
GITLAB_REPO=registry.gitlab.com/makeit/$PROJECT_NAME:master

docker build -t $PROJECT_NAME .
docker rm -f $APP_NAME
docker run -d \
    --name $APP_NAME \
    --restart=always \
    --net reverse-proxy \
    -e LETSENCRYPT_EMAIL=$ADMIN_EMAIL \
    -e LETSENCRYPT_HOST=$VIRTUAL_HOST \
    -e VIRTUAL_HOST=$VIRTUAL_HOST $PROJECT_NAME
