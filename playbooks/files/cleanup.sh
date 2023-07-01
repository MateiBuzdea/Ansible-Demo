#!/bin/bash

directory=/app

# Listen for file uploads with inotifywait
# Remove them after 10 seconds
inotifywait -m -e create -e moved_to --format "%f" $directory | \
while read created_file; do
    echo "$directory/$created_file was uploaded";
    sleep 10;
    rm "$directory/$created_file";
done