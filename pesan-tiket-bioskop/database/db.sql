DROP DATABASE IF EXISTS `db_tiket`;

CREATE DATABASE `db_tiket`;

USE `db_tiket`;

DROP TABLE IF EXISTS `cache`;

CREATE TABLE
    `cache` (
        `key` varchar(255) NOT NULL,
        `value` mediumtext NOT NULL,
        `expiration` int NOT NULL,
        PRIMARY KEY (`key`)
    );

DROP TABLE IF EXISTS `cache_locks`;

CREATE TABLE
    `cache_locks` (
        `key` varchar(255) NOT NULL,
        `owner` varchar(255) NOT NULL,
        `expiration` int NOT NULL,
        PRIMARY KEY (`key`)
    );

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE
    `failed_jobs` (
        `id` bigint unsigned NOT NULL AUTO_INCREMENT,
        `uuid` varchar(255) NOT NULL,
        `connection` text NOT NULL,
        `queue` text NOT NULL,
        `payload` longtext NOT NULL,
        `exception` longtext NOT NULL,
        `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (`id`),
        UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
    );

DROP TABLE IF EXISTS `job_batches`;

CREATE TABLE
    `job_batches` (
        `id` varchar(255) NOT NULL,
        `name` varchar(255) NOT NULL,
        `total_jobs` int NOT NULL,
        `pending_jobs` int NOT NULL,
        `failed_jobs` int NOT NULL,
        `failed_job_ids` longtext NOT NULL,
        `options` mediumtext,
        `cancelled_at` int DEFAULT NULL,
        `created_at` int NOT NULL,
        `finished_at` int DEFAULT NULL,
        PRIMARY KEY (`id`)
    );

DROP TABLE IF EXISTS `jobs`;

CREATE TABLE
    `jobs` (
        `id` bigint unsigned NOT NULL AUTO_INCREMENT,
        `queue` varchar(255) NOT NULL,
        `payload` longtext NOT NULL,
        `attempts` tinyint unsigned NOT NULL,
        `reserved_at` int unsigned DEFAULT NULL,
        `available_at` int unsigned NOT NULL,
        `created_at` int unsigned NOT NULL,
        PRIMARY KEY (`id`),
        KEY `jobs_queue_index` (`queue`)
    );

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE
    `migrations` (
        `id` int unsigned NOT NULL AUTO_INCREMENT,
        `migration` varchar(255) NOT NULL,
        `batch` int NOT NULL,
        PRIMARY KEY (`id`)
    );

INSERT INTO
    `migrations`
VALUES
    (1, '0001_01_01_000000_create_users_table', 1),
    (2, '0001_01_01_000001_create_cache_table', 1),
    (3, '0001_01_01_000002_create_jobs_table', 1);

DROP TABLE IF EXISTS `password_reset_tokens`;

CREATE TABLE
    `password_reset_tokens` (
        `email` varchar(255) NOT NULL,
        `token` varchar(255) NOT NULL,
        `created_at` timestamp NULL DEFAULT NULL,
        PRIMARY KEY (`email`)
    );

DROP TABLE IF EXISTS `sessions`;

CREATE TABLE
    `sessions` (
        `id` varchar(255) NOT NULL,
        `user_id` bigint unsigned DEFAULT NULL,
        `ip_address` varchar(45) DEFAULT NULL,
        `user_agent` text,
        `payload` longtext NOT NULL,
        `last_activity` int NOT NULL,
        PRIMARY KEY (`id`),
        KEY `sessions_user_id_index` (`user_id`),
        KEY `sessions_last_activity_index` (`last_activity`)
    );

INSERT INTO
    `sessions`
VALUES
    (
        '0nJCkcQTEfGq9TQ0f5dAYvYChOYFsfuwG5EkD7Dq',
        NULL,
        '127.0.0.1',
        'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoid2RQQ0hZZXN2MDhXN2NmazIzVVEyZmo0eWliUTR2bDREaE1pSGZadSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hdXRoL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',
        1721573998
    );

DROP TABLE IF EXISTS `users`;

CREATE TABLE
    `users` (
        `id` bigint unsigned NOT NULL AUTO_INCREMENT,
        `name` varchar(255) NOT NULL,
        `email` varchar(255) NOT NULL,
        `password` varchar(255) NOT NULL,
        `remember_token` varchar(100) DEFAULT NULL,
        `created_at` timestamp NULL DEFAULT NULL,
        `updated_at` timestamp NULL DEFAULT NULL,
        PRIMARY KEY (`id`),
        UNIQUE KEY `users_email_unique` (`email`)
    );

INSERt INTO
    `users` (
        `id`,
        `name`,
        `email`,
        `password`,
        `remember_token`,
        `created_at`,
        `updated_at`
    )
VALUES 