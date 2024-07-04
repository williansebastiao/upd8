# Usar a imagem base do PHP 8.3-FPM
FROM php:8.3-fpm

# Instalar dependências do sistema
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd zip

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN groupadd -g 1000 upd8 && \
    useradd -u 1000 -g upd8 -m -s /bin/bash upd8

# Definir diretório de trabalho
WORKDIR /var/www

# Copiar arquivos do projeto para o contêiner
COPY . /var/www

# Corrigir permissões para o usuário não-root
RUN chown -R upd8:upd8 /var/www

# Alternar para o usuário não-root
USER upd8

# Expor a porta 9000 e iniciar o servidor PHP-FPM
EXPOSE 9000
CMD ["php-fpm"]
