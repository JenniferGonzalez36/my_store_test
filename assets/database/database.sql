CREATE DATABASE tienda_master;

USE tienda_master;

CREATE TABLE users(
  id        int(255) auto_increment NOT NULL,
  name      varchar(100) NOT NULL,
  surname   varchar(255),
  email     varchar(255) NOT NULL,
  password  varchar(255) NOT NULL,
  role      varchar(20),
  image     varchar(255),
  CONSTRAINT pk_users PRIMARY KEY(id),
  CONSTRAINT uq_email UNIQUE(email)
) ENGINE = InnoDb;

INSERT INTO users VALUES(
  NULL, 'Admin', 'Admin', 'admin@admin.com', 'admin', 'admin', NULL
);

CREATE TABLE categories(
  id        int(255) auto_increment NOT NULL,
  name      varchar(100) NOT NULL,
  CONSTRAINT pk_categories PRIMARY KEY(id)
)ENGINE = InnoDb;

INSERT INTO categories VALUES(null, 'Manga corta');
INSERT INTO categories VALUES(null, 'Tirantes');
INSERT INTO categories VALUES(null, 'Manga larga');
INSERT INTO categories VALUES(null, 'Sudaderas');

CREATE TABLE products(
  id            int(255) auto_increment NOT NULL,
  category_id   int(255) NOT NULL,
  name          varchar(100) NOT NULL,
  description   text,
  price         float(100, 2) NOT NULL,
  stock         int(255) NOT NULL,
  sale          varchar(2),
  date          date NOT NULL,
  image         varchar(255),
  CONSTRAINT pk_products PRIMARY KEY(id),
  CONSTRAINT fk_product_category FOREIGN KEY(category_id) REFERENCES categories(id)
) ENGINE = InnoDb;

CREATE TABLE requests(
  id                int(255) auto_increment NOT NULL,
  user_id           int(255) NOT NULL,
  countrys_state    varchar(100) NOT NULL,
  town              varchar(100) NOT NULL,
  adress            varchar(255) NOT NULL,
  cost              float(100, 2) NOT NULL,
  state             varchar(20) NOT NULL,
  date              date NOT NULL,
  hour              time,
  CONSTRAINT pk_requests PRIMARY KEY(id),
  CONSTRAINT fk_request_user FOREIGN KEY(user_id) REFERENCES users(id)
) ENGINE = InnoDb;

CREATE TABLE lines_requests(
  id            int(255) auto_increment NOT NULL,
  request_id    int(255) NOT NULL,
  product_id    int(255) NOT NULL,
  CONSTRAINT pk_lines_requests PRIMARY KEY(id),
  CONSTRAINT fk_line_request_request FOREIGN KEY(request_id) REFERENCES requests(id),
  CONSTRAINT fk_line_request_product FOREIGN KEY(product_id) REFERENCES products(id)
) ENGINE = InnoDb;
