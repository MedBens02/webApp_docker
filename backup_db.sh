#!/bin/bash
# creates a backup of the curr db

docker exec -ti new-db-1 mysqldump -u root mydb > ./db/mysql_backup.sql
mv ./db/mysql_backup.sql ./db/mydb.sql
