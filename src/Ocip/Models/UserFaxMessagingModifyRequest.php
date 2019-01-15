<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserFaxMessagingModifyRequest
 *
 * Modify the user level data associated with Fax Messaging.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f46f967f937c7dc89ddb3db423383aa4:133","type":"sequence"}]
 */
class UserFaxMessagingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group f46f967f937c7dc89ddb3db423383aa4:133
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group f46f967f937c7dc89ddb3db423383aa4:133
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group f46f967f937c7dc89ddb3db423383aa4:133
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $phoneNumber = null;

    /**
     * @ElementName extension
     * @Type string
     * @Nillable
     * @Optional
     * @Group f46f967f937c7dc89ddb3db423383aa4:133
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $extension = null;

    /**
     * @ElementName sipAliasList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementSIPAliasList
     * @Nillable
     * @Optional
     * @Group f46f967f937c7dc89ddb3db423383aa4:133
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementSIPAliasList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $sipAliasList = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for phoneNumber
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string|null $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        if ($phoneNumber === null) {
            $this->phoneNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->phoneNumber = $phoneNumber;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumber()
    {
        $this->phoneNumber = null;
        return $this;
    }

    /**
     * Getter for extension
     *
     * @return string|null
     */
    public function getExtension()
    {
        return $this->extension instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extension;
    }

    /**
     * Setter for extension
     *
     * @param string|null $extension
     * @return $this
     */
    public function setExtension($extension = null)
    {
        if ($extension === null) {
            $this->extension = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->extension = $extension;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExtension()
    {
        $this->extension = null;
        return $this;
    }

    /**
     * Getter for sipAliasList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementSIPAliasList|null
     */
    public function getSipAliasList()
    {
        return $this->sipAliasList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sipAliasList;
    }

    /**
     * Setter for sipAliasList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementSIPAliasList|null $sipAliasList
     * @return $this
     */
    public function setSipAliasList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementSIPAliasList $sipAliasList = null)
    {
        if ($sipAliasList === null) {
            $this->sipAliasList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->sipAliasList = $sipAliasList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSipAliasList()
    {
        $this->sipAliasList = null;
        return $this;
    }


}

