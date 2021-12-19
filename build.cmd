docker-compose down
docker-compose up -d
docker exec -i www_db_1 mysql -uroot -proot taskit < ./task/sql.sql
pause