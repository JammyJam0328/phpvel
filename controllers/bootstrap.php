    <?php
    require "vendor/autoload.php";
    use Illuminate\Database\Capsule\Manager as Capsule;
    $capsule = new Capsule;
    $capsule->addConnection([
        "driver" => "mysql",
        "host" =>"localhost",
        "database" => "dotphp",
        "username" => "root",
        "password" => ""
    ]);
    $capsule->setAsGlobal();
    $capsule->bootEloquent();