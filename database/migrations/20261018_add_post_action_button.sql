ALTER TABLE posts
    ADD COLUMN action_button_text VARCHAR(120) NOT NULL DEFAULT '' AFTER youtube_url,
    ADD COLUMN action_button_url VARCHAR(2048) NOT NULL DEFAULT '' AFTER action_button_text,
    ADD COLUMN action_button_new_tab TINYINT(1) NOT NULL DEFAULT 0 AFTER action_button_url;
