
USE books;

--
-- Database: contacts
--

 
CREATE TABLE books (
  id int NOT NULL PRIMARY KEY,
  book_isbn int NOT NULL,
  book_title varchar(50) NOT NULL,
  book_author varchar(50) NOT NULL,
  book_category varchar(50) NOT NULL
);
