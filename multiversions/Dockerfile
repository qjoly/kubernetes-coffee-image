# Specify the base image
FROM php:8.3-apache

# Set the working directory
WORKDIR /var/www/html

# Copy the application files to the container
COPY ./src .

# Set up Apache configuration
RUN a2enmod rewrite

# Expose the port
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]
