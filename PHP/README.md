cd ~/Homestead
vagrant up
vagrant ssh

php artisan serve --port 8080


docker-compose exec vuesplash_web php artisan serve --host 0.0.0.0 --port 8081
docker-compose exec vuesplash_web npm run watch


