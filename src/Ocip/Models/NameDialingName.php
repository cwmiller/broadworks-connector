<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * NameDialingName
 *
 * Name dialing last and first names.
 */
class NameDialingName
{

    /**
     * @ElementName nameDialingLastName
     * @var string|null
     */
    private $nameDialingLastName = null;

    /**
     * @ElementName nameDialingFirstName
     * @var string|null
     */
    private $nameDialingFirstName = null;

    /**
     * Getter for nameDialingLastName
     *
     * @ElementName nameDialingLastName
     * @return string|null
     */
    public function getNameDialingLastName()
    {
        return $this->nameDialingLastName;
    }

    /**
     * Setter for nameDialingLastName
     *
     * @ElementName nameDialingLastName
     * @param string|null $nameDialingLastName
     * @return $this
     */
    public function setNameDialingLastName($nameDialingLastName)
    {
        $this->nameDialingLastName = $nameDialingLastName;
        return $this;
    }

    /**
     * Getter for nameDialingFirstName
     *
     * @ElementName nameDialingFirstName
     * @return string|null
     */
    public function getNameDialingFirstName()
    {
        return $this->nameDialingFirstName;
    }

    /**
     * Setter for nameDialingFirstName
     *
     * @ElementName nameDialingFirstName
     * @param string|null $nameDialingFirstName
     * @return $this
     */
    public function setNameDialingFirstName($nameDialingFirstName)
    {
        $this->nameDialingFirstName = $nameDialingFirstName;
        return $this;
    }


}

