
include $(shell pwd)/.env.ci

help:

import-db:
	gunzip < $(EXTENSION_PATH)/Test/Integration/dump/test.dump.sql.gz | docker exec -i db mysql -hlocalhost -u$(MYSQL_USER) -p$(MYSQL_PASSWORD) $(MYSQL_DATABASE)
