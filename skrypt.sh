#!/bin/bash
AKTUALNA_DATA=$(date +%F)
mkdir -p backup
tar -c -f "$AKTUALNA_DATA".tar --exclude "php-exercises/backup/*" ./ && mv "$AKTUALNA_DATA".tar backup