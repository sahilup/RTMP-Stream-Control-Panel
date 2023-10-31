#!/bin/bash

# Retrieve the status page from Nginx
status=$(curl -s http://localhost/stat)

# Extract the stream information from the status page
stream_info=$(echo "$status" | grep -oP "<application>.*?</application>" | sed 's/<[^>]*>//g' | tr '\n' ' ')

# Output the stream information
echo "$stream_info"
