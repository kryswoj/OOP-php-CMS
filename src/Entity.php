<?php

class Entity
{
    protected $tableName;
    protected $fields;
    protected $dbc;

    public function findBy($fieldName, $fieldValue)
    {
        $sql = "SELECT * FROM $this->tableName WHERE $fieldName = :value";
        $query = $this->dbc->prepare($sql);
        $query->execute(['value' => $fieldValue]);
        $data = $query->fetch();
//        $stmt->debugDumpParams();
        $this->setValues($data);

    }

    public function setValues($values)
    {
        foreach ($this->fields as $fieldName) {
            $this->$fieldName = $values[$fieldName];
        }
    }
}
