CREATE DATABASE gestao_brinquedos;
USE gestao_brinquedos;

CREATE TABLE brinquedo{
    brinquedo_id INT AUTO_INCREMENT PRIMARY KEY,
    nome_brinquedo VARCHAR(50) NOT NULL,
    categoria_brinquedo VARCHAR(50) NOT NULL,
    faixa_etaria VARCHAR(50) NOT NULL,
    preco_brinquedo VARCHAR(50) NOT NULL,
    qtd_brinquedo VARCHAR(50) NOT NULL,
    cadastrar_brinquedo VARCHAR(50) NOT NULL,
    };