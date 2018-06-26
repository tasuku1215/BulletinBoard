CREATE DATABASE DB20180625;
use DB20180625;
create table lecturer
  (
    lecturer_id varchar(64),
    lecturer_name varchar(64),
    primary key(lecturer_id)
  );
create table course
  (
    course_id varchar(64),
    course_name varchar(64),
    lecturer_id varchar(64),
    price int(64),
    start_date date,
    primary key(course_id)
  );
create table attendance
  (
    course_id varchar(64),
    student_id varchar(64),
    primary key(course_id,student_id)
  );
create table student
  (
    student_id varchar(64),
    student_name varchar(64),
    mail varchar(64),
    primary key(student_id)
  );

insert into student(student_id,student_name,mail)
values('aws_love3452','あまぞねすこ','me-ru');

insert into course(course_id,course_name,lecturer_id,price,start_date)
values('aws','アマゾンウェブサービス','aws70121',12345678,20181215);

insert into lecturer(lecturer_id,lecturer_name)
values('aws70121','アマゾン　太郎'),
('aws70122','アマゾン　次郎'),
('aws70123','アマゾン　三郎');

insert into attendance(course_id,student_id)
values('aws','aws_love3452');

alter table course add
foreign key (lecturer_id)
references lecturer(lecturer_id);

alter table attendance add
foreign key (student_id)
references student(student_id);

alter table attendance add
foreign key (course_id)
references course(course_id);

SELECT * from lecturer;
SELECT * from course;
SELECT * from attendance;
SELECT * from student;

show create table lecturer;
show create table course;
show create table attendance;
show create table student;