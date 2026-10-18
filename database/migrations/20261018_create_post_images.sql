CREATE TABLE IF NOT EXISTS post_images (
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    post_id BIGINT UNSIGNED NOT NULL,
    image_path VARCHAR(2048) NOT NULL,
    alt_text VARCHAR(200) NOT NULL,
    below_text TEXT NOT NULL,
    below_text_type ENUM('caption', 'paragraph') NOT NULL DEFAULT 'caption',
    layout ENUM('left', 'center', 'right', 'gallery') NOT NULL DEFAULT 'left',
    sort_order INT UNSIGNED NOT NULL DEFAULT 0,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    KEY post_images_order (post_id, sort_order, id),
    CONSTRAINT post_images_post_fk FOREIGN KEY (post_id) REFERENCES posts (id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
