
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<<<<<<< HEAD
    <h1>macksa</h1>
    
=======
    <?php 
    class Kviz
    {
        public $db = 0; 
        public mysqli $csatlakozas;
        function __construct()
         {
            $this->csatlakozas = new mysqli("localhost","root","","lipak");
        }
        function KvizzKiiras()
        {
            
            $lekeres = $this->csatlakozas->query("SELECT * from kviz");
            while($adat = $lekeres->fetch_assoc())
            {
                if($adat["id"]>$db)
                {
                    $db = $adat["id"];
                }
            }

        }
    }
    ?>
>>>>>>> 56b474f62de4d164693b6882dbe0974759887537
</body>
</html>