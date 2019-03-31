<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AlternateUserIdEntry
 *
 * Alternate user id.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:463","type":"sequence"}]
 */
class AlternateUserIdEntry
{

    /**
     * @ElementName alternateUserId
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:463
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $alternateUserId = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:463
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $description = null;

    /**
     * Getter for alternateUserId
     *
     * @return string
     */
    public function getAlternateUserId()
    {
        return $this->alternateUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateUserId;
    }

    /**
     * Setter for alternateUserId
     *
     * @param string $alternateUserId
     * @return $this
     */
    public function setAlternateUserId($alternateUserId)
    {
        $this->alternateUserId = $alternateUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlternateUserId()
    {
        $this->alternateUserId = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }


}

