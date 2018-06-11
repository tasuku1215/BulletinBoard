CREATE DATABASE db22 DEFAULT CHARACTER SET utf8;
use db22;
create table product
  (
    product_id varchar(64),
    product_name varchar(64),
    price varchar(64)
  );
create table store
  (
    store_id varchar(64),
    store_name varchar(64),
    address varchar(64),
    tel varchar(64)
  );
create table number
  (
    number varchar(64),
    store_id varchar(64),
    pos_no varchar(64),
    response_id varchar(64),
    number_date date
  );
create table receipt
  (
    number varchar(64),
    product_id varchar(64),
    product_number varchar(64)
  );
insert into product(product_id,product_name,price)
values(1,'ばなな',120);
insert into product(product_id,product_name,price)
values(2,'banana',240);
insert into product(product_id,product_name,price)
values(3,'bananaスウィーティオ スカイランド',600);

insert into store(store_id,store_name,address,tel)
values(1,'あんすりー','おらんだ',09037173613);
insert into store(store_id,store_name,address,tel)
values(2,'みらんだ','にゅーじーらんど',12389471256);
insert into store(store_id,store_name,address,tel)
values(3,'めろす','せりにんてぃうす',780365891);

insert into number(number,store_id,pos_no,response_id,number_date)
values(1,3,6,4,20181215);
insert into number(number,store_id,pos_no,response_id,number_date)
values(2,2,1,5,20180428);
insert into number(number,store_id,pos_no,response_id,number_date)
values(3,1,4,7,20180318);

insert into receipt(number,product_id,product_number)
values(1,3,53);
insert into receipt(number,product_id,product_number)
values(1,2,15);
insert into receipt(number,product_id,product_number)
values(1,1,140);
insert into receipt(number,product_id,product_number)
values(2,2,12);

select number.*,product.*
from number
LEFT OUTER JOIN product;