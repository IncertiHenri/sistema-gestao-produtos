CREATE DATABASE sistema_gestao_produtos;

USE sistema_gestao_produtos;

CREATE TABLE produtos (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(100) NOT NULL,
        categoria VARCHAR(100) NOT NULL,
        descricao VARCHAR(200) NOT NULL,
        preco INT NOT NULL,
        quantidade_estoque INT NOT NULL,
        data_validade DATE NOT NULL
    );