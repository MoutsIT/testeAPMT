
USE contacts;

--
-- Database: contacts
--

 
CREATE TABLE books (
  book_id serial NOT NULL,
  book_isbn int NOT NULL,
  book_title varchar(50) NOT NULL,
  book_author varchar(50) NOT NULL,
  book_category varchar(50) NOT NULL
);
 
--
-- Dumping data for table books
--
 
INSERT INTO books (book_id, book_isbn, book_title, book_author, book_category) VALUES
(1, 101, 'two state', 'Chetan Bhagat', 'Love Story'),
(2, 102, 'Half Girl Friend', 'Chetan Bhagat', 'Love Story');


ALTER TABLE books
  ADD PRIMARY KEY (book_id);
 

