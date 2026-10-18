ALTER TABLE newsletter_subscribers
    ADD COLUMN status ENUM('subscribed', 'unsubscribed') NOT NULL DEFAULT 'subscribed' AFTER email;
