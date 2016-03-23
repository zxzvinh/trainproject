<?php
namespace Train\Controllers\Admin;

use Phalcon\Mvc\Model;

class Users extends Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $username;

    /**
     *
     * @var char[60]
     */
    public $password;

    /**
     *
     * @var string
     */
    public $full_name;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        // $this->belongsTo('role_id', 'Roles', 'id', array('alias' => 'Roles'));
    }

}
