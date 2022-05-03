### Reproducer for https://github.com/zircote/swagger-php/issues/1220

It was created by running:
```sh
symfony new zircote-swagger-php-issue-1220
cd zircote-swagger-php-issue-1220
composer require nelmio/api-doc-bundle
```

How to reproduce the issue:
```sh
% bin/console nelmio:apidoc:dump                                               
[critical] Error thrown while running command "nelmio:apidoc:dump". Message: "User Warning: Multiple @OA\Response() with the same response="200":
  \ApiController->action() in src/Controller/ApiController.php on line 94
  \ApiController->action() in src/Controller/ApiController.php on line 94"
```
