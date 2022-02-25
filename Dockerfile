# base image
FROM httpd:latest

# copying code
COPY ./ /usr/local/apache2/htdocs/