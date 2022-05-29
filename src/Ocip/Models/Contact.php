<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * Contact
 *
 * Contact information.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:1818","type":"sequence"}]
 */
class Contact
{

    /**
     * @ElementName contactName
     * @Type string
     * @Nillable
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:1818
     * @MinLength 1
     * @MaxLength 30
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $contactName = null;

    /**
     * @ElementName contactNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:1818
     * @MinLength 1
     * @MaxLength 30
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $contactNumber = null;

    /**
     * @ElementName contactEmail
     * @Type string
     * @Nillable
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:1818
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $contactEmail = null;

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
    public function setContactName($contactName = null)
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
    public function setContactNumber($contactNumber = null)
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
    public function setContactEmail($contactEmail = null)
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

