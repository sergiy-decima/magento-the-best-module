CURRENT_DIR := $(shell dirname $(realpath $(firstword $(MAKEFILE_LIST))))

include $(CURRENT_DIR)/.env.ci

help:

import-db:
	gunzip < $(EXTENSION_PATH)/Test/Integration/dump/test.dump.sql.gz | docker exec -i db mysql -hlocalhost -u$(MYSQL_USER) -p$(MYSQL_PASSWORD) $(MYSQL_DATABASE)
