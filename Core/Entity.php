<?php 
namespace Core;

class Entity extends \Core\ORM{
    public function __construct($att = null) {
        parent::__construct();

        if(is_array($att)) {
            foreach($att as $key => $value){
                $this->{$key} = $value;
            }
        }
        elseif(is_int($att)){
            $user = $this->read($att);
            foreach($user as $key => $value){
                $this->{$key} = $value;
            }
            
            $relations = $this->getRelations();
            
            if(isset($relations['hasOne'])){
                $user_id = $_SESSION['id'];
                foreach($relations['hasOne'] as $relation){
                    $substr = substr($relation, 0, -1);
                    $this->{$substr} = $this->read($user_id, $relation);
                }
            }
            if(isset($relations['hasMany'])){
                $user_id = $_SESSION['id'];
                foreach($relations['hasMany'] as $relation){
                    
                    $substr = substr($this->table, 0, -1);
                    $this->{$relation} = $this->find(['WHERE' => "id_$substr = $user_id"], $relation);
                }
            }
        }
        
    }
}