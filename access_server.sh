#!/bin/bash

if [ $# -ne 1 ]; then
    echo "Usage: $0 <container_name_or_id>"
    exit 1
fi

docker exec -ti $1 /bin/bash 
