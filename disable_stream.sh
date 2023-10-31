#!/bin/bash

# getting the stream name
stream_name="$1"

# command to disable the stream in the configuration file
/usr/local/nginx/sbin/nginx -p /usr/local/nginx/ -c /usr/local/nginx/conf/nginx.conf -s drop "$stream_name"
