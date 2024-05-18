create database secretaria;
use secretaria;

create table curso(
	cd_curso int primary key auto_increment,
    nm_curso varchar(120) not null
);

create table turma (
	cd_turma int primary key auto_increment,
    nm_turma varchar(45) not null,
    id_curso int,
    foreign key (id_curso) references curso(cd_curso)
);

create table aluno (
	cd_aluno int primary key not null,
    nm_aluno varchar(80) not null,
    dt_nasc date not null,
    senha varchar(100),
    id_curso int,
    id_turma int,
    foreign key (id_curso) references curso(cd_curso)
);
alter table aluno
add foreign key (id_turma) references turma(cd_turma);

create table armario (
	cd_armario int primary key auto_increment,
    tamanho varchar(45) not null,
    valor decimal(10,2),
    statos varchar(45)
);

create table locacao(
	id_armario int,
    id_aluno int,
    dt_locacao date,
    dt_devolucao date,
    statos varchar(45),
    foreign key (id_armario) references armario(cd_armario),
    foreign key (id_aluno) references aluno(cd_aluno)
);

create table internet(
	cd_internet int primary key auto_increment not null,
    nm_internet varchar(45),
    valor decimal(10,2),
    validade int
);

create table assinatura(
	id_aluno int,
    id_internet int,
    dt_contratacao date,
    dt_validade date,
    vl_assinatura decimal(10,2),
    foreign key (id_aluno) references aluno(cd_aluno),
    foreign key (id_internet) references internet(cd_internet)
);

create table produto(
	cd_produto int auto_increment primary key not null,
    nm_produto varchar(45),
    desc_produto longtext,
    vl_produto decimal(10,2)
);

create table pedido(
	cd_pedido int primary key auto_increment not null,
    id_aluno int,
    dt_pedido date,
    vl_total decimal(10,2),
    foreign key (id_aluno) references aluno(cd_aluno)
);

create table item(
	id_pedido int,
    id_produto int,
    qtd int,
    vl_item decimal(10,2),
    foreign key (id_pedido) references pedido(cd_pedido),
    foreign key (id_produto) references produto(cd_produto)
);

insert into curso (cd_curso, nm_curso) values
(1,"Administração"),
(2,"Desenvolvimento de Sistemas"),
(3,"Farmácia");

insert into turma (cd_turma, nm_turma, id_curso) values
(1, '1ADM3', 1),
(2, '2ADM3', 1),
(3, '3ADM3', 1),
(4, '1DSI3', 2),
(5, '2DSI3', 2),
(6, '3DSI3', 2),
(7, '1FAR3', 3),
(8, '2FAR3', 3),
(9, '3FAR3', 3);

insert into aluno (cd_aluno, nm_aluno, dt_nasc, senha, id_turma) values
(1, 'Aluno1', '2000-01-01', 'senha1', 1),
(2, 'Aluno2', '2000-02-02', 'senha2', 1),
(3, 'Aluno3', '2000-03-03', 'senha3', 1),
(4, 'Aluno4', '2000-04-04', 'senha4', 1),
(5, 'Aluno5', '2000-05-05', 'senha5', 1),
(6, 'Aluno6', '2000-06-06', 'senha6', 1),
(7, 'Aluno7', '2000-07-07', 'senha7', 1),
(8, 'Aluno8', '2000-08-08', 'senha8', 1),
(9, 'Aluno9', '2000-09-09', 'senha9', 1),
(10, 'Aluno10', '2000-10-10', 'senha10', 1),
(11, 'Aluno11', '2000-11-11', 'senha11', 2),
(12, 'Aluno12', '2000-12-12', 'senha12', 2),
(13, 'Aluno13', '1989-02-13', 'senha13', 2),
(14, 'Aluno14', '2000-02-14', 'senha14', 2),
(15, 'Aluno15', '2000-03-15', 'senha15', 2),
(16, 'Aluno16', '2000-04-16', 'senha16', 2),
(17, 'Aluno17', '2000-05-17', 'senha17', 2),
(18, 'Aluno18', '2000-06-18', 'senha18', 2),
(19, 'Aluno19', '2000-07-19', 'senha19', 2),
(20, 'Aluno20', '2000-08-20', 'senha20', 2),
(21, 'Aluno21', '2000-09-21', 'senha21', 3),
(22, 'Aluno22', '2000-10-22', 'senha22', 3),
(23, 'Aluno23', '2000-11-23', 'senha23', 3),
(24, 'Aluno24', '2000-12-24', 'senha24', 3),
(25, 'Aluno25', '2001-01-25', 'senha25', 3),
(26, 'Aluno26', '2001-02-26', 'senha26', 3),
(27, 'Aluno27', '2001-03-27', 'senha27', 3),
(28, 'Aluno28', '2001-04-28', 'senha28', 3),
(29, 'Aluno29', '2001-05-29', 'senha29', 3),
(30, 'Aluno30', '2001-06-30', 'senha30', 3),
(31, 'Wellington', '2004-04-24', '4654', 5),
(32, 'Oswaldo', '2000-10-10', '12312', 5),
(33,"Rodolfo Araujo","1989-02-12",'12312',1),
(34,"Daiana","2007-01-29",'12312',1),
(35,"Othavio Luis","2004-11-10",'12312',1);

insert into armario(cd_armario, tamanho, valor, statos) values
(1, 'Normal', '10.00', ''),
(2, 'Normal', '10.00', ''),
(3, 'Normal', '10.00', ''),
(4, 'Normal', '10.00', ''),
(5, 'Normal', '10.00', ''),
(6, 'Normal', '10.00', ''),
(7, 'Normal', '10.00', ''),
(8, 'Normal', '10.00', ''),
(9, 'Normal', '10.00', ''),
(10, 'Normal', '10.00', ''),
(11, 'Normal', '10.00', ''),
(12, 'Normal', '10.00', '');

insert into locacao(id_armario, id_aluno, dt_locacao, dt_devolucao, statos) values
(1, 1, '2024-01-16', '2024-05-15', 'vencido'),
(2, 2, '2024-05-17', '2024-07-21', ''),
(3, 3, '2024-05-18', NULL, 'ocupado'),
(4, 4, '2024-05-19', NULL, 'ocupado'),
(5, 5, '2024-05-20', NULL, 'ocupado');

insert into internet(cd_internet, nm_internet, valor, validade) values
(1, 'Mês', '10.00', 1),
(2, 'Bimestre', '20.00', 2),
(3, 'Trimestre', '30.00', 3),
(4, 'Semestre', '50.00', 6);

insert into produto(cd_produto, nm_produto, desc_produto, vl_produto) values
(1, 'Camisa - Administração', 'Tamanhos P, M, G e GG', '35.00'),
(2, 'Camisa - Desenvolvimento de Sistemas', 'Tamanhos P, M, G e GG', '35.00'),
(3, 'Camisa - Farmácia', 'Tamanhos P, M, G e GG', '35.00'),
(4, 'Caneca Personalizada', 'Cores variadas', '10.00');

insert into pedido(cd_pedido, id_aluno, dt_pedido, vl_total) values
(1, 1, '2024-05-16', '100.00'),
(2, 2, '2024-05-17', '150.00'),
(3, 3,'2024-05-18', '120.00'),
(4, 4, '2024-05-19', '200.00'),
(5, 5, '2024-05-20', '90.00'),
(6, 6, '2024-05-21', '180.00'),
(7, 1, '2024-05-16', '100.00'),
(8, 2, '2024-05-17', '150.00'),
(9, 3, '2024-05-18', '120.00'),
(10, 4, '2024-05-19', '200.00'),
(11, 5, '2024-05-20', '90.00'),
(12, 6, '2024-05-21', '180.00');

insert into item(id_pedido, id_produto, qtd, vl_item) values
(2, 1, 2, '20.00'),
(2, 2, 3, '30.00'),
(3, 3, 2, '25.00'),
(3, 4, 2, '35.00'),
(4, 1, 1, '20.00'),
(4, 4, 4, '30.00'),
(5, 2, 3, '30.00'),
(5, 3, 1, '40.00'),
(6, 4, 2, '25.00'),
(6, 1, 3, '35.00'),
(7, 3, 2, '20.00'),
(7, 2, 3, '30.00');




