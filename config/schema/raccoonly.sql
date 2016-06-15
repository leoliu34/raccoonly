CREATE DATABASE raccoonly;

USE raccoonly;

CREATE TABLE cities (
	id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE raccoons (
	id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    gender ENUM('M', 'F') NOT NULL,
    has_cubs TINYINT(1),
    created DATETIME,
    modified DATETIME
);

CREATE TABLE tags (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    UNIQUE KEY (name)
);

CREATE TABLE cities_raccoons (
    city_id INT NOT NULL,
    raccoon_id INT NOT NULL,
    PRIMARY KEY (city_id, raccoon_id),
    FOREIGN KEY city_key (city_id) REFERENCES cities (id),
    FOREIGN KEY raccoon_key (raccoon_id) REFERENCES raccoons (id)
);

CREATE TABLE raccoons_tags (
    raccoon_id INT NOT NULL,
    tag_id INT NOT NULL,
    PRIMARY KEY (raccoon_id, tag_id),
    FOREIGN KEY raccoon_key (raccoon_id) REFERENCES raccoons (id),
    FOREIGN KEY tag_key (tag_id) REFERENCES tags (id)
);

CREATE USER 'raccoonly'@'localhost' IDENTIFIED BY 'raccoonly';

GRANT ALL PRIVILEGES ON raccoonly.* TO 'raccoonly'@'localhost';

FLUSH PRIVILEGES;
