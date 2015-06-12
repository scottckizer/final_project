create table user (
    id int auto_increment primary key,
    first_name varchar(20),
    last_name varchar(20),
    email varchar(255),
    password char(64),
    user_photo varchar(2080),
    datetime_created datetime
);

create table trail (
    id int auto_increment primary key,
    trail_name varchar(150),
    datetime_created datetime
);

create table race (
    id int auto_increment primary key,
    user_id int,
    trail_id int,
    race_name varchar(150),
    open_date datetime,
    close_date datetime,
    datetime_created datetime
);

create table trail_points (
    id int auto_increment primary key,
    trail_id int,
    latitude,
    longitude,
    time
);

create table photos (
    id int auto_increment primary key,
    user_id int,
    trail_id int,
    race_id int,
    photo varchar(2080)
);

create table race_points (
    id int auto_increment primary key,
    user_id int,
    race_id int,
    latitude,
    longitude,
    time
);