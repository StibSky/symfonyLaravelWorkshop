<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{

    private $id;

    public $timestamps = false;


    protected $fillable = [
        'name', 'level'
    ];
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }


    /**
     * @return mixed
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param mixed $moves
     */
    public function setLevel($level): void
    {
        $this->level = $level;
    }

    public function User()
    {
        return $this->belongsTo('App\User');
    }

}
