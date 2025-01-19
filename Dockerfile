# Menggunakan image dasar FrankenPHP
FROM dunglas/frankenphp:1.4-php8.2.27-alpine

# Install dependensi Alpine dan PHP Extensions
RUN install-php-extensions \
    pdo_mysql \
    mysqli \
    gd \
    intl \
    zip \
    opcache

# Set working directory
WORKDIR /app

# Copy semua file proyek ke dalam container
COPY . /app

# Pastikan folder writable memiliki izin tulis
RUN chmod -R 0777 /app/writable

ENV FRANKENPHP_CONFIG="worker ./public/index.php"
# Expose port 8080 untuk HTTP
EXPOSE 8080
