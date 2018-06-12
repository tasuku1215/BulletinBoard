CREATE DATABASE db22;
use db22;
create table product
  (
    product_id varchar(64),
    product_name varchar(64),
    price varchar(64),
    primary key(product_id)
  );
create table store
  (
    store_id varchar(64),
    store_name varchar(64),
    address_id varchar(64),
    tel varchar(64),
    primary key(store_id)
  );
create table pos
  (
    pos_no varchar(64),
    receipt_id varchar(64),
    store_id varchar(64),
    response_id varchar(64),
    number_date date,
    primary key(pos_no,receipt_id)
  );
create table receipt
  (
    pos_no varchar(64),
    receipt_id varchar(64),
    product_id varchar(64),
    product_number varchar(64),
    primary key(pos_no,receipt_id,product_id)
  );

create table bil
(
  bil_number varchar(64),
  customer_id varchar(64),
  customer varchar(64),
  customer_charge varchar(64),
  Contact_name varchar(64),
  date_time date,
  Amount_sum varchar(64)
);
create table bil_number
(
  bil_number varchar(64),
  line varchar(64),
  product_number varchar(64),
  number varchar(64)
);
create table bil_product
(
  product_number varchar(64),
  product_name varchar(64),
  genre varchar(64),
  amount varchar(64)
);

insert into bil_product(product_number,product_name,genre,amount)
values('S-01','システム制作','プログラミング',50000),
('S-05','HP制作','コーディング',10000),
('S-06','DB設計','設計',100000),
('S-02','iPhoneアプリ','プログラミング',10000);

insert into bil_number(bil_number,line,product_number,number)
values('ABC01',1,'S-01',1),
('ABC01',2,'S-05',1),
('ABC01',3,'S-06',1),
('ABC01',4,'S-02',1);

insert into bil(bil_number,customer_id,customer,customer_charge,Contact_name,date_time,Amount_sum)
values('ABC01','00001','株式会社○☓','河田','氷山',20120331,170000);

insert into product(product_id,product_name,price)
values(1,'ばなな',120);
insert into product(product_id,product_name,price)
values(2,'banana',240);
insert into product(product_id,product_name,price)
values(3,'bananaスウィーティオ スカイランド',600);

insert into store(store_id,store_name,address_id,tel)
values(1,'あんすりー','おらんだ','09037173613');
insert into store(store_id,store_name,address_id,tel)
values(2,'みらんだ','にゅーじーらんど','12389471256');
insert into store(store_id,store_name,address_id,tel)
values(3,'めろす','せりにんてぃうす','780365891');

insert into pos(pos_no,receipt_id,store_id,response_id,number_date)
values(1,3,6,4,20181215);
insert into pos(pos_no,receipt_id,store_id,response_id,number_date)
values(2,2,1,5,20180428);
insert into pos(pos_no,receipt_id,store_id,response_id,number_date)
values(3,1,4,7,20180318);

insert into receipt(pos_no,receipt_id,product_id,product_number)
values(2,2,3,53);
insert into receipt(pos_no,receipt_id,product_id,product_number)
values(2,2,2,15);
insert into receipt(pos_no,receipt_id,product_id,product_number)
values(2,2,1,140);
insert into receipt(pos_no,receipt_id,product_id,product_number)
values(2,1,2,12);

select product_id,product_name,price from product;
select store_id,store_name,address_id,tel from store;
select pos_no,receipt_id,store_id,response_id,number_date from pos;
select pos_no,receipt_id,product_id,product_number from receipt;

select
p.pos_no as レジ番号,
r.receipt_id as レシートID,
s.store_name as 店舗名,
p.number_date as 日付,
s.address_id as 住所,
s.tel as 電話番号,
pr.product_name as 商品名,
r.product_number as 購入数,
pr.price as 金額,
p.response_id as 責任者ID

from receipt r

inner join pos p
on r.pos_no = p.pos_no
and r.receipt_id = p.receipt_id

inner join store s
on p.store_id = s.store_id

inner join product pr
on r.product_id = pr.product_id;

select product_number,product_name,genre,amount from bil_product;
select bil_number,line,product_number,number from bil_number;
select bil_number,customer_id,customer,customer_charge,Contact_name,date_time,Amount_sum from bil;

select
n.product_number as 商品番号,
p.product_name as 商品名,
genre as カテゴリ,
amount as 単価,
number as 数量,
(amount*number)  as 金額

from
bil b

inner join bil_number n
on b.bil_number = n.bil_number

inner join bil_product p
on p.product_number = n.product_number;