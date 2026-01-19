#!/bin/bash

BACKUP_DIR="$(dirname "$0")/backups"
mkdir -p "$BACKUP_DIR"
touch "$BACKUP_DIR"/file_{1..5}.txt

