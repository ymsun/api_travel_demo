#!/bin/bash

cd $(dirname $0)

for name in application
do
	dirs="$name/var/smarty_cache $name/var/smarty_templates_c"
	mkdir -pv $dirs
	if test $(whoami) != 'www-data'
	then
		echo "Change owner to www-data"
		sudo chown www-data:www-data $dirs
	fi
done

