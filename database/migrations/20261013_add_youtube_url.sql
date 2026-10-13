ALTER TABLE posts
    ADD COLUMN youtube_url VARCHAR(2048) NOT NULL DEFAULT '' AFTER featured_image_url;