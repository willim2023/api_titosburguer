CREATE TABLE tblUsers (
    id INT PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(15) NOT NULL,
    lastname VARCHAR(10) NOT NULL,
    username VARCHAR(15) NOT NULL,
    pass_user VARCHAR(120) NOT NULL,
    birthday DATE NOT NULL,
    cpf INT NOT NULL,
    mail VARCHAR(30) NOT NULL,
    id_status INT NOT NULL,
    created_at DATETIME,
    updated_at DATETIME,
    FOREIGN KEY (id_status) REFERENCES tblStatus(id_status)
);
