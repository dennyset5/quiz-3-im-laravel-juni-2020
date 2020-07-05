create table users(
    id int not null auto_increment,
    name varchar(100),
    primary key(id)
);

create table articles(
    id int not null auto_increment,
    judul varchar(100),
    slug varchar(150),
    isi text,
    tag varchar(100),
    user_id int,
    primary key(id),
    foreign key(user_id) references users(id)
);

create table follows(
    id int not null,
    following int,
    follower int,
    primary key(id),
    foreign key(following) references users(id),
    foreign key(follower) references users(id)

)