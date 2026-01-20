CREATE DATABASE ecommerce_prd_electronique;
USE ecommerce_prd_electronique;
CREATE TABLE users (
    id int PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(80),
    email VARCHAR(80) UNIQUE NOT NULL,
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    role VARCHAR(80),
    is_active BOOLEAN DEFAULT true 

)ENGINE=INNODB;

CREATE TABLE produits (
    id int PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(80),
    description TEXT,
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    price float,
    stock int,
    image VARCHAR(400),
    role VARCHAR(80),
    status VARCHAR(80),
    category_id int,
    FOREIGNE KEY (category_id) REFERENCE categories(id) ON DELETE CASCADE


)ENGINE=INNODB;

CREATE TABLE categories (
     id int PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(80),
    description TEXT 

)ENGINE=INNODB;


CREATE TABLE paniers (
    id int PRIMARY KEY AUTO_INCREMENT,
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
    user_id int,
    FOREIGNE KEY (user_id) REFERENCE users(id) ON DELETE CASCADE

)ENGINE=INNODB;

CREATE TABLE paniers_Items (
    id int PRIMARY KEY AUTO_INCREMENT,
    quantity int ,
    cart_id int,
    FOREIGNE KEY (cart_id) REFERENCE carts(id) ON DELETE CASCADE

)ENGINE=INNODB;

CREATE TABLE commandes (
    id int PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(80),
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
    role VARCHAR(80),
    totalPrice  float,
    status  VARCHAR(80),
    user_id int,
    FOREIGNE KEY (user_id) REFERENCE users(id) ON DELETE CASCADE



)ENGINE=INNODB;

CREATE TABLE commande_Items (
    id int PRIMARY KEY AUTO_INCREMENT,
    quantity int,
    price float


)ENGINE=INNODB;

