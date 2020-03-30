<?php
//відокремлено бізнес-логіку від рівня даних на основі DAO та VO;
// нижче наведено DAO
//всі звернення до даних повинні здійснюватися лише через DAO;
// повинна здійснюватися нелінива ініціалізація DAO,
// тобто при кожному зверненні всі дані з бази даних повинні завантажуватися в DAO;
// в класі DAO мають бути функції ініціалізації даних та отримання всіх книжок.
class BookDAO
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

   public function read(){
       $sql = "SELECT * FROM books";
       $stmt = $this->pdo->query($sql);
       $stmt->setFetchMode(PDO::FETCH_CLASS, Book::class);
       $a = array();
       while ($row = $stmt->fetchObject()){
           $a[]=$row;
       }
       return $a;
   }
}