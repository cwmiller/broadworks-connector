<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LDAPPage
 *
 * Type to retrieve a particular page or the last page.
 */
class LDAPPage
{

    /**
     * @ElementName lastPage
     * @var bool|null
     */
    private $lastPage = null;

    /**
     * @ElementName number
     * @var int|null
     */
    private $number = null;

    /**
     * Getter for lastPage
     *
     * @ElementName lastPage
     * @return bool|null
     */
    public function getLastPage()
    {
        return $this->lastPage;
    }

    /**
     * Setter for lastPage
     *
     * @ElementName lastPage
     * @param bool|null $lastPage
     * @return $this
     */
    public function setLastPage($lastPage)
    {
        $this->lastPage = $lastPage;
        return $this;
    }

    /**
     * Getter for number
     *
     * @ElementName number
     * @return int|null
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Setter for number
     *
     * @ElementName number
     * @param int|null $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }


}

