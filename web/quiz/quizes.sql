--heroku Database Test
DROP TABLE IF EXISTS questions, users, choices;

CREATE TABLE questions (
  id SERIAL PRIMARY KEY NOT NULL,
  question_number INT NOT NULL,
  points_per INT NOT NULL,
  question_text text NOT NULL,
  UNIQUE(question_number)
);

CREATE TABLE users (
  id SERIAL PRIMARY KEY NOT NULL,
  user_name varchar(100) NOT NULL,
  pass VARCHAR(250) NOT NULL,
  screenName VARCHAR(250) NOT NULL,
  score int NOT NULL,
  UNIQUE(user_name)
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

