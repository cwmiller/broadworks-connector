<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerAdminGetResponse22
 *
 * Response to the ResellerAdminGetRequest22.
 *         The response contains the reseller administrators profile information.
 *
 * @see ResellerAdminGetRequest22
 * @Groups [{"id":"b009175f2a2a9d38115e319a6ad64d7f:271","type":"sequence"}]
 */
class ResellerAdminGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName resellerId
     * @Type string
     * @Group b009175f2a2a9d38115e319a6ad64d7f:271
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    private $resellerId = null;

    /**
     * @ElementName firstName
     * @Type string
     * @Optional
     * @Group b009175f2a2a9d38115e319a6ad64d7f:271
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $firstName = null;

    /**
     * @ElementName lastName
     * @Type string
     * @Optional
     * @Group b009175f2a2a9d38115e319a6ad64d7f:271
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $lastName = null;

    /**
     * @ElementName language
     * @Type string
     * @Group b009175f2a2a9d38115e319a6ad64d7f:271
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $language = null;

    /**
     * Getter for resellerId
     *
     * @return string
     */
    public function getResellerId()
    {
        return $this->resellerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @param string $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResellerId()
    {
        $this->resellerId = null;
        return $this;
    }

    /**
     * Getter for firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->firstName;
    }

    /**
     * Setter for firstName
     *
     * @param string $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFirstName()
    {
        $this->firstName = null;
        return $this;
    }

    /**
     * Getter for lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->lastName;
    }

    /**
     * Setter for lastName
     *
     * @param string $lastName
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLastName()
    {
        $this->lastName = null;
        return $this;
    }

    /**
     * Getter for language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->language;
    }

    /**
     * Setter for language
     *
     * @param string $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLanguage()
    {
        $this->language = null;
        return $this;
    }


}

