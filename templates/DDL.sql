CREATE TABLE `cadastro`.`grupo` 
  ( 
     `codigo`          INT(11) NOT NULL auto_increment PRIMARY KEY, 
     `nome`        VARCHAR(255), 
     `descricao`         VARCHAR(255), 
     `data_de_criacao`      VARCHAR(255), 
     `colecionador_administrador`      VARCHAR(255)
     
  ) 
engine = innodb 
