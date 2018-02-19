
CREATE TABLE users (
  id int(11) NOT NULL,
  user_name varchar(50) NOT NULL,
  score int(11) NOT NULL,
  category_id int(11) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE categories(
  id int(11),
  category_name varchar(50) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE questions (
  question_number int(11) NOT NULL,
  question_text text NOT NULL,
  answer1 varchar(250) NOT NULL,
  answer2 varchar(250) NOT NULL,
  answer3 varchar(250) NOT NULL,
  answer4 varchar(250) NOT NULL,
  answer varchar(250) NOT NULL,
  category_id int(11) NOT NULL,
  PRIMARY KEY (id)
);