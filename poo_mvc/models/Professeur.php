<?php
namespace App\Models;
class Professeur extends User{
    private string $grade;

    public function __construct(){
        $this->role="ROLE_PROFESSEUR";
        parent::$table="Professeur";
    }
    //Attribut navigationnel
    //OneToMany avec cours
    //oneToMany => cours
    //une professeur associee a plusieurs cours
    public function cours():array{
        return [];
    }

    /**
     * Get the value of grade
     */ 
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set the value of grade
     *
     * @return  self
     */ 
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }
    public static  function selectAll(){
        $sql="select *  from  ".parent::$table." where role like ? ";
       return parent::database()->executeSelect($sql,[parent::$role]);
     }
     public function insert(){
        $sql="INSERT INTO".parent::$table." (`login`,`password`, `grade`,  `role`)
             VALUES (?,?,?,?);";
        return parent::database()->executeUpdate($sql,[$this->login,$this->password,$this->grade,parent::$role]);
     }

}