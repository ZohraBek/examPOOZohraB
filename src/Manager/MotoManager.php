<?php

namespace Src\Manager;

use Src\Entity\Moto;

// Requetes relatives à l'entity Moto

class MotoManager extends DatabaseManager
{
    public function findAll()
    {
        $query = $this->getConnection()->prepare("SELECT * FROM motos");
        $query->execute([]);

        $results = $query->fetchAll();
        $motos = [];

        foreach ($results as $result) {
            $motos[] = Moto::fromArray($result);
        }

        return $motos;
    }

    public function findById(int $id)
    {
        $query = $this->getConnection()->prepare("SELECT * FROM motos WHERE id = :id");
        $query->execute([":id" => $id]);

        // Convertir le résultat de la requête en objet Moto
        return Moto::fromArray($query->fetch());
    }

    public function findByType($type) {
        $query = $this->getConnection()->prepare("SELECT * FROM motos WHERE type = :type");
        $query->execute([':type' => $type]);
        $results = $query->fetchAll();
    
        $motos = [];
        foreach ($results as $result) {
            $motos[] = Moto::fromArray($result);
        }
    
        return $motos;
    }
    

    public function add(Moto $moto): void
    {
        $query = $this->getConnection()->prepare("INSERT INTO motos (brand, model, type, price, image) VALUES (:brand, :model, :type, :price, :image)");
        $query->execute([
            ":brand" => $moto->getBrand(),
            ":model" => $moto->getModel(),
            ":type" => $moto->getType(),
            ":price" => $moto->getPrice(),
            ":image" => $moto->getImage()
        ]);
    }

    public function edit(Moto $moto): void
    {
        $query = $this->getConnection()->prepare("UPDATE motos SET brand = :brand, model = :model, type = :type, price = :price, image = :image WHERE id = :id");
        $query->execute([
            ":id" => $moto->getId(),
            ":brand" => $moto->getBrand(),
            ":model" => $moto->getModel(),
            ":type" => $moto->getType(),
            ":price" => $moto->getPrice(),
            ":image" => $moto->getImage()
        ]);
    }

    public function delete(int $id): void
    {
        $query = $this->getConnection()->prepare("DELETE FROM motos WHERE id = :id");
        $query->execute([":id" => $id]);
    }
}
