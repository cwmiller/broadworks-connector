<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AlternateUserIdEntry
 *
 * Alternate user id.
 */
class AlternateUserIdEntry
{

    /**
     * @ElementName alternateUserId
     * @var string|null
     */
    private $alternateUserId = null;

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * Getter for alternateUserId
     *
     * @ElementName alternateUserId
     * @return string|null
     */
    public function getAlternateUserId()
    {
        return $this->alternateUserId;
    }

    /**
     * Setter for alternateUserId
     *
     * @ElementName alternateUserId
     * @param string|null $alternateUserId
     * @return $this
     */
    public function setAlternateUserId($alternateUserId)
    {
        $this->alternateUserId = $alternateUserId;
        return $this;
    }

    /**
     * Getter for description
     *
     * @ElementName description
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

