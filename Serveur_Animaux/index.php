<?php
// http://localhost/...
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") .
    "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));


try {

    if (empty($_GET['page'])) {
        throw new Exception("La page n'existe pas");
    } else {
        // recup des infos dans l'url
        $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL));
        if (empty($url[0]) || empty($url[1])) throw new Exception("La page n'existe pas");
        switch ($url[0]) {
            case "front":
                switch ($url[1]) {
                    case "animaux":
                        echo "données JSON des animaux demandées";
                        break;
                    case "animal":
                        echo "données JSON de l'animal " . $url[2] . " demandées";
                        break;
                    case "continents":
                        echo "données JSON des continents demandées";
                        break;
                    case "familles":
                        echo "données JSON des familles demandées";
                        break;
                    default:
                        throw new Exception("La page n'existe pas");
                }
                break;
            case "back":
                echo "page backend demandée";
                break;
            default:
                throw new Exception("La page n'existe pas");
        }
    }
} catch (Exception $e) {
    $msg = $e->getMessage();
    echo $msg;
}
