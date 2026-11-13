#!/usr/bin/env bash
set -Eeuo pipefail
cd "$(dirname "$0")/.."

if [ ! -f .env ]; then
  if [ -f .env.example ]; then
    cp .env.example .env
  else
    echo "ERROR: .env.example tidak ditemukan; server tidak dijalankan."
    exit 1
  fi
fi

if [ ! -f vendor/autoload.php ]; then
  echo "ERROR: Dependensi Composer belum terpasang. Jalankan composer install."
  exit 1
fi

if [ ! -f database/database.sqlite ]; then
  mkdir -p database
  touch database/database.sqlite
fi

if ! grep -q '^APP_KEY=base64:' .env; then
  php artisan key:generate --force
fi

mkdir -p storage/logs
if ! pgrep -f '[p]hp artisan serve --host=0.0.0.0 --port=8000' >/dev/null; then
  nohup php artisan serve --host=0.0.0.0 --port=8000 > /tmp/koperasi-laravel-8000.log 2>&1 &
fi

for attempt in $(seq 1 30); do
  if curl --silent --fail http://127.0.0.1:8000/up >/dev/null; then
    echo "Koperasi Tunas Merdeka aktif di port 8000."
    exit 0
  fi
  sleep 1
done

echo "ERROR: Laravel belum merespons. Log:"
tail -n 80 /tmp/koperasi-laravel-8000.log || true
exit 1
