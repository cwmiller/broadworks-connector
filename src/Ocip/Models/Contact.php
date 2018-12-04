<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * Contact
 *
 * Contact information.
 *
 * @Groups [{"id":"18b369af88e42ffdb4166615c670ce2c:1362","type":"sequence"}]
 */
class Contact
{

    /**
     * @ElementName contactName
     * @Type string
     * @Nillable
     * @Optional
     * @Group 18b369af88e42ffdb4166615c670ce2c:1362
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $contactName = null;

    /**
     * @ElementName contactNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group 18b369af88e42ffdb4166615c670ce2c:1362
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $contactNumber = null;

    /**
     * @ElementName contactEmail
     * @Type string
     * @Nillable
     * @Optional
     * @Group 18b369af88e42ffdb4166615c670ce2c:1362
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $contactEmail = null;

    /**
     * Getter for contactName
     *
     * @return string|null
     */
    public function getContactName()
    {
        return $this->contactName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->contactName;
    }

    /**
     * Setter for contactName
     *
     * @param string|null $contactName
     * @return $this
     */
    public function setContactName($contactName)
    {
        if ($contactName === null) {
            $this->contactName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->contactName = $contactName;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetContactName()
    {
        $this->contactName = null;
        return $this;
    }

    /**
     * Getter for contactNumber
     *
     * @return string|null
     */
    public function getContactNumber()
    {
        return $this->contactNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->contactNumber;
    }

    /**
     * Setter for contactNumber
     *
     * @param string|null $contactNumber
     * @return $this
     */
    public function setContactNumber($contactNumber)
    {
        if ($contactNumber === null) {
            $this->contactNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->contactNumber = $contactNumber;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetContactNumber()
    {
        $this->contactNumber = null;
        return $this;
    }

    /**
     * Getter for contactEmail
     *
     * @return string|null
     */
    public function getContactEmail()
    {
        return $this->contactEmail instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->contactEmail;
    }

    /**
     * Setter for contactEmail
     *
     * @param string|null $contactEmail
     * @return $this
     */
    public function setContactEmail($contactEmail)
    {
        if ($contactEmail === null) {
            $this->contactEmail = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->contactEmail = $contactEmail;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetContactEmail()
    {
        $this->contactEmail = null;
        return $this;
    }


}

