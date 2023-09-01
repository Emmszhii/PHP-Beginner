<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Demo</title>
  </head>
  
  <body>
      <h1>Recommended Books</h1>
      <?php
        $books = [
          [
            'name' => "Do android dream",
            'author' => "D",
            'releaseYear' => 2011,
            'url' => "Hail",
          ],
          [
            'name' => "Do I Dream",
            'author' => "Lango",
            'releaseYear' => 2012,
            'url' => "Hail Mary",
          ]
          ];

          function filterByAuthor($books, $author){
            $filteredBooks = [];

            foreach($books as $book){
              if($book['author'] === $author){
                $filteredBooks[] = $book;
              }
            }
            
            return $filteredBooks;
          };
      ?>

      <ul>
        <?php foreach (filterByAuthor($books, 'Lango') as $book) : ?>
             <li>
                <a href="<?= $book['url'] ?>">
                  <?= $book['name'], ' - ' . $book['author'], ' (' . $book['releaseYear'] . ')'  ?>
                </a>
            </li>
        <?php endforeach; ?>
      </ul>
    

  </body>
</html>


      <?php 
        $name = 'Dark Matter';
        $read = true;
        
      ?>
    
      <?php 
      if($read === true) {
        // echo "You have read $name";
      }else{
        // echo "You haven't read $name";
      }
      ?>