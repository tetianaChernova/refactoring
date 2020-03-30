<?php
//дані про книжки збережено в базі даних PostgreSQL в таблиці books
//відокремлено бізнес-логіку від рівня даних на основі DAO та VO; нижче наведено VO
class Book
{
    private $book_id;
    private $title;
    private $author;
    private $year;

    function __construct($book_id, $author, $title, $year)
    {
        $this->book_id = $book_id;
        $this->author = $author;
        $this->title = $title;
        $this->year = $year;
    }

}