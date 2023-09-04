CREATE DATABASE innova CHARACTER SET utf8;
USE innova;

CREATE TABLE pagos(
id_pago int(255),
fecha date,
monto decimal(5,2),
CONSTRAINT pk_pagos PRIMARY KEY(id_pago)
);


CREATE TABLE modonu(
id_mod int(12),
marca varchar(20),
modelo varchar(20),
dualb bit,
eth varchar(1),
catv bit,
CONSTRAINT pk_modonu PRIMARY KEY(id_mod)
);


CREATE TABLE onu(
id_onu int(255),
id_mod int(12),
serie varchar(12),
mac varchar(17),
pass varchar(40),
wifi1 varchar(40),
wifi2 varchar(40),
estado bit,
id_contr int(255),
obs varchar(400),
vlan varchar(4),
CONSTRAINT pk_onu PRIMARY KEY(id_onu),
CONSTRAINT fk_onu_modonu FOREIGN KEY(id_mod) REFERENCES modonu(id_mod)
);


CREATE TABLE clientes(
id_cli int(255) auto_increment not null,
dni varchar(11) not null,
ap_pat varchar(25) not null,
ap_mat varchar(25) not null,
nomb varchar(60) not null,
direccion varchar(100) not null,
id_olt int(2) not null,
id_pon int(3) not null,
id_nap int(5) not null,
email varchar(120),
fono1 varchar(9) not null,
fono2 varchar(9),
f_alta date not null,
id_plan int(2) not null,
activo bit not null,
id_inc int(255),
obs varchar(300),
CONSTRAINT pk_clientes PRIMARY KEY(id_cli),
CONSTRAINT uq_dni UNIQUE(dni)
);


CREATE TABLE olt(
id_olt int(5) auto_increment not null,
nomb varchar(100) not null,
nro_puertos int(3) not null,
descri varchar(300),
CONSTRAINT pk_olt PRIMARY KEY (id_olt)
);


CREATE TABLE pon(
id_pon int(3) auto_increment not null,
id_olt int(5) not null,
nomb varchar(20) not null,
descri varchar(300),
CONSTRAINT pk_pon PRIMARY KEY (id_pon),
CONSTRAINT fk_olt_pon FOREIGN KEY(id_olt) REFERENCES olt(id_olt)
);


CREATE TABLE nap(
id_nap int(255) auto_increment not null,
id_pon int(3) not null,
nomb varchar(20) not null,
descri varchar(200),
CONSTRAINT pk_onu PRIMARY KEY (id_nap),
CONSTRAINT fk_pon_nap FOREIGN KEY(id_pon) REFERENCES pon(id_pon)
);


CREATE TABLE planes(
id_plan int(255) auto_increment not null,
nomb varchar(50) not null,
valor decimal(5,2) not null,
velocidad int(3) not null,
descri varchar(100) not null,
CONSTRAINT pk_planes PRIMARY KEY(id_plan)
);


CREATE TABLE tipo_inc(
id_tipo int(3) auto_increment not null,
gravedad int(1) not null,
descri varchar(100) not null,
CONSTRAINT pk_tipo_inc PRIMARY KEY(id_tipo)
);


CREATE TABLE contrato(
id_contr int(255) auto_increment not null,
id_cli int(255) not null,
id_plan int(255) not null,
fecha date not null,
direccion varchar(120),
id_nap int(255),
val_up decimal(5),
val_down decimal(5),
primera bit not null,
CONSTRAINT pk_contrato PRIMARY KEY(id_contr),
CONSTRAINT fk_contrato_cliente FOREIGN KEY(id_cli) REFERENCES clientes(id_cli),
CONSTRAINT fk_contrato_plan FOREIGN KEY(id_plan) REFERENCES planes(id_plan),
CONSTRAINT fk_contrato_nap FOREIGN KEY(id_nap) REFERENCES nap(id_nap)
);


CREATE TABLE inc(
id_inc int(255) auto_increment not null,
id_contr int(255) not null,
id_tipo int(3) not null,
descri varchar(400) not null,
fecha datetime not null,
estado bit not null,
CONSTRAINT pk_inc PRIMARY KEY (id_inc),
CONSTRAINT fk_inc_contr FOREIGN KEY(id_contr) REFERENCES contrato(id_contr),
CONSTRAINT fk_inc_tipo FOREIGN KEY(id_tipo) REFERENCES tipo_inc(id_tipo)
);


CREATE TABLE recibo(
id_recibo int(255) auto_increment not null,
id_contr int(255) not null,
id_pago int(255) not null,
periodo varchar(12) not null,
monto decimal(5,2),
f_emi date,
estado bit,
CONSTRAINT pk_recibo PRIMARY KEY (id_recibo),
CONSTRAINT fk_recibo_contr FOREIGN KEY(id_contr) REFERENCES contrato(id_contr),
CONSTRAINT fk_recibo_pagos FOREIGN KEY(id_pago) REFERENCES pagos(id_pago)
);