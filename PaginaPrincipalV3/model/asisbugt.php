<?php
class Asisbugt
{
	private $pdo;
    
    public $id;
    public $nombre;
    public $bug;

    public function Registrar(Asisbugt $data)
	{
		try 
		{
		$sql = "INSERT INTO bugtrack (nombre,bug) 
		        VALUES (?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombre,
                    $data->bug
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}