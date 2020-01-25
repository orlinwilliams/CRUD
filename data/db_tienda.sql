create or replace database db_tienda;
use db_tienda;

create table Item (
    num_item_pk int auto_increment primary key,
    txt_nombre varchar(45) not null,
    txt_tipoProducto varchar(45),
    num_precioUnitario float not null

);

insert into Item (txt_nombre,txt_tipoProducto,num_precioUnitario)
VALUES("churro","snacks",5);

insert into Item (txt_nombre,txt_tipoProducto,num_precioUnitario)
VALUES("coca-cola","bebida",20);
