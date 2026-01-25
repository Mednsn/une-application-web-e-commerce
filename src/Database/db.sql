CREATE DATABASE ecommerce_prd_electronique;
USE ecommerce_prd_electronique;

CREATE TABLE roles (
    id int PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(80)

)ENGINE=INNODB;
CREATE TABLE users (
    id int PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(80),
    email VARCHAR(80) UNIQUE NOT NULL,
    password VARCHAR(100),
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    is_active BOOLEAN DEFAULT true ,
    role_id int,
    FOREIGNE KEY (role_id) REFERENCE roles(id) ON DELETE CASCADE


)ENGINE=INNODB;


CREATE TABLE products (
    id int PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(80),
    description TEXT,
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    price float,
    stock int,
    image VARCHAR(400),
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
    product_id int,
    FOREIGNE KEY (product_id) REFERENCE products(id) ON DELETE CASCADE

)ENGINE=INNODB;

CREATE TABLE paniers_Items (
    id int PRIMARY KEY AUTO_INCREMENT,
    quantity int ,
    panier_id int,
    FOREIGNE KEY (panier_id) REFERENCE paniers(id) ON DELETE CASCADE

)ENGINE=INNODB;

CREATE TABLE commandes (
    id int PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(80),
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
    totalPrice  float,
    status  VARCHAR(80),
    user_id int,
    FOREIGNE KEY (user_id) REFERENCE users(id) ON DELETE CASCADE



)ENGINE=INNODB;

CREATE TABLE commande_Items (
    id int PRIMARY KEY AUTO_INCREMENT,
    quantity int,
    price float ,
     commande_id int,
    FOREIGNE KEY (commande_id) REFERENCE commandes(id) ON DELETE CASCADE
    product_id int,
    FOREIGNE KEY (product_id) REFERENCE products(id) ON DELETE CASCADE



)ENGINE=INNODB;

