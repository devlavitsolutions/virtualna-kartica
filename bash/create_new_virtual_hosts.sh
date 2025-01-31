#!/bin/bash

# set in file cron job: /var/spool/cron/apache 
# this script is custom, it will execute on every X hour, creating new virtual hosts in /etc/httpd/conf.d folder

# Define directories
CERTIFICATES_DIR="/var/www/webroot/ROOT/storage/letsencrypt/certificates"
APACHE_CONF_DIR="/etc/httpd/conf.d"

# Function to get current timestamp
timestamp() {
    date +"%Y-%m-%d %H:%M:%S"
}

# Create or delete virtual host configurations
for domain_dir in "$CERTIFICATES_DIR"/*; do
    if [ -d "$domain_dir" ]; then
        domain=$(basename "$domain_dir")
        conf_file="$APACHE_CONF_DIR/user-domain-cors-${domain}.conf"

        # Create Apache configuration file if it doesn't exist
        if [ ! -f "$conf_file" ]; then
            echo "$(timestamp): Creating configuration for $domain"
            echo "<VirtualHost *:443>
ServerName $domain
DocumentRoot /var/www/webroot/ROOT
SSLEngine on
SSLCertificateFile $domain_dir/fullchain.pem
SSLCertificateKeyFile $domain_dir/privkey.pem
ErrorLog /var/log/httpd/${domain}-ssl-error.log
CustomLog /var/log/httpd/${domain}-ssl-access.log combined
</VirtualHost>" > "$conf_file"
        else
            echo "$(timestamp): Configuration (VirtualHost) for $domain already exists."
        fi
    fi
done

# this is working code that will delete virtual domain files, i just remove it, because i dont need it!
# Delete configuration files for domains that no longer exist
# for conf_file in "$APACHE_CONF_DIR/user-domain-cors-"*; do
#     conf_filename=$(basename "$conf_file")
#     domain=${conf_filename#"user-domain-cors-"}
#     domain=${domain%".conf"}

#     domain_dir="$CERTIFICATES_DIR/$domain"

#     if [ ! -d "$domain_dir" ]; then
#         echo "$(timestamp): Deleting configuration for $domain"
#         rm -f "$conf_file"
#     else
#         echo "$(timestamp): Certificate directory exists for $domain, keeping configuration."
#     fi
# done

# Restart Apache is set to restart in jelastics dashborad 
# addons section Env Start/Stop Scheduler at 06:00AM Europe/Belgrade (GMT+01:00) time
