ALTER TABLE admin_users
    ADD COLUMN email VARCHAR(254) NULL AFTER username,
    ADD UNIQUE KEY admin_users_email_unique (email);

CREATE TABLE admin_password_resets (
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    admin_user_id BIGINT UNSIGNED NOT NULL,
    token_hash CHAR(64) NOT NULL,
    expires_at DATETIME NOT NULL,
    used_at DATETIME NULL DEFAULT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    UNIQUE KEY admin_password_resets_token_unique (token_hash),
    KEY admin_password_resets_user_expiry (admin_user_id, expires_at),
    CONSTRAINT admin_password_resets_user_fk
        FOREIGN KEY (admin_user_id) REFERENCES admin_users (id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE admin_password_reset_attempts (
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    email_hash CHAR(64) NOT NULL,
    ip_hash CHAR(64) NOT NULL,
    attempted_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    KEY admin_password_reset_attempts_lookup (email_hash, ip_hash, attempted_at)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
