#!/bin/bash

# Get the selected stream name
stream_name="$1"

# command to enable the stream using the configuration file
/usr/local/nginx/sbin/nginx -p /usr/local/nginx/ -c /usr/local/nginx/conf/nginx.conf -s unpublish "$stream_name"
