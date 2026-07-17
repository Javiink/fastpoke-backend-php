FROM dunglas/frankenphp:1-php8.4

ENV COMPOSER_ALLOW_SUPERUSER=1

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    curl \
    wget \
    nano \
    procps \
    libicu-dev \
    libzip-dev \
    libpq-dev \
    && rm -rf /var/lib/apt/lists/*

RUN install-php-extensions \
    intl \
    zip \
    opcache \
    pdo_pgsql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN curl -1sLf https://dl.cloudsmith.io/public/symfony/stable/setup.deb.sh | bash \
    && apt-get update \
    && apt-get install -y symfony-cli

RUN install-php-extensions xdebug

WORKDIR /app

EXPOSE 80