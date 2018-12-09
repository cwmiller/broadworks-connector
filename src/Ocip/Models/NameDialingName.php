<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * NameDialingName
 *
 * Name dialing last and first names.
 *
 * @Groups [{"id":"8e629edbac315ae7889caca732382c44:2513","type":"sequence"}]
 */
class NameDialingName
{

    /**
     * @ElementName nameDialingLastName
     * @Type string
     * @Group 8e629edbac315ae7889caca732382c44:2513
     * @var string|null
     */
    private $nameDialingLastName = null;

    /**
     * @ElementName nameDialingFirstName
     * @Type string
     * @Group 8e629edbac315ae7889caca732382c44:2513
     * @var string|null
     */
    private $nameDialingFirstName = null;

    /**
     * Getter for nameDialingLastName
     *
     * @return string
     */
    public function getNameDialingLastName()
    {
        return $this->nameDialingLastName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->nameDialingLastName;
    }

    /**
     * Setter for nameDialingLastName
     *
     * @param string $nameDialingLastName
     * @return $this
     */
    public function setNameDialingLastName($nameDialingLastName)
    {
        $this->nameDialingLastName = $nameDialingLastName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNameDialingLastName()
    {
        $this->nameDialingLastName = null;
        return $this;
    }

    /**
     * Getter for nameDialingFirstName
     *
     * @return string
     */
    public function getNameDialingFirstName()
    {
        return $this->nameDialingFirstName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->nameDialingFirstName;
    }

    /**
     * Setter for nameDialingFirstName
     *
     * @param string $nameDialingFirstName
     * @return $this
     */
    public function setNameDialingFirstName($nameDialingFirstName)
    {
        $this->nameDialingFirstName = $nameDialingFirstName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNameDialingFirstName()
    {
        $this->nameDialingFirstName = null;
        return $this;
    }


}

