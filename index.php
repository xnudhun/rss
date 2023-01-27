
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
            $i = 0;
            while($adat = $lekeres->fetch_assoc())
            {
                
               $random=rand(0,$db);
                if($random != $tomb[$i])
                {
                    
                }
                $i++;
            }

        }
    }
    ?>
</body>
</html>