<?php


class Connection
{
    public static function make($config)
    {

        try {        //is used to connect to our database below and catch is for some exception like if the db=name does not exist

            return new PDO(
                $config ['connection']. ';dbname=' .$config['name'],
                $config ['username'],
                $config  ['password'],
                $config ['options']
            );
        }
        catch (PDOException $e){ //$e is an object and is an instance of the class PDOEXCEPTION
            die($e->getMessage());//this tells us what is wrong with our connection from here to mysql database.This happens often when the database name is not correct.
        }
    }

}




//$connection = new Connection ();
//
//$connection->make();




//if its static this is the way to access a method globally without requiring an instance. right below
//Connection::make();