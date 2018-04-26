<?php
/**
 * Created by PhpStorm.
 * User: takne
 * Date: 26/04/18
 * Time: 11:43
 */

namespace Model\Office;


class Office
{
    private $id;
    private $first_name;
    private $last_name;
    private $task;
    private $picture;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @return mixed
     */
    public function getTask()
    {
        return $this->task;
    }

    /**
     * @return mixed
     */
    public function getPicture()
    {
        return $this->picture;
    }

}