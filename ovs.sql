use OVS;
CREATE TABLE admin (admin_name varchar(255) NOT NULL,admin_email varchar(255)primary key NOT NULL,admin_password varchar(255) NOT NULL,admin_show varchar(255) NOT NULL);

CREATE TABLE candidates(candidate_name varchar(255) NOT NULL,candidate_id bigint primary key identity(1,1) NOT NULL,candidate_vote_count int NOT NULL,candidate_address varchar(255) NOT NULL,candidate_age int NOT NULL,candidate_picture int NOT NULL);

CREATE TABLE show_table (show_id int  primary key identity(1,1) NOT NULL,show_name varchar(255) NOT NULL,show_img varchar(255) NOT NULL,show_description varchar(255) NOT NULL);

CREATE TABLE superadmin(Sadmin_name int NOT NULL,Sadmin_email int primary key NOT NULL,Sadmin_password int NOT NULL);

CREATE TABLE usser (user_email varchar(255) NOT NULL,user_password varchar(255) NOT NULL,user_phone int NOT NULL,usser_name varchar NOT NULL,user_address varchar(255) NOT NULL,user_gender int NOT NULL);
CREATE TABLE vote(show_id int NOT NULL,
  cnadidate_id int NOT NULL,
  voters_id int NOT NULL,
  vote_count int NOT NULL
);
select * from admin;
select * from candidates;
select * from show_table;
select * from superadmin;
select * from usser;
select * from vote;
