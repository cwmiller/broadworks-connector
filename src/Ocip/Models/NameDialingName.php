<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * NameDialingName
 *
 * Name dialing last and first names.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:3458","type":"sequence"}]
 */
class NameDialingName
{

    /**
     * @ElementName nameDialingLastName
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3458
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $nameDialingLastName = null;

    /**
     * @ElementName nameDialingFirstName
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3458
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $nameDialingFirstName = null;

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

