# クソ★コラメーカー
クソコラが簡単に作れる

# デプロイ方法
git cloneする
cp .env.example .env
composer install --no-dev
php artisan storage:link
sudo chmod 777 storage -R
sudo chown -R apache:apache storage
sudo chmod 777 bootstrap/cache -R
php artisan key:generate
npm install
npm run prod
CREATE DATABASE `dbname` CHARACTER SET utf8mb4;
CREATE USER 'ユーザー名'@'localhost' IDENTIFIED BY 'パスワード';
GRANT ALL PRIVILEGES ON `dbname`.* TO 'username'@'localhost'  IDENTIFIED BY 'password';
背景となる画像ファイルを/storage/app/private/image/original/1.jpgに置く
