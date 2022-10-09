#! /bin/bash

while [ ! -f "/home/user42/data/website/.installed" ]
do
	echo -n "."
	sleep 1
done