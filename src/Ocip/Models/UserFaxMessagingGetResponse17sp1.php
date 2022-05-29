<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserFaxMessagingGetResponse17sp1
 *
 * Response to UserFaxMessagingGetRequest17sp1.
 *
 * @see UserFaxMessagingGetRequest17sp1
 * @Groups [{"id":"f46f967f937c7dc89ddb3db423383aa4:115","type":"sequence"}]
 */
class UserFaxMessagingGetResponse17sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group f46f967f937c7dc89ddb3db423383aa4:115
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Optional
     * @Group f46f967f937c7dc89ddb3db423383aa4:115
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $phoneNumber = null;

    /**
     * @ElementName extension
     * @Type string
     * @Optional
     * @Group f46f967f937c7dc89ddb3db423383aa4:115
     * @MinLength 2
     * @MaxLength 20
     * @var string|null
     */
    protected $extension = null;

    /**
     * @ElementName alias
     * @Type string
     * @Array
     * @Optional
     * @Group f46f967f937c7dc89ddb3db423383aa4:115
     * @MinLength 1
     * @MaxLength 161
     * @var string[]
     */
    protected $alias = array(
        
    );

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
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
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
     * @return string
     */
    public function getExtension()
    {
        return $this->extension instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extension;
    }

    /**
     * Setter for extension
     *
     * @param string $extension
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
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
     * Getter for alias
     *
     * @return string[]
     */
    public function getAlias()
    {
        return $this->alias instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alias;
    }

    /**
     * Setter for alias
     *
     * @param string[] $alias
     * @return $this
     */
    public function setAlias(array $alias)
    {
        $this->alias = $alias;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlias()
    {
        $this->alias = null;
        return $this;
    }

    /**
     * Adder for alias
     *
     * @param string $alias
     * @return $this
     */
    public function addAlias(string $alias)
    {
        $this->alias[] = $alias;
        return $this;
    }


}

