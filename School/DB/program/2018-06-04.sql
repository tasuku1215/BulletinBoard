CREATE DATABASE ph22;
use ph22;
create table sample
  (
    id int(64) AUTO_INCREMENT,
    name varchar(64),
    age int(64),
    primary key(id)
  );

insert into sample(name,age)
values('河田',43),
('田中',32);

select * from sample;