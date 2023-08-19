<?php

interface Logger
{
    public function log($message);
}

class LogToFile implements Logger
{
    public function log($message)
    {
        var_dump('Log the message to a file: ' . $message);
    }
}

class LogToDatabase implements Logger
{
    public function log($message)
    {
        var_dump('Log the message to a database: ' . $message);
    }
}

class LogToXWebService implements Logger
{
    public function log($message)
    {
        var_dump('Log the message to a Saas site: ' . $message);
    }
}

class App
{
    public function log($data, Logger $logger = null)
    {
        $logger = $logger ?: new LogToFile;
        $logger->log($data);
    }
}

$app = new App;
$app->log('Some information here', new LogToXWebService);
$app->log('Some information here', new LogToDatabase);
$app->log('Some information here', new LogToFile);
$app->log('Some information here');





