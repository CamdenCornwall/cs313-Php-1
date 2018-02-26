DROP DATABASE quizzer;
DROP USER teacher;
--DROP TABLE questions, users, choices;

-- Create a database and connect to it
CREATE DATABASE quizzer;
\c quizzer

CREATE TABLE users (
  id SERIAL PRIMARY KEY NOT NULL,
  username varchar(100) NOT NULL,
  pass VARCHAR(250) NOT NULL,
  -- screenName VARCHAR(250) NOT NULL,
  score int,
  UNIQUE(username)
);

CREATE TABLE questions (
  id SERIAL PRIMARY KEY NOT NULL,
  question_number INT NOT NULL,
  points_per INT NOT NULL,
  question_text text NOT NULL,
  UNIQUE(question_number)
);

CREATE TABLE choices (
id SERIAL PRIMARY KEY NOT NULL,
question_number INT NOT NULL REFERENCES questions(question_number) ON UPDATE CASCADE ON DELETE CASCADE,
is_correct boolean DEFAULT FALSE,  
answer_text text NOT NULL
);

-- Insert data into the new table
INSERT INTO questions (question_number, points_per, question_text)
  VALUES (1, 1, 'How much wood could a wood chuck chuck if a wood chuck could chuck wood?');
INSERT INTO questions (question_number, points_per, question_text)
  VALUES (2, 1, 'What is the sound of a one handed clap?');

  -- insert choices
  INSERT INTO choices (question_number, is_correct, answer_text)
  VALUES (1, FALSE, '12 meters');
  INSERT INTO choices (question_number, is_correct, answer_text)
  VALUES (1, TRUE, '18 meters');

  INSERT INTO choices (question_number, is_correct, answer_text)
  VALUES (2, TRUE, 'It cannot be answered.');
  
  INSERT INTO choices (question_number, is_correct, answer_text)
  VALUES (2, FALSE, 'wind');

  INSERT INTO choices (question_number, is_correct, answer_text)
  VALUES (2, FALSE, 'walrus');



-- Create a user that can access this table
CREATE USER teacher WITH PASSWORD 'teacher_pass';
GRANT SELECT, INSERT, UPDATE, DELETE ON questions TO teacher;
GRANT SELECT, INSERT, UPDATE, DELETE ON choices TO teacher;
GRANT SELECT, INSERT, UPDATE ON users TO teacher;
GRANT USAGE, SELECT ON SEQUENCE questions_id_seq TO teacher;
GRANT USAGE, SELECT ON SEQUENCE choices_id_seq TO teacher;
GRANT USAGE, SELECT ON SEQUENCE users_id_seq TO teacher;