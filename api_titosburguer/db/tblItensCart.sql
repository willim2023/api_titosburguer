CREATE TABLE tblItensCart(
    id_item_cart INT PRIMARY KEY AUTO_INCREMENT,
    id_cart INT NOT NULL,
    id_product INT NOT NULL,
    price_product DECIMAL(10,2) NOT NULL,
    qtd INT,
    created_at DATETIME,
    updated_at DATETIME
);