<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AlternateUserIdEntry
 *
 * Alternate user id.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:589","type":"sequence"}]
 */
class AlternateUserIdEntry
{
    /**
     * @ElementName alternateUserId
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:589
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $alternateUserId = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:589
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $description = null;

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

