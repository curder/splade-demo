# Splade demo

# 项目初始化

1. 安装PHP依赖
    ```bash
    composer install -vv
    ```

2. 安装Node依赖
    ```bash
    yarn && yarn build
    ```

3. 配置本地环境
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. 修改 MySQL 数据库配置

5. 执行迁移
    ```bash
    php artisan migrate:refresh --seed
    ```
